<?php

$persona = new Persona();

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        App::flash()->add('success', "Se creó a {$persona->getNombre()} con exito!!!");
        header("Location: " . path('personas'));
        die;
    } catch (LogicException $e) {
        App::flash()->add('alert', $e->getMessage());
    }
}

echo App::twig()->render('personas/crear.twig', array('persona' => $persona));
