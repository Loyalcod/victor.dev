@extends('layouts.app')

@section('content')
    <section class="grid gap-10 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <p class="font-mono text-xs font-bold uppercase text-primary">Contact</p>
            <h1 class="mt-3 font-display text-5xl font-black text-white md:text-7xl">Get in Touch</h1>
            <p class="mt-6 text-lg leading-8 text-on-surface-variant">Whether you have a technical inquiry, a project proposal, or just want to discuss the future of frontend engineering, my inbox is always open.</p>
            <div class="mt-8 grid gap-4">
                <div class="glass-card rounded-xl p-5"><p class="font-mono text-xs uppercase text-on-surface-variant">Email Address</p><a class="mt-2 block font-bold text-primary" href="mailto:victorakujuobichibuike@gmail.com">victorakujuobichibuike@gmail.com</a></div>
                <div class="glass-card rounded-xl p-5"><p class="font-mono text-xs uppercase text-on-surface-variant">Location</p><p class="mt-2 font-bold text-white">Lagos, Nigeria</p></div>
            </div>
        </div>
        <div class="lg:col-span-7">
            <form class="glass-card grid gap-5 rounded-xl p-6 md:p-10" method="POST" action="{{ route('contact.send') }}">
                @csrf
                @if (session('status'))
                    <div class="rounded-lg border border-primary/30 bg-primary/10 px-4 py-3 text-sm font-bold text-primary">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="rounded-lg border border-red-400/30 bg-red-400/10 px-4 py-3 text-sm font-bold text-red-200">
                        {{ $errors->first('mail') ?: 'Please check the form and try again.' }}
                    </div>
                @endif
                <div class="grid gap-5 sm:grid-cols-2">
                    <label class="grid gap-2 text-sm font-bold text-on-surface-variant">Full Name<input name="name" value="{{ old('name') }}" required class="form-input" type="text"></label>
                    <label class="grid gap-2 text-sm font-bold text-on-surface-variant">Email Address<input name="email" value="{{ old('email') }}" required class="form-input" type="email"></label>
                </div>
                <label class="grid gap-2 text-sm font-bold text-on-surface-variant">Subject<input name="subject" class="form-input" type="text" value="{{ old('subject', 'Frontend Consultation / Project Inquiry') }}"></label>
                <label class="grid gap-2 text-sm font-bold text-on-surface-variant">Message<textarea name="message" required rows="7" class="form-input resize-y">{{ old('message') }}</textarea></label>
                <button class="rounded-lg bg-primary-container px-6 py-3 font-bold text-on-primary" type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <section class="mt-16 glass-card rounded-xl p-8 text-center">
        <h2 class="font-display text-3xl font-black text-white">Let's build something remarkable.</h2>
        <p class="mx-auto mt-4 max-w-xl text-on-surface-variant">Available for select freelance opportunities and technical consultations.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            @foreach (config('portfolio.socials') as $icon => $social)
                <a href="{{ $social['url'] }}" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-lg border border-white/10 bg-white/5 px-4 py-3 font-bold text-on-surface-variant transition hover:text-primary">
                    @include('partials.social-icon', ['name' => $icon])
                    <span>{{ $social['label'] }}</span>
                </a>
            @endforeach
        </div>
    </section>
@endsection
