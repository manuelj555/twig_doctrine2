<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Validation;

$loader = require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', 'http://localhost/pruebas_phplot/');
define('DEBUG', true);

class App
{

    public static function twig()
    {
        static $twig;
        if (!$twig) {
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views/');
            $twig = new Twig_Environment($loader, array(
                'cache' => __DIR__ . '/cache/twig',
                'debug' => DEBUG,
            ));

            $twig->addExtension(new Twig_Extension_KuExtension());
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

            $paths = array(dirname(__DIR__) . "/lib/Entity");

            $isDevMode = DEBUG;

            $dbParams = array(
                'driver' => 'pdo_mysql',
                'user' => 'root',
                'password' => '',
                'dbname' => 'doctrine2',
            );

            $cache = new \Doctrine\Common\Cache\ArrayCache();
            $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
            $config->setProxyDir(__DIR__ . '/cache/Doctrine');
            $config->setProxyNamespace('Proxies');
            $config->setAutoGenerateProxyClasses(DEBUG);
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
        if (!$flash) {
            $flash = new Flash();
        }

        return $flash;
    }

}

function path($path, array $params = array())
{
    if (count($params)) {
        return BASE_URL . ltrim($path, '/') . '?' . http_build_query($params);
    } else {
        return BASE_URL . ltrim($path, '/');
    }
}
