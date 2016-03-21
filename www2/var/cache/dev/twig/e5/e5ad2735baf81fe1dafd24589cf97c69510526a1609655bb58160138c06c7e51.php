<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_899f1758a392fe2c419a44329ff9be37b70869b7552d8b59b280cdaae4bf7c3c extends Twig_Template
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
        $__internal_7ffbab5242d09dac389cb0758be191508ad251665161317852ba901b38d3ded4 = $this->env->getExtension("native_profiler");
        $__internal_7ffbab5242d09dac389cb0758be191508ad251665161317852ba901b38d3ded4->enter($__internal_7ffbab5242d09dac389cb0758be191508ad251665161317852ba901b38d3ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7ffbab5242d09dac389cb0758be191508ad251665161317852ba901b38d3ded4->leave($__internal_7ffbab5242d09dac389cb0758be191508ad251665161317852ba901b38d3ded4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
