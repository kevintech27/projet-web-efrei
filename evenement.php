<?php
$pageTitle = "Evenement et Vie étudiante - EFREI";
require_once('includes/header.php');
?>
<body>
  <h1 class="titre-evenement"> Évènements & Vie étudiante </h1>
  <main class="evenement-container">
    <section class="installations">
      <h2>Campus et infrastructures informatique</h2>
      <p>Le campus de Villejuif offre des laboratoires informatiques modernes, des espaces de coworking, des salles de projet et des ressources numériques accessibles aux étudiants.</p>
      <p>Les étudiants ont également accès à des plateformes pédagogiques comme Moodle et des ressources et archives sur l'espace Myefrei .</p>
    
    <ul class="galerie-campus">

        <li>
          <figure>
            <img src="campusmaison.jpeg"
                 alt="Campus principal de l'Efrei : La Maison" width="120">
            <figcaption>Campus principal de l'Efrei : La Maison</figcaption>
          </figure>
        </li>

        <li>
          <figure>
            <img src="laboratoires.jpeg"
                 alt="Laboratoires Innovation Labs" width="120">
            <figcaption>Laboratoires Innovation Labs pour projets 3D, maquettes et prototypes</figcaption>
          </figure>
        </li>

        <li>
          <figure>
            <img src="newrepublic.jpeg"
                 alt="Bâtiment New Republic" width="120">
            <figcaption>Nouveau bâtiment New Republic (rentrée 2026)</figcaption>
          </figure>
        </li>

        <li>
          <figure>
            <img src="sallecours.jpeg"
                 alt="Salle de cours moderne à l'Efrei" width="120">
            <figcaption>Salle de cours type équipée pour étudiants et enseignants</figcaption>
          </figure>
        </li>

      </ul>
    </section>

    <section class="associations">
      <h2>Découvrez tout les clubs et associations étudiantes</h2>
      <p>De nombreuses associations étudiantes sont liés à différents domaines dans l'école comme le Sport, tech, culture, humanitaire, médias…, la vie associative de l’Efrei est riche et variée</p>
      <p>Il existe plus de 65 associations et clubs</p>

    <ul class="liste-assos">

        <li>
          <figure>
            <img src="logoonepantheon.jpeg"
                 alt="Logo One Panthéon" width="50">
            <figcaption>Association de projets en développement informatique : One Panthéon</figcaption>
          </figure>
        </li>

        <li>
          <figure>
            <img src="logoice.jpeg"
                 alt="Logo ICE" width="50">
            <figcaption>Association d’innovation et conception : ICE</figcaption>
          </figure>
        </li>

        <li>
          <figure>
            <img src="logo4esport.jpeg"
                 alt="Logo 4eSport" width="50">
            <figcaption>Association d’e-sport : 4eSport</figcaption>
          </figure>
        </li>

      </ul>
    </section>

    <section class="projets">
      <h2>Projets étudiants</h2>
      <p>Voici quelques projets, innovations et challenges réalisés par les étudiants et associations.</p>

      <ul class="liste-projets">
        <li>
          <figure>
            <img src="deficyber.jpeg"
                 alt="Défi Cyber" width="50">
            <figcaption>
              Challenge Cybersécurité : Hackathon intensif où les étudiants travaillent en équipe pendant 24 à 48h pour résoudre un problème informatique.
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="techday.jpeg"
                 alt="Tech Day 2024" width="50">
            <figcaption>
              Tech Day 2024 : 7 projets ingénieurs pour révolutionner le monde, transformer la créativité en innovation technologique
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
  </main>
</body>

  <script>

document.addEventListener("DOMContentLoaded", () => {

    const titre = document.querySelector(".titre-evenement");
    titre.style.opacity = "0";
    titre.style.transform = "translateY(-20px)";
    titre.style.transition = "opacity 0.8s ease, transform 0.8s ease";

    setTimeout(() => {
        titre.style.opacity = "1";
        titre.style.transform = "translateY(0)";
    }, 200);


    const sections = document.querySelectorAll(".installations, .associations, .projets");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.2 });

    sections.forEach(section => observer.observe(section));


    const cards = document.querySelectorAll(".galerie-campus li, .liste-assos li, .liste-projets li");

    cards.forEach(card => {
        card.addEventListener("mouseenter", () => {
            card.style.transform = "scale(1.03)";
            card.style.transition = "0.3s";
        });

        card.addEventListener("mouseleave", () => {
            card.style.transform = "scale(1)";
        });
    });

});
</script>

<?php require_once('includes/footer.php'); ?>