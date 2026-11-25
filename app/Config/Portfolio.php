<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Semua konten portofolio ada di file ini.
 *
 * Cukup ubah nilai di bawah, nggak perlu sentuh view.
 * Setelah edit, refresh browser — data langsung berubah.
 */
class Portfolio extends BaseConfig
{
    // -------------------------------------------------------------------------
    // Identitas
    // -------------------------------------------------------------------------

    public string $name         = 'Muhammad Armiya Ahid';
    public string $initials     = 'HID';
    public string $role         = 'Mahasiswa Sistem Informasi';
    public string $availability = 'Mahasiswa Sistem Informasi · Nganjuk';
    public string $headline     = 'Saya mempelajari pengembangan web, desain UI/UX, basis data, dan analisis sistem — lalu merangkumannya jadi karya yang rapi dan mudah dipahami.';
    public string $location     = 'Dsn. Kanigoro Ds. Mojoduwur Kec. Ngetos Kab. Nganjuk';
    public string $email        = 'armiyaahid2@email.com';

    /** Nomor WhatsApp format internasional tanpa tanda plus. */
    public string $whatsapp = '6285791309364';

    /** Foto profil. Bisa diganti dengan file di public/assets/images/. */
    public string $avatar = 'assets/images/fotoprofil.jpeg';

    /** File CV. Isi contoh: 'assets/files/cv.pdf'. Kosongkan kalau belum ada. */
    public string $cv = '';

    // -------------------------------------------------------------------------
    // SEO
    // -------------------------------------------------------------------------

    public string $siteDescription = 'Portofolio mahasiswa Sistem Informasi: profil, proyek, artikel, dan keahlian pengembangan web, desain UI/UX, basis data, serta analisis sistem.';

    // -------------------------------------------------------------------------
    // Tentang
    // -------------------------------------------------------------------------

    public string $bio = 'Saya merupakan Mahasiswa Program Studi Sistem Informasi yang tertarik membangun aplikasi web dari sisi tampilan sampai struktur datanya. Saya suka proses yang rapi: mulai dari memahami kebutuhan, merancang alur, lalu mengerjakannya langkah demi langkah.';

    public string $bioSecondary = 'Selama perkuliahan, saya mengerjakan berbagai tugas praktikum dan proyek mandiri — mulai dari CRUD sederhana, perancangan basis data, hingga eksperimen UI/UX. Portofolio ini jadi tempat merangkum semuanya.';

    public array $facts = [
        ['label' => 'Status', 'value' => 'Mahasiswa Sistem Informasi'],
        ['label' => 'Program', 'value' => 'S1 Sistem Informasi'],
        ['label' => 'Kampus', 'value' => 'Institut Teknologi Mojosari'],
        ['label' => 'Fokus', 'value' => 'Pengembangan Web & Basis Data'],
    ];

    // -------------------------------------------------------------------------
    // Sosial media
    // -------------------------------------------------------------------------

    public array $socials = [
        ['label' => 'GitHub', 'icon' => 'github', 'url' => 'https://github.com/armiyahid'],
        ['label' => 'Instagram', 'icon' => 'instagram', 'url' => 'https://instagram.com/armiyahiddd'],
        ['label' => 'Email', 'icon' => 'mail', 'url' => 'mailto:armiyaahid2@email.com'],
    ];

    // -------------------------------------------------------------------------
    // Statistik
    //
    // Angka dihitung otomatis dari $projects, $experience, dan $articles
    // di controller. Tidak diisi manual.
    // -------------------------------------------------------------------------

    public array $experience = [
        [
            'role'        => 'S1 Sistem Informasi',
            'company'     => 'Institut Teknologi Mojosari',
            'location'    => 'Dsn. Ngepeh Ds. Ngepeh Kec. Loceret Kab. Nganjuk',
            'period'      => '2024 — Sekarang',
            'type'        => 'Pendidikan',
            'description' => 'Fokus pada pengembangan web, basis data, dan analisis sistem informasi.',
            'points'      => [
                'Mengerjakan praktikum Pemrograman Web 2 dan pengelolaan basis data.',
                'Membangun beberapa proyek mandiri untuk memperdalam alur pengembangan.',
            ],
        ],
        [
            'role'        => 'Praktikum Pemrograman Web 2',
            'company'     => 'Program Studi Sistem Informasi',
            'location'    => 'Kampus',
            'period'      => '2025',
            'type'        => 'Pendidikan',
            'description' => 'Mempelajari dasar pemrograman web, PHP, MySQL, dan alur CRUD sampai implementasi.',
            'points'      => [
                'Menyelesaikan tugas praktikum mulai dari prosedural, OOP, hingga studi kasus.',
                'Membangun aplikasi sistem buku sebagai contoh proyek CRUD.',
            ],
        ],
    ];

    // -------------------------------------------------------------------------
    // Profil & Tentang
    // -------------------------------------------------------------------------

    public array $education = [
        [
            'level'       => 'S1 Sistem Informasi',
            'institution' => 'Institut Teknologi Mojosari',
            'location'    => 'Nganjuk, Jawa Timur',
            'period'      => '2024 — Sekarang',
            'detail'      => 'Mempelajari pengembangan web, basis data, analisis sistem, dan praktikum terkait.',
        ],
    ];

    public array $interests = [
        'Pengembangan Web',
        'Desain UI/UX',
        'Manajemen Basis Data',
        'Analisis Sistem',
        'Data Spasial',
        'ETL & Gudang Data',
    ];

    public array $softSkills = [
        'Komunikasi',
        'Kerja tim',
        'Manajemen waktu',
        'Dokumentasi',
        'Ketelitian',
    ];

    public array $activities = [
        'Praktikum Pemrograman Web 2',
        'Proyek mandiri pengelolaan data berbasis PHP',
        'Eksperimen antarmuka dengan Figma',
    ];

    public string $goal = 'Terus memperdalam alur pengembangan web dari perancangan antarmuka, struktur basis data, hingga implementasi yang rapi dan terdokumentasi.';

    // -------------------------------------------------------------------------
    // Empat bidang keahlian (card)
    // -------------------------------------------------------------------------

    public array $skills = [
        [
            'group'       => 'Pengembangan Web',
            'icon'        => 'code',
            'description' => 'Membangun halaman web responsif dengan HTML, CSS, JavaScript, dan CodeIgniter 4.',
            'items'       => ['HTML & CSS', 'JavaScript', 'PHP', 'CodeIgniter 4'],
        ],
        [
            'group'       => 'Desain UI/UX',
            'icon'        => 'layout',
            'description' => 'Merancang alur dan antarmuka yang jelas, konsisten, dan nyaman dipakai.',
            'items'       => ['Figma', 'Wireframe', 'Sistem Desain', 'Prototipe'],
        ],
        [
            'group'       => 'Manajemen Basis Data',
            'icon'        => 'server',
            'description' => 'Merancang struktur data, ERD, dan kueri MySQL untuk kebutuhan aplikasi.',
            'items'       => ['MySQL', 'ERD', 'Normalisasi', 'Kueri'],
        ],
        [
            'group'       => 'Analisis Sistem',
            'icon'        => 'briefcase',
            'description' => 'Memetakan kebutuhan dan merancang sistem informasi yang sesuai alur kerja.',
            'items'       => ['Kasus Penggunaan', 'DFD', 'Analisis Kebutuhan', 'Dokumentasi'],
        ],
    ];

    // -------------------------------------------------------------------------
    // Proyek
    //
    // available = true  -> proyek nyata, tombol & path ditampilkan
    // available = false -> placeholder "Belum tersedia", jangan diisi path palsu
    // -------------------------------------------------------------------------

    public array $projects = [
        [
            'title'       => 'Praktikum 2 — PBO dengan PHP',
            'category'    => 'Pemrograman Web 2',
            'year'        => '2026',
            'description' => 'Praktikum dasar PHP: prosedural, OOP, dan studi kasus pengelolaan data buku.',
            'tags'        => ['PHP', 'MySQL', 'OOP'],
            'thumbnail'   => 'assets/images/projects/praktikum-2.svg',
            'url'         => 'http://localhost/pemrogramanweb2/Praktikum2',
            'path'        => 'D:\\xampp\\htdocs\\pemrogramanweb2\\Praktikum2\\',
            'available'   => true,
        ],
        [
            'title'       => 'Praktikum 4 — Constructor',
            'category'    => 'Pemrograman Web 2',
            'year'        => '2026',
            'description' => 'Latihan dan studi kasus pembelajaran berbasis masalah untuk pengelolaan data produk.',
            'tags'        => ['PHP', 'PBL'],
            'thumbnail'   => 'assets/images/projects/praktikum-4.svg',
            'url'         => 'http://localhost/pemrogramanweb2/Praktikum4',
            'path'        => 'D:\\xampp\\htdocs\\pemrogramanweb2\\Praktikum4\\',
            'available'   => true,
        ],
        [
            'title'       => 'Praktikum 5 — Enkapsulasi',
            'category'    => 'Pemrograman Web 2',
            'year'        => '2026',
            'description' => 'Rangkaian latihan dan studi kasus untuk memperkuat alur input dan olah data.',
            'tags'        => ['PHP', 'Studi Kasus'],
            'thumbnail'   => 'assets/images/projects/praktikum-5.svg',
            'url'         => 'http://localhost/pemrogramanweb2/Praktikum5',
            'path'        => 'D:\\xampp\\htdocs\\pemrogramanweb2\\Praktikum5\\',
            'available'   => true,
        ],
        [
            'title'       => 'Praktikum 6 — INHERITANCE',
            'category'    => 'Pemrograman Web 2',
            'year'        => '2026',
            'description' => 'Latihan, PBL pengguna, dan tugas praktik yang merangkum alur pengelolaan data.',
            'tags'        => ['PHP', 'PBL'],
            'thumbnail'   => 'assets/images/projects/praktikum-6.svg',
            'url'         => 'http://localhost/pemrogramanweb2/Praktikum6',
            'path'        => 'D:\\xampp\\htdocs\\pemrogramanweb2\\Praktikum6\\',
            'available'   => true,
        ],
        [
            'title'       => 'Praktikum 7 — MVC',
            'category'    => 'Pemrograman Web 2',
            'year'        => '2026',
            'description' => 'Implementasi alur index.php yang memanggil pengendali mahasiswa dan menampilkan datanya.',
            'tags'        => ['PHP', 'MVC'],
            'thumbnail'   => 'assets/images/projects/praktikum-7.svg',
            'url'         => 'http://localhost/pemrogramanweb2/Praktikum7/index.php',
            'path'        => 'D:\\xampp\\htdocs\\pemrogramanweb2\\Praktikum7\\',
            'available'   => true,
        ],
        [
            'title'       => 'Implementasi CI4',
            'category'    => 'Sistem Informasi',
            'year'        => '2026',
            'description' => 'Sistem Informasi Simpan Pinjam Perkakas berbasis CodeIgniter 4 dengan alur masuk, transaksi, dan laporan.',
            'tags'        => ['CodeIgniter 4', 'MySQL'],
            'thumbnail'   => 'assets/images/projects/implementasi-ci4.svg',
            'url'         => 'http://localhost/ci4-app',
            'path'        => 'D:\\xampp\\htdocs\\ci4-app\\',
            'available'   => true,
        ],
    ];

    // -------------------------------------------------------------------------
    // Artikel / catatan pembelajaran (data statis)
    // -------------------------------------------------------------------------

    public array $articles = [
        [
            'title'     => 'Memahami Alur MVC di CodeIgniter 4',
            'category'  => 'Pengembangan Web',
            'date'      => '12 Nov 2026',
            'excerpt'   => 'Catatan singkat tentang bagaimana rute, pengendali, dan tampilan bekerja sama dalam satu permintaan.',
            'body'      => 'Di CodeIgniter 4, rute menentukan pengendali mana yang dipanggil. Pengendali mengambil data dari konfigurasi atau model, lalu mengirimkannya ke tampilan. Tampilan hanya menampilkan data, sehingga perubahan konten tidak perlu mengubah logika halaman. Pendekatan ini membuat proyek lebih rapi saat dikembangkan.',
            'thumbnail' => 'assets/images/articles/web-development.svg',
            'tags'      => ['CI4', 'MVC', 'Rute'],
        ],
        [
            'title'     => 'Merancang ERD Sebelum Menulis Kueri',
            'category'  => 'Manajemen Basis Data',
            'date'      => '28 Okt 2026',
            'excerpt'   => 'Kenapa diagram relasi membantu menjaga konsistensi data sejak awal proyek.',
            'body'      => 'ERD membantu memetakan entitas, atribut, dan relasi sebelum implementasi. Dengan gambaran yang jelas, proses normalisasi dan penulisan kueri menjadi lebih konsisten. Perubahan struktur juga lebih mudah dievaluasi karena hubungan antar tabel sudah terdokumentasi.',
            'thumbnail' => 'assets/images/articles/database-management.svg',
            'tags'      => ['ERD', 'MySQL', 'Normalisasi'],
        ],
        [
            'title'     => 'Prinsip Dasar Wireframe yang Mudah Dipahami',
            'category'  => 'Desain UI/UX',
            'date'      => '15 Okt 2026',
            'excerpt'   => 'Fokus pada struktur konten dan hierarki visual sebelum memikirkan warna.',
            'body'      => 'Wireframe bekerja seperti kerangka halaman. Sebelum memilih warna atau tipografi, ada baiknya menentukan urutan informasi, ukuran area konten, dan jalur navigasi. Hasilnya, desain akhir lebih mudah dievaluasi karena fokusnya pada kejelasan, bukan dekorasi.',
            'thumbnail' => 'assets/images/articles/ui-ux-design.svg',
            'tags'      => ['Figma', 'Wireframe', 'Hierarki'],
        ],
        [
            'title'     => 'Sistem Informasi: Dari Kebutuhan ke Kasus Penggunaan',
            'category'  => 'Sistem Informasi',
            'date'      => '02 Okt 2026',
            'excerpt'   => 'Mengubah narasi kebutuhan pengguna menjadi alur sistem yang bisa dibangun.',
            'body'      => 'Analisis sistem dimulai dari pertanyaan sederhana: siapa penggunanya dan apa yang ingin dicapai. Jawaban itu lalu dirangkum menjadi kasus penggunaan dan alur data. Dokumentasi yang rapi membantu memastikan bahwa fitur yang dibangun benar-benar menjawab kebutuhan awal.',
            'thumbnail' => 'assets/images/articles/information-systems.svg',
            'tags'      => ['Kasus Penggunaan', 'DFD', 'Dokumentasi'],
        ],
        [
            'title'     => 'Belajar ETL dengan Pentaho Secara Bertahap',
            'category'  => 'Teknologi',
            'date'      => '20 Sep 2026',
            'excerpt'   => 'Membedah tiga tahap Ekstrak, Transformasi, dan Pemuatan dalam contoh sederhana.',
            'body'      => 'ETL terdiri dari tiga bagian: mengambil data dari sumber, membersihkan atau mengubahnya, lalu menyimpannya ke tujuan. Mempelajarinya langkah demi langkah membuat konsep gudang data lebih mudah dipahami, terutama saat melihat hasil akhirnya dalam bentuk tabel ringkasan.',
            'thumbnail' => 'assets/images/articles/technology.svg',
            'tags'      => ['Pentaho', 'ETL', 'Gudang Data'],
        ],
        [
            'title'     => 'Menjaga Konsistensi Tampilan dengan Satu Templat',
            'category'  => 'Pengembangan Web',
            'date'      => '08 Sep 2026',
            'excerpt'   => 'Satu tata letak untuk navbar, konten, dan footer membuat semua halaman terasa menyatu.',
            'body'      => 'Menggunakan satu tata letak utama berarti navbar dan footer dikelola sekali, lalu setiap halaman hanya mengisi bagian konten. Selain menghemat waktu, cara ini mencegah perbedaan kecil antar halaman. Perubahan pada navigasi juga langsung berlaku di seluruh situs.',
            'thumbnail' => 'assets/images/articles/web-development.svg',
            'tags'      => ['Tata Letak', 'Templat', 'CI4'],
        ],
    ];
}
