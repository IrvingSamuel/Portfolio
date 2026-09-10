<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Irving Samuel - Backend Software Engineer | PHP Laravel Senior Developer | Technology & AI Consultant">
    <meta name="author" content="Irving Samuel Lima Bandeira">
    <link rel="canonical" href="https://irving.roadtovalhalla.com.br/">
    @stack('head')

    {{-- Open Graph --}}
    <meta property="og:title" content="Irving Samuel — Senior Backend Engineer">
    <meta property="og:description" content="Backend Software Engineer | PHP Laravel Senior Developer | Technology & AI Consultant">
    <meta property="og:url" content="https://irving.roadtovalhalla.com.br/">
    <meta property="og:image" content="https://irving.roadtovalhalla.com.br/images/og-cover.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Irving Samuel — Senior Backend Engineer">
    <meta name="twitter:description" content="Backend Software Engineer | PHP Laravel Senior Developer | Technology & AI Consultant">
    <meta name="twitter:image" content="https://irving.roadtovalhalla.com.br/images/og-cover.png">

    <title>Irving Samuel — Senior Backend Engineer</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => 'Irving Samuel Lima Bandeira',
        'url' => 'https://irving.roadtovalhalla.com.br/',
        'image' => 'https://irving.roadtovalhalla.com.br/images/og-cover.png',
        'jobTitle' => 'Senior Backend Engineer',
        'description' => 'Backend Software Engineer, PHP Laravel Senior Developer and Technology & AI Consultant.',
        'email' => 'mailto:sync.irvingsamuel@gmail.com',
        'worksFor' => [
            '@type' => 'Organization',
            'name' => 'Next Opinion',
        ],
        'alumniOf' => [
            [
                '@type' => 'CollegeOrUniversity',
                'name' => 'UNIMA — Centro Universitário de Maceió (Grupo Afya)',
            ],
            [
                '@type' => 'CollegeOrUniversity',
                'name' => 'UFAL — Universidade Federal de Alagoas',
            ],
            [
                '@type' => 'EducationalOrganization',
                'name' => 'IFAL — Instituto Federal de Alagoas',
            ],
        ],
        'sameAs' => [
            'https://github.com/IrvingSamuel',
            'https://linkedin.com/in/irving-samuel-lima-bandeira-1733b5156',
            'https://instagram.com/irving.sbandeira',
        ],
        'knowsAbout' => ['PHP', 'Laravel', 'Node.js', 'Artificial Intelligence', 'Software Engineering'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
</head>
<body class="bg-dark-primary text-text-primary font-sans antialiased overflow-x-hidden">

    {{-- Background dot grid --}}
    <div class="fixed inset-0 bg-dot-grid opacity-30 pointer-events-none z-0"></div>

    {{-- Ambient glow blobs --}}
    <div class="fixed top-0 left-1/4 w-96 h-96 bg-accent-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-0 right-1/4 w-96 h-96 bg-accent-secondary/5 rounded-full blur-3xl pointer-events-none"></div>

    {{-- Content --}}
    <div class="relative z-10">
        @unless(request()->routeIs('vagas.*'))
            @include('sections.navbar')
        @endunless

        <main>
            @yield('content')
        </main>

        @unless(request()->routeIs('vagas.*'))
            @include('sections.footer')
        @endunless
    </div>

</body>
</html>
