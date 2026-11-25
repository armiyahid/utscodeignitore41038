<?php
/**
 * @var array<int, array{
 *     title: string,
 *     category: string,
 *     year: string,
 *     description: string,
 *     tags: array<int, string>,
 *     thumbnail: string,
 *     url: string,
 *     path: string,
 *     available: bool
 * }> $projectItems
 */
?>
<div class="projects-grid">
    <?php foreach ($projectItems as $project): ?>
        <?php $available = (bool) ($project['available'] ?? false); ?>
        <article class="project-card" data-reveal>
            <div class="project-visual">
                <img src="<?= base_url($project['thumbnail']) ?>"
                     alt="Gambar <?= esc($project['title'], 'attr') ?>"
                     width="800" height="500" loading="lazy">
                <span class="project-category"><?= esc($project['category']) ?></span>
            </div>

            <div class="project-body">
                <div class="project-meta">
                    <h3><?= esc($project['title']) ?></h3>
                    <span class="project-year"><?= esc($project['year']) ?></span>
                </div>
                <p><?= esc($project['description']) ?></p>

                <ul class="tags" aria-label="Teknologi yang dipakai">
                    <?php foreach ($project['tags'] as $tag): ?>
                        <li><?= esc($tag) ?></li>
                    <?php endforeach; ?>
                </ul>

                <?php if ($available): ?>
                    <div class="project-actions">
                        <?php if ($project['url'] !== ''): ?>
                            <a class="project-btn" href="<?= esc($project['url'], 'attr') ?>" target="_blank" rel="noopener noreferrer">
                                Buka Proyek
                                <svg class="icon" aria-hidden="true"><use href="#i-external"></use></svg>
                            </a>
                        <?php endif; ?>

                        <?php if ($project['path'] !== ''): ?>
                            <button class="copy-btn" type="button"
                                    data-copy-path="<?= esc($project['path'], 'attr') ?>"
                                    data-copy-label="Salin Lokasi Proyek">
                                <svg class="icon" aria-hidden="true"><use href="#i-copy"></use></svg>
                                <span>Salin Lokasi Proyek</span>
                            </button>
                            <code class="project-path"><?= esc($project['path']) ?></code>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <p class="project-status">
                        <svg class="icon" aria-hidden="true"><use href="#i-folder"></use></svg>
                        Proyek belum tersedia
                    </p>
                <?php endif; ?>
            </div>
        </article>
    <?php endforeach; ?>
</div>
