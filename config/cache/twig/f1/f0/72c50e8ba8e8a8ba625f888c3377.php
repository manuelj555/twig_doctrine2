<?php

/* template.twig */
class __TwigTemplate_f1f072c50e8ba8e8a8ba625f888c3377 extends Twig_Template
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
        <title>Twig - Doctrine2</title>
    </head>
    <body>
        <h1>";
        // line 8
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(helper("App", "flash"), "has", array(), "method"), "html", null, true);
        echo "
        ";
        // line 10
        $this->env->loadTemplate("flashes.twig")->display($context);
        // line 11
        echo "        ";
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 13
        echo "    </body>
</html>

";
    }

    // line 8
    public function block_titulo($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 12
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
        return array (  59 => 12,  56 => 11,  50 => 8,  43 => 13,  40 => 11,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
