<?php

namespace FabioSchunig\Site\Controller;

class SiteController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('main', [
            'pageTitle' => 'Main page',
        ]);
    }
}
