<?php
require_once __DIR__ . '/config/config.php'; 
require_once __DIR__ . '/controllers/VeloController.php';
require_once __DIR__ . '/controllers/CommandeController.php';
require_once __DIR__ . '/controllers/ContactController.php';


$page = $_GET['page'] ?? 'accueil';


switch ($page) {
    case 'accueil':
        $controller = new VeloController();
        $controller->accueil();  
        break;

    case 'velos':
        $controller = new VeloController();
        $controller->catalogue();  
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
        break;
}
?>
