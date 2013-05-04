<?php

class Twig_Extension_KuExtension extends Twig_Extension
{

    public function initRuntime(\Twig_Environment $environment)
    {
        $environment->addGlobal('bootstrap', $environment->loadTemplate('macros.twig'));
    }

    public function getName()
    {
        return 'ku_extension';
    }

    public function getGlobals()
    {
        return array(
            'base_url' => BASE_URL,
            'flash' => App::flash(),
        );
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('path', 'path'),
            new Twig_SimpleFunction('asset', function($file) {
                        return BASE_URL . ltrim($file, '/');
                    }),
            new Twig_SimpleFunction('*_*', 'helper'),
        );
    }

}

function helper($class, $method)
{
    $args = func_get_args();
    unset($args[0], $args[1]);
    return call_user_func_array("{$class}::{$method}", $args);
}
