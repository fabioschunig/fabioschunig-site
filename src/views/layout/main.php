<!DOCTYPE HTML>
<html>

<?php
require_once 'head.php';
?>

<body>
    <?php require_once $this->viewPath . "site/menu.php"; ?>

    <?= $content ?>
</body>

<?php
require_once 'footer.php';
?>

</html>