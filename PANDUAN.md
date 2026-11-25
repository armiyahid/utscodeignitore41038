# Panduan Portofolio (CodeIgniter 4)

Website portofolio lima halaman dengan tema **formal akademik**: terang, navy,
border tegas, sudut kotak, dan font Inter. Tidak ada database, admin, atau
login; kontak hanya lewat email, WhatsApp, dan media sosial. Semua konten
diambil dari satu berkas konfigurasi.

## Halaman

| Rute | Halaman | Isi |
| --- | --- | --- |
| `/` | Beranda | Hero, ringkasan keahlian, 3 proyek unggulan |
| `/profile` | Profil | Identitas, pendidikan, minat, kegiatan |
| `/portfolio` | Portofolio | Semua proyek + Salin Lokasi Proyek |
| `/articles` | Artikel | Catatan pembelajaran dengan tombol Baca Selengkapnya |
| `/about` | Tentang Saya | Perjalanan belajar, keahlian, tujuan, kontak |

Navbar dan footer dikelola sekali di `app/Views/partials/` dan dipakai semua
halaman lewat `app/Views/layouts/main.php`. Teks label sudah seluruhnya
berbahasa Indonesia; alamat rute tetap `/profile`, `/portfolio`, `/articles`,
dan `/about` agar tautan lama tidak rusak.

## Menjalankan

```bash
php spark serve
```

Buka <http://localhost:8080>.

Untuk XAMPP, arahkan document root ke folder **`public`**, lalu sesuaikan
`app.baseURL` di `.env` dengan alamat yang dipakai, misalnya:

```dotenv
app.baseURL = 'http://localhost/portofolioWeb/public/'
```

## Mengubah Konten

Semua konten ada di **`app/Config/Portfolio.php`**:

| Properti | Isi |
| --- | --- |
| `$name`, `$initials`, `$role` | Identitas utama |
| `$headline`, `$bio`, `$bioSecondary` | Teks hero, profil, dan tentang |
| `$facts` | Ringkasan identitas |
| `$location`, `$email`, `$whatsapp` | Kontak |
| `$avatar` | Lokasi foto, default `assets/images/fotoprofil.jpeg` |
| `$socials` | GitHub, Instagram, Email |
| `$education`, `$experience` | Riwayat pendidikan dan jejak belajar |
| `$interests`, `$softSkills`, `$activities`, `$goal` | Tentang & Profil |
| `$skills` | Empat bidang keahlian |
| `$projects` | Daftar proyek |
| `$articles` | Daftar artikel statis |

Statistik di Beranda dihitung otomatis di `app/Controllers/Home.php` dari jumlah
proyek, teknologi unik, jejak belajar, dan artikel. Setelah mengubah isi,
refresh browser — tidak perlu build apa pun.

## Proyek

Tiap entri di `$projects` punya field:

| Field | Fungsi |
| --- | --- |
| `title`, `category`, `year` | Judul, kategori, tahun |
| `description` | Deskripsi singkat |
| `tags` | Teknologi (dihitung untuk statistik) |
| `thumbnail` | Lokasi gambar di `public/assets/images/projects/` |
| `available` | `true` = tampilkan tombol & lokasi; `false` = “Belum tersedia” |
| `url` | Alamat localhost XAMPP kalau proyek sudah dikonfigurasi |
| `path` | Lokasi folder lokal, mis. `D:\\xampp\\htdocs\\ci4-app\\` |

Portofolio menampilkan **enam kartu secara berurutan**: Praktikum 2, 4, 5, 6, 7,
lalu Implementasi CI4 di posisi terakhir. Tiap thumbnail SVG sudah memuat
keterangan di bagian bawah gambar sesuai urutan tersebut.

Contoh yang sudah terpasang:

- **Praktikum 2 — PBO dengan PHP**: `http://localhost/pemrogramanweb2/Praktikum2`,
  folder `D:\xampp\htdocs\pemrogramanweb2\Praktikum2\`.
- **Praktikum 7 — MVC**: `http://localhost/pemrogramanweb2/Praktikum7/index.php`,
  folder `D:\xampp\htdocs\pemrogramanweb2\Praktikum7\`.
- **Implementasi CI4**: `http://localhost/ci4-app`,
  folder `D:\xampp\htdocs\ci4-app\`.

Aturan penting:

- Jangan mengisi `url`/`path` palsu. Kalau belum ada, biarkan kosong dan set
  `available => false`.
- Browser **tidak bisa** membuka folder lokal lewat `file://`. Gunakan tombol
  **Salin Lokasi Proyek**, lalu tempel di File Explorer.
- Untuk proyek PHP, isi `url` dengan alamat localhost XAMPP. Untuk berkas desain
  atau QGIS, cukup isi `path`.
- Thumbnail placeholder ada di `public/assets/images/projects/`. Ganti berkas SVG
  tersebut dengan tangkapan layar bila sudah tersedia.

## Artikel

Tiap entri di `$articles` punya `title`, `category`, `date`, `excerpt`, `body`,
`thumbnail`, dan `tags`. Tombol **Baca Selengkapnya** membuka `body` di halaman
yang sama tanpa rute tambahan. Thumbnail placeholder ada di
`public/assets/images/articles/`.

## Mengganti Foto Profil

1. Taruh berkas di `public/assets/images/` (misal `foto.jpg`).
2. Ubah `$avatar = 'assets/images/foto.jpg';` di `Portfolio.php`.
3. Idealnya gambar persegi, minimal 600×600 px.

## Struktur Penting

```
app/
  Config/Portfolio.php        <- semua konten
  Config/Routes.php           <- lima rute halaman
  Controllers/Home.php        <- render halaman + statistik
  Views/layouts/main.php      <- head, meta, font, script
  Views/layouts/icons.php     <- sprite ikon SVG
  Views/partials/navbar.php   <- navigasi utama
  Views/partials/footer.php   <- footer
  Views/partials/project-cards.php
  Views/partials/skills.php
  Views/partials/experience.php
  Views/home/                 <- lima halaman
public/
  assets/css/style.css        <- tema formal navy
  assets/js/main.js           <- menu, kembali ke atas, salin lokasi, artikel
  assets/images/              <- avatar & favicon
  assets/images/projects/     <- thumbnail proyek
  assets/images/articles/     <- thumbnail artikel
```

## Pemecahan Masalah

**Halaman 404**
Pastikan document root mengarah ke `public/`, atau buka lewat
`http://localhost:8080` dengan `php spark serve`.

**CSS/JS tidak muncul**
Cek `app.baseURL` di `.env` sudah sesuai alamat yang dipakai.

**Font tidak muncul**
Font diambil dari Google Fonts, jadi butuh koneksi internet. Tanpa internet,
browser memakai fallback system sans-serif.

**Tombol Salin Lokasi tidak bekerja**
Fallback `document.execCommand('copy')` dipakai kalau Clipboard API tidak
tersedia. Pastikan halaman dibuka lewat `localhost`, bukan `file://`.
