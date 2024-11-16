<?php

// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fonction d'autoloading pour charger les classes automatiquement
function autoloader($class_name) {
    $file = '../app/' . (strpos($class_name, 'Controller') ? 'controllers/' : 'models/') . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloader');

// Récupérer le contrôleur et l'action depuis l'URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'cours';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Créer dynamiquement le nom du contrôleur
$controllerClass = ucfirst($controller) . 'Controller';

// Vérifier si la classe du contrôleur existe
if (!class_exists($controllerClass)) {
    die("Erreur : Le contrôleur '$controllerClass' n'existe pas.");
}

// Créer une instance du contrôleur et appeler l'action
$controllerObj = new $controllerClass();
if (method_exists($controllerObj, $action)) {
    $controllerObj->$action($id);
} else {
    die("Erreur : L'action '$action' n'existe pas.");
}
