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
    // 3. LOGIQUE DU CARROUSEL (Boucle infinie & Auto-play)
    // ========================================================
    const sliders = document.querySelectorAll('.testimonial-slider-container');
    
    sliders.forEach(slider => {
        const track = slider.querySelector('.testimonial-slider-track');
        const prevBtn = slider.querySelector('.prev-arrow');
        const nextBtn = slider.querySelector('.next-arrow');
        const card = slider.querySelector('.testimonial-card');

        if (track && prevBtn && nextBtn && card) {
            const scrollAmount = card.offsetWidth + 30; // Largeur d'une carte + l'espace (gap)

            // Fonction pour passer à la carte suivante avec boucle infinie
            const slideNext = () => {
                // Si on a atteint la toute fin du défilement
                if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 10) {
                    track.scrollTo({ left: 0, behavior: 'smooth' }); // Retour doux au début
                } else {
                    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            };

            // Fonction pour revenir en arrière avec boucle infinie
            const slidePrev = () => {
                // Si on est tout au début
                if (track.scrollLeft <= 10) {
                    track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' }); // Aller à la fin
                } else {
                    track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                }
            };

            // Écouteurs d'événements sur les flèches
            nextBtn.addEventListener('click', slideNext);
            prevBtn.addEventListener('click', slidePrev);

            // BONUS PRO : Défilement automatique (Auto-play)
            let autoPlay = setInterval(slideNext, 4000); // Défile toutes les 4 secondes

            // Met en pause quand l'utilisateur met sa souris dessus pour lire
            slider.addEventListener('mouseenter', () => clearInterval(autoPlay));
            
            // Relance le défilement quand la souris quitte le carrousel
            slider.addEventListener('mouseleave', () => {
                autoPlay = setInterval(slideNext, 4000);
            });
        }
    });
});