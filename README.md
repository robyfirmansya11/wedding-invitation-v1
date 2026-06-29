# Wedding Invitation 💍

Undangan pernikahan digital berbasis web, dibangun dengan Laravel. Mendukung personalisasi tamu lewat URL, RSVP, ucapan & doa, dan dashboard admin — semuanya terhubung ke database.

## ✨ Fitur

- **Cover interaktif** — tampilan "Buka Undangan" dengan transisi halus sebelum konten utama muncul
- **Personalisasi tamu** — link unik per tamu lewat parameter URL (`?to=Nama+Tamu`), otomatis tampil di cover dan mengisi form RSVP
- **Hitung mundur (countdown)** — real-time menuju hari pernikahan
- **Galeri foto** — grid foto dengan efek hover zoom
- **Cerita cinta** — timeline kisah pasangan
- **Lokasi acara** — Google Maps embed untuk akad & resepsi
- **RSVP** — konfirmasi kehadiran tersimpan ke database
- **Ucapan & doa** — guest book yang tersimpan dan ditampilkan secara real-time
- **Amplop digital** — info rekening dengan tombol salin ke clipboard
- **Musik latar** — auto-play setelah undangan dibuka, dengan tombol play/pause
- **Animasi scroll** — efek fade-in pada setiap section saat di-scroll
- **Dashboard admin** — rekap RSVP (hadir/tidak hadir/ragu) dan daftar ucapan, dilindungi autentikasi

## 🛠️ Tech Stack

| Komponen | Teknologi |
|---|---|
| Backend | Laravel 13 |
| Database | MySQL |
| Frontend | Blade, Tailwind CSS v4, Alpine.js |
| Build tool | Vite |
| Autentikasi | Laravel Breeze (Blade stack) |
| Font | Cormorant Garamond, Jost (Google Fonts) |

## 📋 Prasyarat

- PHP ^8.2
- Composer
- Node.js & npm
- MySQL
- Web server lokal (mis. [Laravel Herd](https://herd.laravel.com) atau [Laragon](https://laragon.org))

## 🚀 Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/robyfirmansya11/wedding-invitation.git
   cd wedding-invitation
   ```

2. **Install dependency PHP & JS**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Edit `.env`, sesuaikan koneksi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_kamu
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Buat database** (lewat HeidiSQL/phpMyAdmin/CLI MySQL), lalu jalankan migration:
   ```bash
   php artisan migrate
   ```

5. **Buat akun admin** untuk akses dashboard:
   ```bash
   php artisan tinker
   ```
   ```php
   \App\Models\User::create([
       'name' => 'Admin',
       'email' => 'admin@undangan.test',
       'password' => bcrypt('password_kamu'),
   ]);
   ```

6. **Jalankan aplikasi**
   ```bash
   npm run dev
   ```
   Buka project di browser sesuai domain/host lokal yang dikonfigurasi (mis. `http://wedding-invitation.test`).

## 🔗 Penggunaan

- **Halaman utama**: `/` — undangan utama
- **Link personal per tamu**: `/?to=Nama+Tamu`
- **Login admin**: `/login`
- **Dashboard admin**: `/dashboard` (butuh login)

## 📁 Struktur Utama

```
app/
├── Http/Controllers/
│   ├── InvitationController.php   # Menampilkan halaman utama
│   ├── GuestController.php        # Menyimpan data RSVP
│   ├── WishController.php         # Menyimpan ucapan & doa
│   └── DashboardController.php    # Rekap data untuk admin
├── Models/
│   ├── Guest.php
│   └── Wish.php

resources/views/
├── invitation.blade.php           # Layout utama (single page)
├── partials/                      # Section-section undangan
│   ├── cover.blade.php
│   ├── couple.blade.php
│   ├── event.blade.php
│   ├── countdown.blade.php
│   ├── story.blade.php
│   ├── gallery.blade.php
│   ├── gift.blade.php
│   ├── rsvp.blade.php
│   ├── wishes.blade.php
│   └── footer.blade.php
└── dashboard.blade.php            # Dashboard admin
```

## 📝 Catatan

- Foto pada galeri dan profil mempelai menggunakan placeholder dari [Picsum Photos](https://picsum.photos) — ganti dengan foto asli sebelum digunakan untuk acara sesungguhnya.
- Pastikan file musik latar (jika digunakan) disimpan di `public/audio/` dan bukan materi berlisensi tanpa izin.
- Halaman registrasi publik (`/register`) sengaja dinonaktifkan — hanya 1 akun admin yang dibuat manual lewat `tinker`.

## 📄 Lisensi

Proyek pribadi untuk keperluan acara pernikahan. Bebas digunakan dan dimodifikasi.
