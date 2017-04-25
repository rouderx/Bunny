<?php

/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 23.04.2017
 * Time: 22:53
 */
namespace App\Controllers;

use App\Core\CSRF;

class PagesController
{
    public function home()
    {
        require '../app/views/index.view.php';
    }

    public function about()
    {
        die(var_dump($_REQUEST));
        require '../app/views/about.view.php';
    }
}