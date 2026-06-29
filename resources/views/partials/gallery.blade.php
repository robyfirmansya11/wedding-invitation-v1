<section
    x-data="{ visible: false }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
     class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow text-center mb-3">Moments</p>
    <h2 class="font-display text-3xl text-ink text-center mb-2">Galeri Foto</h2>

    <div class="section-divider mt-6 mb-14">
        <span class="section-divider-dot"></span>
    </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-3 max-w-2xl mx-auto">
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding1/400/400" alt="Galeri 1"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding2/400/400" alt="Galeri 2"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding3/400/400" alt="Galeri 3"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding4/400/400" alt="Galeri 4"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding5/400/400" alt="Galeri 5"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden">
        <img src="https://picsum.photos/seed/wedding6/400/400" alt="Galeri 6"
             class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
    </div>
</div>
</section>

{{-- // kalau mau pakai foto asli
<img src="{{ asset('images/gallery/foto1.jpg') }}" alt="Galeri 1" class="w-full h-40 object-cover rounded-xl shadow"> --}}
