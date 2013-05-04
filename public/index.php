<?php

ob_start();

define('BASE_URL', 'http://localhost/twig_doctrine2/public/');

define('DEBUG', true);

function path($path, array $params = array())
{
    $file = 'index.php/'; //si se usa mod_rewrite es mejor dejar el file vacio
    if (count($params)) {
        return BASE_URL . $file . trim($path, '/') . '?' . http_build_query($params);
    } else {
        return BASE_URL . $file . trim($path, '/');
    }
}

require_once __DIR__ . '/../app/config/bootstrap.php';

require_once __DIR__ . '/../app/config/app.php';