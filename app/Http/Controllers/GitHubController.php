<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function stats()
    {
        $data = Cache::store('file')->remember('github_stats', 3600, function () {
            $username = 'IrvingSamuel';

            $userResponse = Http::get("https://api.github.com/users/{$username}");
            $reposResponse = Http::get("https://api.github.com/users/{$username}/repos", [
                'per_page' => 100,
                'sort' => 'updated',
            ]);
            $eventsResponse = Http::get("https://api.github.com/users/{$username}/events/public", [
                'per_page' => 100,
            ]);

            $user = $userResponse->successful() ? $userResponse->json() : [];
            $repos = $reposResponse->successful() ? $reposResponse->json() : [];
            $events = $eventsResponse->successful() ? $eventsResponse->json() : [];

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

            $pushEvents = collect($events)->filter(fn ($e) => $e['type'] === 'PushEvent');
            $recentCommits = $pushEvents->sum(fn ($e) => count($e['payload']['commits'] ?? []));

            $currentYear = now()->year;
            $yearEvents = collect($events)->filter(
                fn ($e) => str_starts_with($e['created_at'], (string) $currentYear)
            );

            // Fetch streak stats
            $streakResponse = Http::get("https://streak-stats.demolab.com/", [
                'user' => $username,
                'type' => 'json',
            ]);
            $streak = $streakResponse->successful() ? $streakResponse->json() : [];

            return [
                'public_repos' => $user['public_repos'] ?? 0,
                'followers' => $user['followers'] ?? 0,
                'following' => $user['following'] ?? 0,
                'total_stars' => $totalStars,
                'total_forks' => $totalForks,
                'recent_commits' => $recentCommits,
                'top_languages' => $topLanguages,
                'total_contributions' => $streak['totalContributions'] ?? 0,
                'first_contribution' => $streak['firstContribution'] ?? null,
                'current_streak' => $streak['currentStreak']['length'] ?? 0,
                'current_streak_start' => $streak['currentStreak']['start'] ?? null,
                'current_streak_end' => $streak['currentStreak']['end'] ?? null,
                'longest_streak' => $streak['longestStreak']['length'] ?? 0,
                'longest_streak_start' => $streak['longestStreak']['start'] ?? null,
                'longest_streak_end' => $streak['longestStreak']['end'] ?? null,
                'updated_at' => now()->toIso8601String(),
            ];
        });

        return response()->json($data);
    }
}
