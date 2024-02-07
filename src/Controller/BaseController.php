<?php

namespace FabioSchunig\Site\Controller;

abstract class BaseController implements Controller
{
    public function execute(): void
    {
        echo "BaseController execute";
    }
}
