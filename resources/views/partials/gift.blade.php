<section
    x-data="{ visible: false, open: false, copied: '' }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
    class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow mb-3">With Love</p>
    <h2 class="font-display text-3xl text-ink mb-2">Amplop Digital</h2>

    <div class="section-divider mt-6 mb-8">
        <span class="section-divider-dot"></span>
    </div>

    <p class="text-taupe max-w-md mx-auto mb-10 leading-relaxed">
        Doa restu Bapak/Ibu/Saudara/i adalah hal yang paling berarti bagi kami.
        Namun jika ingin memberi tanda kasih, kami sediakan amplop digital di bawah ini.
    </p>

    <button
        @click="open = !open"
        class="border border-gold text-ink px-10 py-3 text-sm tracking-widest uppercase hover:bg-gold hover:text-white transition-colors duration-300"
    >
        <span x-text="open ? 'Tutup' : 'Kirim Hadiah'"></span>
    </button>

    <div x-show="open" x-transition class="mt-10 max-w-sm mx-auto space-y-4">
        <!-- Rekening 1 -->
        <div class="bg-white border border-cream-dark p-6 text-left">
            <p class="eyebrow mb-1">Bank BCA</p>
            <p class="font-display text-2xl text-ink mb-1">1234567890</p>
            <p class="text-taupe text-sm mb-4">a.n. Nama Pria</p>
            <button
                @click="navigator.clipboard.writeText('1234567890'); copied = 'bca'; setTimeout(() => copied = '', 1500)"
                class="text-ink text-xs tracking-wider uppercase border border-gold px-4 py-2 hover:bg-gold hover:text-white transition-colors duration-300"
            >
                <span x-text="copied === 'bca' ? 'Tersalin' : 'Salin Nomor'"></span>
            </button>
        </div>

        <!-- Rekening 2 -->
        <div class="bg-white border border-cream-dark p-6 text-left">
            <p class="eyebrow mb-1">Bank Mandiri</p>
            <p class="font-display text-2xl text-ink mb-1">0987654321</p>
            <p class="text-taupe text-sm mb-4">a.n. Nama Wanita</p>
            <button
                @click="navigator.clipboard.writeText('0987654321'); copied = 'mandiri'; setTimeout(() => copied = '', 1500)"
                class="text-ink text-xs tracking-wider uppercase border border-gold px-4 py-2 hover:bg-gold hover:text-white transition-colors duration-300"
            >
                <span x-text="copied === 'mandiri' ? 'Tersalin' : 'Salin Nomor'"></span>
            </button>
        </div>
    </div>
</section>
