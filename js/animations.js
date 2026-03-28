document.addEventListener('DOMContentLoaded', () => {
    
    // ========================================================
    // 1. ANIMATION DU SCROLL & SMART NAVBAR
    // ========================================================
    const heroText = document.getElementById('hero-text');
    const cadreBlanc = document.getElementById('cadre-blanc');
    const navbar = document.querySelector('.navbar');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        let scrollY = window.scrollY;
        let windowHeight = window.innerHeight;

        // A. La Smart Navbar (Apparaît/Disparaît)
        if (navbar) {
            // Si on a dépassé le fond Spline
            if (scrollY > windowHeight * 0.5) {
                navbar.classList.add('scrolled');
                
                // Si on descend, on cache. Si on monte, on affiche.
                if (scrollY > lastScrollY && scrollY > windowHeight) {
                    navbar.classList.add('navbar-hidden');
                } else {
                    navbar.classList.remove('navbar-hidden');
                }
            } else {
                navbar.classList.remove('scrolled');
                navbar.classList.remove('navbar-hidden');
            }
        }
        lastScrollY = scrollY; // On sauvegarde la position

        // B. Le texte d'accroche disparaît doucement
        if (heroText) {
            let opacity = Math.max(0, 1 - (scrollY / 300));
            heroText.style.opacity = opacity;
            heroText.style.transform = `translateY(${scrollY * 0.3}px)`;
        }

        // C. LE CADRE BLANC : Transition "Scale" fluide
        if (cadreBlanc) {
            let progress = scrollY / windowHeight;
            progress = Math.max(0, Math.min(1, progress)); 
            
            let scale = 0.8 + (0.2 * progress);
            let radius = 40 * (1 - progress);

            cadreBlanc.style.transform = `scale(${scale})`;
            cadreBlanc.style.borderRadius = `${radius}px ${radius}px 0 0`;
        }
    });

    // D. Fait réapparaître la Navbar si la souris touche le haut de l'écran
    document.addEventListener('mousemove', (e) => {
        if (navbar && e.clientY <= 60) {
            navbar.classList.remove('navbar-hidden');
        }
    });

    // ========================================================
    // 2. APPARITION DES ÉLÉMENTS (Reveal au défilement)
    // ========================================================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); 
            }
        });
    }, { threshold: 0.1 });

    const elementsToReveal = document.querySelectorAll('.reveal-element');
    elementsToReveal.forEach((el, index) => {
        el.style.transitionDelay = `${(index % 3) * 0.15}s`;
        observer.observe(el);
    });

    // ========================================================
    // 3. LOGIQUE DU CARROUSEL (Boucle infinie & Auto-play)
    // ========================================================
    const sliders = document.querySelectorAll('.testimonial-slider-container');
    
    sliders.forEach(slider => {
        const track = slider.querySelector('.testimonial-slider-track');
        const prevBtn = slider.querySelector('.prev-arrow');
        const nextBtn = slider.querySelector('.next-arrow');
        const card = slider.querySelector('.testimonial-card');

        if (track && prevBtn && nextBtn && card) {
            const scrollAmount = card.offsetWidth + 30;

            const slideNext = () => {
                if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 10) {
                    track.scrollTo({ left: 0, behavior: 'smooth' }); 
                } else {
                    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            };

            const slidePrev = () => {
                if (track.scrollLeft <= 10) {
                    track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
                } else {
                    track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                }
            };

            nextBtn.addEventListener('click', slideNext);
            prevBtn.addEventListener('click', slidePrev);

            let autoPlay = setInterval(slideNext, 4000); 

            slider.addEventListener('mouseenter', () => clearInterval(autoPlay));
            slider.addEventListener('mouseleave', () => { autoPlay = setInterval(slideNext, 4000); });
        }
    });
});