<?php
// 1. DÉBUG ET SESSIONS (TOUJOURS EN PREMIER)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// 2. VÉRIFICATION DU FICHIER DB
$db_path = '../includes/db.php';
if (!file_exists($db_path)) {
    die("ERREUR CRITIQUE : Le fichier $db_path est introuvable. Vérifie tes dossiers !");
}
require_once($db_path);

$message_connexion = "";

// 3. LOGIQUE DE CONNEXION (UNIQUEMENT EN POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        try {
            $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['mot_de_passe'])) {
                $_SESSION['user_email'] = $user['email'];
                // On redirige
                header("Location: espace_eleve.php");
                exit();
            } else {
                $message_connexion = "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px;'>❌ Email ou mot de passe incorrect.</div>";
            }
        } catch (PDOException $e) {
            $message_connexion = "<div style='color:red;'>Erreur Base de données : " . $e->getMessage() . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion - EFREI</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body
    style="background: #1a1a1a; color: white; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

    <div style="background: white; color: #333; padding: 40px; border-radius: 15px; width: 350px; text-align: center;">
        <h1 style="color: #004d99;">Connexion</h1>

        <?php echo $message_connexion; ?>

        <form action="login.php" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="email" name="email" placeholder="Email" required
                style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            <input type="password" name="password" placeholder="Mot de passe" required
                style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            <button type="submit"
                style="padding: 12px; background: #004d99; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Se
                connecter</button>
        </form>

        <p style="margin-top: 20px; font-size: 0.9rem;">
            Pas de compte ? <a href="register.php" style="color: #4da6ff;">Créer un compte</a>
        </p>
        <p><a href="../index.php" style="text-decoration: none; color: #666;">← Retour à l'accueil</a></p>
    </div>

</body>

</html>