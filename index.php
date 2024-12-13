<?php
require_once __DIR__ . '/config.php/config.php';  // Corrigé
require_once __DIR__ . '/controllers/VeloController.php';
require_once __DIR__ . '/controllers/CommandeController.php';
require_once __DIR__ . '/controllers/ContactController.php';

// Déterminer la page demandée
$page = $_GET['page'] ?? 'accueil';

// Gérer les différentes routes
switch ($page) {
    case 'accueil':
        $controller = new VeloController();
        $controller->accueil();  // Affiche la page d'accueil
        break;

    case 'velos':
        $controller = new VeloController();
        $controller->liste();  // Affiche la liste des vélos
        break;

    case 'commande':
        $controller = new CommandeController();
        $controller->formulaire();  // Affiche le formulaire de commande
        break;

    case 'contact':
        $controller = new ContactController();
        $controller->formulaire();  // Affiche le formulaire de contact
        break;

    default:
        echo "Page introuvable.";  // Si la page n'existe pas
        break;
}
?>
