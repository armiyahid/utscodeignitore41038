<?php /** @var App\Config\Portfolio $p */ ?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="section" id="about">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Tentang Saya</p>
            <h2>Sedikit tentang saya.</h2>
            <p class="section-sub">Singkatnya: saya suka belajar, suka merapikan hal yang berantakan, dan suka melihat ide jadi karya.</p>
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

                <a class="btn btn-primary" href="<?= site_url('portfolio') ?>">
                    Lihat Karya Saya
                    <svg class="icon" aria-hidden="true"><use href="#i-arrow-up-right"></use></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/experience') ?>

<?= $this->include('partials/skills') ?>

<section class="section section-alt">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Tujuan & Kegiatan</p>
            <h2>Tujuan dan pengembangan diri.</h2>
            <p class="section-sub">Arah belajar, kebiasaan kerja, dan kegiatan yang menyertai perjalanan saya.</p>
        </header>

        <div class="skills-grid">
            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-sparkles"></use></svg>
                </span>
                <h3>Tujuan</h3>
                <p><?= esc($p->goal) ?></p>
            </article>

            <article class="skill-card" data-reveal>
                <span class="icon-badge">
                    <svg class="icon" aria-hidden="true"><use href="#i-tool"></use></svg>
                </span>
                <h3>Kemampuan Nonteknis</h3>
                <p>Kebiasaan yang saya bawa saat bekerja dalam tim maupun saat mengerjakan proyek sendiri.</p>
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
                <p>Rangkaian praktik dan kegiatan yang pernah saya ikuti.</p>
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
                <h3>Minat</h3>
                <p>Topik yang terus saya dalami.</p>
                <ul class="tags">
                    <?php foreach ($p->interests as $interest): ?>
                        <li><?= esc($interest) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section-contact">
    <div class="container">
        <header class="section-head" data-reveal>
            <p class="section-tag">Kontak</p>
            <h2>Mari kita buat sesuatu.</h2>
            <p class="section-sub">Punya ide, tugas, atau sekadar mau ngobrol? Pilih kanal yang paling nyaman buat kamu.</p>
        </header>

        <div class="contact-grid">
            <aside class="contact-info" data-reveal>
                <ul class="contact-list">
                    <li>
                        <span class="contact-icon">
                            <svg class="icon" aria-hidden="true"><use href="#i-mail"></use></svg>
                        </span>
                        <span>
                            <span class="contact-label">Email</span>
                            <a href="mailto:<?= esc($p->email, 'attr') ?>"><?= esc($p->email) ?></a>
                        </span>
                    </li>
                    <li>
                        <span class="contact-icon">
                            <svg class="icon" aria-hidden="true"><use href="#i-whatsapp"></use></svg>
                        </span>
                        <span>
                            <span class="contact-label">WhatsApp</span>
                            <a href="https://wa.me/<?= esc($p->whatsapp, 'attr') ?>" target="_blank" rel="noopener noreferrer">+<?= esc($p->whatsapp) ?></a>
                        </span>
                    </li>
                    <li>
                        <span class="contact-icon">
                            <svg class="icon" aria-hidden="true"><use href="#i-map-pin"></use></svg>
                        </span>
                        <span>
                            <span class="contact-label">Lokasi</span>
                            <span><?= esc($p->location) ?></span>
                        </span>
                    </li>
                </ul>

                <div class="contact-ctas">
                    <a class="btn btn-primary" href="mailto:<?= esc($p->email, 'attr') ?>">
                        <svg class="icon" aria-hidden="true"><use href="#i-mail"></use></svg>
                        Sapa Saya
                    </a>
                    <?php foreach ($p->socials as $social): ?>
                        <?php if (in_array($social['icon'], ['github', 'linkedin', 'instagram'], true)): ?>
                            <a class="btn btn-ghost" href="<?= esc($social['url'], 'attr') ?>" target="_blank" rel="noopener noreferrer">
                                <svg class="icon" aria-hidden="true"><use href="#i-<?= esc($social['icon'], 'attr') ?>"></use></svg>
                                <?= esc($social['label']) ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </aside>

            <div class="timeline-card" data-reveal>
                <div class="timeline-top">
                    <span class="chip">Kontak</span>
                    <span class="timeline-period">
                        <svg class="icon" aria-hidden="true"><use href="#i-clock"></use></svg>
                        <?= date('Y') ?>
                    </span>
                </div>
                <h3>Hubungi saya langsung.</h3>
                <p class="timeline-desc">Saya siap menerima pertanyaan, diskusi singkat, atau ajakan kolaborasi lewat kanal yang tersedia.</p>
                <ul class="bullets">
                    <li>Email untuk pertanyaan proyek atau kolaborasi.</li>
                    <li>WhatsApp untuk diskusi singkat.</li>
                    <li>Media sosial untuk melihat aktivitas belajar saya.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
