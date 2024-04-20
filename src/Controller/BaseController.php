<?php

namespace FabioSchunig\Site\Controller;

abstract class BaseController implements Controller
{
    private string $viewPath = __DIR__ . '/../views/';

    protected function render(string $view, array $params = null): void
    {
        $pageTitle = "Site pessoal";

        if ($params) {
            extract($params);
        }

        // HTML in buff
        ob_start();
        require_once $this->viewPath . "site/$view.php";
        $content = ob_get_clean();

        require_once $this->viewPath . "layout/main.php";
    }
}
