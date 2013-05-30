<?php

use K2\Di\Container\Container;

require_once APP_PATH . '/../vendor/autoload.php';

function request_uri()
{
    if (isset($_SERVER['PATH_INFO']) && '/' !== $_SERVER['PATH_INFO']) {
        return trim($_SERVER['PATH_INFO'], '/');
    } else {
        return 'index';
    }
}

class App
{
    /**
     *
     * @var K2\Di\Container\Container
     */
    public static $container;

    public static function get($service)
    {
        return static::$container->get($service);
    }

    /**
     * 
     * @staticvar type $em
     * @return EntityManager
     */
    public static function doctrine()
    {
        return static::$container->get('doctrine');
    }
}


App::$container = new Container();