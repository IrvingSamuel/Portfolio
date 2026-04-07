<section id="experience" class="py-24 px-6">
    <div class="max-w-4xl mx-auto">
        {{-- Section Header --}}
        <div class="reveal text-center mb-16">
            <span class="text-accent-primary font-mono text-sm mb-2 block">// experiência</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Trajetória <span class="gradient-text">Profissional</span></h2>
            <div class="section-line mx-auto"></div>
        </div>

        {{-- Timeline --}}
        <div class="relative">
            {{-- Timeline line --}}
            <div class="absolute left-6 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-0.5 timeline-line"></div>

            @php
            $experiences = [
                [
                    'role' => 'Full-Stack Developer & Scrum Master',
                    'company' => 'Next Opinion',
                    'period' => 'Mar 2024 — Presente',
                    'type' => 'Tempo integral',
                    'location' => 'Remoto',
                    'description' => 'Scrum Master de projetos na área educacional, consultor de projetos externos e responsável por todas as integrações de Inteligência Artificial da empresa.',
                    'techs' => ['PHP', 'Laravel', 'Livewire', 'MySQL', 'AI/ML', 'Scrum'],
                    'icon' => 'ph-buildings',
                    'color' => 'accent-primary',
                    'current' => true,
                ],
                [
                    'role' => 'Backend Developer',
                    'company' => 'XTM Digital',
                    'period' => 'Ago 2021 — Mar 2024',
                    'type' => 'Tempo integral',
                    'location' => 'Remoto',
                    'description' => 'Criação de um CRM interno completo e desenvolvimento de um sistema de trading baseado em IQ Option. Arquitetura de APIs e integrações complexas.',
                    'techs' => ['PHP', 'Laravel', 'PostgreSQL', 'REST APIs', 'Docker'],
                    'icon' => 'ph-globe',
                    'color' => 'accent-secondary',
                    'current' => false,
                ],
                [
                    'role' => 'Gerente de Infraestrutura e Redes',
                    'company' => 'Colégio Adventista',
                    'period' => 'Mar 2020 — Dez 2021',
                    'type' => 'Meio período',
                    'location' => 'Maceió, AL',
                    'description' => 'Gerenciamento de infraestrutura de TI e redes do colégio. Administração de servidores, manutenção de equipamentos e suporte técnico.',
                    'techs' => ['Redes', 'Infraestrutura', 'Servidores', 'Suporte TI'],
                    'icon' => 'ph-network',
                    'color' => 'accent-tertiary',
                    'current' => false,
                ],
                [
                    'role' => 'Analista de Dados',
                    'company' => 'Outlier AI',
                    'period' => '2020',
                    'type' => 'Freelance',
                    'location' => 'Remoto',
                    'description' => 'Anotação e curadoria de dados para treinamento de modelos de inteligência artificial. Análise de qualidade e consistência de datasets.',
                    'techs' => ['Data Analysis', 'AI Training', 'Python', 'Data Curation', 'Machine Learning'],
                    'icon' => 'ph-chart-bar',
                    'color' => 'green-500',
                    'current' => false,
                ],
                [
                    'role' => 'Estagiário de TI',
                    'company' => 'IFAL - Instituto Federal',
                    'period' => '2019 — 2020',
                    'type' => 'Estágio',
                    'location' => 'Maceió, AL',
                    'description' => 'Suporte técnico, manutenção de sistemas internos e desenvolvimento de soluções web para o departamento.',
                    'techs' => ['PHP', 'HTML/CSS', 'MySQL', 'Suporte TI'],
                    'icon' => 'ph-student',
                    'color' => 'yellow-500',
                    'current' => false,
                ],
                [
                    'role' => 'Monitor da OBI',
                    'company' => 'IFAL - Instituto Federal',
                    'period' => '2017 — 2020',
                    'type' => 'Monitoria',
                    'location' => 'Maceió, AL',
                    'description' => 'Monitor da Olimpíada Brasileira de Informática (OBI). Ensino de lógica de programação e preparação de alunos do ensino médio para as competições.',
                    'techs' => ['Ensino', 'Lógica', 'Programação', 'C/C++', 'Python'],
                    'icon' => 'ph-chalkboard-teacher',
                    'color' => 'pink-500',
                    'current' => false,
                ],
            ];
            @endphp

            <div class="space-y-12">
                @foreach ($experiences as $i => $exp)
                <div class="reveal relative flex items-start gap-6 md:gap-0 {{ $i % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}" style="transition-delay: {{ $i * 0.1 }}s">
                    {{-- Timeline dot --}}
                    <div class="absolute left-6 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-{{ $exp['color'] }} timeline-dot z-10 {{ $exp['current'] ? 'animate-pulse-glow' : '' }}"></div>

                    {{-- Content --}}
                    <div class="ml-14 md:ml-0 {{ $i % 2 === 0 ? 'md:w-1/2 md:pr-12' : 'md:w-1/2 md:pl-12' }}">
                        <div class="glass rounded-xl p-6 glow-accent-hover card-tilt">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-9 h-9 rounded-lg bg-{{ $exp['color'] }}/10 flex items-center justify-center shrink-0">
                                    <i class="ph {{ $exp['icon'] }} text-lg text-{{ $exp['color'] }}"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">{{ $exp['role'] }}</h4>
                                    <p class="text-{{ $exp['color'] }} text-xs font-medium">{{ $exp['company'] }}</p>
                                </div>
                                @if ($exp['current'])
                                <span class="ml-auto px-2 py-0.5 rounded-full bg-green-500/10 text-green-400 text-[0.65rem] font-mono">ATUAL</span>
                                @endif
                            </div>

                            <div class="flex items-center gap-3 text-text-muted text-xs font-mono mb-3">
                                <span><i class="ph ph-calendar"></i> {{ $exp['period'] }}</span>
                                <span>·</span>
                                <span>{{ $exp['location'] }}</span>
                            </div>

                            <p class="text-text-secondary text-sm leading-relaxed mb-4">{{ $exp['description'] }}</p>

                            <div class="flex flex-wrap gap-1.5">
                                @foreach ($exp['techs'] as $tech)
                                <span class="tech-badge !text-[0.6rem]">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
