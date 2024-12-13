<?php

require_once 'models/velo.php';

class VeloController {
    // Méthode d'accueil pour afficher le dernier vélo
    public function accueil() {
        global $pdo;
        $velo = new Velo($pdo);
    
        // Vérification de la récupération du dernier vélo
        $dernierVelo = $velo->getDernierVelo();
    
        if (!$dernierVelo) {
            echo "Aucun vélo trouvé.";
        } else {
            echo "Vélo trouvé : " . htmlspecialchars($dernierVelo['nom']);
        }
    
        // Inclure la vue d'accueil
        require_once __DIR__ . '/../views/acceuil.php';
    }

    // Méthode pour afficher tous les vélos
    public function liste() {
        global $pdo;  // Assurez-vous d'avoir bien une connexion à la base de données
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos();  // Récupère tous les vélos de la base de données
    
        // Passer la variable $velos à la vue
        require_once 'views/velos.php';
    }

    public function getTousLesVelos() {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=smartbike', 'root', '');
        $sql = 'SELECT * FROM velos';  // Assurez-vous que cette table et les colonnes existent
        $stmt = $pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Retourne un tableau associatif de tous les vélos
    }
}
?>
