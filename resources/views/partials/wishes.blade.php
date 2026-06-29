<section
    x-data="{ visible: false }"
    :class="visible ? 'fade-in' : ''"
    x-intersect.once="visible = true"
    class="fade-section py-20 px-6 text-center"
>
    <p class="eyebrow text-center mb-3">Doa & Restu</p>
    <h2 class="font-display text-3xl text-ink text-center mb-2">Ucapan & Doa</h2>

    <div class="section-divider mt-6 mb-10">
        <span class="section-divider-dot"></span>
    </div>

    @if (session('success'))
        <div class="max-w-md mx-auto mb-8 border border-gold text-ink text-sm p-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('wish.store') }}" class="max-w-md mx-auto space-y-5 mb-14">
        @csrf

        <div>
            <input type="text" name="name" placeholder="Nama" required
                   class="w-full bg-white border-b border-cream-dark px-1 py-2 text-ink focus:outline-none focus:border-gold transition-colors">
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <textarea name="message" rows="3" placeholder="Tulis ucapan & doa..." required
                      class="w-full bg-white border-b border-cream-dark px-1 py-2 text-ink focus:outline-none focus:border-gold transition-colors"></textarea>
            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit"
                class="w-full border border-gold text-ink py-3 text-sm tracking-widest uppercase hover:bg-gold hover:text-white transition-colors duration-300">
            Kirim Ucapan
        </button>
    </form>

    <div class="max-w-md mx-auto space-y-4 max-h-96 overflow-y-auto">
        @forelse ($wishes as $wish)
            <div class="bg-white border-l border-gold p-5">
                <p class="font-display text-lg text-ink">{{ $wish->name }}</p>
                <p class="text-taupe text-sm mt-1 leading-relaxed">{{ $wish->message }}</p>
            </div>
        @empty
            <p class="text-center text-taupe text-sm">Belum ada ucapan. Jadilah yang pertama!</p>
        @endforelse
    </div>
</section>
