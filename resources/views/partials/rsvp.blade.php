<section
    x-data="{ visible: false }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
   class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow text-center mb-3">Kehadiran Anda</p>
    <h2 class="font-display text-3xl text-ink text-center mb-2">Konfirmasi Kehadiran</h2>

    <div class="section-divider mt-6 mb-10">
        <span class="section-divider-dot"></span>
    </div>

    @if (session('success'))
        <div class="max-w-md mx-auto mb-8 border border-gold text-ink text-sm p-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('rsvp.store') }}" class="max-w-md mx-auto space-y-5">
        @csrf

        <div>
            <label class="eyebrow block mb-2">Nama</label>
            <input type="text" name="name" required value="{{ old('name', $guestName ?? '') }}"
                   class="w-full bg-transparent border-b border-cream-dark px-1 py-2 text-ink focus:outline-none focus:border-gold transition-colors">
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="eyebrow block mb-2">Konfirmasi Kehadiran</label>
            <select name="attendance" required
                    class="w-full bg-transparent border-b border-cream-dark px-1 py-2 text-ink focus:outline-none focus:border-gold transition-colors">
                <option value="hadir">Hadir</option>
                <option value="tidak_hadir">Tidak Hadir</option>
                <option value="ragu">Masih Ragu</option>
            </select>
            @error('attendance') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="eyebrow block mb-2">Jumlah Tamu</label>
            <input type="number" name="total_guest" min="1" max="10" value="1" required
                   class="w-full bg-transparent border-b border-cream-dark px-1 py-2 text-ink focus:outline-none focus:border-gold transition-colors">
            @error('total_guest') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit"
                class="w-full border border-gold text-ink py-3 text-sm tracking-widest uppercase hover:bg-gold hover:text-white transition-colors duration-300 mt-4">
            Kirim Konfirmasi
        </button>
    </form>
</section>
