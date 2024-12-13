<?php
require_once '/../models/velo.php';

class VeloController {
    public function accueil() {
        global $pdo;
        $velo = new Velo($pdo);
        $dernierVelo = $velo->getDernierVelo();
        require 'views/accueil.php';
    }

    public function liste() {
        global $pdo;
        $velo = new Velo($pdo);
        $velos = $velo->getTousLesVelos();
        require 'views/velos.php';
    }
}
?>
