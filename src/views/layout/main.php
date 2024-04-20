<!DOCTYPE HTML>
<html>

<?php
require_once 'head.php';
?>

<body>
    <?php require_once $this->viewPath . "site/menu.php"; ?>

    <?= $content ?>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<?php
require_once 'footer.php';
?>

</html>