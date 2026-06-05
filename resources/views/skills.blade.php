@extends('layouts.app')

@section('content')
    <header class="mb-12">
        <p class="font-mono text-xs font-bold uppercase text-primary">Skills & CV</p>
        <h1 class="mt-3 font-display text-5xl font-black text-white md:text-7xl">Frontend Specialization</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-on-surface-variant">A focused showcase of engineering capabilities in modern frontend architecture, backend support, mobile-first UX, and production troubleshooting.</p>
    </header>

    <section class="grid gap-6 lg:grid-cols-12">
        <article class="glass-card rounded-xl p-6 lg:col-span-8">
            <h2 class="font-display text-2xl font-black text-white">Frontend Core</h2>
            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                @foreach (['React / Next.js', 'Laravel Blade', 'Tailwind CSS', 'TypeScript', 'Accessibility', 'Reusable UI Systems'] as $skill)
                    <div class="flex items-center justify-between border-b border-white/10 pb-3"><span class="font-mono text-xs text-on-surface-variant">{{ $skill }}</span><span class="h-1 w-24 rounded-full bg-primary-container"></span></div>
                @endforeach
            </div>
        </article>

        <article class="glass-card rounded-xl p-6 lg:col-span-4">
            <h2 class="font-display text-2xl font-black text-white">Mobile</h2>
            <p class="mt-4 leading-7 text-on-surface-variant">Mobile-first interfaces, responsive breakpoints, and practical interaction patterns.</p>
            <div class="mt-5 flex flex-wrap gap-2"><span class="tag">Native feel</span><span class="tag">Forms</span><span class="tag">Menus</span></div>
        </article>

        <article class="glass-card rounded-xl p-6 lg:col-span-5">
            <h2 class="font-display text-2xl font-black text-white">Backend & Infrastructure</h2>
            <p class="mt-4 leading-7 text-on-surface-variant">Laravel APIs, authentication, database modeling, deployment fixes, and integrations.</p>
        </article>

        <article class="glass-card rounded-xl p-6 lg:col-span-7">
            <h2 class="font-display text-2xl font-black text-white">Frontend Architecture</h2>
            <div class="mt-5 grid gap-3 sm:grid-cols-3">
                @foreach (['Component Systems', 'State Management', 'Performance Budgets', 'API Integration', 'Design Tokens', 'Testing Strategy'] as $item)
                    <span class="rounded-lg bg-surface-container px-4 py-3 text-sm font-bold text-on-surface-variant">{{ $item }}</span>
                @endforeach
            </div>
        </article>
    </section>

    <section class="mt-16">
        <h2 class="font-display text-3xl font-black text-white">Experience</h2>
        <div class="mt-6 grid gap-4">
            @foreach ([['Frontend Developer', 'Built production interfaces for Laravel and React products.'], ['Full-stack Engineer', 'Resolved backend delivery bugs and improved contact/email flows.']] as $experience)
                <article class="glass-card rounded-xl p-5">
                    <p class="font-bold text-white">{{ $experience[0] }}</p>
                    <p class="mt-2 text-on-surface-variant">{{ $experience[1] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-16 grid gap-6 lg:grid-cols-2">
        <div>
            <h2 class="font-display text-3xl font-black text-white">Curriculum Vitae</h2>
            <p class="mt-4 leading-8 text-on-surface-variant">Download my full professional resume for a detailed look at my technical background, project work, and delivery experience.</p>
            <a href="{{ route('cv.download') }}" class="mt-6 inline-flex rounded-lg bg-primary-container px-6 py-3 font-bold text-on-primary">Download CV</a>
        </div>
        <div class="code-terminal rounded-xl p-6">
            <div class="mb-5 flex gap-2"><span class="h-3 w-3 rounded-full bg-[#ff5f56]"></span><span class="h-3 w-3 rounded-full bg-[#ffbd2e]"></span><span class="h-3 w-3 rounded-full bg-[#27c93f]"></span></div>
            <div class="cv-preview-window">
                <iframe title="CV preview" src="{{ route('cv.preview') }}#toolbar=0&navpanes=0&scrollbar=0&view=FitH"></iframe>
            </div>
        </div>
    </section>
@endsection
