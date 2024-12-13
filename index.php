<?php
require_once __DIR__  . '/config.php/config.php';
require_once __DIR__  . '/controllers/VeloController.php';
require_once __DIR__  . '/controllers/CommandeController.php';
require_once __DIR__  . '/controllers/ContactController.php';

// Déterminer la page demandée
$page = $_GET['page'] ?? 'accueil';

// Gérer les différentes routes
switch ($page) {
    case 'accueil':
        $controller = new VeloController();
        $controller->accueil();
        break;

    case 'velos':
        $controller = new VeloController();
        $controller->liste();
        break;

    case 'commande':
        $controller = new CommandeController();
        $controller->formulaire();
        break;

    case 'contact':
        $controller = new ContactController();
        $controller->formulaire();
        break;

    default:
        echo "Page introuvable.";
}
?>
