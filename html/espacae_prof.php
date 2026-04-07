<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    // Si l'utilisateur n'est pas connecté, on le renvoie au login
    header("Location: login.php");
    exit();
}
require_once('../includes/db.php');

$message_succes = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matiere = htmlspecialchars(trim($_POST['matiere']));
    $date = $_POST['date'];
    $heure = $_POST['heure'];

    if (!empty($matiere) && !empty($date) && !empty($heure)) {
        try {
            // Requête SQL réelle pour insérer la permanence
            $sql = "INSERT INTO permanences (matiere, date_perm, heure_perm) VALUES (:matiere, :date_p, :heure_p)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                'matiere' => $matiere,
                'date_p' => $date,
                'heure_p' => $heure
            ]);

            $message_succes = "<div style='background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;'>
                ✅ La permanence en <strong>$matiere</strong> a été enregistrée en base de données !
            </div>";
        } catch (PDOException $e) {
            $message_succes = "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px;'>
                ❌ Erreur lors de l'enregistrement : " . $e->getMessage() . "
            </div>";
        }
    }
}

// On récupère les permanences existantes
$stmt = $conn->query("SELECT * FROM permanences ORDER BY date_perm DESC");
$mes_perms = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Professeur - EFREI</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="margin: 0; font-family: 'Roboto', Arial, sans-serif;">

    <nav class="navbar"
        style="background-color: #004d99; box-shadow: 0 4px 15px rgba(0,0,0,0.5); position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; display: flex; align-items: center; justify-content: space-between; padding: 20px 50px; box-sizing: border-box;">
        <img src="../image/Logo_Efrei_2022.svg.png" alt="Logo Efrei" style="width: 170px; height: auto;">
        <ul class="menu" style="display: flex; gap: 40px; list-style: none; margin: 0; padding: 0;">
            <li><a href="../index.php"
                    style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Accueil</a></li>
            <li><a href="../cours.php"
                    style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Cours &
                    Formation</a></li>
            <li><a href="../equipe.php"
                    style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Équipe
                    enseignante</a></li>
            <li><a href="../evenement.php"
                    style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Évènement</a></li>
            <li><a href="../contact.php"
                    style="color: white; text-decoration: none; font-size: 22px; font-weight: 600;">Contact</a></li>
        </ul>
    </nav>

    <main
        style="padding-top: 150px; min-height: 100vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('../image/campus-8421-Copie.jpg') center/cover fixed; color: white; padding-bottom: 80px; box-sizing: border-box;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">

            <h1
                style="font-size: 3rem; text-align: center; margin-bottom: 40px; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
                Espace Professeur</h1>

            <?php if (!empty($message_succes))
                echo $message_succes; ?>

            <section class="formations-container">
                <div class="formation-block">
                    <div class="formation-header">Créer une permanence</div>
                    <div class="formation-content">
                        <form action="espace_prof.php" method="POST"
                            style="display: flex; flex-direction: column; padding-top: 15px;">
                            <label style="font-weight: bold; margin-bottom: 5px;">Matière :</label>
                            <input type="text" name="matiere" required
                                style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: none; font-family: 'Roboto', sans-serif;">

                            <label style="font-weight: bold; margin-bottom: 5px;">Date :</label>
                            <input type="date" name="date" required
                                style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: none; font-family: 'Roboto', sans-serif;">

                            <label style="font-weight: bold; margin-bottom: 5px;">Heure :</label>
                            <input type="time" name="heure" required
                                style="width: 100%; padding: 10px; margin-bottom: 20px; border-radius: 5px; border: none; font-family: 'Roboto', sans-serif;">

                            <button type="submit"
                                style="padding: 12px; background: #4da6ff; color: #002244; border: none; border-radius: 5px; font-weight: bold; font-size: 1.1rem; cursor: pointer;">Créer
                                la permanence</button>
                        </form>
                    </div>
                </div>

                <div class="formation-content" id="permanences-prof" style="padding-top: 150px; padding-top: 15px;">
                    <?php if (empty($mes_perms)): ?>
                        <p style="font-style: italic; opacity: 0.8;">Aucune permanence créée pour le moment.</p>
                    <?php else: ?>
                        <table style="width: 100%; border-collapse: collapse; color: white;">
                            <thead>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                                    <th style="padding: 10px; text-align: left;">Matière</th>
                                    <th style="padding: 10px; text-align: left;">Date</th>
                                    <th style="padding: 10px; text-align: left;">Heure</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mes_perms as $p): ?>
                                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                        <td style="padding: 10px;"><?php echo htmlspecialchars($p['matiere']); ?></td>
                                        <td style="padding: 10px;"><?php echo htmlspecialchars($p['date_perm']); ?></td>
                                        <td style="padding: 10px;"><?php echo htmlspecialchars($p['heure_perm']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </section>

        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const blocks = document.querySelectorAll('.formation-block');
            blocks.forEach(block => {
                block.addEventListener('click', (e) => {
                    if (e.target.tagName === 'INPUT' || e.target.tagName === 'BUTTON') return;
                    block.classList.toggle('open');
                    const content = block.querySelector('.formation-content');
                    content.classList.toggle('open');
                });
            });
        });
    </script>

</body>

</html>