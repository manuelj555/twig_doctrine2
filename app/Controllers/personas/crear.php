<?php

$persona = new Persona();

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        App::flash()->add('success', "Se creó el registro");
        header("Location: " . path(''));
        die;
    } catch (LogicException $e) {
        App::flash()->add('error', $e->getMessage());
    }
}

echo App::twig()->render('personas/crear.twig', array('persona' => $persona));
