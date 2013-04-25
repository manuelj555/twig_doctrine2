<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Validation;

$loader = require_once __DIR__ . '/../vendor/autoload.php';

//$loader->add(null, __DIR__ . "/../lib/Entity/");

define('BASE_URL', 'http://localhost/twig_doctrine2/');
define('DEBUG', true);

class App
{

    public static function twig()
    {
        static $twig;
        if (!$twig) {
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views/');
            $twig = new Twig_Environment($loader, array(
                'cache' => __DIR__ . '/cache/',
                'debug' => DEBUG,
            ));

            $twig->addGlobal('base_url', BASE_URL);
            $twig->addGlobal('flash', static::flash());

            $twig->addFunction('path', new Twig_Function_Function('path'));
        }

        return $twig;
    }

    /**
     * 
     * @staticvar type $em
     * @return EntityManager
     */
    public static function doctrine()
    {
        static $em;

        if (!$em) {

            $paths = array(__DIR__ . "/../lib/Entity/");

            $isDevMode = DEBUG;

            $dbParams = array(
                'driver' => 'pdo_mysql',
                'user' => 'root',
                'password' => '',
                'dbname' => 'doctrine2',
            );

            $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
            $em = EntityManager::create($dbParams, $config);
        }

        return $em;
    }

    /**
     * 
     * @staticvar type $validator
     * @return \Symfony\Component\Validator\ValidatorInterface
     */
    public static function validator()
    {
        static $validator;
        if (!$validator) {
            $validator = Validation::createValidatorBuilder()
                    ->enableAnnotationMapping()
                    ->getValidator();
        }
        return $validator;
    }

    public static function flash()
    {
        static $flash;
        if(!$flash)
        {
            $flash = new Flash();
        }

        return $flash;
    }

}

function path($path, array $params = array()){
    if (count($params)) {
        return BASE_URL . ltrim($path, '/') . '?' . http_build_query($params);
    } else {
        return BASE_URL . ltrim($path, '/');
    }
}
