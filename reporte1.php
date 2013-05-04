<?php

require_once './config/bootstrap.php';
require_once './lib/phplot/phplot.php';

$plot = new PHPlot(500, 500);

$data = array(
    array('a', 1),
    array('b', 2),
    array('c', 4),
    array('d', 8),
    array('e', 16),
);

$plot->SetPrintImage(false);

$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($data);

$plot->SetTitle(utf8_decode('Titulo de la Gráfica'));
$plot->SetXTitle('Eje X');
$plot->SetYTitle('Eje Y');

foreach ($data as $e) {
    $plot->SetLegend($e[0]);
}

$plot->DrawGraph();

$img = $plot->EncodeImage();

App::twig()->display('reporte1.twig', array('img' => $img));

