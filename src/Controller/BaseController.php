<?php

namespace FabioSchunig\Site\Controller;

abstract class BaseController implements Controller
{
    private string $viewPath = __DIR__ . '/../views/';

    private function buildHtml(string $view): void
    {
        $pageTitle = "Site pessoal";
        require_once $this->viewPath . "layout/header.php";

        echo '<body>';
        require_once $this->viewPath . "site/menu.php";
        require_once $this->viewPath . "site/$view.php";
        echo '</body>';

        require_once $this->viewPath . "layout/footer.php";
    }

    protected function render(string $view): void
    {
        $this->buildHtml($view);
    }
}
