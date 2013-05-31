<?php

$persona = App::doctrine()->find('Persona', $_GET['id']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    App::get('mapper')->bind($persona, $_POST['persona']);

    try {
        App::doctrine()->persist($persona);
        App::doctrine()->flush();
        App::get('flash')->add('success', "Se editó a {$persona->getNombre()} con exito!!!");
        header("Location: " . path('personas'));
        die;
    } catch (LogicException $e) {
    	App::get('flash')->add('alert', $e->getMessage());
    }
}

echo App::get('twig')->render('personas/editar.twig', array('persona' => $persona));
