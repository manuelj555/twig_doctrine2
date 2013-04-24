<?php

/* template.twig */
class __TwigTemplate_f1f072c50e8ba8e8a8ba625f888c3377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        ";
        // line 8
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 10
        echo "    </body>
</html>

";
    }

    // line 8
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 9
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
        return array (  45 => 9,  42 => 8,  35 => 10,  33 => 8,  26 => 5,  20 => 1,);
    }
}
