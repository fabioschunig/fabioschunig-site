<?php

require_once __DIR__ . '/../vendor/autoload.php';

// get configured routes to controllers
$routes = require_once __DIR__ . '/../src/config/routes.php';

// get route
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$controllerClass = $routes["$httpMethod|$pathInfo"];
echo $controllerClass;
$controller = new $controllerClass();

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