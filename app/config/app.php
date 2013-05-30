<?php

$controller = dirname(__DIR__) . '/Controllers/' . request_uri();

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
    
    header("HTTP/1.1 404 Not Found");

    throw new Exception(sprintf("No existe el archivo <b>%s.php</b> para la URL <b>%s</b>", $controller, request_uri()));
} catch (Exception $e) {
    ob_get_clean();
    App::get('twig')->display('errors/exception.twig', array(
        'type' => get_class($e),
        'exception' => $e,
        'base_url' => BASE_URL,
    ));
}