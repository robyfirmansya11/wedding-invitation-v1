<section
    x-data="{
        visible: false,
        target: new Date('2026-12-20T08:00:00').getTime(),
        days: 0, hours: 0, minutes: 0, seconds: 0,
        updateCountdown() {
            const now = new Date().getTime();
            const distance = this.target - now;
            if (distance < 0) {
                this.days = this.hours = this.minutes = this.seconds = 0;
                return;
            }
            this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
        }
    }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
    x-init="updateCountdown(); setInterval(() => updateCountdown(), 1000)"
     class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow mb-3">Hitung Mundur</p>
    <h2 class="font-display text-3xl text-ink mb-10">Menuju Hari Bahagia</h2>

    <div class="flex justify-center gap-6 max-w-md mx-auto">
        <div class="text-center">
            <p class="font-display text-4xl text-ink" x-text="days"></p>
            <p class="eyebrow mt-2">Hari</p>
        </div>
        <div class="w-px bg-cream-dark"></div>
        <div class="text-center">
            <p class="font-display text-4xl text-ink" x-text="hours"></p>
            <p class="eyebrow mt-2">Jam</p>
        </div>
        <div class="w-px bg-cream-dark"></div>
        <div class="text-center">
            <p class="font-display text-4xl text-ink" x-text="minutes"></p>
            <p class="eyebrow mt-2">Menit</p>
        </div>
        <div class="w-px bg-cream-dark"></div>
        <div class="text-center">
            <p class="font-display text-4xl text-ink" x-text="seconds"></p>
            <p class="eyebrow mt-2">Detik</p>
        </div>
    </div>
</section>
