<?php
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