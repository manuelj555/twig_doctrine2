<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Validation;

require_once __DIR__ . '/../../vendor/autoload.php';

function request_uri()
{
    if (isset($_SERVER['PATH_INFO']) && '/' !== $_SERVER['PATH_INFO']) {
        return trim($_SERVER['PATH_INFO'], '/');
    } else {
        return 'index';
    }
}

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
                'strict_variables' => true,
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

            $paths = array(dirname(__DIR__) . "/Entity");

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

