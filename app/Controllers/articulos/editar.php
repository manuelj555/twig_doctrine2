<?php

$articulo = App::doctrine()->find('Articulo', $_GET['id']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $data = filter_input_array(INPUT_POST, array(
        'nombre' => FILTER_SANITIZE_STRING,
        'cantidad' => FILTER_SANITIZE_NUMBER_INT,
        'precio' => array(
            'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
            'flags' => FILTER_FLAG_ALLOW_FRACTION
        ),
        'status' => FILTER_SANITIZE_NUMBER_INT,
    ));

    $articulo->setNombre($data['nombre']);
    $articulo->setCantidad($data['cantidad']);
    $articulo->setPrecio($data['precio']);
    $articulo->setStatus($data['status']);

    try {
        App::doctrine()->persist($articulo);
        App::doctrine()->flush();
        App::flash()->add('success', "Se editó el artículo {$articulo->getNombre()} con exito!!!");
        header("Location: " . path('articulos'));
        die;
    } catch (LogicException $e) {
        App::flash()->add('error', $e->getMessage());
    }
}

echo App::twig()->render('articulos/editar.twig', array('articulo' => $articulo));
