// Navbar color change on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Portfolio animation on scroll
const portfolioItems = document.querySelectorAll('.portfolio-item');

window.addEventListener('scroll', () => {
    portfolioItems.forEach(item => {
        const position = item.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;

        if (position < screenHeight - 100) {
            item.classList.add('visible');
        }
    });
});
