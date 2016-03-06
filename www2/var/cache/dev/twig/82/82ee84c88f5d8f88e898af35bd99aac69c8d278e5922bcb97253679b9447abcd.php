<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9ef28819a44cf615bc96d86e0a201e8071e9e64a185deef775a6107edee9ed80 extends Twig_Template
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
        $__internal_1398d369bf9a7ed08582b36f65c87886e5910ab7fb9a2381c13e8e980e20a1e6 = $this->env->getExtension("native_profiler");
        $__internal_1398d369bf9a7ed08582b36f65c87886e5910ab7fb9a2381c13e8e980e20a1e6->enter($__internal_1398d369bf9a7ed08582b36f65c87886e5910ab7fb9a2381c13e8e980e20a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1398d369bf9a7ed08582b36f65c87886e5910ab7fb9a2381c13e8e980e20a1e6->leave($__internal_1398d369bf9a7ed08582b36f65c87886e5910ab7fb9a2381c13e8e980e20a1e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40c058898765f2b9da894661aabe2c51d1feedea07b52afe8656cd903a918e4c = $this->env->getExtension("native_profiler");
        $__internal_40c058898765f2b9da894661aabe2c51d1feedea07b52afe8656cd903a918e4c->enter($__internal_40c058898765f2b9da894661aabe2c51d1feedea07b52afe8656cd903a918e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_40c058898765f2b9da894661aabe2c51d1feedea07b52afe8656cd903a918e4c->leave($__internal_40c058898765f2b9da894661aabe2c51d1feedea07b52afe8656cd903a918e4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85fe4b877e06302b53f393d49b50ab4d9f9543a0abc81bed38e90e3e01138bc3 = $this->env->getExtension("native_profiler");
        $__internal_85fe4b877e06302b53f393d49b50ab4d9f9543a0abc81bed38e90e3e01138bc3->enter($__internal_85fe4b877e06302b53f393d49b50ab4d9f9543a0abc81bed38e90e3e01138bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85fe4b877e06302b53f393d49b50ab4d9f9543a0abc81bed38e90e3e01138bc3->leave($__internal_85fe4b877e06302b53f393d49b50ab4d9f9543a0abc81bed38e90e3e01138bc3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_076b485e717125ba18d682d30ee2a497365bad6ff7e57597a0c2760ce3b2803d = $this->env->getExtension("native_profiler");
        $__internal_076b485e717125ba18d682d30ee2a497365bad6ff7e57597a0c2760ce3b2803d->enter($__internal_076b485e717125ba18d682d30ee2a497365bad6ff7e57597a0c2760ce3b2803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_076b485e717125ba18d682d30ee2a497365bad6ff7e57597a0c2760ce3b2803d->leave($__internal_076b485e717125ba18d682d30ee2a497365bad6ff7e57597a0c2760ce3b2803d_prof);

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
