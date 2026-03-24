document.addEventListener('DOMContentLoaded', () => {
    
    // ========================================================
    // 1. ANIMATION DU SCROLL (Molette)
    // ========================================================
    const heroText = document.getElementById('hero-text');
    const cadreBlanc = document.getElementById('cadre-blanc');

    window.addEventListener('scroll', () => {
        let scrollY = window.scrollY;
        let windowHeight = window.innerHeight;

        // Le texte d'accroche disparaît doucement
        if (heroText) {
            let opacity = Math.max(0, 1 - (scrollY / 300));
            heroText.style.opacity = opacity;
            heroText.style.transform = `translateY(${scrollY * 0.3}px)`;
        }

        // Le cadre blanc grossit et devient plat en touchant le haut
        if (cadreBlanc) {
            let rect = cadreBlanc.getBoundingClientRect();
            
            if (rect.top <= windowHeight && rect.top >= 0) {
                let progress = 1 - (rect.top / windowHeight);
                progress = Math.max(0, Math.min(1, progress));
                
                let scale = 0.8 + (0.2 * progress);
                let radius = 40 * (1 - progress);

                cadreBlanc.style.transform = `scale(${scale})`;
                cadreBlanc.style.borderRadius = `${radius}px ${radius}px 0 0`;
            } else if (rect.top < 0) {
                cadreBlanc.style.transform = `scale(1)`;
                cadreBlanc.style.borderRadius = `0px`;
            }
        }
    });

    // ========================================================
    // 2. APPARITION DES ÉLÉMENTS (Reveal au défilement)
    // ========================================================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Rend visible !
            }
        });
    }, { threshold: 0.1 });

    const elementsToReveal = document.querySelectorAll('.reveal-element');
    elementsToReveal.forEach((el, index) => {
        // Petit délai calculé pour que les cartes apparaissent 1 par 1 (effet cascade)
        el.style.transitionDelay = `${(index % 3) * 0.15}s`;
        observer.observe(el);
    });

    // ========================================================
    // 3. LOGIQUE DU CARROUSEL (Flèches)
    // ========================================================
    const sliderTrack = document.querySelector('.testimonial-slider-track');
    const prevBtn = document.querySelector('.prev-arrow');
    const nextBtn = document.querySelector('.next-arrow');

    if (sliderTrack && prevBtn && nextBtn) {
        const card = document.querySelector('.testimonial-card');
        if (card) {
            nextBtn.addEventListener('click', () => {
                sliderTrack.scrollBy({ left: card.offsetWidth + 30, behavior: 'smooth' });
            });
            prevBtn.addEventListener('click', () => {
                sliderTrack.scrollBy({ left: -(card.offsetWidth + 30), behavior: 'smooth' });
            });
        }
    }
});