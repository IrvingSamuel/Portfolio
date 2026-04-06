<footer class="py-12 px-6 border-t border-dark-border">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            {{-- Logo / Brand --}}
            <div class="flex items-center gap-3">
                <span class="text-xl font-bold gradient-text">IS</span>
                <span class="text-text-muted text-sm">·</span>
                <span class="text-text-secondary text-sm">Engenheiro de Software</span>
            </div>

            {{-- Social Links --}}
            <div class="flex items-center gap-5">
                <a href="https://github.com/IrvingSamuel" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="GitHub">
                    <i class="ph ph-github-logo text-xl"></i>
                </a>
                <a href="https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="LinkedIn">
                    <i class="ph ph-linkedin-logo text-xl"></i>
                </a>
                <a href="https://instagram.com/irving.sbandeira" target="_blank" rel="noopener" class="text-text-muted hover:text-text-primary transition-colors" aria-label="Instagram">
                    <i class="ph ph-instagram-logo text-xl"></i>
                </a>
                <a href="mailto:sync.irvingsamuel@gmail.com" class="text-text-muted hover:text-text-primary transition-colors" aria-label="Email">
                    <i class="ph ph-envelope-simple text-xl"></i>
                </a>
            </div>

            {{-- Copyright --}}
            <p class="text-text-muted text-xs font-mono">
                &copy; {{ date('Y') }} Irving Samuel. Feito com
                <span class="text-accent-primary">Laravel</span> +
                <span class="text-accent-secondary">Tailwind</span>.
            </p>
        </div>
    </div>
</footer>
