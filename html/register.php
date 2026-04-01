<?php
// Initialisation du message de succès
$message_succes = "";

// Traitement du formulaire lors de la soumission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($email) && !empty($password)) {
        // Dans un vrai site, ici on enregistrerait dans la base de données MySQL
        $message_succes = "<div style='background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;'>
            ✅ Compte créé avec succès pour <strong>$email</strong> ! Vous pouvez maintenant vous connecter.
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - EFREI</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="margin: 0; font-family: 'Roboto', Arial, sans-serif;">

<nav class="navbar" style="background-color: #004d99; box-shadow: 0 4px 15px rgba(0,0,0,0.5); position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; display: flex; align-items: center; justify-content: space-between; padding: 20px 50px; box-sizing: border-box;">
    <img src="../image/Logo_Efrei_2022.svg.png" alt="Logo Efrei" style="width: 170px; height: auto;">
    <ul class="menu" style="display: flex; gap: 40px; list-style: none; margin: 0; padding: 0;">
        <li><a href="../index.php" style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Accueil</a></li>
        <li><a href="../cours.php" style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Cours & Formation</a></li>
        <li><a href="../equipe.php" style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Équipe enseignante</a></li>
        <li><a href="../evenement.php" style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Évènement</a></li>
        <li><a href="../contact.php" style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Contact</a></li>
    </ul>
</nav>

<main style="padding-top: 150px; min-height: 100vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('../image/campus-8421-Copie.jpg') center/cover fixed; display: flex; justify-content: center; align-items: center; padding-bottom: 80px; box-sizing: border-box;">
    
    <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.4); max-width: 400px; width: 90%; text-align: center;">
        <h1 style="color: #004d99; margin-bottom: 25px; font-size: 2.5rem;">Inscription</h1>
        
        <?php if (!empty($message_succes)) echo $message_succes; ?>
        
        <form action="register.php" method="POST" style="display: flex; flex-direction: column; gap: 15px; text-align: left;">
            <div>
                <label style="font-weight: bold; color: #333;">Email :</label>
                <input type="email" name="email" required style="width: 100%; padding: 12px; margin-top: 5px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
            </div>

            <div>
                <label style="font-weight: bold; color: #333;">Mot de passe :</label>
                <input type="password" name="password" required style="width: 100%; padding: 12px; margin-top: 5px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
            </div>

            <button type="submit" style="padding: 15px; background: #004d99; color: white; border: none; border-radius: 8px; font-weight: bold; font-size: 1.1rem; cursor: pointer; margin-top: 10px; transition: background 0.3s;">
                Créer mon compte
            </button>
        </form>

        <p style="margin-top: 25px; color: #555; font-size: 1rem;">Déjà un compte ? <br>
            <a href="login.php" style="color: #4da6ff; font-weight: bold; text-decoration: none;">Se connecter</a>
        </p>
    </div>

</main>

</body>
</html>