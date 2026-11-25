(() => {
    'use strict';

    const reduceMotion = () => window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------------------------------------------------------------------
       Header & menu mobile
       --------------------------------------------------------------------- */

    const nav = document.getElementById('primary-nav');
    const toggle = document.querySelector('[data-nav-toggle]');
    const backToTop = document.querySelector('[data-back-to-top]');

    const closeNav = () => {
        if (!nav || !toggle) {
            return;
        }

        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu navigasi');
        document.body.classList.remove('nav-open');
    };

    if (nav && toggle) {
        toggle.addEventListener('click', () => {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';

            if (isOpen) {
                closeNav();

                return;
            }

            nav.classList.add('is-open');
            toggle.setAttribute('aria-expanded', 'true');
            toggle.setAttribute('aria-label', 'Tutup menu navigasi');
            document.body.classList.add('nav-open');
        });

        nav.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeNav));

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeNav();
            }
        });

        document.addEventListener('click', (event) => {
            if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                closeNav();
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 900) {
                closeNav();
            }
        });
    }

    /* ---------------------------------------------------------------------
       Tombol kembali ke atas
       --------------------------------------------------------------------- */

    const syncScrollState = () => {
        if (backToTop) {
            backToTop.classList.toggle('is-visible', window.scrollY > 560);
        }
    };

    syncScrollState();
    window.addEventListener('scroll', syncScrollState, { passive: true });

    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: reduceMotion() ? 'auto' : 'smooth' });
    });

    /* ---------------------------------------------------------------------
       Artikel: buka/tutup ringkasan lengkap
       --------------------------------------------------------------------- */

    document.querySelectorAll('[data-article-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('aria-controls');
            const panel = id ? document.getElementById(id) : null;

            if (!panel) {
                return;
            }

            const isOpen = button.getAttribute('aria-expanded') === 'true';

            button.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
            panel.hidden = isOpen;

            const label = button.querySelector('span');

            if (label) {
                label.textContent = isOpen ? 'Baca Selengkapnya' : 'Tampilkan Lebih Sedikit';
            }
        });
    });

    /* ---------------------------------------------------------------------
       Salin path project lokal ke clipboard
       --------------------------------------------------------------------- */

    const copyText = async (text) => {
        if (navigator.clipboard && window.isSecureContext) {
            try {
                await navigator.clipboard.writeText(text);

                return true;
            } catch (error) {
                return false;
            }
        }

        const area = document.createElement('textarea');
        area.value = text;
        area.setAttribute('readonly', '');
        area.style.position = 'fixed';
        area.style.opacity = '0';
        document.body.appendChild(area);
        area.select();

        let copied = false;

        try {
            copied = document.execCommand('copy');
        } catch (error) {
            copied = false;
        }

        document.body.removeChild(area);

        return copied;
    };

    document.querySelectorAll('[data-copy-path]').forEach((button) => {
        button.addEventListener('click', async () => {
            const text = button.getAttribute('data-copy-path') || '';
            const label = button.querySelector('span');
            const defaultLabel = button.dataset.copyLabel || 'Salin Lokasi Proyek';
            const copied = text !== '' && await copyText(text);

            if (label) {
                label.textContent = copied ? 'Tersalin!' : 'Gagal menyalin';
            }

            button.classList.toggle('is-copied', copied);

            window.setTimeout(() => {
                if (label) {
                    label.textContent = defaultLabel;
                }

                button.classList.remove('is-copied');
            }, 1800);
        });
    });
})();
