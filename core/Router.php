<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 23.04.2017
 * Time: 22:25
 */
namespace App\Core;

use App\Core\CSRF;

class Router
{
    protected $routes = [
            'GET' => [],
            'POST' => []
        ];

    public function direct($uri,$requestType)
    {
        if(array_key_exists($uri,$this->routes[$requestType]))
        {
            if(!CSRF::check())
            {
                throw new \Exception("Try few more times and you'll be banned :).");
            }

            return $this->callAction(
                ...explode('@',$this->routes[$requestType][$uri])
            );
        }

        throw new \Exception('No route defined for URI : ' . $uri);
    }

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri,$controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    protected function callAction($controller,$action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if(!method_exists($controller,$action))
        {
            throw new \Exception('No action : ' . $action . ' for controller : ' . $controller);
        }

        return $controller->$action();

    }
}