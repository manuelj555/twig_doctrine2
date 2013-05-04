<?php

ob_start();

define('BASE_URL', 'http://localhost/twig_doctrine2/public/index.php');

define('DEBUG', true);

require_once __DIR__ . '/../app/config/bootstrap.php';

$controller = dirname(__DIR__) . '/app/Controllers/' . request_uri();

try {

    if (is_file($controller . '.php')) {
        return require_once $controller . '.php';
    }

    if (is_dir($controller)) {
        $controller = rtrim($controller, '/') . '/index';
        if (is_file($controller . '.php')) {
            return require_once $controller . '.php';
        }
    }

    if (!DEBUG) {
        header("HTTP/1.1 404 Not Found");
    }
    throw new Exception(sprintf("No existe el archivo <b>%s.php</b> para la URL <b>%s</b>", $controller, request_uri()));
} catch (Exception $e) {
    ob_get_clean();
    App::twig()->display('errors/exception.twig', array(
        'type' => get_class($e),
        'exception' => $e,
        'base_url' => BASE_URL,
    ));
}