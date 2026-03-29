<?php
$pageTitle = "Cours & Formations - EFREI";
require_once('includes/header.php'); 
?>

<main style="padding-top: 130px; min-height: 100vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('image/campus-8421-Copie.jpg') center/cover fixed; color: white; padding-bottom: 80px;">
    <div style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
        
        <div style="text-align: center; margin-bottom: 50px;">
            <h1 style="font-size: 3rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">Nos Cours & Formations</h1>
            <p style="font-size: 1.2rem; color: #e0e0e0; margin-top: 10px;">Découvrez les enseignements du département informatique, du cycle préparatoire au cycle ingénieur.</p>
        </div>

        <div class="formations-container">
            
            <div class="formation-block">
                <div class="formation-header">Cycle Préparatoire</div>
                <div class="formation-content">
                    <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.8;">
                        <li>Algorithmique & Programmation (Python)</li>
                        <li>Mathématiques pour l’ingénieur</li>
                        <li>Introduction aux systèmes informatiques</li>
                        <li>Développement Web – HTML/CSS</li>
                    </ul>
                </div>
            </div>

            <div class="formation-block">
                <div class="formation-header">Cycle Ingénieur – Informatique</div>
                <div class="formation-content">
                    <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.8;">
                        <li>Programmation Orientée Objet (Java, C++)</li>
                        <li>Bases de données & SQL</li>
                        <li>Développement Web avancé (JS, PHP)</li>
                        <li>Réseaux & Cybersécurité</li>
                        <li>Cloud & DevOps</li>
                    </ul>
                </div>
            </div>

            <div class="formation-block">
                <div class="formation-header">Spécialisations</div>
                <div class="formation-content">
                    <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.8;">
                        <li>Intelligence Artificielle & Data Science</li>
                        <li>Cybersécurité & Forensic</li>
                        <li>Développement Logiciel & Architecture</li>
                        <li>Cloud Computing & Systèmes distribués</li>
                    </ul>
                </div>
            </div>

            <div class="formation-block">
                <div class="formation-header">Projets & Travaux Pratiques</div>
                <div class="formation-content">
                    <p style="margin-bottom: 10px;">Chaque semestre, les étudiants réalisent des projets concrets :</p>
                    <ul style="padding-left: 20px; line-height: 1.8;">
                        <li>Création d’applications web</li>
                        <li>Développement d’API</li>
                        <li>Projets IA (vision, NLP, modèles ML)</li>
                        <li>Challenges cybersécurité & CTF</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const blocks = document.querySelectorAll('.formation-block');
    
    blocks.forEach(block => {
        block.addEventListener('click', () => {
            // Ferme tous les autres blocs avant d'ouvrir celui-ci (Optionnel, mais plus propre)
            blocks.forEach(b => {
                if(b !== block) {
                    b.classList.remove('open');
                    b.querySelector('.formation-content').classList.remove('open');
                }
            });

            // Ouvre ou ferme le bloc cliqué
            block.classList.toggle('open');
            const content = block.querySelector('.formation-content');
            content.classList.toggle('open');
        });
    });
});
</script>

<?php require_once('includes/footer.php'); ?>