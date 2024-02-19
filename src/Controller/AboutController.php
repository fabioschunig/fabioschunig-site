<?php

namespace FabioSchunig\Site\Controller;

class AboutController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('about', [
            'pageTitle' => 'About page',
        ]);
    }
}
