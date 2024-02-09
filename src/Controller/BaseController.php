<?php

namespace FabioSchunig\Site\Controller;

abstract class BaseController implements Controller
{
    private string $viewPath = __DIR__ . '/../views/';

    public function execute(): void
    {
        $this->render();
    }

    protected function render(): void
    {
        $pageTitle = "Site pessoal";
        require_once $this->viewPath . 'layout/header.php';

        echo '<body>';
        require_once $this->viewPath . 'site/menu.php';
        require_once $this->viewPath . 'site/main.php';
        echo '</body>';

        require_once $this->viewPath . 'layout/footer.php';
    }
}
