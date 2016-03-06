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
        $__internal_3b7cd487703f436ec07d847107f020f0468195cf62334cb8fad92027bb4d0c41 = $this->env->getExtension("native_profiler");
        $__internal_3b7cd487703f436ec07d847107f020f0468195cf62334cb8fad92027bb4d0c41->enter($__internal_3b7cd487703f436ec07d847107f020f0468195cf62334cb8fad92027bb4d0c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3b7cd487703f436ec07d847107f020f0468195cf62334cb8fad92027bb4d0c41->leave($__internal_3b7cd487703f436ec07d847107f020f0468195cf62334cb8fad92027bb4d0c41_prof);

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
