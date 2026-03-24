<?php include 'includes/header.php'; ?>

<section class="team-page-bg">
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

                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1715325978402.jpeg" alt="Enseignant 1">
                        <div class="team-overlay">
                            <h2>Enseignant d'architecture d'ordinateur</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>A Yvan Guifo Fodjo</h3>
                        <p>Doctorat en informatique (génie logiciel, modélisation et simulation de systèmes complexes, technologies numériques durables)</p>
                    </div>
                </article>

                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1718219480383.jpeg" alt="Enseignant 2">
                        <div class="team-overlay">
                            <h2>Enseignant de Marketing</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Guillaume Oudenot</h3>
                        <p>RESPONSABLE DU DEPARTEMENT COMMUNICATION & MARKETING DIGITAL</p>
                    </div>
                </article>

                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1697374531309-2.jpeg" alt="Enseignant 3">
                        <div class="team-overlay">
                            <h2>Enseignant de programation en C</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Mourad Kmimech</h3>
                        <p>Enseignant chez EFREI- Grande écolé du numérique</p>
                    </div>
                </article>

                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1516518500666.jpeg" alt="Enseignant 4">
                        <div class="team-overlay">
                            <h2>Professeur de communication</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Jean-Baptiste Dussert</h3>
                        <p>Rédacteur indépendant et Enseignant-Chercheur</p>
                    </div>
                </article>

                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1720186460129.jpeg" alt="Enseignant 5">
                        <div class="team-overlay">
                            <h2>Enseignant d'elaboration projet</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Soumaila Abdoulaye DIARRA</h3>
                        <p>DevSecOps Expert🛡️@BPCE | Software engineering, Security, Flutter enthusiast </p>
                    </div>
                </article>


                <article class="team-card">
                    <div class="team-image">
                        <img src="image/1711132488694.jpeg" alt="Enseignant 7">
                        <div class="team-overlay">
                            <h2>Enseignant Réseau</h2>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Yaovi Giovani SOGLO</h3>
                        <p>Enseignant, Responsable Pédagogique</p>
                    </div>
                </article>

            </div>

            <button class="team-arrow team-arrow-right" onclick="scrollTeam(1)">&#10095;</button>
        </div>
    </div>
</section>

<script>
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