<section
    x-data="{ visible: false }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
     class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow mb-3">Save The Date</p>
    <h2 class="font-display text-3xl text-ink mb-2">Acara Pernikahan</h2>

    <div class="section-divider mt-6 mb-14">
        <span class="section-divider-dot"></span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-2xl mx-auto">
        <!-- Akad -->
        <div class="bg-white border border-cream-dark p-8">
            <h3 class="font-display text-xl text-ink mb-4">Akad Nikah</h3>
            <p class="text-taupe text-sm leading-relaxed">Sabtu, 20 Desember 2026</p>
            <p class="text-taupe text-sm leading-relaxed">08.00 - 10.00 WIB</p>
            <div class="w-8 h-px bg-gold my-4 mx-auto"></div>
            <p class="text-taupe text-sm">Gedung Serbaguna ABC, Jakarta</p>
        </div>

        <!-- Resepsi -->
        <div class="bg-white border border-cream-dark p-8">
            <h3 class="font-display text-xl text-ink mb-4">Resepsi</h3>
            <p class="text-taupe text-sm leading-relaxed">Sabtu, 20 Desember 2026</p>
            <p class="text-taupe text-sm leading-relaxed">11.00 - 14.00 WIB</p>
            <div class="w-8 h-px bg-gold my-4 mx-auto"></div>
            <p class="text-taupe text-sm">Gedung Serbaguna ABC, Jakarta</p>
        </div>
    </div>

    <!-- Google Maps embed -->
    <div class="mt-14 max-w-2xl mx-auto border border-cream-dark p-2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22968.111695475487!2d106.98501711083986!3d-6.300850899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991e50921277b%3A0x2e6c137158ca4142!2sCluster%20Mustika%20Village%20gh!5e1!3m2!1sid!2sid!4v1782698609518!5m2!1sid!2sid"
            width="100%" height="300" style="border:0;" allowfullscreen loading="lazy">
        </iframe>
    </div>
</section>
