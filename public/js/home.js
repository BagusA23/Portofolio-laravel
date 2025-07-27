    // Parallax effect for hero section
    document.addEventListener('DOMContentLoaded', function() {
        const hero = document.querySelector('section');
        
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = hero.querySelector('.absolute.inset-0');
            
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });
    });