<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 23.04.2017
 * Time: 22:25
 */

$router->get('','PagesController@home');

$router->get('about','PagesController@about');

$router->post('about','PagesController@about');
