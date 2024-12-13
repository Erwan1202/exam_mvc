<?php
require_once 'config.php'; // Assurez-vous que le chemin vers db.php est correct

try {
    // Test de requête simple
    $stmt = $pdo->query("SELECT 1");

    if ($stmt) {
        echo "Connexion à la base de données réussie.";
    } else {
        echo "La connexion est établie, mais la requête de test a échoué.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la connexion : " . $e->getMessage();
}
?>