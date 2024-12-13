<?php
require_once 'models/commandes.php';

class CommandeController {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function formulaire() {
        require_once 'views/commande.php';
    }

    public function enregistrer() {
        $commande = new Commande($this->pdo);
        $commande->enregistrer($_POST);
        header('Location: index.php?page=accueil');
    }
}
?>
