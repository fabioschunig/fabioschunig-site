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

var_dump($controller);
exit;

$pageTitle = "Site pessoal";
require_once __DIR__ . '/../src/views/layout/header.php';
?>

<body>

    <?php
    require_once __DIR__ . '/../src/views/site/menu.php';
    ?>


    <?php
    require_once __DIR__ . '/../src/views/site/main.php';
    ?>

</body>

<?php
require_once __DIR__ . '/../src/views/layout/footer.php';
?>