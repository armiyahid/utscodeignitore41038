<?php /** @var App\Config\Portfolio $p */ ?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section" id="portfolio">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Portofolio</p>
            <h2>Karya pilihan.</h2>
            <p class="section-sub">Kumpulan proyek perkuliahan dan karya mandiri. Proyek yang sudah tersedia bisa dibuka atau disalin lokasi foldernya.</p>
        </header>

        <?= $this->include('partials/project-cards') ?>
    </div>
</section>

<section class="section section-alt">
    <div class="container section-head" data-reveal>
        <p class="section-tag">Catatan</p>
        <h2>Proyek lokal.</h2>
        <p class="section-sub">Browser tidak bisa membuka folder lokal lewat <code>file://</code>. Gunakan tombol <strong>Salin Lokasi Proyek</strong>, lalu tempel di File Explorer. Proyek yang belum tersedia sengaja tidak diisi URL atau lokasi palsu.</p>
    </div>
</section>

<?= $this->endSection() ?>
