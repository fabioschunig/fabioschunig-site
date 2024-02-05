<?php

use FabioSchunig\Site\Controller\ErrorController;

require_once __DIR__ . '/../vendor/autoload.php';

// get configured routes to controllers
$routes = require_once __DIR__ . '/../src/config/routes.php';

// get route
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

// checks if route exists
$key = "$httpMethod|$pathInfo";
if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass();
} else {
    $controller = new ErrorController();
}

// all controllers must have the "execute" method

/** @var Controller $controller */
$controller->execute();
