<?php

$articulo = App::doctrine()->find('Articulo', $_GET['id']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    App::get('mapper')->bind($articulo, $_POST['articulo']);

    try {
        App::doctrine()->persist($articulo);
        App::doctrine()->flush();
        App::get('flash')->add('success', "Se editó el artículo {$articulo->getNombre()} con exito!!!");
        header("Location: " . path('articulos'));
        die;
    } catch (LogicException $e) {
        App::get('flash')->add('alert', $e->getMessage());
    }
}

echo App::get('twig')->render('articulos/editar.twig', array('articulo' => $articulo));
