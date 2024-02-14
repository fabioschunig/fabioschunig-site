<?php

use FabioSchunig\Site\Controller\ErrorController;
use FabioSchunig\Site\Model\Route;

require_once __DIR__ . '/../vendor/autoload.php';

// get configured routes to controllers
$routes = require_once __DIR__ . '/../src/config/routes.php';

// get route
$routeModel = new Route($_SERVER, $routes);
$controllerClass = $routeModel->getRouteControllerClass();
if (!$controllerClass) {
    $controllerClass = ErrorController::class;
}
$controller = new $controllerClass();

// all controllers must have the "execute" method

/** @var Controller $controller */
$controller->execute();
