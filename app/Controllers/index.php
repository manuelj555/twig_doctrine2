<?php 

require_once './config/bootstrap.php';

var_dump($_SERVER);
var_dump($_SERVER['ORIG_PATH_INFO']);

$personas = App::doctrine()->getRepository('Persona')->findAll();

echo App::twig()->render("home.twig", array('personas' => $personas));
