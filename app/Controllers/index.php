<?php

$result = App::doctrine()
        ->createQuery('SELECT p.cedula value, p.cedula label, p FROM Persona p')
        ->getArrayResult();

//foreach ($result as $i => $e) {
//    $result[$i]['label'] = $result[$i]['value'] = $result[$i]['cedula'];
//}

App::twig()->display('factura/index.twig', array(
    'personas' => $result,
));