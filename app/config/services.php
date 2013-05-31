<?php

use K2\Twig\Extension\Form;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\PropertyAccess\PropertyAccessor;

//INICIO inclusion de servicios
App::$container->set('doctrine', function(){
    $paths = array(APP_PATH . "/Entity/");

    $isDevMode = DEBUG;

    $dbParams = array(
        'driver' => DB_DRIVER,
        'user' => DB_USER,
        'password' => DB_PASS,
        'dbname' => DB_NAME,
    );

    $cache = new \Doctrine\Common\Cache\ArrayCache();
    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $config->setProxyDir(APP_PATH . '/config/cache/Doctrine');
    $config->setProxyNamespace('Proxies');
    $config->setAutoGenerateProxyClasses(DEBUG);
    
    return EntityManager::create($dbParams, $config);
});

App::$container->set('twig', function($c){
    
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views/');
    
    $twig = new Twig_Environment($loader, array(
        'cache' => APP_PATH . '/config/cache/twig',
        'debug' => DEBUG,
        'strict_variables' => true,
    ));

    $twig->addExtension(new Form($c['property_accesor']));
    $twig->addExtension(new Twig_Extension_KuExtension());

    return $twig;
});

App::$container->set('flash', function(){
    return new Flash();
});

App::$container->set('property_accesor', function(){
    return new PropertyAccessor();
});

App::$container->set('mapper', function($c){
    return new \K2\DataMapper\DataMapper($c['property_accesor']);
});