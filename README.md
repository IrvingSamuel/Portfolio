<div align="center">

# ⚡ Irving Samuel — Portfolio

**Senior Backend Engineer · PHP/Laravel · Technology & AI Consultant**

[![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Livewire](https://img.shields.io/badge/Livewire-4-FB70A9?style=flat-square&logo=livewire&logoColor=white)](https://livewire.laravel.com)
[![Vite](https://img.shields.io/badge/Vite-8-646CFF?style=flat-square&logo=vite&logoColor=white)](https://vite.dev)
[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)

<br>

<img src="https://avatars.githubusercontent.com/u/39782826" width="120" style="border-radius: 50%;" alt="Irving Samuel">

<br>

[🌐 Live Demo](https://irvingsamuel.dev) · [💼 LinkedIn](https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156) · [📧 Contato](mailto:sync.irvingsamuel@gmail.com)

</div>

---

## 📋 Sobre

Portfolio pessoal construído com **Laravel 13**, **Tailwind CSS 4** e **Livewire 4**. Design moderno dark-theme com animações suaves, efeitos glassmorphism e dados do GitHub integrados em tempo real via API.

## ✨ Features

- 🎨 **Dark theme** com glassmorphism, gradients animados e dot-grid background
- 📊 **GitHub Stats em tempo real** — repos, stars, streaks e linguagens via API pública
- 🔥 **Streak tracker** — contribuições totais, streak atual e maior streak (via demolab)
- ⌨️ **Typewriter effect** na hero section
- 📱 **Totalmente responsivo** — mobile-first com menu hamburguer
- 🎯 **Scroll reveal** com Intersection Observer
- 🃏 **Card tilt 3D** nos cards de habilidades
- ⚡ **Cache inteligente** — dados do GitHub cacheados por 1 hora (file driver)

## 🛠️ Tech Stack

| Camada | Tecnologias |
|--------|------------|
| **Backend** | PHP 8.3, Laravel 13, Livewire 4 |
| **Frontend** | Tailwind CSS 4, Alpine.js, Blade |
| **Build** | Vite 8, Laravel Vite Plugin |
| **Icons** | Phosphor Icons |
| **APIs** | GitHub REST API, Streak Stats API |

## 📁 Estrutura

```
├── app/Http/Controllers/
│   └── GitHubController.php      # API de stats do GitHub com cache
├── resources/
│   ├── css/app.css                # Custom CSS (glassmorphism, animations)
│   ├── js/app.js                  # Typewriter, scroll reveal, card tilt
│   └── views/
│       ├── layouts/app.blade.php  # Layout principal
│       ├── welcome.blade.php      # Página única (SPA-like)
│       └── sections/              # Seções modulares
│           ├── hero.blade.php
│           ├── about.blade.php
│           ├── skills.blade.php
│           ├── projects.blade.php
│           ├── experience.blade.php
│           ├── education.blade.php
│           ├── github.blade.php   # Stats dinâmicos via Alpine.js
│           ├── contact.blade.php
│           └── navbar.blade.php
├── routes/web.php                 # Rotas: / e /api/github-stats
└── public/images/                 # Assets estáticos
```

## 🚀 Instalação

```bash
# Clonar o repositório
git clone https://github.com/IrvingSamuel/Portfolio.git
cd Portfolio

# Instalar dependências
composer install
npm install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Build dos assets
npm run build

# Iniciar o servidor
php artisan serve
```

Acesse **http://localhost:8000**

## ⚙️ Desenvolvimento

```bash
# Modo dev com hot reload
npm run dev

# Em outro terminal
php artisan serve
```

## 📊 API Endpoints

| Rota | Método | Descrição |
|------|--------|-----------|
| `/` | GET | Portfolio (página única) |
| `/api/github-stats` | GET | Dados do GitHub em tempo real (cached 1h) |

<details>
<summary>Exemplo de resposta <code>/api/github-stats</code></summary>

```json
{
  "public_repos": 28,
  "followers": 14,
  "following": 8,
  "total_stars": 4,
  "total_forks": 1,
  "recent_commits": 0,
  "top_languages": [
    { "name": "HTML", "percentage": 39.6 },
    { "name": "JavaScript", "percentage": 25.0 },
    { "name": "Python", "percentage": 23.3 }
  ],
  "total_contributions": 569,
  "current_streak": 2,
  "longest_streak": 10,
  "updated_at": "2026-04-06T..."
}
```

</details>

## 📄 Licença

Este projeto está sob a licença [MIT](https://opensource.org/licenses/MIT).

---

<div align="center">

Feito com ☕ por **Irving Samuel**

</div>
