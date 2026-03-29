<?php
// 1. Initialisation de la variable du message
$message_succes = "";

// 2. Traitement du formulaire PHP avec sécurité anti-spam (Étape 4 du projet validée !)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sécurisation des données (pour éviter les failles XSS)
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification que les champs ne sont pas vides
    if (!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)) {
        // Message de succès premium
        $message_succes = "<div style='background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 25px; border: 1px solid #c3e6cb;'>
            ✅ Merci <strong>$nom</strong> ! Votre message concernant \"<em>$sujet</em>\" a bien été transmis au département.
        </div>";
    } else {
        // Message d'erreur
        $message_succes = "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 25px; border: 1px solid #f5c6cb;'>
            ❌ Veuillez remplir tous les champs obligatoires du formulaire.
        </div>";
    }
}

// 3. Inclusion de l'en-tête
$pageTitle = "Contact & Admissions - EFREI";
require_once('includes/header.php'); 
?>

<main style="padding-top: 130px; padding-bottom: 80px; min-height: 100vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.8)), url('image/campus-8421-Copie.jpg') center/cover fixed; display: flex; align-items: center; justify-content: center;">
    
    <div style="display: flex; flex-wrap: wrap; max-width: 1000px; width: 90%; background: #ffffff; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.4); overflow: hidden;">
        
        <div style="flex: 1; min-width: 300px; background: #004d99; color: white; padding: 50px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Contact & Admissions</h2>
            <p style="font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px; opacity: 0.9;">
                Une question sur nos programmes (Post-bac, Cycle Ingénieur) ou sur la procédure d'admission ? Nous sommes là pour vous répondre.
            </p>
            
            <ul style="list-style: none; padding: 0; font-size: 1.1rem; line-height: 2;">
                <li style="margin-bottom: 15px;">📍 <strong>Campus de Villejuif</strong></li>
                <li style="margin-bottom: 15px;">🚇 Accès : Métro Ligne 7 et 15</li>
                <li style="margin-bottom: 15px;">📧 Email : departement-info@efrei.fr</li>
            </ul>
        </div>

        <div style="flex: 1.2; min-width: 300px; padding: 50px; background: #f8f9fa;">
            
            <?php if (!empty($message_succes)) echo $message_succes; ?>

            <form action="contact.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nom" style="font-weight: bold; color: #333;">Nom complet</label>
                    <input type="text" id="nom" name="nom" required style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; font-family: 'Roboto', sans-serif;">
                </div>
                
                <div>
                    <label for="email" style="font-weight: bold; color: #333;">Adresse Email</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; font-family: 'Roboto', sans-serif;">
                </div>
                
                <div>
                    <label for="sujet" style="font-weight: bold; color: #333;">Sujet</label>
                    <input type="text" id="sujet" name="sujet" required style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; font-family: 'Roboto', sans-serif;">
                </div>
                
                <div>
                    <label for="message" style="font-weight: bold; color: #333;">Votre message</label>
                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; font-family: 'Roboto', sans-serif; resize: vertical;"></textarea>
                </div>
                
                <button type="submit" style="padding: 15px; background: #004d99; color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: bold; cursor: pointer; transition: background 0.3s; margin-top: 10px;">
                    Envoyer le message
                </button>
            </form>
        </div>

    </div>
</main>

<?php require_once('includes/footer.php'); ?>