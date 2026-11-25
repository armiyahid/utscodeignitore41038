<?php
/**
 * @var App\Config\Portfolio $p
 * @var array<int, array{value: int, label: string}> $stats
 * @var array<int, array<string, mixed>> $projectItems
 */
?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero" id="home">
    <div class="container hero-grid">
        <div class="hero-copy" data-reveal>
            <p class="eyebrow">Halo, saya</p>

            <h1 class="hero-title"><?= esc($p->name) ?></h1>
            <p class="hero-role"><?= esc($p->role) ?></p>

            <p class="hero-tagline"><?= esc($p->headline) ?></p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="<?= site_url('portfolio') ?>">
                    Jelajahi Karya Saya
                    <svg class="icon" aria-hidden="true"><use href="#i-arrow-up-right"></use></svg>
                </a>
                <a class="btn btn-ghost" href="<?= site_url('about') ?>">Tentang Saya</a>
            </div>

            <ul class="socials hero-socials" aria-label="Sosial media">
                <?php foreach ($p->socials as $social): ?>
                    <li>
                        <a href="<?= esc($social['url'], 'attr') ?>"
                           <?= str_starts_with($social['url'], 'http') ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                           aria-label="<?= esc($social['label'], 'attr') ?>"
                           title="<?= esc($social['label'], 'attr') ?>">
                            <svg class="icon" aria-hidden="true"><use href="#i-<?= esc($social['icon'], 'attr') ?>"></use></svg>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="hero-visual" data-reveal>
            <div class="portrait">
                <img src="<?= base_url($p->avatar) ?>"
                     alt="Foto <?= esc($p->name, 'attr') ?>"
                     width="640" height="640"
                     loading="eager">
            </div>
            <p class="hero-caption"><?= esc($p->availability) ?></p>
        </div>
    </div>

    <div class="container">
        <dl class="stats" data-reveal>
            <?php foreach ($stats as $stat): ?>
                <div class="stat">
                    <dd><?= (int) $stat['value'] ?></dd>
                    <dt><?= esc($stat['label']) ?></dt>
                </div>
            <?php endforeach; ?>
        </dl>
    </div>
</section>

<?= $this->include('partials/skills') ?>

<section class="section" id="featured-projects">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Proyek Unggulan</p>
            <h2>Beberapa karya yang saya buat.</h2>
            <p class="section-sub">Tiga proyek unggulan dari kumpulan karya yang lengkapnya ada di halaman Portofolio.</p>
        </header>

        <?= $this->include('partials/project-cards') ?>

        <a class="btn btn-primary" href="<?= site_url('portfolio') ?>">
            Lihat Semua Proyek
            <svg class="icon" aria-hidden="true"><use href="#i-arrow-up-right"></use></svg>
        </a>
    </div>
</section>

<section class="section section-alt">
    <div class="container section-head" data-reveal>
        <p class="section-tag">Kenali Saya</p>
        <h2>Lebih dari sekadar kode.</h2>
        <p class="section-sub">Perjalanan belajar, minat, dan arah pengembangan diri saya ada di halaman Tentang Saya.</p>
        <a class="btn btn-ghost" href="<?= site_url('about') ?>">Tentang Saya</a>
    </div>
</section>

<?= $this->endSection() ?>
