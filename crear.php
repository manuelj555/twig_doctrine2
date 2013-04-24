<?php

require_once './config/bootstrap.php';

$persona = new Persona();

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        echo "Se guardó la persona";
    } catch (LogicException $e) {
        echo $e->getMessage();
    }
}

echo App::twig()->render('crear.twig', array('persona' => $persona));
