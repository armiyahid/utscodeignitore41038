<?php /** @var App\Config\Portfolio $p */ ?>
<section class="section" id="journey">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Perjalanan</p>
            <h2>Jejak belajar saya.</h2>
            <p class="section-sub">Ringkasan pendidikan dan praktik yang membentuk cara saya kerja.</p>
        </header>

        <ol class="timeline">
            <?php foreach ($p->experience as $item): ?>
                <li class="timeline-item" data-reveal>
                    <span class="timeline-dot" aria-hidden="true">
                        <svg class="icon">
                            <use href="#i-<?= $item['type'] === 'Pendidikan' ? 'graduation' : 'briefcase' ?>"></use>
                        </svg>
                    </span>

                    <article class="timeline-card">
                        <div class="timeline-top">
                            <span class="chip"><?= esc($item['type']) ?></span>
                            <span class="timeline-period">
                                <svg class="icon" aria-hidden="true"><use href="#i-clock"></use></svg>
                                <?= esc($item['period']) ?>
                            </span>
                        </div>

                        <h3><?= esc($item['role']) ?></h3>
                        <p class="timeline-company">
                            <?= esc($item['company']) ?>
                            <span aria-hidden="true">·</span>
                            <?= esc($item['location']) ?>
                        </p>
                        <p class="timeline-desc"><?= esc($item['description']) ?></p>

                        <ul class="bullets">
                            <?php foreach ($item['points'] as $point): ?>
                                <li><?= esc($point) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
