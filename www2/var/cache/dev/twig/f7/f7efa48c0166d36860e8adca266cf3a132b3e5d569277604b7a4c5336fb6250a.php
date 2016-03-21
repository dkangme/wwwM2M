<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_98df02a721755f6ecf734c444092819239e13f7eab4f0accfcf57e7f0ae48dfc extends Twig_Template
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
        $__internal_73eb2d3de8ba3a1bada054fe6e017a2beca1963a1a66b09ac12c37e068dbb8fb = $this->env->getExtension("native_profiler");
        $__internal_73eb2d3de8ba3a1bada054fe6e017a2beca1963a1a66b09ac12c37e068dbb8fb->enter($__internal_73eb2d3de8ba3a1bada054fe6e017a2beca1963a1a66b09ac12c37e068dbb8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_73eb2d3de8ba3a1bada054fe6e017a2beca1963a1a66b09ac12c37e068dbb8fb->leave($__internal_73eb2d3de8ba3a1bada054fe6e017a2beca1963a1a66b09ac12c37e068dbb8fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
