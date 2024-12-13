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
        global $pdo;
        $velo = new Velo($pdo);

        // Récupérer tous les vélos
        $velos = $velo->getTousLesVelos();

        // Inclure la vue avec la liste des vélos
        require_once __DIR__ . '/views/velo.php';
    }
}
?>
