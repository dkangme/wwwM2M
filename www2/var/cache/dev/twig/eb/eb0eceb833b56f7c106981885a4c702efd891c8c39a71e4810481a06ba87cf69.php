<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ffb315da8ab0c8b5631ace3f0783edf9a2385be1500c8df1a0670b08c57ace5b extends Twig_Template
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
        $__internal_d3c0ea7072e37b468ab170c021f4de1700672efc5427c34fb2ce540063cc7ece = $this->env->getExtension("native_profiler");
        $__internal_d3c0ea7072e37b468ab170c021f4de1700672efc5427c34fb2ce540063cc7ece->enter($__internal_d3c0ea7072e37b468ab170c021f4de1700672efc5427c34fb2ce540063cc7ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d3c0ea7072e37b468ab170c021f4de1700672efc5427c34fb2ce540063cc7ece->leave($__internal_d3c0ea7072e37b468ab170c021f4de1700672efc5427c34fb2ce540063cc7ece_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
