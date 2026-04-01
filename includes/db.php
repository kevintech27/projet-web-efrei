<?php
$servername = 'localhost';
$port = '3307'; // Ton port spécifique vu sur ta capture !
$username = 'root';
$password = 'root'; // MAMP utilise 'root' par défaut. Si ça bloque, essaie de laisser vide ''
$dbname = 'titan_contact';

try {
    // Connexion PDO avec le port 3307
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    // On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}
?>