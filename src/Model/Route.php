<?php

namespace FabioSchunig\Site\Model;

class Route
{
    private array $server;
    private array $routes;

    public function __construct(array $server, array $routes)
    {
        $this->server = $server;
        $this->routes = $routes;
    }
}
