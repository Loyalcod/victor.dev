@extends('layouts.app')

@section('content')
    <header class="mb-14">
        <p class="font-mono text-xs font-bold uppercase text-primary">Portfolio</p>
        <h1 class="mt-3 font-display text-5xl font-black text-white md:text-7xl">Selected Works</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-on-surface-variant">A focused collection of production websites, spanning streaming, news publishing, ecommerce, and building-material storefronts.</p>
    </header>

    <section class="grid gap-6 md:grid-cols-12">
        <article class="glass-card overflow-hidden rounded-xl md:col-span-8">
            <img src="{{ config('portfolio.images.mabimoviesDesktop') }}" alt="Mabi Movies desktop website preview" class="aspect-video w-full object-cover">
            <div class="p-6">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                    <h2 class="font-display text-3xl font-black text-white">Mabi Movies</h2>
                    <div class="flex flex-wrap gap-2"><span class="tag">Next.js</span><span class="tag">Tailwind CSS</span><span class="tag">Responsive</span></div>
                </div>
                <p class="mt-4 leading-7 text-on-surface-variant">An online streaming platform built with Next.js and Tailwind CSS, designed for responsive viewing across desktop and mobile screens.</p>
                <a href="https://mabimovies.com" target="_blank" rel="noreferrer" class="mt-5 inline-flex font-bold text-primary">Visit mabimovies.com</a>
            </div>
        </article>

        <article class="glass-card overflow-hidden rounded-xl md:col-span-4">
            <img src="{{ config('portfolio.images.citizensNewsMobile') }}" alt="Citizens 360 More Talk mobile website preview" class="aspect-4/5 w-full bg-surface-container-low object-contain">
            <div class="p-6">
                <h2 class="font-display text-3xl font-black text-white">Citizens 360 More Talk</h2>
                <p class="mt-4 text-on-surface-variant">A news publishing website presented here in its mobile screen layout, optimized for fast story browsing.</p>
                <div class="mt-5 flex flex-wrap gap-2"><span class="tag">PHP</span><span class="tag">Bootstrap</span><span class="tag">News</span></div>
                <a href="https://citizensnewscn.com" target="_blank" rel="noreferrer" class="mt-5 inline-flex font-bold text-primary">Visit citizensnewscn.com</a>
            </div>
        </article>

        <article class="glass-card overflow-hidden rounded-xl md:col-span-12 md:grid md:grid-cols-2">
            <img src="{{ config('portfolio.images.uvicolDesktop') }}" alt="Uvicol Store ecommerce website preview" class="project-wide-image">
            <div class="flex flex-col justify-center p-6 md:p-10">
                <p class="font-mono text-xs font-bold uppercase text-primary">Multi Vendor Ecommerce</p>
                <h2 class="mt-3 font-display text-3xl font-black text-white">Uvicol Store</h2>
                <p class="mt-5 text-lg leading-8 text-on-surface-variant">A multi-vendor ecommerce website for product discovery, vendor selling, cart flows, and customer purchasing.</p>
                <div class="mt-6 flex flex-wrap gap-2"><span class="tag">Ecommerce</span><span class="tag">Marketplace</span><span class="tag">Vendors</span></div>
                <a href="https://uvicol.com/" target="_blank" rel="noreferrer" class="mt-6 inline-flex font-bold text-primary">Visit uvicol.com</a>
            </div>
        </article>

        <article class="glass-card overflow-hidden rounded-xl md:col-span-12 md:grid md:grid-cols-2">
            <img src="{{ config('portfolio.images.uniqueHomeDoorsDesktop') }}" alt="Unique Home Doors ecommerce website preview" class="project-wide-image">
            <div class="flex flex-col justify-center p-6 md:p-10">
                <p class="font-mono text-xs font-bold uppercase text-primary">Building Materials Storefront</p>
                <h2 class="mt-3 font-display text-3xl font-black text-white">Unique Home Doors</h2>
                <p class="mt-5 text-lg leading-8 text-on-surface-variant">A storefront for interior and exterior doors, product categories, order flows, and building-material customer inquiries.</p>
                <div class="mt-6 flex flex-wrap gap-2"><span class="tag">Storefront</span><span class="tag">Catalog</span><span class="tag">Building Materials</span></div>
                <a href="https://uniquebuildingmaterials.com/" target="_blank" rel="noreferrer" class="mt-6 inline-flex font-bold text-primary">Visit uniquebuildingmaterials.com</a>
            </div>
        </article>
    </section>
@endsection
