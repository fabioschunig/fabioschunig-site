<?php

namespace FabioSchunig\Site\Controller;

class StudiesController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('studies', [
            'pageTitle' => 'Studies page',
        ]);
    }
}
