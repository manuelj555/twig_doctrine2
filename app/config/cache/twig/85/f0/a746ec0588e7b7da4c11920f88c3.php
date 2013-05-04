<?php

/* reportes/edades.twig */
class __TwigTemplate_85f0a746ec0588e7b7da4c11920f88c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Distributción de las Edades de los Usuarios";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<p style=\"text-align: center\">
    <img src=\"";
        // line 6
        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
        echo twig_escape_filter($this->env, $_img_, "html", null, true);
        echo "\" style=\"border: 1px solid #000\" />
</p>
";
    }

    public function getTemplateName()
    {
        return "reportes/edades.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
