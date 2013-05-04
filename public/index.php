<?php

define('BASE_URL', 'http://localhost/twig_doctrine2/index.php');

define('DEBUG', true);

require_once __DIR__ . '/../app/config/bootstrap.php';

$controller = __DIR__ . '/../app/Controllers/' . request_uri() . '.php';

if (is_file($controller)) {
    echo require_once $controller;
} else {
    header("HTTP/1.1 404 Not Found");
    if (DEBUG) {
        throw new Exception("No existe un controlador para la ruta " . request_uri());
    }
}