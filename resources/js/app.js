import './bootstrap';

/* ═══════════════════════════════════════════
   SCROLL REVEAL (IntersectionObserver)
   ═══════════════════════════════════════════ */
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            // For skill bars, set their width
            if (entry.target.dataset.width) {
                entry.target.style.width = entry.target.dataset.width;
            }
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.reveal, .reveal-left, .reveal-scale, .skill-bar').forEach(el => {
        revealObserver.observe(el);
    });
});

/* ═══════════════════════════════════════════
   TYPEWRITER EFFECT
   ═══════════════════════════════════════════ */
class Typewriter {
    constructor(element, texts, speed = 80, pause = 2000) {
        this.element = element;
        this.texts = texts;
        this.speed = speed;
        this.pause = pause;
        this.textIndex = 0;
        this.charIndex = 0;
        this.isDeleting = false;
        this.tick();
    }

    tick() {
        const current = this.texts[this.textIndex];
        if (this.isDeleting) {
            this.charIndex--;
        } else {
            this.charIndex++;
        }

        this.element.textContent = current.substring(0, this.charIndex);

        let delay = this.isDeleting ? this.speed / 2 : this.speed;

        if (!this.isDeleting && this.charIndex === current.length) {
            delay = this.pause;
            this.isDeleting = true;
        } else if (this.isDeleting && this.charIndex === 0) {
            this.isDeleting = false;
            this.textIndex = (this.textIndex + 1) % this.texts.length;
            delay = 400;
        }

        setTimeout(() => this.tick(), delay);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('typewriter');
    if (el) {
        new Typewriter(el, [
            'Backend Software Engineer',
            'PHP Laravel Senior Developer',
            'Technology & AI Consultant',
            'Full-Stack Developer',
        ], 70, 2500);
    }
});

/* ═══════════════════════════════════════════
   NAVBAR SCROLL EFFECT
   ═══════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;
        if (currentScroll > 50) {
            navbar.classList.add('glass-strong');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('glass-strong');
            navbar.classList.add('bg-transparent');
        }
        lastScroll = currentScroll;
    }, { passive: true });
});

/* ═══════════════════════════════════════════
   MOBILE MENU TOGGLE
   ═══════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    if (!btn || !menu) return;

    btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        menu.classList.toggle('hidden');
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            btn.classList.remove('active');
            menu.classList.add('hidden');
        });
    });
});

/* ═══════════════════════════════════════════
   ACTIVE NAV LINK ON SCROLL
   ═══════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => link.classList.remove('active'));
                const activeLink = document.querySelector(`.nav-link[href="#${entry.target.id}"]`);
                if (activeLink) activeLink.classList.add('active');
            }
        });
    }, { threshold: 0.3 });

    sections.forEach(section => observer.observe(section));
});
