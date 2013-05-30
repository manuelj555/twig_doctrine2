<?php

ob_start();

define('BASE_URL', 'http://localhost/twig_doctrine2/public/');

define('DEBUG', true);
define('APP_PATH', dirname(__DIR__) . '/app/');

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'doctrine2');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DRIVER', 'pdo_mysql');

function path($path, array $params = array())
{
    $file = ''; //si se usa mod_rewrite es mejor dejar el file vacio
    if (count($params)) {
        return BASE_URL . $file . trim($path, '/') . '?' . http_build_query($params);
    } else {
        return BASE_URL . $file . trim($path, '/');
    }
}

require_once APP_PATH . '/config/bootstrap.php';

require_once APP_PATH . '/config/app.php';