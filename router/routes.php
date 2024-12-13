<?php
require_once __DIR__ . '/../../vendor/autoload.php';  // Charge les dépendances de Composer
require_once __DIR__ . '/../controllers/VeloController.php';
require_once __DIR__ . '/../controllers/CommandeController.php';
require_once __DIR__ . '/../controllers/ContactController.php';

// Initialisation du routeur AltoRouter
$router = new AltoRouter();

// Définir le chemin de base (si nécessaire)
$basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($basePath);

// Définition des routes
$router->map('GET', '/', 'VeloController#accueil', 'accueil');
$router->map('GET', '/velos', 'VeloController#liste', 'velos');
$router->map('GET|POST', '/commander', 'CommandeController#formulaire', 'commander');
$router->map('GET|POST', '/contact', 'ContactController#formulaire', 'contact');

// Récupération de la route actuelle
$match = $router->match();

// Vérification de la route correspondante
if ($match) {
    // Extraction du contrôleur et de l'action à appeler
    list($controllerName, $action) = explode('#', $match['target']);
    $controller = new $controllerName();

    // Appel de l'action avec les paramètres
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->$action($_POST);  // Passer les données POST pour enregistrer ou traiter
    } else {
        $controller->$action();  // Affichage de la page
    }
} else {
    // Gestion des pages non définies (404)
    echo "Page introuvable.";
}
?>
