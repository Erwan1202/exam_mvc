<?php

require_once 'models/velo.php';
require_once 'config/config.php';

class VeloController {

    
    public function accueil() {
        global $pdo;
        $velo = new Velo($pdo);
    
        $dernierVelo = $velo->getDernierVelo();
    
        if (!$dernierVelo) {
            echo "Aucun vélo trouvé.";
        } else {
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

}
?>
