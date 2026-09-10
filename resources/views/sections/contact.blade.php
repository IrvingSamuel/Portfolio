<section id="contact" class="py-24 px-6">
    <div class="max-w-4xl mx-auto">
        {{-- Section Header --}}
        <div class="reveal text-center mb-16">
            <span class="text-accent-primary font-mono text-sm mb-2 block">// contato</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Vamos <span class="gradient-text">Conversar</span></h2>
            <div class="section-line mx-auto mb-6"></div>
            <p class="text-text-secondary max-w-lg mx-auto">
                Tem um projeto interessante, oportunidade de trabalho ou apenas quer trocar uma ideia sobre tecnologia?
                Ficarei feliz em ouvir de você.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            {{-- Contact Info --}}
            <div class="space-y-6">
                <div class="reveal-left glass rounded-xl p-6" style="transition-delay: 0.05s">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-lg bg-accent-primary/10 flex items-center justify-center shrink-0">
                            <i class="ph ph-envelope-simple text-xl text-accent-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm">Email</h4>
                            <a href="mailto:sync.irvingsamuel@gmail.com" class="text-text-secondary text-sm hover:text-accent-primary transition-colors">
                                sync.irvingsamuel&#64;gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal-left glass rounded-xl p-6" style="transition-delay: 0.1s">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-lg bg-accent-secondary/10 flex items-center justify-center shrink-0">
                            <i class="ph ph-linkedin-logo text-xl text-accent-secondary"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm">LinkedIn</h4>
                            <a href="https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156" target="_blank" rel="noopener" class="text-text-secondary text-sm hover:text-accent-secondary transition-colors">
                                irving-samuel-lima-bandeira
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal-left glass rounded-xl p-6" style="transition-delay: 0.15s">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-lg bg-accent-tertiary/10 flex items-center justify-center shrink-0">
                            <i class="ph ph-github-logo text-xl text-accent-tertiary"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm">GitHub</h4>
                            <a href="https://github.com/IrvingSamuel" target="_blank" rel="noopener" class="text-text-secondary text-sm hover:text-accent-tertiary transition-colors">
                                &#64;IrvingSamuel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal-left glass rounded-xl p-6" style="transition-delay: 0.2s">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-lg bg-pink-500/10 flex items-center justify-center shrink-0">
                            <i class="ph ph-instagram-logo text-xl text-pink-500"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm">Instagram</h4>
                            <a href="https://instagram.com/irving.sbandeira" target="_blank" rel="noopener" class="text-text-secondary text-sm hover:text-pink-500 transition-colors">
                                &#64;irving.sbandeira
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="reveal glass rounded-xl p-8" style="transition-delay: 0.1s">
                @if(session('success'))
                    <div class="mb-5 p-4 rounded-lg bg-green-500/10 border border-green-500/30 text-green-400 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-5 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5 relative">
                    @csrf

                    {{-- Honeypot fields (hidden from humans, filled by bots) --}}
                    <div class="absolute -left-[9999px] top-auto h-0 w-0 overflow-hidden opacity-0" aria-hidden="true">
                        <label for="contact-website">Website</label>
                        <input type="text" id="contact-website" name="website" value="" tabindex="-1" autocomplete="off">
                        <label for="contact-company">Company</label>
                        <input type="text" id="contact-company" name="company" value="" tabindex="-1" autocomplete="off">
                    </div>

                    <div>
                        <label for="contact-name" class="block text-sm font-medium mb-2">Nome</label>
                        <input type="text" id="contact-name" name="name" placeholder="Seu nome" value="{{ old('name') }}" autocomplete="name"
                               class="w-full px-4 py-3 rounded-lg bg-dark-tertiary border border-dark-border text-text-primary placeholder-text-muted text-sm focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary/30 transition-colors">
                    </div>

                    <div>
                        <label for="contact-email" class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" id="contact-email" name="email" placeholder="seu@email.com" value="{{ old('email') }}" autocomplete="email"
                               class="w-full px-4 py-3 rounded-lg bg-dark-tertiary border border-dark-border text-text-primary placeholder-text-muted text-sm focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary/30 transition-colors">
                    </div>

                    <div>
                        <label for="contact-message" class="block text-sm font-medium mb-2">Mensagem</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Sua mensagem..."
                                  class="w-full px-4 py-3 rounded-lg bg-dark-tertiary border border-dark-border text-text-primary placeholder-text-muted text-sm focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary/30 transition-colors resize-none">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                        <i class="ph ph-paper-plane-tilt text-lg"></i>
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
