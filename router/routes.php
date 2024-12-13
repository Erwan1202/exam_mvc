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

$router->map('GET', '/', 'VeloController#accueil', 'accueil');
$router->map('GET', '/velos', 'VeloController#catalogue', 'velos');
$router->map('GET|POST', '/commander', 'CommandeController#commander', 'commandes');
$router->map('GET|POST', '/contact', 'ContactController#contact', 'contact');

$match = $router->match();

if ($match) {
    list($controllerName, $action) = explode('#', $match['target']);


    if (class_exists($controllerName)) {
        $controller = new $controllerName();

  
        if (method_exists($controller, $action)) {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->$action($_POST);
            } else {
                $controller->$action(); 
            }
        } else {

            echo "Action introuvable : " . $action;
        }
    } else {

        echo "Contrôleur introuvable : " . $controllerName;
    }
} else {

    echo "Page introuvable.";
}
?>
