<?php 

$articulos = App::doctrine()->getRepository('Articulo')->findAll();

echo App::get('twig')->render("articulos/index.twig", array('articulos' => $articulos));
