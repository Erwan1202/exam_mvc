<?php
require_once __DIR__ . '/../config/config.php';  
require_once __DIR__ . '/../vendor/autoload.php';  
require_once __DIR__ . '/../controllers/VeloController.php';
require_once __DIR__ . '/../controllers/CommandeController.php';
require_once __DIR__ . '/../controllers/ContactController.php';


$router = new AltoRouter();

$basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($basePath);

$router->map('GET', '/', 'VeloController#accueil', 'accueil');
$router->map('GET', '/velos', 'VeloController#liste', 'velos');
$router->map('GET|POST', '/commander', 'CommandeController#formulaire', 'commander');
$router->map('GET|POST', '/contact', 'ContactController#formulaire', 'contact');


$match = $router->match();


if ($match) {

    list($controllerName, $action) = explode('#', $match['target']);
    $controller = new $controllerName();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->$action($_POST);  
    } else {
        $controller->$action(); 
    }
} else {

    echo "Page introuvable.";
}
?>
