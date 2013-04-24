<?php 

require_once './config/bootstrap.php';

$personas = App::doctrine()->getRepository('Persona')->findAll();

echo App::twig()->render("home.twig", array('personas' => $personas));
