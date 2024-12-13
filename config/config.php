<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'smartbike');
define('DB_USER', 'erwan');
define('DB_PASS', 'votre_mot_de_passe');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
