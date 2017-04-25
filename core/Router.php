<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 23.04.2017
 * Time: 22:25
 */

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
            //return $this->routes[$requestType][$uri];
            return $this->callAction(
                ...explode('@',$this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for URI : ' . $uri);
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
        $controller = new $controller;

        if(!method_exists($controller,$action))
        {
            throw new Exception('No action : ' . $action . ' for controller : ' . $controller);
        }

        return $controller->$action();

    }
}