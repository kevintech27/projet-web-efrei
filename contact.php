<?php
// 1. Initialisation de la variable du message
$message_succes = "";

// 2. Traitement du formulaire PHP (Étape 4 du projet)
// On vérifie si le formulaire a été envoyé avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupération et sécurisation des données (pour éviter les failles)
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification que les champs ne sont pas vides
    if (!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)) {
        // Création du message de succès personnalisé exigé par les consignes
        $message_succes = "<div class='alert alert-success' style='background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;'>
            Merci <strong>$nom</strong> ! Votre message concernant \"<em>$sujet</em>\" a bien été transmis au département.
        </div>";
    } else {
        $message_succes = "<div class='alert alert-danger' style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;'>
            Veuillez remplir tous les champs du formulaire.
        </div>";
    }
}

// 3. Inclusion de l'en-tête (Modularité exigée)
$pageTitle = "Contact & Admissions - Département Informatique";
require_once('includes/header.php'); 
?>

<main class="container page-contact" style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    <section class="contact-wrapper" style="display: flex; flex-wrap: wrap; gap: 40px; background: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); overflow: hidden;">
        
        <div class="contact-info" style="flex: 1; min-width: 300px; background: #004d99; color: white; padding: 40px;">
            <h1 style="margin-top: 0;">Contact & Admissions</h1>
            <p>Une question sur nos programmes (Post-bac, Cycle Ingénieur) ou sur la procédure d'admission (Parcoursup, Concours Puissance Alpha) ? Nous sommes là pour vous répondre.</p>
            
            <ul style="list-style: none; padding: 0; line-height: 2;">
                <li>📍 <strong>Campus de Villejuif</strong></li>
                <li>🚇 Accès : Métro Ligne 7 et 15</li>
                <li>📧 Email : departement-info@efrei.fr</li>
            </ul>

            <h3 style="margin-top: 30px;">Foire Aux Questions (FAQ)</h3>
            <p style="font-size: 0.9em; opacity: 0.9;">Retrouvez les réponses aux questions courantes sur la scolarité et la vie sur le campus en nous envoyant un message ci-contre.</p>
        </div>

        <div class="contact-form-container" style="flex: 1; min-width: 300px; padding: 40px;">
            
            <?php if (!empty($message_succes)) echo $message_succes; ?>

            <form action="contact.php" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                <div>
                    <label for="nom" style="font-weight: bold;">Nom complet</label><br>
                    <input type="text" id="nom" name="nom" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                
                <div>
                    <label for="email" style="font-weight: bold;">Adresse Email</label><br>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                
                <div>
                    <label for="sujet" style="font-weight: bold;">Sujet</label><br>
                    <input type="text" id="sujet" name="sujet" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                
                <div>
                    <label for="message" style="font-weight: bold;">Votre message</label><br>
                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                </div>
                
                <button type="submit" style="padding: 12px; background: #004d99; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                    Envoyer le message
                </button>
            </form>
        </div>

    </section>
</main>

<?php 
// 4. Inclusion du pied de page
require_once('includes/footer.php'); 
?>