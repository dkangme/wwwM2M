<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1b4baf3ed0780d26d5040b35f84dc7c341df7351c589995b3372505d75baee7b extends Twig_Template
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
        $__internal_8eb4865f3cac057002f278bfc7408c4f3b5c22e55a28226aa774ed887fff0f19 = $this->env->getExtension("native_profiler");
        $__internal_8eb4865f3cac057002f278bfc7408c4f3b5c22e55a28226aa774ed887fff0f19->enter($__internal_8eb4865f3cac057002f278bfc7408c4f3b5c22e55a28226aa774ed887fff0f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8eb4865f3cac057002f278bfc7408c4f3b5c22e55a28226aa774ed887fff0f19->leave($__internal_8eb4865f3cac057002f278bfc7408c4f3b5c22e55a28226aa774ed887fff0f19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */