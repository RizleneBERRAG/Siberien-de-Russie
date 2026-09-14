import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('[data-header]');
    const toggle = document.querySelector('[data-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');
    const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 24);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    const closeMenu = () => {
        toggle?.classList.remove('open');
        menu?.classList.remove('open');
        document.body.classList.remove('menu-open');
    };
    toggle?.addEventListener('click', () => {
        const open = !menu?.classList.contains('open');
        toggle.classList.toggle('open', open);
        menu?.classList.toggle('open', open);
        document.body.classList.toggle('menu-open', open);
    });
    menu?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));

    const slides = [...document.querySelectorAll('[data-hero-slide]')];
    const controls = [...document.querySelectorAll('[data-hero-target]')];
    let currentSlide = 0;
    let slideTimer;

    const showSlide = index => {
        currentSlide = index;
        slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
        controls.forEach((control, i) => control.classList.toggle('active', i === index));
    };
    const restartSlider = () => {
        clearInterval(slideTimer);
        if (slides.length > 1) {
            slideTimer = setInterval(() => showSlide((currentSlide + 1) % slides.length), 5500);
        }
    };
    controls.forEach((control, index) => control.addEventListener('click', () => {
        showSlide(index);
        restartSlider();
    }));
    restartSlider();
});