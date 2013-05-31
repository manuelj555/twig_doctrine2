<?php

$persona = new Persona();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    
    App::get('mapper')->bind($persona, $_POST['persona']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        App::get('flash')->add('success', "Se creó a {$persona->getNombre()} con exito!!!");
        header("Location: " . path('personas'));
        die;
    } catch (LogicException $e) {
        App::get('flash')->add('alert', $e->getMessage());
    }
}

echo App::get('twig')->render('personas/crear.twig', array('persona' => $persona));
