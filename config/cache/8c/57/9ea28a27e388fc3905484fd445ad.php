<?php

/* home.twig */
class __TwigTemplate_8c579ea28a27e388fc3905484fd445ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
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
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Personas en la BD</h1>
<p><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array("crear.php")), "html", null, true);
        echo "\">Crear</a></p>
<table>
    <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Edit</th>
</thead>
<tbody>
    ";
        // line 14
        if (isset($context["personas"])) { $_personas_ = $context["personas"]; } else { $_personas_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_personas_);
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 15
            echo "        <tr>
            <td>";
            // line 16
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "nombre"), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "edad"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 19
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array("editar.php", array("id" => $this->getAttribute($_e_, "id")))), "html", null, true);
            echo "\">Editar</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  69 => 19,  64 => 18,  59 => 17,  54 => 16,  51 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,);
    }
}
