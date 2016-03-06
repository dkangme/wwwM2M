<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_27d273e48ae008ddca6df198f2fad1005b40c73a2a6c58df7532b22b91b3b407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a852e909b252cc26e4c632d99209c8233df48aa707c9b011dc08d0a472f9fcea = $this->env->getExtension("native_profiler");
        $__internal_a852e909b252cc26e4c632d99209c8233df48aa707c9b011dc08d0a472f9fcea->enter($__internal_a852e909b252cc26e4c632d99209c8233df48aa707c9b011dc08d0a472f9fcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a852e909b252cc26e4c632d99209c8233df48aa707c9b011dc08d0a472f9fcea->leave($__internal_a852e909b252cc26e4c632d99209c8233df48aa707c9b011dc08d0a472f9fcea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32769880e15af706170250c8afb7b8253a9b0119a1bf52633e31d6ce3090c3b7 = $this->env->getExtension("native_profiler");
        $__internal_32769880e15af706170250c8afb7b8253a9b0119a1bf52633e31d6ce3090c3b7->enter($__internal_32769880e15af706170250c8afb7b8253a9b0119a1bf52633e31d6ce3090c3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_32769880e15af706170250c8afb7b8253a9b0119a1bf52633e31d6ce3090c3b7->leave($__internal_32769880e15af706170250c8afb7b8253a9b0119a1bf52633e31d6ce3090c3b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
