<?php

namespace FabioSchunig\Site\Controller;

class ContactController extends BaseController implements Controller
{
    public function execute(): void
    {
        $this->render('contact');
    }
}
