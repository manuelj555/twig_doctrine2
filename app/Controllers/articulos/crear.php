<?php

$articulo = new Articulo();

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $data = filter_input_array(INPUT_POST, array(
        'nombre' => FILTER_SANITIZE_STRING,
        'cantidad' => FILTER_SANITIZE_NUMBER_INT,
        'precio' => array(
            'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
            'flags' => FILTER_FLAG_ALLOW_FRACTION
        ),
    ));

    $articulo->setNombre($data['nombre']);
    $articulo->setCantidad($data['cantidad']);
    $articulo->setPrecio($data['precio']);

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

echo App::get('twig')->render('articulos/crear.twig', array('articulo' => $articulo));
