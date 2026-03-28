<?php
$pageTitle = "Accueil - Département Informatique EFREI";
require_once('includes/header.php'); 
?>

<script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.72/build/spline-viewer.js"></script>

<main>
    <div id="hero-fixed" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: #050505;">
        
        <spline-viewer url="https://prod.spline.design/18Ak-VrL3f8lWDuR/scene.splinecode"></spline-viewer>
        
        <section id="hero-text" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 0 5%; pointer-events: none;">
            <h1 style="color: white; font-size: 4.5rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px; text-shadow: 0px 4px 15px rgba(0,0,0,0.8);">
                Façonner le futur <br>
                de la tech<span class="blinking-cursor">_</span>
            </h1>
            <p style="color: #e0e0e0; font-size: 1.5rem; max-width: 600px; text-shadow: 0px 2px 10px rgba(0,0,0,0.8);">
                Découvrez le département Informatique de l'EFREI.
            </p>
        </section>
    </div>

    <div style="height: 100vh; width: 100%; pointer-events: none;"></div>

    <section id="cadre-blanc" style="background: white; min-height: 100vh; position: relative; z-index: 10; padding: 100px 20px; transform-origin: top center; border-radius: 40px 40px 0 0; box-shadow: 0 -20px 50px rgba(0,0,0,0.4);">
        
        <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
            <h2 class="reveal-element" style="color: #004d99; font-size: 2.8rem; margin-bottom: 60px;">L'école de l'élite numérique</h2>
            
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin-bottom: 100px;">
                <div class="stat-card reveal-element" style="background: #f8f9fa; padding: 40px; border-radius: 20px; flex: 1; min-width: 250px;">
                    <h3 style="color: #004d99; font-size: 3rem; margin: 0;">5 800</h3>
                    <p style="margin-top: 10px; font-weight: bold; color: #555;">Étudiants sur 2 campus</p>
                </div>
                <div class="stat-card reveal-element" style="background: #f8f9fa; padding: 40px; border-radius: 20px; flex: 1; min-width: 250px;">
                    <h3 style="color: #004d99; font-size: 3rem; margin: 0;">Top 2</h3>
                    <p style="margin-top: 10px; font-weight: bold; color: #555;">Écoles post-bac (Figaro Étudiant)</p>
                </div>
                <div class="stat-card reveal-element" style="border: 2px solid #004d99; padding: 40px; border-radius: 20px; flex: 1; min-width: 250px;">
                    <h3 style="color: #004d99; font-size: 3rem; margin: 0;">100+</h3>
                    <p style="margin-top: 10px; font-weight: bold; color: #555;">Partenariats internationaux</p>
                </div>
            </div>

            <h2 class="reveal-element" style="color: #004d99; font-size: 2.4rem; margin-bottom: 40px;">Nos Programmes</h2>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; margin-bottom: 100px; text-align: left;">
                <div class="reveal-element" style="background: white; border: 1px solid #eee; padding: 40px; border-radius: 20px; flex: 1; min-width: 300px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h3 style="color: #333; font-size: 1.8rem; margin-bottom: 15px;">Bachelors (Post-Bac)</h3>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 20px;">Des formations professionnalisantes en 3 ans (Développement Web, IA, Cybersécurité).</p>
                    <a href="cours.php" style="color: #004d99; font-weight: bold; text-decoration: none;">Découvrir le programme →</a>
                </div>
                <div class="reveal-element" style="background: #004d99; color: white; padding: 40px; border-radius: 20px; flex: 1; min-width: 300px; box-shadow: 0 10px 30px rgba(0,77,153,0.2);">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Cycle Ingénieur</h3>
                    <p style="color: #e0e0e0; line-height: 1.6; margin-bottom: 20px;">Le programme d'excellence en 5 ans. Data Science, Systèmes Embarqués, Sécurité.</p>
                    <a href="cours.php" style="color: #4da6ff; font-weight: bold; text-decoration: none;">Voir les majeures →</a>
                </div>
            </div>

            <h2 class="reveal-element" style="color: #004d99; font-size: 2.4rem; margin-bottom: 40px; margin-top: 100px;">Parcours & Témoignages</h2>
            <div class="testimonial-slider-container reveal-element" style="margin-bottom: 80px;">
                <button class="slider-arrow prev-arrow">←</button>
                <div class="testimonial-slider-track">
                    
                    <div class="testimonial-card" style="padding: 0; overflow: hidden;">
                        <img src="image/campus-8421-Copie.jpg" alt="Photo de l'élève" style="width: 100%; height: 250px; object-fit: cover; background: #eee;">
                        <div style="padding: 30px; text-align: left;">
                            <p style="font-style: italic; color: #555; font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">"Une formation technique d'excellence couplée à une ouverture sur le monde de l'entreprise. J'ai été embauché avant même mon diplôme !"</p>
                            <h3 style="margin-bottom: 5px; color: #333; font-size: 1.3rem;">Jean Dupont</h3>
                            <p style="color: #004d99; font-weight: bold; font-size: 0.9rem;">Lead Developer Web</p>
                        </div>
                    </div>

                    <div class="testimonial-card" style="padding: 0; overflow: hidden;">
                        <img src="image/campus-8421-Copie.jpg" alt="Photo de l'élève" style="width: 100%; height: 250px; object-fit: cover; background: #eee;">
                        <div style="padding: 30px; text-align: left;">
                            <p style="font-style: italic; color: #555; font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">"Le parcours Master en Cybersécurité m'a permis de me spécialiser très tôt. L'ambiance sur le campus et le matériel sont tops."</p>
                            <h3 style="margin-bottom: 5px; color: #333; font-size: 1.3rem;">Sarah Martin</h3>
                            <p style="color: #004d99; font-weight: bold; font-size: 0.9rem;">Analyste Sécurité (SOC)</p>
                        </div>
                    </div>

                    <div class="testimonial-card" style="padding: 0; overflow: hidden;">
                        <img src="image/campus-8421-Copie.jpg" alt="Photo de l'élève" style="width: 100%; height: 250px; object-fit: cover; background: #eee;">
                        <div style="padding: 30px; text-align: left;">
                            <p style="font-style: italic; color: #555; font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">"Alternance de 2 ans en Data Science. Aujourd'hui, je gère des projets IA passionnants. Un immense merci à l'équipe pédagogique de l'EFREI."</p>
                            <h3 style="margin-bottom: 5px; color: #333; font-size: 1.3rem;">Pierre Bernard</h3>
                            <p style="color: #004d99; font-weight: bold; font-size: 0.9rem;">Ingénieur IA & Data</p>
                        </div>
                    </div>

                </div>
                <button class="slider-arrow next-arrow">→</button>
            </div>

            <div class="reveal-element" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <a href="contact.php" style="padding: 15px 30px; background: white; color: #004d99; text-decoration: none; border: 2px solid #004d99; border-radius: 8px; font-weight: bold; font-size: 1.1rem; transition: 0.3s;">Admissions & Contact</a>
            </div>
            
        </div>
    </section>
</main>

<script src="js/animations.js"></script>

<?php require_once('includes/footer.php'); ?>