<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 19.04.2017
 * Time: 23:12
 */

require_once '../core/bootstrap.php';

return Router::load('routes.php')->direct(Request::uri(),Request::method());

