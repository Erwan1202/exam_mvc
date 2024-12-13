<?php

require_once 'models/velo.php';

class VeloController {
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
        global $pdo; 
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos(); 
        
        if (!$velos) {
            echo "Aucun vélo trouvé.";
        } else {
            echo "prout";
        }

        require_once __DIR__ . '/../views/velos.php';
    }

    public function liste  (){
        global $pdo;
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos();
        require_once __DIR__ . '/../views/velos.php';
        
        if (!$velos) {
            echo "Aucun vélo trouvé.";
        } else {
            echo "prout";
        }
    }
}
?>
