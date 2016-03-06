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
        $__internal_2e5b65f7a90946634d7f40f440c202d6e242e6b646e571a6aef3b2765c139f00 = $this->env->getExtension("native_profiler");
        $__internal_2e5b65f7a90946634d7f40f440c202d6e242e6b646e571a6aef3b2765c139f00->enter($__internal_2e5b65f7a90946634d7f40f440c202d6e242e6b646e571a6aef3b2765c139f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e5b65f7a90946634d7f40f440c202d6e242e6b646e571a6aef3b2765c139f00->leave($__internal_2e5b65f7a90946634d7f40f440c202d6e242e6b646e571a6aef3b2765c139f00_prof);

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
