<?php /** @var App\Config\Portfolio $p */ ?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section" id="profile">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Profil</p>
            <h2>Profil singkat saya.</h2>
            <p class="section-sub">Identitas, status pendidikan, dan bidang yang sedang saya tekuni.</p>
        </header>

        <div class="about-grid">
            <div class="about-visual" data-reveal>
                <div class="about-photo">
                    <img src="<?= base_url($p->avatar) ?>"
                         alt="Foto <?= esc($p->name, 'attr') ?>"
                         width="640" height="640" loading="lazy">
                </div>
                <p class="about-visual-caption"><?= esc($p->location) ?></p>
            </div>

            <div class="about-copy" data-reveal>
                <p class="eyebrow"><?= esc($p->initials) ?> — Identitas</p>
                <h3><?= esc($p->name) ?></h3>

                <p class="about-lead"><?= esc($p->bio) ?></p>
                <p><?= esc($p->bioSecondary) ?></p>

                <ul class="facts">
                    <?php foreach ($p->facts as $fact): ?>
                        <li>
                            <span class="fact-label"><?= esc($fact['label']) ?></span>
                            <span class="fact-value"><?= esc($fact['value']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a class="btn btn-primary" href="<?= site_url('about') ?>">
                    Tentang Saya Lebih Lanjut
                    <svg class="icon" aria-hidden="true"><use href="#i-arrow-up-right"></use></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Pendidikan</p>
            <h2>Riwayat pendidikan.</h2>
            <p class="section-sub">Pendidikan formal dan fokus belajar saat ini.</p>
        </header>

        <ol class="timeline">
            <?php foreach ($p->education as $item): ?>
                <li class="timeline-item" data-reveal>
                    <span class="timeline-dot" aria-hidden="true">
                        <svg class="icon" aria-hidden="true"><use href="#i-graduation"></use></svg>
                    </span>
                    <article class="timeline-card">
                        <div class="timeline-top">
                            <span class="chip">Pendidikan</span>
                            <span class="timeline-period">
                                <svg class="icon" aria-hidden="true"><use href="#i-clock"></use></svg>
                                <?= esc($item['period']) ?>
                            </span>
                        </div>
                        <h3><?= esc($item['level']) ?></h3>
                        <p class="timeline-company"><?= esc($item['institution']) ?> <span aria-hidden="true">·</span> <?= esc($item['location']) ?></p>
                        <p class="timeline-desc"><?= esc($item['detail']) ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="section">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Minat</p>
            <h2>Yang sedang saya pelajari.</h2>
            <p class="section-sub">Topik-topik yang terus saya dalami selama perkuliahan dan proyek mandiri.</p>
        </header>

        <div class="skills-grid">
            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-sparkles"></use></svg>
                </span>
                <h3>Minat & Fokus</h3>
                <p>Bidang yang saya pilih untuk diperdalam satu per satu.</p>
                <ul class="tags">
                    <?php foreach ($p->interests as $interest): ?>
                        <li><?= esc($interest) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>

            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-tool"></use></svg>
                </span>
                <h3>Kemampuan Nonteknis</h3>
                <p>Kebiasaan kerja yang saya bangun saat mengerjakan tugas dan proyek.</p>
                <ul class="tags">
                    <?php foreach ($p->softSkills as $softSkill): ?>
                        <li><?= esc($softSkill) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>

            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-folder"></use></svg>
                </span>
                <h3>Kegiatan</h3>
                <p>Beberapa kegiatan dan praktik yang pernah saya jalani.</p>
                <ul class="tags">
                    <?php foreach ($p->activities as $activity): ?>
                        <li><?= esc($activity) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>

            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-user"></use></svg>
                </span>
                <h3>Kontak</h3>
                <p>Cara paling mudah untuk menghubungi saya.</p>
                <ul class="tags">
                    <li><?= esc($p->email) ?></li>
                    <li>WhatsApp +<?= esc($p->whatsapp) ?></li>
                </ul>
            </article>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
