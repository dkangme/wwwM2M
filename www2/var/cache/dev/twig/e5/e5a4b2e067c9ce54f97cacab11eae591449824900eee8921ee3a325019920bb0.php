<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_20c1157e125e934305e2f13eccb2ab87a98beaecade1cfe7d710d589ca9b7793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d304e512dcc56c6ee183d5573bdade42fa1a7c326b0f8447fa508db87bf55efe = $this->env->getExtension("native_profiler");
        $__internal_d304e512dcc56c6ee183d5573bdade42fa1a7c326b0f8447fa508db87bf55efe->enter($__internal_d304e512dcc56c6ee183d5573bdade42fa1a7c326b0f8447fa508db87bf55efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d304e512dcc56c6ee183d5573bdade42fa1a7c326b0f8447fa508db87bf55efe->leave($__internal_d304e512dcc56c6ee183d5573bdade42fa1a7c326b0f8447fa508db87bf55efe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e180485f8b713fb8db306b7045e1a1d2f5141ae6a241077c21753e02af34c060 = $this->env->getExtension("native_profiler");
        $__internal_e180485f8b713fb8db306b7045e1a1d2f5141ae6a241077c21753e02af34c060->enter($__internal_e180485f8b713fb8db306b7045e1a1d2f5141ae6a241077c21753e02af34c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e180485f8b713fb8db306b7045e1a1d2f5141ae6a241077c21753e02af34c060->leave($__internal_e180485f8b713fb8db306b7045e1a1d2f5141ae6a241077c21753e02af34c060_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
