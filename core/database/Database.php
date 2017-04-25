<?php
/**
 * Created by PhpStorm.
 * User: Lukáš Vasko
 * Date: 22.02.2017
 * Time: 20:09
 */


class Database{

    public static function make($config)
    {
        try {
            return new \PDO($config['dbhost'].';dbname='.$config['dbname'],$config['dbuser'],$config['dbpass'],$config['options']);
        }
        catch(\PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

