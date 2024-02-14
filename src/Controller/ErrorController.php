<?php

namespace FabioSchunig\Site\Controller;

class ErrorController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('error');
    }
}
