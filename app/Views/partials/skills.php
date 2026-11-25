<?php /** @var App\Config\Portfolio $p */ ?>
<section class="section section-alt" id="skills">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Keahlian</p>
            <h2>Bidang yang saya tekuni.</h2>
            <p class="section-sub">Empat bidang yang jadi fokus saya selama belajar dan mengerjakan proyek.</p>
        </header>

        <div class="skills-grid">
            <?php foreach ($p->skills as $skill): ?>
                <article class="skill-card" data-reveal>
                    <span class="icon-badge">
                        <svg class="icon" aria-hidden="true"><use href="#i-<?= esc($skill['icon'], 'attr') ?>"></use></svg>
                    </span>
                    <h3><?= esc($skill['group']) ?></h3>
                    <p><?= esc($skill['description']) ?></p>
                    <ul class="tags">
                        <?php foreach ($skill['items'] as $item): ?>
                            <li><?= esc(trim($item)) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
