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
        $__internal_6cc64b4bfa2b30ccb15b5d3c024bf344cf76256ab2d14d85e845203e50ad32ed = $this->env->getExtension("native_profiler");
        $__internal_6cc64b4bfa2b30ccb15b5d3c024bf344cf76256ab2d14d85e845203e50ad32ed->enter($__internal_6cc64b4bfa2b30ccb15b5d3c024bf344cf76256ab2d14d85e845203e50ad32ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6cc64b4bfa2b30ccb15b5d3c024bf344cf76256ab2d14d85e845203e50ad32ed->leave($__internal_6cc64b4bfa2b30ccb15b5d3c024bf344cf76256ab2d14d85e845203e50ad32ed_prof);

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
