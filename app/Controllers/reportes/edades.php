<?php

require_once __DIR__ . '/../../lib/phplot/phplot.php';

$data = App::doctrine()
        ->createQuery("SELECT p.nombre, p.edad FROM Persona p")
        ->getArrayResult();

foreach ($data as $index => $e) {
    $data[$index]['nombre'] = utf8_decode($e['nombre']);
}

$plot = new PHPlot(500, 500);

//$data = array(
//    array('a', 1),
//    array('b', 2),
//    array('c', 4),
//    array('d', 8),
//    array('e', 16),
//);

$plot->SetPrintImage(false);

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

$plot->SetTitle(utf8_decode('Titulo de la Gráfica'));
$plot->SetXTitle('Eje X');
$plot->SetYTitle('Eje Y');

$plot->DrawGraph();

$img = $plot->EncodeImage();

App::twig()->display('reportes/edades.twig', array('img' => $img));

