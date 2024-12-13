<?php

require_once 'models/velo.php';

class VeloController {
    // Méthode d'accueil pour afficher le dernier vélo
    public function accueil() {
        global $pdo;
        $velo = new Velo($pdo);

        // Récupérer le dernier vélo ajouté
        $dernierVelo = $velo->getDernierVelo();

        // Inclure la vue d'accueil et transmettre le dernier vélo
        require_once 'views/accueil.php';
    }

    // Méthode pour afficher tous les vélos
    public function liste() {
        global $pdo;
        $velo = new Velo($pdo);

        // Récupérer tous les vélos
        $velos = $velo->getTousLesVelos();

        // Inclure la vue avec la liste des vélos
        require_once 'views/velo.php';
    }
}
?>
