<?php

require_once __DIR__ . '/../../lib/phplot/phplot.php';

$compras = App::doctrine()
        ->createQuery("SELECT CONCAT(CONCAT(p.cedula,' '),UPPER(p.nombre)) persona,
                       SUM((d.precio * d.cantidad)) total
                       FROM Compra c
                       JOIN c.persona p
                       JOIN c.descripciones d
                       GROUP BY p")
        ->setMaxResults(5)
        ->getArrayResult();

//var_dump($compras);die;

$plot = new PHPlot(500, 500);

$plot->SetPrintImage(false);

$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($compras);

$plot->SetTitle(utf8_decode('Titulo de la Gráfica'));

foreach ($compras as $e) {
    $plot->SetLegend("{$e['persona']} ({$e['total']} Bs)");
}


$plot->DrawGraph();

$img = $plot->EncodeImage();

App::get('twig')->display('reportes/edades.twig', array('img' => $img));