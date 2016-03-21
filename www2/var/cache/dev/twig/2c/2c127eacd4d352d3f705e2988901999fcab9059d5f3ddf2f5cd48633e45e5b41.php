<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e50f420f2f62b9871fb2a9b8f9605b20ecf7f59ed63dfd6dff8e540ac5efa8ca extends Twig_Template
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
        $__internal_0ca9992069451134003c4613b043a5b2fdfa85651688ac10f83431c2d02d2619 = $this->env->getExtension("native_profiler");
        $__internal_0ca9992069451134003c4613b043a5b2fdfa85651688ac10f83431c2d02d2619->enter($__internal_0ca9992069451134003c4613b043a5b2fdfa85651688ac10f83431c2d02d2619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0ca9992069451134003c4613b043a5b2fdfa85651688ac10f83431c2d02d2619->leave($__internal_0ca9992069451134003c4613b043a5b2fdfa85651688ac10f83431c2d02d2619_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
