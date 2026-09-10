<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Throwable;

class GitHubController extends Controller
{
    private const USERNAME = 'IrvingSamuel';

    private const EXPERIENCE_START_YEAR = 2021;

    private const CACHE_KEY = 'github-stats';

    private const LAST_GOOD_KEY = 'github-stats:last-good';

    private const CACHE_HOURS = 6;

    public function stats()
    {
        try {
            $data = Cache::remember(self::CACHE_KEY, now()->addHours(self::CACHE_HOURS), function () {
                return $this->fetchStats();
            });
        } catch (Throwable $exception) {
            report($exception);

            try {
                $data = $this->fetchStats();
            } catch (Throwable $fetchException) {
                report($fetchException);
                $data = $this->fallbackStats();
            }
        }

        if ($this->isDegraded($data)) {
            $lastGood = $this->safeCacheGet(self::LAST_GOOD_KEY);
            if (is_array($lastGood) && ! $this->isDegraded($lastGood)) {
                $data = $lastGood;
            } else {
                // Prefer static defaults over empty API payloads so the UI never shows zeros.
                $data = array_replace($this->staticDefaults(), array_filter(
                    $data,
                    fn ($value) => $value !== 0 && $value !== null && $value !== [] && $value !== '0'
                ));
            }
        } else {
            $this->safeCachePut(self::LAST_GOOD_KEY, $data, now()->addDays(30));
        }

        return response()->json($data);
    }

    /**
     * @return array<string, mixed>
     */
    private function fetchStats(): array
    {
        $username = self::USERNAME;
        $token = config('services.github.token');

        $headers = [
            'Accept' => 'application/vnd.github.v3+json',
            'User-Agent' => 'IrvingSamuel-Portfolio',
        ];

        if ($token) {
            $headers['Authorization'] = "Bearer {$token}";
        }

        $responses = Http::pool(function ($pool) use ($headers, $username) {
            return [
                $pool->as('user')->withHeaders($headers)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}"),
                $pool->as('repos')->withHeaders($headers)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}/repos", [
                    'per_page' => 100,
                    'sort' => 'updated',
                ]),
                $pool->as('events')->withHeaders($headers)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}/events/public", [
                    'per_page' => 100,
                ]),
            ];
        });

        // Invalid/expired token returns 401 for all authenticated calls — retry publicly.
        $authFailed = collect($responses)->contains(
            fn ($response) => $response && method_exists($response, 'status') && $response->status() === 401
        );

        if ($authFailed) {
            $publicHeaders = [
                'Accept' => 'application/vnd.github.v3+json',
                'User-Agent' => 'IrvingSamuel-Portfolio',
            ];
            $responses = Http::pool(function ($pool) use ($publicHeaders, $username) {
                return [
                    $pool->as('user')->withHeaders($publicHeaders)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}"),
                    $pool->as('repos')->withHeaders($publicHeaders)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}/repos", [
                        'per_page' => 100,
                        'sort' => 'updated',
                    ]),
                    $pool->as('events')->withHeaders($publicHeaders)->timeout(8)->connectTimeout(3)->get("https://api.github.com/users/{$username}/events/public", [
                        'per_page' => 100,
                    ]),
                ];
            });
            $token = null;
        }

        $user = ($responses['user'] ?? null)?->successful() ? $responses['user']->json() : [];
        $repos = ($responses['repos'] ?? null)?->successful() ? $responses['repos']->json() : [];
        $events = ($responses['events'] ?? null)?->successful() ? $responses['events']->json() : [];

        if (! is_array($user)) {
            $user = [];
        }
        if (! is_array($repos)) {
            $repos = [];
        }
        if (! is_array($events)) {
            $events = [];
        }

        $publicRepos = $user['public_repos'] ?? 0;
        $totalRepos = $publicRepos;

        if ($token) {
            try {
                $repoCountResponse = Http::timeout(8)->connectTimeout(3)->withHeaders([
                    'Authorization' => "Bearer {$token}",
                ])->post('https://api.github.com/graphql', [
                    'query' => 'query { viewer { repositories { totalCount } } }',
                ]);

                if ($repoCountResponse->successful()) {
                    $totalRepos = $repoCountResponse->json('data.viewer.repositories.totalCount', $publicRepos);
                }
            } catch (Throwable $exception) {
                report($exception);
            }
        }

        $totalStars = collect($repos)->sum('stargazers_count');
        $totalForks = collect($repos)->sum('forks_count');

        $languages = [];
        foreach ($repos as $repo) {
            if (! empty($repo['language'])) {
                $languages[$repo['language']] = ($languages[$repo['language']] ?? 0) + ($repo['size'] ?? 1);
            }
        }
        arsort($languages);
        $totalSize = array_sum($languages);
        $topLanguages = [];
        foreach (array_slice($languages, 0, 8, true) as $lang => $size) {
            $topLanguages[] = [
                'name' => $lang,
                'percentage' => $totalSize > 0 ? round(($size / $totalSize) * 100, 1) : 0,
            ];
        }

        $pushEvents = collect($events)->filter(fn ($e) => ($e['type'] ?? null) === 'PushEvent');
        $recentCommits = $pushEvents->sum(fn ($e) => count($e['payload']['commits'] ?? []));

        $streak = [];
        try {
            $streakResponse = Http::timeout(8)->connectTimeout(3)->get('https://streak-stats.demolab.com/', [
                'user' => $username,
                'type' => 'json',
            ]);
            $streak = $streakResponse->successful() ? $streakResponse->json() : [];
            if (! is_array($streak)) {
                $streak = [];
            }
        } catch (Throwable $exception) {
            report($exception);
        }

        $maxYearlyContributions = $this->fetchMaxYearlyContributions($username, $token);

        return [
            'public_repos' => $publicRepos,
            'total_repos' => $totalRepos,
            'followers' => $user['followers'] ?? 0,
            'following' => $user['following'] ?? 0,
            'total_stars' => $totalStars,
            'total_forks' => $totalForks,
            'recent_commits' => $recentCommits,
            'top_languages' => $topLanguages,
            'total_contributions' => $streak['totalContributions'] ?? 0,
            'max_yearly_contributions' => $maxYearlyContributions,
            'first_contribution' => $streak['firstContribution'] ?? null,
            'current_streak' => $streak['currentStreak']['length'] ?? 0,
            'current_streak_start' => $streak['currentStreak']['start'] ?? null,
            'current_streak_end' => $streak['currentStreak']['end'] ?? null,
            'longest_streak' => $streak['longestStreak']['length'] ?? 0,
            'longest_streak_start' => $streak['longestStreak']['start'] ?? null,
            'longest_streak_end' => $streak['longestStreak']['end'] ?? null,
            'years_of_experience' => now()->year - self::EXPERIENCE_START_YEAR,
            'updated_at' => now()->toIso8601String(),
        ];
    }

    /**
     * Fetch the maximum yearly contribution count via GitHub GraphQL API.
     * Limited to the last 3 years to keep the request budget under PHP-FPM limits.
     */
    private function fetchMaxYearlyContributions(string $username, ?string $token): int
    {
        if (! $token) {
            return 0;
        }

        $currentYear = now()->year;
        $startYear = max(self::EXPERIENCE_START_YEAR, $currentYear - 2);
        $maxContributions = 0;

        for ($year = $startYear; $year <= $currentYear; $year++) {
            $from = "{$year}-01-01T00:00:00Z";
            $to = "{$year}-12-31T23:59:59Z";

            $query = <<<GRAPHQL
            query {
                user(login: "{$username}") {
                    contributionsCollection(from: "{$from}", to: "{$to}") {
                        contributionCalendar {
                            totalContributions
                        }
                    }
                }
            }
            GRAPHQL;

            try {
                $response = Http::timeout(8)->connectTimeout(3)->withHeaders([
                    'Authorization' => "Bearer {$token}",
                ])->post('https://api.github.com/graphql', ['query' => $query]);

                if ($response->successful()) {
                    $contributions = $response->json('data.user.contributionsCollection.contributionCalendar.totalContributions', 0);
                    $maxContributions = max($maxContributions, $contributions);
                }
            } catch (Throwable $exception) {
                report($exception);
            }
        }

        return $maxContributions;
    }

    /**
     * @return array<string, mixed>
     */
    private function staticDefaults(): array
    {
        return [
            'public_repos' => 40,
            'total_repos' => 40,
            'followers' => 18,
            'following' => 0,
            'total_stars' => 10,
            'total_forks' => 0,
            'recent_commits' => 0,
            'top_languages' => [
                ['name' => 'PHP', 'percentage' => 45.0],
                ['name' => 'JavaScript', 'percentage' => 25.0],
                ['name' => 'TypeScript', 'percentage' => 15.0],
                ['name' => 'CSS', 'percentage' => 10.0],
                ['name' => 'Python', 'percentage' => 5.0],
            ],
            'total_contributions' => 1000,
            'max_yearly_contributions' => 1000,
            'first_contribution' => null,
            'current_streak' => 0,
            'current_streak_start' => null,
            'current_streak_end' => null,
            'longest_streak' => 0,
            'longest_streak_start' => null,
            'longest_streak_end' => null,
            'years_of_experience' => now()->year - self::EXPERIENCE_START_YEAR,
            'updated_at' => now()->toIso8601String(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function fallbackStats(): array
    {
        $lastGood = $this->safeCacheGet(self::LAST_GOOD_KEY);

        if (is_array($lastGood) && ! $this->isDegraded($lastGood)) {
            return $lastGood;
        }

        return $this->staticDefaults();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function isDegraded(array $data): bool
    {
        return ($data['public_repos'] ?? 0) === 0
            && ($data['followers'] ?? 0) === 0
            && ($data['total_repos'] ?? 0) === 0;
    }

    private function safeCacheGet(string $key): mixed
    {
        try {
            return Cache::get($key);
        } catch (Throwable $exception) {
            report($exception);

            return null;
        }
    }

    private function safeCachePut(string $key, mixed $value, mixed $ttl): void
    {
        try {
            Cache::put($key, $value, $ttl);
        } catch (Throwable $exception) {
            report($exception);
        }
    }
}
