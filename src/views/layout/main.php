<!DOCTYPE HTML>
<html lang="pt-BR" class="h-100" data-bs-theme="dark">

<?php
require_once 'head.php';
?>

<body class="d-flex flex-column h-100">
    <?php require_once $this->viewPath . "site/menu.php"; ?>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </main>

    <?php
    require_once 'footer.php';
    ?>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>