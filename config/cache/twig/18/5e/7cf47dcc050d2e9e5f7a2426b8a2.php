<?php

/* template.twig */
class __TwigTemplate_185e7cf47dcc050d2e9e5f7a2426b8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>PHPLOT con Twig y Doctrine2</title>
    </head>
    <body>
        <h1>";
        // line 8
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h1>
        ";
        // line 9
        $this->env->loadTemplate("flashes.twig")->display($context);
        // line 10
        echo "        ";
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 12
        echo "    </body>
</html>

";
    }

    // line 8
    public function block_titulo($context, array $blocks = array())
    {
        echo "";
    }

    // line 10
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  52 => 10,  46 => 8,  39 => 12,  36 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
