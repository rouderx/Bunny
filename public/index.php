<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 19.04.2017
 * Time: 23:12
 */
session_start();

use App\Core\{Router,Request};

require_once '../core/bootstrap.php';

return Router::load('../app/routes.php')->direct(Request::uri(),Request::method());

