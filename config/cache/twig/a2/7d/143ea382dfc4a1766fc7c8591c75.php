<?php

/* crear.twig */
class __TwigTemplate_a27d143ea382dfc4a1766fc7c8591c75 extends Twig_Template
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
        echo "Crear Persona";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "<div>
    <form method=\"post\">
        <dl>
            <dd><label>Nombre</label></dd>
            <dt><input type=\"text\" name=\"nombre\" value=\"";
        // line 10
        if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "nombre"), "html", null, true);
        echo "\" /></dt>
            <dd><label>Edad</label></dd>
            <dt><input type=\"number\" name=\"edad\" value=\"";
        // line 12
        if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "edad"), "html", null, true);
        echo "\" /></dt>
        </dl>
        <input type=\"submit\" value=\"Guardar\" />
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, path(null), "html", null, true);
        echo "\">Listado</a>
    </form>
</div>
";
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
        return array (  57 => 15,  50 => 12,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
