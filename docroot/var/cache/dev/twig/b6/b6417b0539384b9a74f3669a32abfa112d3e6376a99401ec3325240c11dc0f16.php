<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fe1f5fa17ff90e3baf76741384d48f02bf506896dda0db8d01594fe7f188645b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4c600f8c473aebe7aa52a94e3fe4c4a818bca8ca65541671e27b2fd54c6efd7 = $this->env->getExtension("native_profiler");
        $__internal_d4c600f8c473aebe7aa52a94e3fe4c4a818bca8ca65541671e27b2fd54c6efd7->enter($__internal_d4c600f8c473aebe7aa52a94e3fe4c4a818bca8ca65541671e27b2fd54c6efd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c600f8c473aebe7aa52a94e3fe4c4a818bca8ca65541671e27b2fd54c6efd7->leave($__internal_d4c600f8c473aebe7aa52a94e3fe4c4a818bca8ca65541671e27b2fd54c6efd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a46417250c00be2685a57943f76dd2f19c03f2a5d8a67b7f5772e041c50dacd = $this->env->getExtension("native_profiler");
        $__internal_4a46417250c00be2685a57943f76dd2f19c03f2a5d8a67b7f5772e041c50dacd->enter($__internal_4a46417250c00be2685a57943f76dd2f19c03f2a5d8a67b7f5772e041c50dacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a46417250c00be2685a57943f76dd2f19c03f2a5d8a67b7f5772e041c50dacd->leave($__internal_4a46417250c00be2685a57943f76dd2f19c03f2a5d8a67b7f5772e041c50dacd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5693f1c4503a3205d588e0528ec2dd88bd4ac8dd2a83f21d441d083d2ae069f8 = $this->env->getExtension("native_profiler");
        $__internal_5693f1c4503a3205d588e0528ec2dd88bd4ac8dd2a83f21d441d083d2ae069f8->enter($__internal_5693f1c4503a3205d588e0528ec2dd88bd4ac8dd2a83f21d441d083d2ae069f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5693f1c4503a3205d588e0528ec2dd88bd4ac8dd2a83f21d441d083d2ae069f8->leave($__internal_5693f1c4503a3205d588e0528ec2dd88bd4ac8dd2a83f21d441d083d2ae069f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95d5aa8662176ec90db5e7eea0db4d33435096e1eb96d6e16c51d0d7ca83a14b = $this->env->getExtension("native_profiler");
        $__internal_95d5aa8662176ec90db5e7eea0db4d33435096e1eb96d6e16c51d0d7ca83a14b->enter($__internal_95d5aa8662176ec90db5e7eea0db4d33435096e1eb96d6e16c51d0d7ca83a14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_95d5aa8662176ec90db5e7eea0db4d33435096e1eb96d6e16c51d0d7ca83a14b->leave($__internal_95d5aa8662176ec90db5e7eea0db4d33435096e1eb96d6e16c51d0d7ca83a14b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
