<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent transition-all duration-500 !border-0">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        {{-- Logo --}}
        <a href="#hero" class="flex items-center gap-2 group">
            <span class="text-xl font-bold gradient-text">IS</span>
            <span class="text-text-secondary text-sm font-mono hidden sm:block group-hover:text-text-primary transition-colors">/dev</span>
        </a>

        {{-- Desktop Nav --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="#about" class="nav-link text-sm font-medium">Sobre</a>
            <a href="#skills" class="nav-link text-sm font-medium">Skills</a>
            <a href="#projects" class="nav-link text-sm font-medium">Projetos</a>
            <a href="#experience" class="nav-link text-sm font-medium">Experiência</a>
            <a href="#education" class="nav-link text-sm font-medium">Formação</a>
            <a href="#contact" class="nav-link text-sm font-medium">Contato</a>
        </div>

        {{-- CTA --}}
        <div class="hidden md:flex items-center gap-4">
            <a href="https://github.com/IrvingSamuel" target="_blank" rel="noopener" class="text-text-secondary hover:text-text-primary transition-colors" aria-label="GitHub">
                <i class="ph ph-github-logo text-xl" aria-hidden="true"></i>
            </a>
            <a href="https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156" target="_blank" rel="noopener" class="text-text-secondary hover:text-text-primary transition-colors" aria-label="LinkedIn">
                <i class="ph ph-linkedin-logo text-xl" aria-hidden="true"></i>
            </a>
            <a href="#contact" class="btn-primary text-sm !px-4 !py-2">Contato</a>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="mobile-menu-btn" class="hamburger md:hidden flex flex-col gap-1.5 p-2" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden glass-strong mx-4 rounded-xl p-6 space-y-4">
        <a href="#about" class="block text-text-secondary hover:text-text-primary transition-colors">Sobre</a>
        <a href="#skills" class="block text-text-secondary hover:text-text-primary transition-colors">Skills</a>
        <a href="#projects" class="block text-text-secondary hover:text-text-primary transition-colors">Projetos</a>
        <a href="#experience" class="block text-text-secondary hover:text-text-primary transition-colors">Experiência</a>
        <a href="#education" class="block text-text-secondary hover:text-text-primary transition-colors">Formação</a>
        <a href="#contact" class="block text-text-secondary hover:text-text-primary transition-colors">Contato</a>
        <div class="flex gap-4 pt-4 border-t border-dark-border">
            <a href="https://github.com/IrvingSamuel" target="_blank" rel="noopener" class="text-text-secondary hover:text-text-primary" aria-label="GitHub"><i class="ph ph-github-logo text-xl" aria-hidden="true"></i></a>
            <a href="https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156" target="_blank" rel="noopener" class="text-text-secondary hover:text-text-primary" aria-label="LinkedIn"><i class="ph ph-linkedin-logo text-xl" aria-hidden="true"></i></a>
        </div>
    </div>
</nav>
