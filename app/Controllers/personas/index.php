<?php 

$personas = App::doctrine()->getRepository('Persona')->findAll();

echo App::twig()->render("personas/index.twig", array('personas' => $personas));
