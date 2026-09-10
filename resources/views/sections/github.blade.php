<section id="github" class="py-24 px-6" x-data="githubStats()" x-init="fetchStats()" x-cloak>
    <div class="max-w-5xl mx-auto" x-show="hasStats" x-transition>
        {{-- Section Header --}}
        <div class="reveal text-center mb-16">
            <span class="text-accent-primary font-mono text-sm mb-2 block">// github</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">GitHub <span class="gradient-text">Stats</span></h2>
            <div class="section-line mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            {{-- GitHub Stats Card --}}
            <div class="reveal glass rounded-xl p-6" style="transition-delay: 0.05s">
                <h3 class="text-lg font-semibold mb-4 text-accent-primary"><i class="ph ph-chart-bar"></i> GitHub Stats</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-text-secondary text-sm"><i class="ph ph-star text-yellow-500"></i> Total Stars</span>
                        <span class="font-bold text-text-primary" x-text="stats.total_stars"></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-text-secondary text-sm"><i class="ph ph-git-fork text-accent-secondary"></i> Total Forks</span>
                        <span class="font-bold text-text-primary" x-text="stats.total_forks"></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-text-secondary text-sm"><i class="ph ph-git-commit text-green-400"></i> Commits Recentes</span>
                        <span class="font-bold text-text-primary" x-text="stats.recent_commits"></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-text-secondary text-sm"><i class="ph ph-folder-open text-accent-tertiary"></i> Repos Públicos</span>
                        <span class="font-bold text-text-primary" x-text="stats.public_repos"></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-text-secondary text-sm"><i class="ph ph-users text-accent-primary"></i> Followers</span>
                        <span class="font-bold text-text-primary" x-text="stats.followers"></span>
                    </div>
                </div>
            </div>

            {{-- Top Languages --}}
            <div class="reveal glass rounded-xl p-6" style="transition-delay: 0.1s" x-show="(stats.top_languages ?? []).length > 0">
                <h3 class="text-lg font-semibold mb-4 text-accent-primary"><i class="ph ph-code"></i> Top Languages</h3>
                <div class="space-y-3">
                    <template x-for="lang in stats.top_languages ?? []" :key="lang.name">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-text-secondary" x-text="lang.name"></span>
                                <span class="text-text-muted font-mono" x-text="lang.percentage + '%'"></span>
                            </div>
                            <div class="w-full h-2 bg-dark-tertiary rounded-full overflow-hidden">
                                <div class="h-full rounded-full transition-all duration-1000"
                                     :style="'width: ' + lang.percentage + '%'"
                                     :class="{
                                         'bg-accent-primary': lang.name === 'PHP' || lang.name === 'TypeScript',
                                         'bg-yellow-500': lang.name === 'JavaScript',
                                         'bg-accent-secondary': lang.name === 'CSS' || lang.name === 'Dart',
                                         'bg-accent-tertiary': lang.name === 'Python' || lang.name === 'Vue',
                                         'bg-green-400': lang.name === 'Java' || lang.name === 'C#',
                                         'bg-pink-500': !['PHP','TypeScript','JavaScript','CSS','Dart','Python','Vue','Java','C#'].includes(lang.name),
                                     }"></div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        {{-- Streak & Contributions --}}
        <div class="reveal glass rounded-xl p-6 mt-6" style="transition-delay: 0.15s">
            <div class="grid grid-cols-3 divide-x divide-dark-tertiary">
                {{-- Total Contributions --}}
                <div class="text-center px-4">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text" x-text="stats.total_contributions"></div>
                    <div class="text-text-secondary text-sm mt-1">Total Contributions</div>
                    <div class="text-text-muted text-xs font-mono mt-1" x-show="stats.first_contribution">
                        <span x-text="stats.first_contribution ? formatDate(stats.first_contribution) + ' - Present' : ''"></span>
                    </div>
                </div>
                {{-- Current Streak --}}
                <div class="text-center px-4">
                    <div class="relative inline-block mb-1">
                        <i class="ph ph-fire text-accent-secondary text-lg absolute -top-3 left-1/2 -translate-x-1/2"></i>
                        <div class="w-20 h-20 rounded-full border-4 border-accent-primary flex items-center justify-center">
                            <span class="text-3xl font-bold text-text-primary" x-text="stats.current_streak"></span>
                        </div>
                    </div>
                    <div class="text-text-secondary text-sm font-semibold">Current Streak</div>
                    <div class="text-text-muted text-xs font-mono mt-1" x-show="stats.current_streak_start">
                        <span x-text="formatDate(stats.current_streak_start) + ' - ' + formatDate(stats.current_streak_end)"></span>
                    </div>
                </div>
                {{-- Longest Streak --}}
                <div class="text-center px-4">
                    <div class="text-3xl sm:text-4xl font-bold gradient-text" x-text="stats.longest_streak"></div>
                    <div class="text-text-secondary text-sm mt-1">Longest Streak</div>
                    <div class="text-text-muted text-xs font-mono mt-1" x-show="stats.longest_streak_start">
                        <span x-text="formatDate(stats.longest_streak_start) + ' - ' + formatDate(stats.longest_streak_end)"></span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick stats badges --}}
        <div class="reveal flex flex-wrap justify-center gap-4 mt-8">
            <div class="glass rounded-lg px-5 py-3 text-center">
                <div class="text-xl font-bold gradient-text" x-text="stats.public_repos + '+'"></div>
                <div class="text-text-muted text-xs font-mono">Repos Públicos</div>
            </div>
            <div class="glass rounded-lg px-5 py-3 text-center">
                <div class="text-xl font-bold gradient-text" x-text="(stats.recent_commits || 0) + '+'"></div>
                <div class="text-text-muted text-xs font-mono">Commits Recentes</div>
            </div>
            <div class="glass rounded-lg px-5 py-3 text-center">
                <div class="text-xl font-bold text-accent-secondary">Arctic Vault</div>
                <div class="text-text-muted text-xs font-mono">Contributor</div>
            </div>
            <div class="glass rounded-lg px-5 py-3 text-center">
                <div class="text-xl font-bold text-accent-tertiary">Pro</div>
                <div class="text-text-muted text-xs font-mono">GitHub Badge</div>
            </div>
        </div>

        {{-- Last updated --}}
        <div class="text-center mt-4">
            <span class="text-text-muted text-xs font-mono" x-show="stats.updated_at">
                <i class="ph ph-clock"></i> Atualizado: <span x-text="stats.updated_at ? new Date(stats.updated_at).toLocaleString('pt-BR') : ''"></span>
            </span>
        </div>
    </div>
</section>

<script>
function githubStats() {
    const defaults = {
        public_repos: 40,
        total_repos: 40,
        followers: 18,
        following: 0,
        total_stars: 10,
        total_forks: 0,
        recent_commits: 0,
        top_languages: [
            { name: 'PHP', percentage: 45 },
            { name: 'JavaScript', percentage: 25 },
            { name: 'TypeScript', percentage: 15 },
            { name: 'CSS', percentage: 10 },
            { name: 'Python', percentage: 5 },
        ],
        total_contributions: 1000,
        max_yearly_contributions: 1000,
        first_contribution: null,
        current_streak: 0,
        current_streak_start: null,
        current_streak_end: null,
        longest_streak: 0,
        longest_streak_start: null,
        longest_streak_end: null,
        updated_at: null,
    };

    return {
        stats: { ...defaults },
        loaded: false,
        get hasStats() {
            return this.loaded && (this.stats.public_repos > 0 || this.stats.total_stars > 0 || this.stats.followers > 0);
        },
        formatDate(dateStr) {
            if (!dateStr) return '';
            const d = new Date(dateStr + 'T00:00:00');
            return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
        },
        async fetchStats() {
            try {
                const res = await fetch('/api/github-stats');
                if (!res.ok) {
                    this.stats = { ...defaults };
                    this.loaded = true;
                    return;
                }
                const data = await res.json();
                const merged = { ...defaults, ...data };
                const empty = !merged.public_repos && !merged.followers && !merged.total_repos;
                this.stats = empty ? { ...defaults } : merged;
            } catch (e) {
                this.stats = { ...defaults };
            } finally {
                this.loaded = true;
            }
        }
    }
}
</script>
