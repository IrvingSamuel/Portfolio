<section id="hero" class="relative min-h-screen flex items-center justify-center px-6 pt-20">
    <div class="max-w-5xl mx-auto text-center">
        {{-- Avatar --}}
        <div class="reveal-scale mb-8">
            <div class="relative inline-block">
                <div class="w-32 h-32 rounded-full overflow-hidden ring-2 ring-accent-primary/30 ring-offset-4 ring-offset-dark-primary animate-pulse-glow">
                    <img src="https://avatars.githubusercontent.com/u/39782826" alt="Irving Samuel" class="w-full h-full object-cover" loading="eager">
                </div>
                <span class="absolute bottom-1 right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-dark-primary"></span>
            </div>
        </div>

        {{-- Badge --}}
        <div class="reveal mb-6" style="transition-delay: 0.1s">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-sm text-text-secondary">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                Disponível para novos projetos
            </span>
        </div>

        {{-- Name --}}
        <h1 class="reveal text-4xl sm:text-5xl md:text-7xl font-bold mb-4 tracking-tight" style="transition-delay: 0.2s">
            Irving <span class="gradient-text">Samuel</span>
        </h1>

        {{-- Typewriter --}}
        <div class="reveal h-8 mb-6 flex items-center justify-center" style="transition-delay: 0.3s">
            <span class="text-lg sm:text-xl text-text-secondary font-mono">
                <span class="text-accent-primary">&gt;</span>
                <span id="typewriter" class="typewriter-cursor ml-1"></span>
            </span>
        </div>

        {{-- Description --}}
        <p class="reveal text-text-secondary max-w-2xl mx-auto mb-10 text-lg leading-relaxed" style="transition-delay: 0.4s">
            Engenheiro de Software com <span class="text-text-primary font-medium">+{{ $yearsOfExperience }} anos</span> construindo
            aplicações escaláveis com <span class="text-accent-primary font-medium">PHP/Laravel</span>,
            <span class="text-accent-secondary font-medium">Node.js</span> e
            <span class="text-accent-tertiary font-medium">arquiteturas modernas</span>.
        </p>

        {{-- CTAs --}}
        <div class="reveal flex flex-col sm:flex-row items-center justify-center gap-4" style="transition-delay: 0.5s">
            <a href="#projects" class="btn-primary flex items-center gap-2">
                <i class="ph ph-code text-lg"></i>
                Ver Projetos
            </a>
            <a href="#contact" class="btn-outline flex items-center gap-2">
                <i class="ph ph-envelope text-lg"></i>
                Entrar em Contato
            </a>
        </div>

        {{-- Quick Stats --}}
        <div class="reveal grid grid-cols-2 sm:grid-cols-4 gap-6 mt-16 max-w-2xl mx-auto" style="transition-delay: 0.6s">
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">+{{ $yearsOfExperience }}</div>
                <div class="text-xs text-text-muted mt-1 font-mono">anos exp.</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">{{ $totalRepos }}+</div>
                <div class="text-xs text-text-muted mt-1 font-mono">repositórios</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">1000+</div>
                <div class="text-xs text-text-muted mt-1 font-mono">usuários ativos</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">{{ $maxYearlyContributions }}+</div>
                <div class="text-xs text-text-muted mt-1 font-mono">contribuições/ano</div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-scroll-bounce">
        <a href="#about" class="flex flex-col items-center gap-2 text-text-muted hover:text-text-primary transition-colors" aria-label="Rolar para a seção Sobre">
            <span class="text-xs font-mono">scroll</span>
            <i class="ph ph-caret-down text-lg" aria-hidden="true"></i>
        </a>
    </div>
</section>
