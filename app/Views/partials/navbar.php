<?php /** @var App\Config\Portfolio $p */ ?>
<?php /** @var string $active */ ?>
<header class="site-header" data-header>
    <div class="container header-inner">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="<?= esc($p->name) ?> — kembali ke beranda">
            <span class="brand-mark"><?= esc($p->initials) ?></span>
            <span class="brand-text"><?= esc($p->name) ?><span class="brand-dot">.</span></span>
        </a>

        <nav class="nav" id="primary-nav" aria-label="Navigasi utama">
            <a class="nav-link <?= $active === 'home' ? 'is-active' : '' ?>" href="<?= site_url('/') ?>" <?= $active === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a>
            <a class="nav-link <?= $active === 'profile' ? 'is-active' : '' ?>" href="<?= site_url('profile') ?>" <?= $active === 'profile' ? 'aria-current="page"' : '' ?>>Profil</a>
            <a class="nav-link <?= $active === 'portfolio' ? 'is-active' : '' ?>" href="<?= site_url('portfolio') ?>" <?= $active === 'portfolio' ? 'aria-current="page"' : '' ?>>Portofolio</a>
            <a class="nav-link <?= $active === 'articles' ? 'is-active' : '' ?>" href="<?= site_url('articles') ?>" <?= $active === 'articles' ? 'aria-current="page"' : '' ?>>Artikel</a>
            <a class="nav-link <?= $active === 'about' ? 'is-active' : '' ?>" href="<?= site_url('about') ?>" <?= $active === 'about' ? 'aria-current="page"' : '' ?>>Tentang Saya</a>
            <a class="btn btn-primary btn-sm nav-cta" href="<?= site_url('portfolio') ?>">Lihat Karya</a>
        </nav>

        <a class="btn btn-primary btn-sm header-cta" href="<?= site_url('portfolio') ?>">Lihat Karya</a>

        <button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-nav" aria-label="Buka menu navigasi">
            <svg class="icon icon-open" aria-hidden="true"><use href="#i-menu"></use></svg>
            <svg class="icon icon-close" aria-hidden="true"><use href="#i-close"></use></svg>
        </button>
    </div>
</header>
