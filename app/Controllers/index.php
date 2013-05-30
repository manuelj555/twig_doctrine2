<?php

$personas = App::doctrine()
        ->createQuery('SELECT p.cedula value, p.cedula label, p FROM Persona p')
        ->getArrayResult();

$articulos = App::doctrine()
        ->createQuery('SELECT a.nombre value, UPPER(a.nombre) label, a FROM Articulo a')
        ->getArrayResult();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $factura = new Compra();
    var_dump($_POST);

    $articulosFactura = App::doctrine()
            ->getRepository('Articulo')
            ->findBy(array('id' => array_keys($_POST['art'])));

    $factura->setPersona(App::doctrine()->getReference('Persona', $_POST['p']['id']));
    foreach ($articulosFactura as $item) {
        $desc = new Descripcion($item, $_POST['art'][$item->getId()]['cantidad']);
        $factura->addDescripcione($desc);
        App::doctrine()->persist($desc);
    }

    App::doctrine()->persist($factura);
    App::doctrine()->flush();

    App::get('flash')->add('success', "Factura guardada");

    header("Location: " . path(''));die;
}

App::get('twig')->display('factura/index.twig', array(
    'personas' => $personas,
    'articulos' => $articulos,
));