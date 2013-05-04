<?php 

$personas = App::doctrine()->getRepository('Persona1')->findAll();

echo App::twig()->render("home.twig", array('personas' => $personas));
