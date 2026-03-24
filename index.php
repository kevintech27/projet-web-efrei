<?php
// On active les erreurs au cas où
ini_set('display_errors', 1);
error_reporting(E_ALL);

$pageTitle = "Accueil - Département Informatique EFREI";
require_once('includes/header.php'); 
?>

<main>
    <section id="hero-3d" style="position: fixed; top: 0; left: 0; height: 100vh; width: 100%; z-index: -1; background-color: #000;">
        <spline-viewer class="background" url="https://prod.spline.design/bBkUEMOHUEx2Tev5/scene.splinecode" style="width: 100%; height: 100%;"></spline-viewer>
    </section>

    <div style="height: 100vh; pointer-events: none; display: flex; align-items: flex-end; justify-content: center; padding-bottom: 50px;">
         <h2 style="color: white; text-shadow: 2px 2px 10px rgba(0,0,0,0.8); font-size: 1.5rem;">
            Découvrez le département Informatique 👇
        </h2>
    </div>

    <section id="contenu-accueil" class="container" style="background-color: white; padding: 80px 20px; text-align: center; border-radius: 20px 20px 0 0; box-shadow: 0 -10px 30px rgba(0,0,0,0.2); position: relative; z-index: 1;">
        
        <h1 style="color: #004d99; font-size: 2.5rem; margin-bottom: 20px;">
            Façonner les ingénieurs et experts du numérique de demain
        </h1>
        <p style="font-size: 1.2rem; line-height: 1.6; color: #444; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
            Bienvenue sur le site du département Informatique de l'EFREI. Découvrez nos formations, du Bachelor au Cycle Ingénieur, sur notre campus de Villejuif.
        </p>

        <div class="chiffres-cles" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin-bottom: 50px;">
            <div style="background: #f8f9fa; padding: 30px; border-radius: 12px; min-width: 200px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                <h3 style="color: #004d99; font-size: 2.5rem; margin: 0;">95%</h3>
                <p style="margin-top: 10px; font-weight: 600;">Satisfaction étudiante</p>
            </div>
            <div style="background: #f8f9fa; padding: 30px; border-radius: 12px; min-width: 200px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                <h3 style="color: #004d99; font-size: 2.5rem; margin: 0;">2000+</h3>
                <p style="margin-top: 10px; font-weight: 600;">Entreprises partenaires</p>
            </div>
        </div>

        <div class="acces-rapides" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="cours.php" style="padding: 15px 30px; background: #004d99; color: white; text-decoration: none; border-radius: 8px; font-weight: bold;">Nos Formations</a>
            <a href="contact.php" style="padding: 15px 30px; background: white; color: #004d99; text-decoration: none; border: 2px solid #004d99; border-radius: 8px; font-weight: bold;">Admissions & Contact</a>
        </div>
    </section>
</main>

<script>
    const heroSection = document.getElementById('hero-3d');
    const splineViewer = document.querySelector('spline-viewer');
    const contenuAccueil = document.getElementById('contenu-accueil');

    // 1. L'effet de fondu (Fade-out) au scroll
    window.addEventListener('scroll', () => {
        let scrollPosition = window.scrollY;
        let windowHeight = window.innerHeight;

        // On calcule l'opacité
        let opacity = 1 - (scrollPosition / windowHeight);
        if (opacity < 0) opacity = 0;

        // On applique la transparence à toute la section 3D
        if(heroSection) {
            heroSection.style.opacity = opacity;
        }
    });

    // 2. Le clic sur l'animation
    if(splineViewer && contenuAccueil) {
        splineViewer.addEventListener('click', () => {
            contenuAccueil.scrollIntoView({ behavior: 'smooth' });
        });
    }
</script>

<?php 
require_once('includes/footer.php'); 
?>