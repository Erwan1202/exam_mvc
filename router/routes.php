<?php
require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../config/config.php';  
require_once __DIR__ . '/../vendor/autoload.php';  
require_once __DIR__ . '/../controllers/VeloController.php';
require_once __DIR__ . '/../controllers/CommandeController.php';
require_once __DIR__ . '/../controllers/ContactController.php';

$router = new AltoRouter();

$basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($basePath);

// Définition des routes
$router->map('GET', '/', 'VeloController#accueil', 'accueil');
$router->map('GET', '/velos', 'VeloController#catalogue', 'velos');
$router->map('GET|POST', '/commander', 'CommandeController#commander', 'commandes');
$router->map('GET|POST', '/contact', 'ContactController#contact', 'contact');

// Récupération de la route correspondante
$match = $router->match();

if ($match) {
    list($controllerName, $action) = explode('#', $match['target']);

    // Vérification de l'existence du contrôleur
    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        // Vérification de l'existence de l'action dans le contrôleur
        if (method_exists($controller, $action)) {
            // Si c'est une requête POST, on passe les données
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->$action($_POST);
            } else {
                $controller->$action();  // Sinon, on appelle l'action sans paramètres
            }
        } else {
            // Si l'action n'existe pas, on affiche une erreur 404
            echo "Action introuvable : " . $action;
        }
    } else {
        // Si le contrôleur n'existe pas, on affiche une erreur 404
        echo "Contrôleur introuvable : " . $controllerName;
    }
} else {
    // Si aucune route ne correspond, afficher une page 404
    echo "Page introuvable.";
}
?>
