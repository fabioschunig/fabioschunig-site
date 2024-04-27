<?php

use FabioSchunig\Site\Helpers\FileHelper;

$images = FileHelper::imageFiles('images/');

?>

<nav class="navbar navbar-expand-lg container fixed-top bg-secondary bg-gradient rounded-1">
    <div class="container">
        <a class="navbar-brand px-3" href=".">Início</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3">
                    <a class="nav-link" href="contact">Contato</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="studies">Estudos</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="about">Sobre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php if ($images) : ?>
    <div class="container painel px-0">
        <img src="images/<?= $images[array_rand($images)] ?>" class="img-topo rounded-1" alt="optical fiber">
    </div>
<?php endif; ?>