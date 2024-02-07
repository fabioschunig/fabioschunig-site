<?php

namespace FabioSchunig\Site\Controller;

class SiteController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render();
    }

    private function render(): void
    {
        $pageTitle = "Site pessoal";
        require_once __DIR__ . '/../views/layout/header.php';

        echo '<body>';
        require_once __DIR__ . '/../views/site/menu.php';
        require_once __DIR__ . '/../views/site/main.php';
        echo '</body>';

        require_once __DIR__ . '/..//views/layout/footer.php';
    }
}
