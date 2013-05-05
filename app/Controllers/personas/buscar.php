<?php

$persona = App::doctrine()
        ->createQuery("SELECT p FROM Persona p WHERE p.cedula = ?1")
        ->setParameter(1, $_GET['cedula'])
        ->getSingleResult(Doctrine\ORM\Query::HYDRATE_ARRAY);

die(json_encode($persona));
