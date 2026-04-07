<?php
$pageTitle = "À propos - Département Informatique EFREI";
require_once('includes/header.php');
?>

<script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.72/build/spline-viewer.js"></script>

<style>
    /* On crée un wrapper pour forcer le footer en bas */
    .page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        /* Toute la hauteur de l'écran */
    }

    body {
        background-color: transparent !important;
        margin: 0;
    }

    .spline-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: -100;
        background-color: #050505;
    }

    /* Le contenu prend tout l'espace disponible pour pousser le footer */
    .apropos-container {
        flex: 1;
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
        padding: 150px 20px 100px;
        /* Plus de padding en bas */
    }

    /* Style du footer spécifique à cette page pour qu'il soit propre sur la 3D */
    footer {
        position: relative;
        z-index: 10;
        background: rgba(0, 34, 68, 0.8) !important;
        /* Bleu EFREI semi-transparent */
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        width: 100%;
    }

    .glass-section {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 30px;
        padding: 60px 40px;
        margin-bottom: 60px;
        text-align: center;
        color: white;
    }

    .team-grid-apropos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .member-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        padding: 30px;
        color: white;
        text-align: center;
    }
</style>

<div class="page-wrapper">
    <div class="spline-bg">
        <spline-viewer url="https://prod.spline.design/18Ak-VrL3f8lWDuR/scene.splinecode"></spline-viewer>
    </div>

    <main class="apropos-container">
        <section class="glass-section">
            <h1 style="font-size: 3.5rem; color: #4da6ff; margin-bottom: 20px;">À propos du Projet</h1>
            <p style="font-size: 1.2rem; opacity: 0.9; line-height: 1.6;">
                Le département Informatique de l'EFREI forme les experts du numérique de demain.
                Cette plateforme centralise nos ressources et la gestion des permanences.
            </p>
        </section>

        <h2 style="color: white; text-align: center; font-size: 2.5rem; margin-bottom: 40px;">L'Équipe Projet</h2>

        <div class="team-grid-apropos">
            <div class="member-card">
                <h3 style="color: #4da6ff;">Kevin</h3>
                <p style="font-weight: bold; font-size: 0.8rem; text-transform: uppercase;">Lead Developer</p>
                <p style="opacity: 0.8; font-size: 0.95rem;">Architecture PHP, Base de données MySQL et intégration 3D
                    Spline.</p>
            </div>
            <div class="member-card">
                <h3 style="color: #4da6ff;">Amir</h3>
                <p style="font-weight: bold; font-size: 0.8rem; text-transform: uppercase;">Dev Front-End</p>
                <p style="opacity: 0.8; font-size: 0.95rem;">Structure HTML et conception des pages de formation.</p>
            </div>
            <div class="member-card">
                <h3 style="color: #4da6ff;">Nati</h3>
                <p style="font-weight: bold; font-size: 0.8rem; text-transform: uppercase;">Intégrateur</p>
                <p style="opacity: 0.8; font-size: 0.95rem;">Mise en page dynamique et interactivité utilisateur.</p>
            </div>
            <div class="member-card">
                <h3 style="color: #4da6ff;">Alexandre</h3>
                <p style="font-weight: bold; font-size: 0.8rem; text-transform: uppercase;">Dev Backend</p>
                <p style="opacity: 0.8; font-size: 0.95rem;">Logique serveur et gestion des évènements du département.
                </p>
            </div>
        </div>
    </main>

    <?php require_once('includes/footer.php'); ?>
</div>