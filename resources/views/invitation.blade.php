<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - {{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ invitationOpened: false, musicPlaying: false, pageLoaded: false }"
    x-init="
        window.addEventListener('load', () => {
            setTimeout(() => pageLoaded = true, 1000)
        })
    "
    :class="invitationOpened ? '' : 'overflow-hidden h-screen'"
    class="bg-cream text-ink font-sans relative"
>
<!-- Ornamen latar belakang -->
<div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <!-- Pojok kiri atas -->
<svg class="absolute top-0 left-0 w-40 h-40 md:w-56 md:h-56" style="opacity: 0.3;" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 10C40 30 50 70 30 110C60 100 90 120 90 160" stroke="#C9A87C" stroke-width="3"/>
    <path d="M20 20C45 25 65 45 60 75" stroke="#C9A87C" stroke-width="3"/>
    <circle cx="30" cy="30" r="5" fill="#C9A87C"/>
    <path d="M45 50C55 55 58 65 53 72" stroke="#C9A87C" stroke-width="2"/>
</svg>

    <!-- Pojok kanan atas -->
    <svg class="absolute -top-6 -right-6 w-40 h-40 md:w-56 md:h-56 opacity-30" style="transform: scaleX(-1);" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 10C40 30 50 70 30 110C60 100 90 120 90 160" stroke="#C9A87C" stroke-width="1.5"/>
        <path d="M20 20C45 25 65 45 60 75" stroke="#C9A87C" stroke-width="1.5"/>
        <circle cx="30" cy="30" r="3" fill="#C9A87C"/>
        <path d="M45 50C55 55 58 65 53 72" stroke="#C9A87C" stroke-width="1"/>
    </svg>

    <!-- Pojok kiri bawah -->
    <svg class="absolute -bottom-6 -left-6 w-40 h-40 md:w-56 md:h-56 opacity-30" style="transform: scaleY(-1);" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 10C40 30 50 70 30 110C60 100 90 120 90 160" stroke="#C9A87C" stroke-width="1.5"/>
        <path d="M20 20C45 25 65 45 60 75" stroke="#C9A87C" stroke-width="1.5"/>
        <circle cx="30" cy="30" r="3" fill="#C9A87C"/>
        <path d="M45 50C55 55 58 65 53 72" stroke="#C9A87C" stroke-width="1"/>
    </svg>

    <!-- Pojok kanan bawah -->
    <svg class="absolute -bottom-6 -right-6 w-40 h-40 md:w-56 md:h-56 opacity-30" style="transform: scale(-1, -1);" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 10C40 30 50 70 30 110C60 100 90 120 90 160" stroke="#C9A87C" stroke-width="1.5"/>
        <path d="M20 20C45 25 65 45 60 75" stroke="#C9A87C" stroke-width="1.5"/>
        <circle cx="30" cy="30" r="3" fill="#C9A87C"/>
        <path d="M45 50C55 55 58 65 53 72" stroke="#C9A87C" stroke-width="1"/>
    </svg>
</div>

    <!-- Preloader -->
    <div
        x-show="!pageLoaded"
        x-transition.opacity.duration.500ms
        class="fixed inset-0 z-[60] bg-cream flex flex-col items-center justify-center"
    >
        <p class="font-display text-3xl text-ink mb-4" style="font-weight: 500;">
            R <span class="text-gold italic">&</span> G
        </p>
        <div class="w-10 h-px bg-gold animate-pulse"></div>
    </div>

    <audio x-ref="bgMusic" src="{{ asset('audio/wedding-song.mp3') }}" loop></audio>

    @include('partials.cover', ['guestName' => $guestName])

   <button
    x-show="invitationOpened"
    x-transition
    @click="
        musicPlaying = !musicPlaying;
        musicPlaying ? $refs.bgMusic.play() : $refs.bgMusic.pause()
    "
    :class="musicPlaying ? 'animate-pulse' : ''"
    class="fixed bottom-6 right-6 z-50 bg-white border border-gold text-ink w-12 h-12 rounded-full shadow-md flex items-center justify-center hover:bg-gold hover:text-white hover:scale-110 active:scale-95 transition-all duration-300"
>
    <span x-show="musicPlaying" x-cloak>⏸</span>
    <span x-show="!musicPlaying" x-cloak>▶</span>
</button>

    <div x-show="invitationOpened" x-transition.opacity.duration.700ms x-cloak>
        @include('partials.couple')
        @include('partials.event')
        @include('partials.countdown')
        @include('partials.story')
        @include('partials.gallery')
        @include('partials.gift')
        @include('partials.rsvp')
        @include('partials.wishes')
        @include('partials.footer')
    </div>

</body>
</html>
