<?php

/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 25.04.2017
 * Time: 10:23
 */

namespace App\Core;

class CSRF
{
    public static function generate($name)
    {
        $token = base64_encode( openssl_random_pseudo_bytes(32));
        $_SESSION[$name] = $token;
        return "<input type='hidden' name='csrf_token' value=\"{$token}\">";
    }

    public static function check()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            end($_POST);

            $key = key($_POST);

            if(isset($_SESSION[$key]) && isset($_POST["csrf_token"]))
            {
                if(hash_equals($_POST["csrf_token"],$_SESSION[$key]))
                {
                    return true;
                }
            }
        }
        else
        {
            if(empty($_GET))
            {
                return true;
            }
            else
            {
                $key = explode('?',$_SERVER['REQUEST_URI']);

                if(isset($_SESSION[$key[0]]) && isset($_GET["csrf_token"]))
                {
                    if(hash_equals($_GET["csrf_token"],$_SESSION[$key[0]]))
                    {
                        return true;
                    }
                }
            }
        }

        return false;
    }
}