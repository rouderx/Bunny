<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 22.02.2017
 * Time: 20:21
 */
    return ['database' => [
        'dbhost' => 'mysql:host=localhost',
        'dbuser' => 'root',
        'dbpass' => 'root',
        'dbname' => 'test',
        'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        ]
    ];