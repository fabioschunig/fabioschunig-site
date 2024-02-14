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
        $pathInfo = $this->getPathInfo();
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

    private function getPathInfo(): string
    {
        if (isset($this->server['PATH_INFO'])) {
            return $this->server['PATH_INFO'];
        }

        if (isset($this->server['REQUEST_URI'])) {
            $requestUri = $this->server['REQUEST_URI'];
            $baseUrl = $requestUri;
            if (str_contains($requestUri, '?')) {
                $baseUrl = explode('?', $requestUri)[0];
            }
            $prefix = $this->server['CONTEXT_PREFIX'] ?? '';
            return str_replace($prefix, '', $baseUrl);
        }

        return '/';
    }
}
