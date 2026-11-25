<?php /** @var App\Config\Portfolio $p */ ?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section" id="articles">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Artikel</p>
            <h2>Catatan pembelajaran.</h2>
            <p class="section-sub">Ringkasan singkat tentang pengembangan web, basis data, desain, dan sistem informasi yang saya pelajari.</p>
        </header>

        <div class="projects-grid">
            <?php foreach ($p->articles as $index => $article): ?>
                <?php $panelId = 'article-body-' . ($index + 1); ?>
                <article class="project-card" data-reveal>
                    <div class="project-visual">
                        <img src="<?= base_url($article['thumbnail']) ?>"
                             alt="Gambar <?= esc($article['title'], 'attr') ?>"
                             width="800" height="500" loading="lazy">
                        <span class="project-category"><?= esc($article['category']) ?></span>
                    </div>

                    <div class="project-body">
                        <div class="project-meta">
                            <h3><?= esc($article['title']) ?></h3>
                            <span class="project-year"><?= esc($article['date']) ?></span>
                        </div>
                        <p><?= esc($article['excerpt']) ?></p>

                        <ul class="tags" aria-label="Topik artikel">
                            <?php foreach ($article['tags'] as $tag): ?>
                                <li><?= esc($tag) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="timeline-card" id="<?= esc($panelId, 'attr') ?>" hidden>
                            <p class="timeline-desc"><?= esc($article['body']) ?></p>
                        </div>

                        <div class="project-actions">
                            <button class="btn btn-ghost btn-sm" type="button"
                                    data-article-toggle
                                    aria-expanded="false"
                                    aria-controls="<?= esc($panelId, 'attr') ?>">
                                <span>Baca Selengkapnya</span>
                                <svg class="icon" aria-hidden="true"><use href="#i-arrow-up-right"></use></svg>
                            </button>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
