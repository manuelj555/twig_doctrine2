<?php

/* flashes.twig */
class __TwigTemplate_a9bfaaf0206444bf5a7afb1842a9794c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    ";
        // line 2
        if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_flash_, "getMessages", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            echo "        ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "            <div class=\"flash ";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "flashes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  33 => 4,  27 => 3,  22 => 2,  19 => 1,  58 => 11,  55 => 10,  49 => 8,  39 => 12,  36 => 10,  34 => 9,  30 => 8,  21 => 1,  90 => 24,  80 => 21,  75 => 20,  70 => 19,  65 => 18,  60 => 17,  57 => 16,  52 => 7,  38 => 5,  35 => 4,  29 => 3,);
    }
}
