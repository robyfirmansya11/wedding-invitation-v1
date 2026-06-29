<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Undangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Ringkasan RSVP -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4 text-center">
                    <p class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $totalGuests }}</p>
                    <p class="text-sm text-gray-500">Total Respon</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4 text-center">
                    <p class="text-2xl font-bold text-green-600">{{ $totalHadir }}</p>
                    <p class="text-sm text-gray-500">Hadir</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4 text-center">
                    <p class="text-2xl font-bold text-red-500">{{ $totalTidakHadir }}</p>
                    <p class="text-sm text-gray-500">Tidak Hadir</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4 text-center">
                    <p class="text-2xl font-bold text-yellow-500">{{ $totalRagu }}</p>
                    <p class="text-sm text-gray-500">Ragu</p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4 text-center">
                    <p class="text-2xl font-bold text-blue-600">{{ $totalTamuHadir }}</p>
                    <p class="text-sm text-gray-500">Total Tamu Hadir</p>
                </div>
            </div>

            <!-- Tabel RSVP -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-100">Daftar Konfirmasi Kehadiran</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="py-2 px-3 text-gray-500">Nama</th>
                                <th class="py-2 px-3 text-gray-500">Status</th>
                                <th class="py-2 px-3 text-gray-500">Jumlah Tamu</th>
                                <th class="py-2 px-3 text-gray-500">Waktu Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($guests as $guest)
                                <tr class="border-b border-gray-100 dark:border-gray-700">
                                    <td class="py-2 px-3 text-gray-800 dark:text-gray-100">{{ $guest->name }}</td>
                                    <td class="py-2 px-3">
                                        @if ($guest->attendance === 'hadir')
                                            <span class="text-green-600 font-medium">Hadir</span>
                                        @elseif ($guest->attendance === 'tidak_hadir')
                                            <span class="text-red-500 font-medium">Tidak Hadir</span>
                                        @else
                                            <span class="text-yellow-500 font-medium">Ragu</span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-3 text-gray-800 dark:text-gray-100">{{ $guest->total_guest }}</td>
                                    <td class="py-2 px-3 text-gray-500">{{ $guest->created_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-4 text-center text-gray-400">Belum ada konfirmasi kehadiran.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Daftar Ucapan & Doa -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-100">Ucapan & Doa ({{ $wishes->count() }})</h3>
                <div class="space-y-3 max-h-96 overflow-y-auto">
                    @forelse ($wishes as $wish)
                        <div class="border border-gray-100 dark:border-gray-700 rounded-lg p-4">
                            <p class="font-semibold text-gray-800 dark:text-gray-100">{{ $wish->name }}</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">{{ $wish->message }}</p>
                            <p class="text-gray-400 text-xs mt-2">{{ $wish->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    @empty
                        <p class="text-center text-gray-400">Belum ada ucapan.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
