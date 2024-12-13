<?php
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
        $controller->formulaire();
        break;
    case 'contact':
        require_once 'controllers/ContactController.php';
        $controller = new ContactController();
        $controller->formulaire();
        break;
    default:
        echo "Page introuvable.";
}
?>
