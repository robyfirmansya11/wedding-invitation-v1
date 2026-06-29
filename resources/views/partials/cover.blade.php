<section
    x-show="!invitationOpened"
    x-transition.opacity.duration.700ms
    class="h-screen flex flex-col items-center justify-center text-center px-6 fixed inset-0 z-50"
>
    <p class="eyebrow mb-6">The Wedding Of</p>

    <h1 class="font-display text-5xl md:text-6xl text-ink mb-4" style="font-weight: 500;">
        Roby Firmansyah <span class="italic text-gold">&</span> Ginda Septiani
    </h1>

    <div class="section-divider mt-2 mb-6">
        <span class="section-divider-dot"></span>
    </div>

    <p class="text-taupe tracking-wide mb-10">Sabtu, 20 Desember 2026</p>

    @if (!empty($guestName))
        <div class="mb-10">
            <p class="eyebrow mb-2">Kepada Bapak/Ibu/Saudara/i</p>
            <p class="font-display text-2xl text-ink">{{ $guestName }}</p>
        </div>
    @endif

   <button
    @click="
        invitationOpened = true;
        musicPlaying = true;
        $refs.bgMusic.play()
    "
    class="border border-gold text-ink px-10 py-3 text-sm tracking-widest uppercase hover:bg-gold hover:text-white hover:scale-[1.02] active:scale-[0.98] transition-all duration-300"
>
    Buka Undangan
</button>
</section>
