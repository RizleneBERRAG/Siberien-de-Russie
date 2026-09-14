import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('[data-header]');
    const toggle = document.querySelector('[data-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');

    const updateHeader = () => {
        header?.classList.toggle('is-scrolled', window.scrollY > 24);
    };

    const closeMenu = () => {
        toggle?.classList.remove('open');
        toggle?.setAttribute('aria-expanded', 'false');
        menu?.classList.remove('open');
        document.body.classList.remove('menu-open');
    };

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    toggle?.addEventListener('click', () => {
        const open = !menu?.classList.contains('open');

        toggle.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', String(open));
        menu?.classList.toggle('open', open);
        document.body.classList.toggle('menu-open', open);
    });

    menu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -35px',
        });

        document.querySelectorAll('.reveal').forEach((element) => {
            observer.observe(element);
        });
    } else {
        document.querySelectorAll('.reveal').forEach((element) => {
            element.classList.add('is-visible');
        });
    }

    const heroVisual = document.querySelector('[data-hero-visual]');
    const supportsMotion = window.matchMedia('(pointer: fine)').matches
        && !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (heroVisual && supportsMotion) {
        heroVisual.addEventListener('pointermove', (event) => {
            const bounds = heroVisual.getBoundingClientRect();
            const horizontal = ((event.clientX - bounds.left) / bounds.width - 0.5) * -9;
            const vertical = ((event.clientY - bounds.top) / bounds.height - 0.5) * -7;

            heroVisual.style.setProperty('--hero-x', `${horizontal.toFixed(2)}px`);
            heroVisual.style.setProperty('--hero-y', `${vertical.toFixed(2)}px`);
        });

        heroVisual.addEventListener('pointerleave', () => {
            heroVisual.style.setProperty('--hero-x', '0px');
            heroVisual.style.setProperty('--hero-y', '0px');
        });
    }
});
