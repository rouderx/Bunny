<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 20.04.2017
 * Time: 9:33
 */

require '../vendor/autoload.php';

App::bind("config",require 'database/cnf.php');
App::bind("pdo",Database::make(App::get("config")['database']));
$qb = new QueryBuilder(App::get("pdo"));