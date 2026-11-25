<?php
/**
 * @var App\Config\Portfolio $p
 * @var string|null          $title
 * @var string               $active
 */
$metaTitle = $title ?? ($p->name . ' — ' . $p->role);
$metaDesc  = $p->siteDescription;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($metaTitle) ?></title>
    <meta name="description" content="<?= esc($metaDesc) ?>">
    <meta name="author" content="<?= esc($p->name) ?>">
    <meta name="theme-color" content="#1b3a5c">
    <link rel="canonical" href="<?= esc(current_url(), 'url') ?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="<?= esc($metaTitle) ?>">
    <meta property="og:description" content="<?= esc($metaDesc) ?>">
    <meta property="og:url" content="<?= esc(current_url(), 'url') ?>">
    <meta property="og:image" content="<?= esc(base_url($p->avatar), 'url') ?>">
    <meta name="twitter:card" content="summary_large_image">

    <script>document.documentElement.classList.add('js');</script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="<?= base_url('assets/images/favicon.svg') ?>" type="image/svg+xml">
    <link rel="alternate icon" href="<?= base_url('favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <script type="application/ld+json">
        <?= json_encode([
            '@context'  => 'https://schema.org',
            '@type'     => 'Person',
            'name'      => $p->name,
            'jobTitle'  => $p->role,
            'email'     => 'mailto:' . $p->email,
            'url'       => site_url(),
            'image'     => base_url($p->avatar),
            'address'   => ['@type' => 'PostalAddress', 'addressLocality' => $p->location],
            'sameAs'    => array_values(array_filter(array_map(
                static fn (array $social): ?string => str_starts_with($social['url'], 'http') ? $social['url'] : null,
                $p->socials,
            ))),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?>
    </script>
</head>
<body>
<?= $this->include('layouts/icons') ?>

<a class="skip-link" href="#main">Langsung ke konten</a>

<?= $this->include('partials/navbar') ?>

<main id="main">
    <?= $this->renderSection('content') ?>
</main>

<?= $this->include('partials/footer') ?>

<button class="back-to-top" type="button" data-back-to-top aria-label="Kembali ke atas">
    <svg class="icon" aria-hidden="true"><use href="#i-arrow-up"></use></svg>
</button>

<script src="<?= base_url('assets/js/main.js') ?>" defer></script>
</body>
</html>
