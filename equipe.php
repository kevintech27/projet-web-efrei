<?php
$pageTitle = "Équipe enseignante - EFREI";
require_once('includes/header.php');

// Données dynamiques des enseignants (Étape 5 du projet)
$enseignants = [
    ["nom" => "A Yvan Guifo Fodjo", "matiere" => "Architecture d'ordinateur", "description" => "Doctorat en informatique (génie logiciel, modélisation).", "image" => "image/1715325978402.jpeg"],
    ["nom" => "Guillaume Oudenot", "matiere" => "Marketing", "description" => "Responsable du département communication.", "image" => "image/1718219480383.jpeg"],
    ["nom" => "Mourad Kmimech", "matiere" => "Programmation C", "description" => "Enseignant chez EFREI - Grande école du numérique.", "image" => "image/1697374531309-2.jpeg"],
    ["nom" => "Jean-Baptiste Dussert", "matiere" => "Communication", "description" => "Rédacteur indépendant et Enseignant-Chercheur.", "image" => "image/1516518500666.jpeg"],
    ["nom" => "Soumaila DIARRA", "matiere" => "Élaboration projet", "description" => "Expert DevSecOps BPCE.", "image" => "image/1720186460129.jpeg"],
    ["nom" => "Yaovi Giovani SOGLO", "matiere" => "Réseau", "description" => "Enseignant et Responsable Pédagogique.", "image" => "image/1711132488694.jpeg"]
];
?>

<style>
    /* Global Page Style */
    .team-page-bg {
        background-color: #f8f9fa;
        /* Fond clair pro */
        padding: 120px 0 60px;
        min-height: 100vh;
        color: #1a1a1a;
    }

    .container-wide {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 40px;
        position: relative;
    }

    .section-title {
        font-size: 2.5rem;
        margin-bottom: 40px;
        font-weight: 700;
    }

    /* Slider Styles */
    .slider-wrapper {
        overflow: hidden;
        padding: 20px 0;
    }

    .slider-track {
        display: flex;
        gap: 30px;
        transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .team-card-new {
        min-width: 450px;
        /* Taille large comme sur ton image */
        background: #fff;
        border-radius: 40px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
        transition: transform 0.3s;
    }

    .team-img-container {
        height: 450px;
        background: #e9ecef;
    }

    .team-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-info-box {
        padding: 30px;
    }

    .card-info-box h3 {
        font-size: 1.4rem;
        margin: 0 0 10px;
        color: #004d99;
    }

    .card-info-box .role-tag {
        font-weight: 600;
        color: #666;
        margin-bottom: 10px;
        display: block;
    }

    /* Navigation Arrows */
    .nav-controls {
        display: flex;
        gap: 15px;
        margin-top: 30px;
        justify-content: flex-end;
    }

    .arrow-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 1px solid #ddd;
        background: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: 0.3s;
    }

    .arrow-btn:hover {
        background: #004d99;
        color: white;
        border-color: #004d99;
    }

    /* Publications Section */
    .publications-section {
        margin-top: 100px;
        padding-top: 60px;
        border-top: 1px solid #dee2e6;
    }

    .publi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .publi-card {
        padding: 25px;
        background: white;
        border-radius: 20px;
        border: 1px solid #eee;
    }

    .publi-card .date {
        color: #888;
        font-size: 0.9rem;
    }

    .publi-card h4 {
        margin: 15px 0;
        color: #1a1a1a;
        line-height: 1.4;
    }
</style>

<section class="team-page-bg">
    <div class="container-wide">
        <h1 class="section-title">Notre Équipe Enseignante</h1>

        <div class="slider-wrapper">
            <div class="slider-track" id="sliderTrack">
                <?php foreach ($enseignants as $prof): ?>
                    <article class="team-card-new">
                        <div class="team-img-container">
                            <img src="<?php echo $prof['image']; ?>" alt="Photo de <?php echo $prof['nom']; ?>">
                        </div>
                        <div class="card-info-box">
                            <span class="role-tag"><?php echo $prof['matiere']; ?></span>
                            <h3><?php echo $prof['nom']; ?></h3>
                            <p><?php echo $prof['description']; ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="nav-controls">
            <button class="arrow-btn" onclick="slide(-1)">❮</button>
            <button class="arrow-btn" onclick="slide(1)">❯</button>
        </div>

        <div class="publications-section">
            <h2 class="section-title">Dernières Publications</h2>
            <div class="publi-grid">
                <div class="publi-card">
                    <span class="date">05 Avril 2026</span>
                    <h4>L'intelligence artificielle générative dans l'enseignement supérieur : Défis et opportunités.
                    </h4>
                    <p>Une étude menée par le département informatique de l'EFREI.</p>
                </div>
                <div class="publi-card">
                    <span class="date">02 Avril 2026</span>
                    <h4>Nouveau Bachelor en Cybersécurité : Ouverture des inscriptions pour la rentrée 2026.</h4>
                    <p>Découvrez les détails de notre nouveau cursus spécialisé.</p>
                </div>
                <div class="publi-card">
                    <span class="date">28 Mars 2026</span>
                    <h4>Retour sur le Hackathon EFREI 2026 : 48h d'innovation intense.</h4>
                    <p>Félicitations aux gagnants de cette édition record.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let currentPos = 0;
    const track = document.getElementById('sliderTrack');
    const cards = document.querySelectorAll('.team-card-new');
    const cardTotal = cards.length;

    function slide(direction) {
        // Largeur d'une carte + le gap (30px)
        const slideWidth = cards[0].offsetWidth + 30;

        currentPos += direction;

        // Sécurité pour ne pas sortir du slider
        if (currentPos < 0) currentPos = 0;
        if (currentPos > cardTotal - 2) currentPos = cardTotal - 2;

        const offset = currentPos * slideWidth;
        track.style.transform = `translateX(-${offset}px)`;
    }
</script>

<?php include 'includes/footer.php'; ?>