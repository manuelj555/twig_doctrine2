<?php

if(isset($_GET['id'])){
	$persona = App::doctrine()->find('Articulo', (int) $_GET['id']);
//	App::doctrine()->remove($persona);
//	App::doctrine()->flush();
	App::flash()->add('success', "Se eliminó a {$persona->getNombre()} de la BD");
}

header("Location: " . path('articulos'));