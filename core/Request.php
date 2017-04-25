<?php

/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 23.04.2017
 * Time: 23:10
 */
class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}