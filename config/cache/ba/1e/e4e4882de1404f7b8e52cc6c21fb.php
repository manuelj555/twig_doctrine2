<?php

/* crear.twig */
class __TwigTemplate_ba1ee4e4882de1404f7b8e52cc6c21fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'titulo' => array($this, 'block_titulo'),
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
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "<h1>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h1>
<div>
    <form method=\"post\">
        <dl>
            <dd><label>Nombre</label></dd>
            <dt><input type=\"text\" name=\"nombre\" value=\"";
        // line 9
        if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "nombre"), "html", null, true);
        echo "\" /></dt>
            <dd><label>Edad</label></dd>
            <dt><input type=\"number\" name=\"edad\" value=\"";
        // line 11
        if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "edad"), "html", null, true);
        echo "\" /></dt>
        </dl>
        <input type=\"submit\" value=\"Guardar\" />
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, path(null), "html", null, true);
        echo "\">Listado</a>
    </form>
</div>
";
    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        echo "Crear Persona";
    }

    public function getTemplateName()
    {
        return "crear.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  54 => 14,  47 => 11,  41 => 9,  32 => 4,  29 => 3,);
    }
}
