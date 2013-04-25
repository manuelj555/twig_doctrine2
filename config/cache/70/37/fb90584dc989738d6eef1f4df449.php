<?php

/* template.twig */
class __TwigTemplate_7037fb90584dc989738d6eef1f4df449 extends Twig_Template
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
        <title>";
        // line 5
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "</title>
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
        return array (  59 => 11,  56 => 10,  50 => 8,  43 => 12,  40 => 10,  38 => 9,  34 => 8,  27 => 5,  21 => 1,);
    }
}
