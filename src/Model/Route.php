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

    public function getRouteControllerClass(): string
    {
        // mount route
        $pathInfo = $this->server['PATH_INFO'] ?? '/';
        $httpMethod = $this->server['REQUEST_METHOD'];

        // checks if route exists
        $key = "$httpMethod|$pathInfo";
        if (array_key_exists($key, $this->routes)) {
            $controllerClass = $this->routes["$httpMethod|$pathInfo"];
        } else {
            return false;
        }

        return $controllerClass;
    }
}
