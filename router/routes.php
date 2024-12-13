<?php
// Récupération de la page demandée, par défaut 'accueil'
$page = $_GET['page'] ?? 'accueil';

switch ($page) {
    case 'accueil':
        require_once 'controllers/VeloController.php';
        $controller = new VeloController();
        $controller->accueil();
        break;

    case 'velos':
        require_once 'controllers/VeloController.php';
        $controller = new VeloController();
        $controller->liste();
        break;

    case 'commander':
        require_once 'controllers/CommandeController.php';
        $controller = new CommandeController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->enregistrer(); // Gestion des commandes (POST)
        } else {
            $controller->formulaire(); // Affichage du formulaire (GET)
        }
        break;

    case 'contact':
        require_once 'controllers/ContactController.php';
        $controller = new ContactController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->enregistrer(); // Gestion des messages de contact (POST)
        } else {
            $controller->formulaire(); // Affichage du formulaire (GET)
        }
        break;

    default:
        echo "Page introuvable."; // Gestion des pages non définies
}
?>
