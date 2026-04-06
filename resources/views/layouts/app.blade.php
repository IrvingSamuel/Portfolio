<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Irving Samuel - Backend Software Engineer | PHP Laravel Senior Developer | Technology & AI Consultant">
    <meta name="keywords" content="Irving Samuel, Backend Developer, PHP, Laravel, Software Engineer, Full-Stack">
    <meta name="author" content="Irving Samuel Lima Bandeira">

    {{-- Open Graph --}}
    <meta property="og:title" content="Irving Samuel — Senior Backend Engineer">
    <meta property="og:description" content="Backend Software Engineer | PHP Laravel Senior Developer | Technology & AI Consultant">
    <meta property="og:image" content="https://avatars.githubusercontent.com/u/39782826">
    <meta property="og:type" content="website">

    <title>Irving Samuel — Senior Backend Engineer</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Phosphor Icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-dark-primary text-text-primary font-sans antialiased overflow-x-hidden">

    {{-- Background dot grid --}}
    <div class="fixed inset-0 bg-dot-grid opacity-30 pointer-events-none z-0"></div>

    {{-- Ambient glow blobs --}}
    <div class="fixed top-0 left-1/4 w-96 h-96 bg-accent-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-0 right-1/4 w-96 h-96 bg-accent-secondary/5 rounded-full blur-3xl pointer-events-none"></div>

    {{-- Content --}}
    <div class="relative z-10">
        @include('sections.navbar')

        <main>
            @yield('content')
        </main>

        @include('sections.footer')
    </div>

    @livewireScripts
</body>
</html>
