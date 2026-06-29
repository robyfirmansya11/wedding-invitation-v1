<section
    x-data="{ visible: false }"
    x-intersect.once="visible = true"
    :class="visible ? 'fade-in' : ''"
    class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow mb-3">Assalamualaikum Warahmatullahi Wabarakatuh</p>
    <p class="text-taupe mb-16 max-w-md mx-auto leading-relaxed">
        Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang
        Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 max-w-2xl mx-auto">
        <!-- Mempelai Pria -->
        <div class="flex flex-col items-center">
            <img src="https://picsum.photos/seed/groom/300/300" alt="Mempelai Pria"
                 class="w-36 h-36 rounded-full object-cover mb-5 border border-gold p-1">
            <h2 class="font-display text-3xl text-ink mb-2">Roby Firmansyah</h2>
            <div class="w-8 h-px bg-gold mb-2"></div>
            <p class="text-taupe text-sm">Putra dari Bapak Agus Sasi dan Ibu Fatmawati</p>
        </div>

        <!-- Mempelai Wanita -->
        <div class="flex flex-col items-center">
            <img src="https://picsum.photos/seed/bride/300/300" alt="Mempelai Wanita"
                 class="w-36 h-36 rounded-full object-cover mb-5 border border-gold p-1">
            <h2 class="font-display text-3xl text-ink mb-2">Ginda Septiani</h2>
            <div class="w-8 h-px bg-gold mb-2"></div>
            <p class="text-taupe text-sm">Putri dari Bapak Yudha Novi Ervan dan Ibu Pina Elvina</p>
        </div>
    </div>
</section>
