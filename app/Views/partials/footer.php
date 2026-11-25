<?php /** @var App\Config\Portfolio $p */ ?>
<?php
$footerLinks = [
    ['label' => 'Beranda', 'url' => site_url('/')],
    ['label' => 'Profil', 'url' => site_url('profile')],
    ['label' => 'Portofolio', 'url' => site_url('portfolio')],
    ['label' => 'Artikel', 'url' => site_url('articles')],
    ['label' => 'Tentang Saya', 'url' => site_url('about')],
];
?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a class="brand" href="<?= site_url('/') ?>">
                <span class="brand-mark"><?= esc($p->initials) ?></span>
                <span class="brand-text"><?= esc($p->name) ?><span class="brand-dot">.</span></span>
            </a>
            <p><?= esc($p->role) ?> yang percaya desain yang sederhana bikin karya lebih mudah dihargai.</p>
        </div>

        <nav class="footer-col" aria-label="Navigasi footer">
            <h2 class="footer-title">Tautan Cepat</h2>
            <?php foreach ($footerLinks as $link): ?>
                <a href="<?= esc($link['url'], 'attr') ?>"><?= esc($link['label']) ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="footer-col">
            <h2 class="footer-title">Hubungi Saya</h2>
            <a href="mailto:<?= esc($p->email, 'attr') ?>"><?= esc($p->email) ?></a>
            <a href="https://wa.me/<?= esc($p->whatsapp, 'attr') ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            <div class="footer-socials">
                <?php foreach ($p->socials as $social): ?>
                    <a href="<?= esc($social['url'], 'attr') ?>"
                       <?= str_starts_with($social['url'], 'http') ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                       aria-label="<?= esc($social['label'], 'attr') ?>"
                       title="<?= esc($social['label'], 'attr') ?>">
                        <svg class="icon" aria-hidden="true"><use href="#i-<?= esc($social['icon'], 'attr') ?>"></use></svg>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; <?= date('Y') ?> <?= esc($p->name) ?>. Dibangun dengan <a href="https://codeigniter.com" target="_blank" rel="noopener noreferrer">CodeIgniter 4</a>.</p>
        <a class="footer-top" href="#main">Kembali ke atas <svg class="icon" aria-hidden="true"><use href="#i-arrow-up"></use></svg></a>
    </div>
</footer>
