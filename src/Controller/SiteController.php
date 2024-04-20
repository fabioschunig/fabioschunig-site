<?php

namespace FabioSchunig\Site\Controller;

class SiteController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('home', [
            'pageTitle' => 'Site pessoal',
        ]);
    }
}
