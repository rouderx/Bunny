<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0b527db852063418b6eae96038ca0e4
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\CSRF' => __DIR__ . '/../..' . '/core/CSRF.php',
        'App\\Core\\Database\\Database' => __DIR__ . '/../..' . '/core/database/Database.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitf0b527db852063418b6eae96038ca0e4' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf0b527db852063418b6eae96038ca0e4' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf0b527db852063418b6eae96038ca0e4::$classMap;

        }, null, ClassLoader::class);
    }
}
