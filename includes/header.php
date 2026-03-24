<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Département Informatique EFREI"; ?></title>
    
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.58/build/spline-viewer.js"></script>
</head>
<body>
    
    <nav class="navbar">
        <a href="index.php">
            <img src="image/Logo_Efrei_2022.svg.png" class="logo-img" alt="Logo Efrei">
        </a>

        <ul class="menu">
            <li><a href="cours.php">Cours & Formation</a></li>
            <li><a href="equipe.php">Équipe enseignante</a></li>
            <li><a href="contact.php">À propos / Contact</a></li>
        </ul>
    </nav>