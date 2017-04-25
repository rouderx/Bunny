<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 20.04.2017
 * Time: 9:33
 */
use App\Core\App;
use App\Core\Database\{Database,QueryBuilder};

require '../vendor/autoload.php';

App::bind("config",require 'database/cnf.php');
App::bind("pdo",Database::make(App::get("config")['database']));
$qb = new QueryBuilder(App::get("pdo"));