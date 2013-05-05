<?php 

$articulos = App::doctrine()->getRepository('Articulo')->findAll();

echo App::twig()->render("articulos/index.twig", array('articulos' => $articulos));
