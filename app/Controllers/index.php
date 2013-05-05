<?php

$personas = App::doctrine()
        ->createQuery('SELECT p.cedula value, p.cedula label, p FROM Persona p')
        ->getArrayResult();

$articulos = App::doctrine()
        ->createQuery('SELECT a.nombre value, UPPER(a.nombre) label, a FROM Articulo a')
        ->getArrayResult();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    foreach($_POST['art'] as $i => $e){
        var_dump($i, $e);
    }
}

App::twig()->display('factura/index.twig', array(
    'personas' => $personas,
    'articulos' => $articulos,
));