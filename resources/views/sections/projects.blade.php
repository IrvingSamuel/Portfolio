<section id="projects" class="py-24 px-6">
    <div class="max-w-6xl mx-auto">
        {{-- Section Header --}}
        <div class="reveal text-center mb-16">
            <span class="text-accent-primary font-mono text-sm mb-2 block">// projetos</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Projetos em <span class="gradient-text">Destaque</span></h2>
            <div class="section-line mx-auto"></div>
        </div>

        {{-- Featured Project: Meus Prazos (DESTAQUE PRINCIPAL) --}}
        <div class="reveal animated-border rounded-2xl p-8 mb-12 glow-accent-hover" style="border-image: linear-gradient(135deg, #a855f7, #6366f1, #3b82f6) 1;">
            <div class="relative z-10 grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 text-xs font-mono animate-pulse">⭐ DESTAQUE PRINCIPAL</span>
                        <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs font-mono">PRODUÇÃO</span>
                        <span class="px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-mono">PWA</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-3 flex items-center gap-3">
                        <div><img src="/images/meusprazos.png" alt="Logo Meus Prazos" width="30" height="30" loading="lazy" decoding="async" style="width: 30px; border-radius: 6px;"></div>
                        <div>Meus Prazos</div>
                    </h3>
                    <p class="text-text-secondary leading-relaxed mb-6">
                        Plataforma inteligente de gerenciamento unificado de prazos e tarefas. Centraliza deadlines de
                        <strong class="text-text-primary">6+ plataformas</strong> (Google Calendar, Trello, Bitrix24, Canvas LMS, Notion, GitHub)
                        em um único dashboard com <strong class="text-text-primary">IA (Google Gemini)</strong> para análise de produtividade,
                        notificações push inteligentes, board Kanban, e sistema de assinaturas.
                        PWA instalável com sincronização automática a cada 3 minutos.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="tech-badge">Laravel 13</span>
                        <span class="tech-badge">Livewire 3</span>
                        <span class="tech-badge">Google Gemini</span>
                        <span class="tech-badge">PWA</span>
                        <span class="tech-badge">Firebase FCM</span>
                        <span class="tech-badge">Composio SDK</span>
                        <span class="tech-badge">Redis</span>
                        <span class="tech-badge">PagarMe</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://meusprazos.rezumme.ai/" target="_blank" rel="noopener" class="btn-primary text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-arrow-square-out"></i> Ver Projeto
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-xl p-4">
                        <div class="bg-dark-tertiary rounded-lg overflow-hidden aspect-video flex items-center justify-center relative">
                            <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(168,85,247,0.15), rgba(99,102,241,0.15), rgba(59,130,246,0.15)); filter: blur(20px);background: url('/images/meus-prazos.png'); background-size: cover; background-position: center; filter: blur(5px);"></div>
                            <div class="relative text-center p-8">
                                <i class="text-6xl mb-4 animate-float flex items-center justify-center"><img src="/images/meusprazos.png" alt="Logo Meus Prazos" width="70" height="70" loading="lazy" decoding="async" style="width: 70px; border-radius: 12px;"></i>
                                <p class="text-text-secondary text-sm font-mono">meusprazos.rezumme.ai</p>
                                <div class="flex justify-center gap-5 mt-4 text-text-muted text-xs">
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-calendar-check"></i></strong><br>6+ integrações</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-robot"></i></strong><br>IA Gemini</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-bell-ringing"></i></strong><br>push alerts</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-device-mobile"></i></strong><br>PWA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Project: Road to Valhalla --}}
        <div class="reveal animated-border rounded-2xl p-8 mb-12 glow-accent-hover">
            <div class="relative z-10 grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-accent-primary/10 text-accent-primary text-xs font-mono">DESTAQUE</span>
                        <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs font-mono">PRODUÇÃO</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-3 flex items-center gap-3">
                        <div><img src="/images/rtv-icon-60.webp" alt="Logo Road to Valhalla" width="30" height="30" loading="lazy" decoding="async" style="width: 30px"></div>
                        <div>Road to Valhalla</div>
                    </h3>
                    <p class="text-text-secondary leading-relaxed mb-6">
                        Plataforma completa de Vitual TableTop para RPG de mesa online com engine proprietária, sistema de combate em tempo real,
                        gerenciamento de fichas, mapas interativos e matchmaking. <strong class="text-text-primary">+350 mesas</strong>
                        criadas e <strong class="text-text-primary">+1000 jogadores</strong> ativos.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">Phaser 3</span>
                        <span class="tech-badge">WebSocket</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Prisma</span>
                        <span class="tech-badge">57 Models</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://roadtovalhalla.com.br/" target="_blank" rel="noopener" class="btn-primary text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-arrow-square-out"></i> Ver Projeto
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-xl p-4">
                        <div class="bg-dark-tertiary rounded-lg overflow-hidden aspect-video flex items-center justify-center relative">
                            <div class="absolute inset-0" style="background: url('/images/road.png'); background-size: cover; background-position: center; filter: blur(5px);"></div>
                            <div class="relative text-center p-8">
                                <i class="text-6xl text-accent-tertiary mb-4 animate-float flex items-center justify-center"><img src="/images/rtv-icon-140.webp" alt="Logo Road to Valhalla" width="70" height="70" loading="lazy" decoding="async" style="width: 70px"></i>
                                <p class="text-text-secondary text-sm font-mono">roadtovalhalla.com.br</p>
                                <div class="flex justify-center gap-6 mt-4 text-text-muted text-xs">
                                    <span><strong class="text-text-primary text-lg">350+</strong><br>mesas</span>
                                    <span><strong class="text-text-primary text-lg">1000+</strong><br>jogadores</span>
                                    <span><strong class="text-text-primary text-lg">57</strong><br>models</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Project: Rezumme --}}
        <div class="reveal animated-border rounded-2xl p-8 mb-12 glow-accent-hover">
            <div class="relative z-10 grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-accent-secondary/10 text-accent-secondary text-xs font-mono">DESTAQUE</span>
                        <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs font-mono">PRODUÇÃO</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-3 flex items-center gap-3">
                        <div><img src="/images/rezumme-logo.svg" alt="Logo Rezumme" width="30" height="30" loading="lazy" decoding="async" style="width: 30px"></div>
                        <div>Rezumme</div>
                    </h3>
                    <p class="text-text-secondary leading-relaxed mb-6">
                        Sistema de assistência estudantil com upload de aulas (áudio, vídeo, PDF, DOCX ou texto).
                        Gera resumos automáticos, insights, detecção de tarefas e pontos importantes através de
                        <strong class="text-text-primary">transcrição com IA e agentes inteligentes</strong>.
                        Conta com estrutura de classes similar ao Classroom e sistema próprio de reunião online.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">Livewire</span>
                        <span class="tech-badge">AI Agents</span>
                        <span class="tech-badge">Transcrição</span>
                        <span class="tech-badge">WebRTC</span>
                        <span class="tech-badge">MySQL</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://rezum.me/" target="_blank" rel="noopener" class="btn-primary text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-arrow-square-out"></i> Ver Projeto
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-xl p-4">
                        <div class="bg-dark-tertiary rounded-lg overflow-hidden aspect-video flex items-center justify-center relative">
                            <div class="absolute inset-0" style="background: url('/images/rezumme.png'); background-size: cover; background-position: center; filter: blur(5px);"></div>
                            <div class="relative text-center p-8">
                                <i class="text-6xl text-accent-secondary mb-4 animate-float flex items-center justify-center"><img src="/images/rezumme-logo.svg" alt="Logo Rezumme" width="70" height="70" loading="lazy" decoding="async" style="width: 70px"></i>
                                <p class="text-text-secondary text-sm font-mono">rezum.me</p>
                                <div class="flex justify-center gap-6 mt-4 text-text-muted text-xs">
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-microphone"></i></strong><br>áudio</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-video-camera"></i></strong><br>vídeo</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-file-pdf"></i></strong><br>PDF</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-robot"></i></strong><br>AI agents</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Project: Chronos --}}
        <div class="reveal animated-border rounded-2xl p-8 mb-12 glow-accent-hover">
            <div class="relative z-10 grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-xs font-mono">DESTAQUE</span>
                        <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs font-mono">PRODUÇÃO</span>
                        <span class="px-3 py-1 rounded-full bg-accent-primary/10 text-accent-primary text-xs font-mono">AI</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-3 flex items-center gap-3">
                        <div class="w-[30px] h-[30px] rounded-md bg-amber-500/15 flex items-center justify-center">
                            <i class="ph ph-kanban text-lg text-amber-400" aria-hidden="true"></i>
                        </div>
                        <div>Chronos</div>
                    </h3>
                    <p class="text-text-secondary leading-relaxed mb-6">
                        Ecossistema de produtividade e AI consulting com domínio próprio
                        <strong class="text-text-primary">chronos.com.pt</strong>: quadros Kanban, automations,
                        <strong class="text-text-primary">chronos-ide</strong> (C++) e extensão
                        <strong class="text-text-primary">chronos-vscode</strong> (TypeScript) que levam tarefas e Chronos AI para dentro da IDE.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">TypeScript</span>
                        <span class="tech-badge">C++</span>
                        <span class="tech-badge">VS Code</span>
                        <span class="tech-badge">AI Agents</span>
                        <span class="tech-badge">Kanban</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://chronos.com.pt" target="_blank" rel="noopener" class="btn-primary text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-arrow-square-out" aria-hidden="true"></i> Ver Projeto
                        </a>
                        <a href="https://github.com/IrvingSamuel/chronos-vscode" target="_blank" rel="noopener" class="btn-outline text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-github-logo" aria-hidden="true"></i> chronos-vscode
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-xl p-4">
                        <div class="bg-dark-tertiary rounded-lg overflow-hidden aspect-video flex items-center justify-center relative">
                            <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(245,158,11,0.18), rgba(99,102,241,0.15), rgba(34,211,238,0.12));"></div>
                            <div class="relative text-center p-8">
                                <i class="ph ph-kanban text-6xl text-amber-400 mb-4 animate-float" aria-hidden="true"></i>
                                <p class="text-text-secondary text-sm font-mono">chronos.com.pt</p>
                                <div class="flex justify-center gap-6 mt-4 text-text-muted text-xs">
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-code" aria-hidden="true"></i></strong><br>IDE C++</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-puzzle-piece" aria-hidden="true"></i></strong><br>VS Code</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-robot" aria-hidden="true"></i></strong><br>Chronos AI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Project: openmeet --}}
        <div class="reveal animated-border rounded-2xl p-8 mb-12 glow-accent-hover">
            <div class="relative z-10 grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-mono">DESTAQUE</span>
                        <span class="px-3 py-1 rounded-full bg-yellow-500/10 text-yellow-400 text-xs font-mono">★ 5 STARS</span>
                        <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs font-mono">OPEN SOURCE</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold mb-3 flex items-center gap-3">
                        <div class="w-[30px] h-[30px] rounded-md bg-cyan-500/15 flex items-center justify-center">
                            <i class="ph ph-video-camera text-lg text-cyan-400" aria-hidden="true"></i>
                        </div>
                        <div>openmeet</div>
                    </h3>
                    <p class="text-text-secondary leading-relaxed mb-6">
                        Videoconferência <strong class="text-text-primary">white-label open-source</strong> com
                        <strong class="text-text-primary">LiveKit</strong>, legendas ao vivo e um copiloto de IA que transforma
                        reuniões em tarefas do Chronos — ponte direta entre comunicação e execução.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="tech-badge">LiveKit</span>
                        <span class="tech-badge">WebRTC</span>
                        <span class="tech-badge">AI Copilot</span>
                        <span class="tech-badge">Captions</span>
                        <span class="tech-badge">White-label</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://openmeet.chronos.com.pt" target="_blank" rel="noopener" class="btn-primary text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-arrow-square-out" aria-hidden="true"></i> Ver Projeto
                        </a>
                        <a href="https://github.com/IrvingSamuel/openmeet" target="_blank" rel="noopener" class="btn-outline text-sm !px-5 !py-2 flex items-center gap-2">
                            <i class="ph ph-github-logo" aria-hidden="true"></i> GitHub
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="glass rounded-xl p-4">
                        <div class="bg-dark-tertiary rounded-lg overflow-hidden aspect-video flex items-center justify-center relative">
                            <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(34,211,238,0.18), rgba(99,102,241,0.15), rgba(168,85,247,0.12));"></div>
                            <div class="relative text-center p-8">
                                <i class="ph ph-video-camera text-6xl text-cyan-400 mb-4 animate-float" aria-hidden="true"></i>
                                <p class="text-text-secondary text-sm font-mono">openmeet.chronos.com.pt</p>
                                <div class="flex justify-center gap-6 mt-4 text-text-muted text-xs">
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-broadcast" aria-hidden="true"></i></strong><br>LiveKit</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-closed-captioning" aria-hidden="true"></i></strong><br>legendas</span>
                                    <span><strong class="text-text-primary text-lg"><i class="ph ph-robot" aria-hidden="true"></i></strong><br>copiloto</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Other Projects Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Agendamento --}}
            <div class="reveal gradient-border rounded-xl overflow-hidden card-tilt group" style="transition-delay: 0.1s">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-lg bg-accent-primary/10 flex items-center justify-center">
                            <i class="ph ph-calendar-check text-lg text-accent-primary"></i>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="https://github.com/IrvingSamuel/agendamento" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="GitHub do projeto Agendamento">
                                <i class="ph ph-github-logo text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2 group-hover:text-accent-primary transition-colors">Agendamento</h4>
                    <p class="text-text-secondary text-sm leading-relaxed mb-4">
                        Sistema de agendamento completo com calendário interativo, integração WhatsApp
                        via Evolution API e painel administrativo.
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tech-badge !text-[0.65rem]">Laravel 12</span>
                        <span class="tech-badge !text-[0.65rem]">FullCalendar</span>
                        <span class="tech-badge !text-[0.65rem]">WhatsApp API</span>
                    </div>
                </div>
            </div>

            {{-- Weather APP --}}
            <div class="reveal gradient-border rounded-xl overflow-hidden card-tilt group" style="transition-delay: 0.2s">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-lg bg-accent-secondary/10 flex items-center justify-center">
                            <i class="ph ph-cloud-sun text-lg text-accent-secondary"></i>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="https://irvingsamuel.github.io/Weather-APP-UI/" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="Abrir Weather APP">
                                <i class="ph ph-arrow-square-out text-xl" aria-hidden="true"></i>
                            </a>
                            <a href="https://github.com/IrvingSamuel/Weather-APP-UI" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="GitHub do Weather APP">
                                <i class="ph ph-github-logo text-xl" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2 group-hover:text-accent-secondary transition-colors">Weather APP</h4>
                    <p class="text-text-secondary text-sm leading-relaxed mb-4">
                        Aplicação de previsão do tempo com interface moderna, consumindo dados
                        em tempo real da OpenWeatherMap API.
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tech-badge !text-[0.65rem]">JavaScript</span>
                        <span class="tech-badge !text-[0.65rem]">OpenWeatherMap</span>
                        <span class="tech-badge !text-[0.65rem]">CSS</span>
                    </div>
                </div>
            </div>

            {{-- SpaceFlow Login --}}
            <div class="reveal gradient-border rounded-xl overflow-hidden card-tilt group" style="transition-delay: 0.3s">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-lg bg-accent-tertiary/10 flex items-center justify-center">
                            <i class="ph ph-rocket text-lg text-accent-tertiary"></i>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="https://eflow.space/" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="Abrir SpaceFlow Login">
                                <i class="ph ph-arrow-square-out text-xl" aria-hidden="true"></i>
                            </a>
                            <a href="https://github.com/IrvingSamuel/wildcard-login" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="GitHub do SpaceFlow Login">
                                <i class="ph ph-github-logo text-xl" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2 group-hover:text-accent-tertiary transition-colors">SpaceFlow Login</h4>
                    <p class="text-text-secondary text-sm leading-relaxed mb-4">
                        Interface de login com UI/UX espacial imersiva, desenvolvida seguindo princípios
                        avançados de Interação Humano-Computador.
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tech-badge !text-[0.65rem]">HTML/CSS</span>
                        <span class="tech-badge !text-[0.65rem]">Tailwind</span>
                        <span class="tech-badge !text-[0.65rem]">UI/UX Design</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- GitHub CTA --}}
        <div class="reveal text-center mt-12">
            <a href="https://github.com/IrvingSamuel" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-text-secondary hover:text-accent-primary transition-colors font-mono text-sm">
                <i class="ph ph-github-logo text-lg"></i>
                Ver todos os repositórios no GitHub
                <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
