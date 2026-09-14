import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('[data-header]');
    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const mobileLinks = mobileMenu?.querySelectorAll('a');

    const updateHeader = () => {
        header?.classList.toggle('is-scrolled', window.scrollY > 30);
    };

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    const closeMenu = () => {
        menuButton?.classList.remove('is-active');
        mobileMenu?.classList.remove('is-open');
        document.body.classList.remove('menu-open');
        menuButton?.setAttribute('aria-expanded', 'false');
        menuButton?.setAttribute('aria-label', 'Ouvrir le menu');
    };

    menuButton?.addEventListener('click', () => {
        const isOpen = mobileMenu?.classList.toggle('is-open');

        menuButton.classList.toggle('is-active', isOpen);
        document.body.classList.toggle('menu-open', isOpen);
        menuButton.setAttribute('aria-expanded', String(isOpen));
        menuButton.setAttribute(
            'aria-label',
            isOpen ? 'Fermer le menu' : 'Ouvrir le menu'
        );
    });

    mobileLinks?.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
});
