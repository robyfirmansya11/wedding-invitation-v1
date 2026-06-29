<section
    x-data="{ visible: false }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
    class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow text-center mb-3">Our Journey</p>
    <h2 class="font-display text-3xl text-ink text-center mb-2">Cerita Kami</h2>

    <div class="section-divider mt-6 mb-14">
        <span class="section-divider-dot"></span>
    </div>

    <div class="max-w-xl mx-auto space-y-12">
        <div class="border-l border-gold pl-6">
            <p class="eyebrow mb-2">Januari 2020</p>
            <h3 class="font-display text-xl text-ink mb-2">Pertama Bertemu</h3>
            <p class="text-taupe text-sm leading-relaxed">
                Ceritakan momen pertama kalian bertemu di sini. Bisa singkat,
                yang penting berkesan.
            </p>
        </div>

        <div class="border-l border-gold pl-6">
            <p class="eyebrow mb-2">Maret 2026</p>
            <h3 class="font-display text-xl text-ink mb-2">Lamaran</h3>
            <p class="text-taupe text-sm leading-relaxed">
                Ceritakan momen lamaran di sini.
            </p>
        </div>

        <div class="border-l border-gold pl-6">
            <p class="eyebrow mb-2">Desember 2026</p>
            <h3 class="font-display text-xl text-ink mb-2">Menuju Pernikahan</h3>
            <p class="text-taupe text-sm leading-relaxed">
                Ceritakan harapan kalian menuju hari pernikahan di sini.
            </p>
        </div>
    </div>
</section>
