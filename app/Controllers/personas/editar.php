<?php

$persona = App::doctrine()->find('Persona', $_GET['id']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        App::flash()->add('success', "Se editó el registro");
        header("Location: " . path(''));
        die;
    } catch (LogicException $e) {
    	App::flash()->add('error', $e->getMessage());
    }
}

echo App::twig()->render('personas/editar.twig', array('persona' => $persona));
