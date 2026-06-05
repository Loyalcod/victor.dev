@extends('layouts.app')

@section('content')
    <section class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
        <div>
            <p class="font-mono text-xs font-bold uppercase text-primary">Available for work</p>
            <h1 class="mt-4 max-w-3xl font-display text-5xl font-black leading-[1.03] text-white md:text-7xl">Akujuobi Victor Chibuike</h1>
            <p class="mt-4 font-display text-2xl font-black text-primary md:text-3xl">Web / Mobile Dev</p>
            <div class="mt-5 flex flex-wrap gap-3" aria-label="Social profiles">
                @foreach (config('portfolio.socials') as $icon => $social)
                    <a href="{{ $social['url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-bold text-on-surface-variant transition hover:border-primary/50 hover:text-primary">
                        @include('partials.social-icon', ['name' => $icon])
                        <span>{{ $social['label'] }}</span>
                    </a>
                @endforeach
            </div>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-on-surface-variant">Senior Frontend & Full-stack Engineer building scalable interfaces, robust backend flows, and sharp digital products.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('projects') }}" class="rounded-lg bg-primary-container px-6 py-3 text-center font-bold text-on-primary">View Projects</a>
                <a href="{{ route('contact') }}" class="rounded-lg border border-outline-variant px-6 py-3 text-center font-bold text-on-surface transition hover:bg-white/5">Send Message</a>
            </div>
        </div>
        <div class="glass-card relative overflow-hidden rounded-xl p-4">
            <div class="aspect-4/5 overflow-hidden rounded-lg bg-surface-container-low">
                <img src="{{ config('portfolio.images.portrait') }}" alt="Portrait of Victor" class="h-full w-full object-cover grayscale contrast-125">
            </div>
            <div class="absolute bottom-8 left-8 max-w-65 rounded-lg border border-white/10 bg-surface/80 p-4 backdrop-blur">
                <p class="font-mono text-xs text-primary">system.status</p>
                <p class="mt-1 text-sm text-on-surface-variant">Web Dev.  Reactjs, Nextjs, React Native, Laravel, APIs, performance.</p>
            </div>
        </div>
    </section>

    <section class="mt-24 grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
        <div>
            <p class="font-mono text-xs font-bold uppercase text-primary">The focus</p>
            <h2 class="mt-3 font-display text-3xl font-black text-white md:text-5xl">Architecting scalable solutions with precision engineering.</h2>
            <p class="mt-5 leading-8 text-on-surface-variant">I bridge visual polish with reliable implementation, from responsive UI systems to backend integrations that stay stable in production.</p>
            <div class="mt-8 grid grid-cols-2 gap-4">
                <div class="glass-card rounded-xl p-5"><strong class="text-3xl text-primary">60+</strong><span class="mt-1 block text-sm text-on-surface-variant">Reusable UI units</span></div>
                <div class="glass-card rounded-xl p-5"><strong class="text-3xl text-primary">99.9%</strong><span class="mt-1 block text-sm text-on-surface-variant">Uptime-minded delivery</span></div>
            </div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2">
            @foreach (['Frontend' => 'React, Blade, Tailwind, Next, Laravel', 'Backend' => 'Node Express Js, Laravel, APIs, MySQL', 'Mobile' => 'React Native, Expo, Responsive flows', 'DevOps' => 'Deployments, fixes'] as $name => $copy)
                <article class="glass-card rounded-xl p-6">
                    <p class="font-mono text-xs text-primary">{{ $name }}</p>
                    <h3 class="mt-6 text-xl font-bold text-white">{{ $copy }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-24">
        <div class="mb-8 flex items-end justify-between gap-4">
            <div>
                <p class="font-mono text-xs font-bold uppercase text-primary">Featured</p>
                <h2 class="mt-3 font-display text-3xl font-black text-white">Selected Works</h2>
            </div>
            <a href="{{ route('projects') }}" class="text-sm font-bold text-primary">View archive</a>
        </div>
        <div class="grid gap-6 md:grid-cols-2">
            <article class="project-tile">
                <img src="{{ config('portfolio.images.mabimoviesDesktop') }}" alt="Mabi Movies desktop website preview">
                <div>
                    <p>Next.js / Tailwind CSS</p>
                    <h3>Mabi Movies</h3>
                    <span>A responsive movie platform built for creators and viewers, with a polished web desktop experience.</span>
                    <a href="https://mabimovies.com" target="_blank" rel="noreferrer">Visit mabimovies.com</a>
                </div>
            </article>
            <article class="project-tile">
                <img src="{{ config('portfolio.images.citizensNewsDesktop') }}" alt="Citizens News desktop website preview">
                <div>
                    <p>PHP / Bootstrap</p>
                    <h3>Citizens News CN</h3>
                    <span>A mobile-friendly news platform built with PHP and standard Bootstrap for fast editorial publishing.</span>
                    <a href="https://citizensnewscn.com" target="_blank" rel="noreferrer">Visit citizensnewscn.com</a>
                </div>
            </article>
        </div>
    </section>
@endsection
