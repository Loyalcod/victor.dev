const navToggle = document.querySelector('[data-nav-toggle]');
const mobileNav = document.querySelector('[data-mobile-nav]');
const themeToggle = document.querySelector('[data-theme-toggle]');
const themeIcon = document.querySelector('[data-theme-icon]');

navToggle?.addEventListener('click', () => {
    const isOpen = mobileNav?.classList.toggle('hidden') === false;
    navToggle.setAttribute('aria-expanded', String(isOpen));
});

mobileNav?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
        navToggle?.setAttribute('aria-expanded', 'false');
    });
});

themeToggle?.addEventListener('click', () => {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');

    if (themeIcon) {
        themeIcon.textContent = isDark ? 'DM' : 'LM';
    }
});
