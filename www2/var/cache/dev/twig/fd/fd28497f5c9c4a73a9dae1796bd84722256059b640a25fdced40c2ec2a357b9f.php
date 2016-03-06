<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_17a838ef9376b9c8f1ab741dbc242911c0012494cb2261682232b06ea2fc774a extends Twig_Template
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
        $__internal_91ba2e5ce9b97231a567a4f59c268ffae33d712c283a5811f1c8ec45b443b868 = $this->env->getExtension("native_profiler");
        $__internal_91ba2e5ce9b97231a567a4f59c268ffae33d712c283a5811f1c8ec45b443b868->enter($__internal_91ba2e5ce9b97231a567a4f59c268ffae33d712c283a5811f1c8ec45b443b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_91ba2e5ce9b97231a567a4f59c268ffae33d712c283a5811f1c8ec45b443b868->leave($__internal_91ba2e5ce9b97231a567a4f59c268ffae33d712c283a5811f1c8ec45b443b868_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
