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
        $__internal_1d3915e9d6c24d2701cb8d77cc4a4f465beb74d0fa705520d22dc9416cd8ea55 = $this->env->getExtension("native_profiler");
        $__internal_1d3915e9d6c24d2701cb8d77cc4a4f465beb74d0fa705520d22dc9416cd8ea55->enter($__internal_1d3915e9d6c24d2701cb8d77cc4a4f465beb74d0fa705520d22dc9416cd8ea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d3915e9d6c24d2701cb8d77cc4a4f465beb74d0fa705520d22dc9416cd8ea55->leave($__internal_1d3915e9d6c24d2701cb8d77cc4a4f465beb74d0fa705520d22dc9416cd8ea55_prof);

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
