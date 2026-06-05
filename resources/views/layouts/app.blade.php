@php
    $nav = [
        'home' => ['label' => 'Home', 'route' => 'home'],
        'projects' => ['label' => 'Projects', 'route' => 'projects'],
        'skills' => ['label' => 'Skills', 'route' => 'skills'],
        'contact' => ['label' => 'Contact', 'route' => 'contact'],
    ];
    $socials = config('portfolio.socials');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Akujuobi Victor Chibuike professional frontend and full-stack engineering portfolio.">
    <title>{{ $title ?? 'VICTOR.DEV' }} | VICTOR.DEV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-on-surface antialiased selection:bg-primary-container/40" data-contact-email="{{ config('mail.from.address', 'hello@example.com') }}">
    <div class="fixed inset-0 -z-10 bg-[radial-gradient(circle_at_20%_20%,rgba(86,141,255,0.16),transparent_30%),radial-gradient(circle_at_80%_0%,rgba(185,200,222,0.08),transparent_28%),#0c1324]"></div>

    <header class="fixed top-0 z-50 w-full border-b border-white/10 bg-surface/75 backdrop-blur-xl">
        <nav class="mx-auto flex h-16 max-w-7xl items-center justify-between px-5 md:px-6" aria-label="Primary navigation">
            <a href="{{ route('home') }}" class="font-display text-xl font-black text-primary">VICTOR.DEV</a>
            <div class="hidden items-center gap-6 md:flex">
                @foreach ($nav as $key => $item)
                    <a href="{{ route($item['route']) }}" class="{{ ($page ?? 'home') === $key ? 'text-primary border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary' }} pb-1 text-sm font-semibold transition-colors">{{ $item['label'] }}</a>
                @endforeach
            </div>
            <div class="flex items-center gap-2">
                <div class="hidden items-center gap-2 lg:flex">
                    @foreach ($socials as $icon => $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noreferrer" class="grid h-9 w-9 place-items-center rounded-lg border border-white/10 bg-white/5 text-on-surface-variant transition hover:border-primary/50 hover:text-primary" aria-label="{{ $social['label'] }}">
                            @include('partials.social-icon', ['name' => $icon])
                        </a>
                    @endforeach
                </div>
                <button class="grid h-10 w-10 place-items-center rounded-lg border border-white/10 bg-white/5 text-on-surface-variant transition hover:text-primary" type="button" data-theme-toggle aria-label="Toggle theme">
                    <span data-theme-icon>DM</span>
                </button>
                <a href="{{ route('cv.download') }}" class="hidden rounded-lg bg-primary-container px-4 py-2 text-sm font-bold text-on-primary shadow-[0_0_20px_rgba(86,141,255,0.24)] transition hover:shadow-[0_0_28px_rgba(86,141,255,0.44)] sm:inline-flex">Download CV</a>
                <button class="grid h-10 w-10 place-items-center rounded-lg border border-white/10 bg-white/5 md:hidden" type="button" data-nav-toggle aria-label="Open menu" aria-expanded="false">
                    <span class="h-0.5 w-5 bg-on-surface"></span>
                </button>
            </div>
        </nav>
        <div class="hidden border-t border-white/10 bg-surface px-5 py-4 md:hidden" data-mobile-nav>
            <div class="grid gap-2">
                @foreach ($nav as $key => $item)
                    <a href="{{ route($item['route']) }}" class="{{ ($page ?? 'home') === $key ? 'bg-primary-container text-on-primary' : 'bg-white/5 text-on-surface-variant' }} rounded-lg px-4 py-3 text-sm font-bold">{{ $item['label'] }}</a>
                @endforeach
            </div>
        </div>
    </header>

    <main class="mx-auto min-h-screen max-w-7xl px-5 pb-24 pt-28 md:px-6 md:pt-32">
        @yield('content')
    </main>

    <footer class="border-t border-white/10 bg-surface py-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-5 text-center md:flex-row md:px-6 md:text-left">
            <p class="font-display font-black text-white">VICTOR.DEV</p>
            <p class="text-sm text-on-surface-variant">&copy; 2024 Akujuobi Victor Chibuike. Built with Laravel & Tailwind.</p>
            <div class="flex flex-wrap justify-center gap-3 text-sm font-bold text-on-surface-variant md:justify-end">
                @foreach ($socials as $icon => $social)
                    <a href="{{ $social['url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-lg border border-white/10 bg-white/5 px-3 py-2 transition hover:text-primary">
                        @include('partials.social-icon', ['name' => $icon])
                        <span>{{ $social['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </footer>
</body>
</html>
