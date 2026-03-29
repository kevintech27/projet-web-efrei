<?php 
$pageTitle = "Équipe enseignante - EFREI";
require_once('includes/header.php'); 

// =========================================================================
// TABLEAU DYNAMIQUE PHP (Consigne validée pour les points du projet !)
// =========================================================================
$enseignants = [
    [
        "nom" => "A Yvan Guifo Fodjo",
        "matiere" => "Enseignant d'architecture d'ordinateur",
        "description" => "Doctorat en informatique (génie logiciel, modélisation et simulation de systèmes complexes, technologies numériques durables).",
        "image" => "image/1715325978402.jpeg"
    ],
    [
        "nom" => "Guillaume Oudenot",
        "matiere" => "Enseignant de Marketing",
        "description" => "RESPONSABLE DU DEPARTEMENT COMMUNICATION & MARKETING DIGITAL.",
        "image" => "image/1718219480383.jpeg"
    ],
    [
        "nom" => "Mourad Kmimech",
        "matiere" => "Enseignant de programmation en C",
        "description" => "Enseignant chez EFREI - Grande école du numérique.",
        "image" => "image/1697374531309-2.jpeg"
    ],
    [
        "nom" => "Jean-Baptiste Dussert",
        "matiere" => "Professeur de communication",
        "description" => "Rédacteur indépendant et Enseignant-Chercheur.",
        "image" => "image/1516518500666.jpeg"
    ],
    [
        "nom" => "Soumaila Abdoulaye DIARRA",
        "matiere" => "Enseignant d'élaboration projet",
        "description" => "DevSecOps Expert 🛡️ @BPCE | Software engineering, Security, Flutter enthusiast.",
        "image" => "image/1720186460129.jpeg"
    ],
    [
        "nom" => "Yaovi Giovani SOGLO",
        "matiere" => "Enseignant Réseau",
        "description" => "Enseignant, Responsable Pédagogique.",
        "image" => "image/1711132488694.jpeg"
    ]
];
?>

<section class="team-page-bg" style="padding-top: 130px;">
    <div class="team-showcase">
        <div class="team-header">
            <h1>Équipe enseignante</h1>
            <p>
                Découvrez les enseignants qui accompagnent les étudiants avec expertise,
                exigence académique et engagement professionnel.
            </p>
        </div>

        <div class="team-wrapper">
            <button class="team-arrow team-arrow-left" onclick="scrollTeam(-1)">&#10094;</button>

            <div class="team-slider" id="teamSlider">
                
                <?php 
                // =========================================================
                // LA BOUCLE PHP : Fini le copier-coller du HTML !
                // =========================================================
                foreach ($enseignants as $prof) { 
                ?>
                    <article class="team-card">
                        <div class="team-image">
                            <img src="<?php echo $prof['image']; ?>" alt="Photo de <?php echo $prof['nom']; ?>">
                            <div class="team-overlay">
                                <h2><?php echo $prof['matiere']; ?></h2>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3><?php echo $prof['nom']; ?></h3>
                            <p><?php echo $prof['description']; ?></p>
                        </div>
                    </article>
                <?php 
                } // Fin de la boucle 
                ?>

            </div>

            <button class="team-arrow team-arrow-right" onclick="scrollTeam(1)">&#10095;</button>
        </div>
    </div>
</section>

<script>
// Le script de ton camarade Nati conservé intact !
function scrollTeam(direction) {
    const slider = document.getElementById('teamSlider');
    const card = slider.querySelector('.team-card');
    const gap = 40;
    const cardWidth = card.offsetWidth + gap;

    slider.scrollBy({
        left: direction * cardWidth,
        behavior: 'smooth'
    });
}
</script>

<?php include 'includes/footer.php'; ?>