<?php

$result = App::doctrine()
        ->createQuery('SELECT p.cedula FROM Persona p')
        ->getArrayResult();

$cedulas = array();

foreach ($result as $e) {
    $cedulas[] = $e['cedula'];
}

App::twig()->display('factura/index.twig', array(
    'cedulas' => $cedulas,
));