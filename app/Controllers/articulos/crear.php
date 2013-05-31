<?php

$articulo = new Articulo();

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    App::get('mapper')->bind($articulo, $_POST['articulo']);

    try {
        App::doctrine()->persist($articulo);
        App::doctrine()->flush();
        App::get('flash')->add('success', "Se creó el artículo {$articulo->getNombre()} con exito!!!");
        header("Location: " . path('articulos'));
        die;
    } catch (LogicException $e) {
        App::get('flash')->add('alert', $e->getMessage());
    }
}

App::get('twig')->display('articulos/crear.twig', array('articulo' => $articulo));