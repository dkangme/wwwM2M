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
        $__internal_70709e7b2b6bff878f4f9d67987d8b7e75b0f11d4ac4e87ad3d96e551efbe554 = $this->env->getExtension("native_profiler");
        $__internal_70709e7b2b6bff878f4f9d67987d8b7e75b0f11d4ac4e87ad3d96e551efbe554->enter($__internal_70709e7b2b6bff878f4f9d67987d8b7e75b0f11d4ac4e87ad3d96e551efbe554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_70709e7b2b6bff878f4f9d67987d8b7e75b0f11d4ac4e87ad3d96e551efbe554->leave($__internal_70709e7b2b6bff878f4f9d67987d8b7e75b0f11d4ac4e87ad3d96e551efbe554_prof);

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
