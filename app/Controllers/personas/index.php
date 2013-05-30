<?php 

$personas = App::doctrine()->getRepository('Persona')->findAll();

echo App::get('twig')->render("personas/index.twig", array('personas' => $personas));
