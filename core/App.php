<?php

/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 24.04.2017
 * Time: 11:49
 */
class App
{
    protected static $registry = [];

    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if(!array_key_exists($key,static::$registry))
        {
            throw new Exception("No {$key} is bound to container.");
        }

        return static::$registry[$key];
    }
}