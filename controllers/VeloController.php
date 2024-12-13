<?php

require_once 'models/velo.php';

class VeloController {
    // Méthode d'accueil pour afficher le dernier vélo
    public function accueil() {
        global $pdo;
        $velo = new Velo($pdo);
    
        $dernierVelo = $velo->getDernierVelo();
    
        if (!$dernierVelo) {
            echo "Aucun vélo trouvé.";
        } else {
            echo "Vélo trouvé : " . htmlspecialchars($dernierVelo['nom']);
        }
        require_once __DIR__ . '/../views/acceuil.php';
    }

    public function catalogue() {
        global $pdo; // Assurez-vous que $pdo est une connexion valide
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos(); 
        
        if (!$velos) {
            echo "Aucun vélo trouvé.";
        } else {
            echo "prout";
        }// Récupère tous les vélos de la base de données

        // Passer les données des vélos à la vue catalogue
        require_once __DIR__ . '/../views/catalogue.php';
    }

    public function liste  (){
        global $pdo;
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos();
        require_once __DIR__ . '/../views/velos.php';
    }
}
?>
