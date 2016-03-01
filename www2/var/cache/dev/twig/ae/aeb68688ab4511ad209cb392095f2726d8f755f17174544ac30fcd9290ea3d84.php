<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b3085b35b12c9c3aa8c40b40cb80dbdae6772e3107a2458599d03ddc318c6af7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_01aabe01106b5dfe0a4301566ae425f9b11371f8f02943d8e61444224e2b9552 = $this->env->getExtension("native_profiler");
        $__internal_01aabe01106b5dfe0a4301566ae425f9b11371f8f02943d8e61444224e2b9552->enter($__internal_01aabe01106b5dfe0a4301566ae425f9b11371f8f02943d8e61444224e2b9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01aabe01106b5dfe0a4301566ae425f9b11371f8f02943d8e61444224e2b9552->leave($__internal_01aabe01106b5dfe0a4301566ae425f9b11371f8f02943d8e61444224e2b9552_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28e235210cfa59909ac2251417dac61155b6d0c6f315376c3d5abf135a11a885 = $this->env->getExtension("native_profiler");
        $__internal_28e235210cfa59909ac2251417dac61155b6d0c6f315376c3d5abf135a11a885->enter($__internal_28e235210cfa59909ac2251417dac61155b6d0c6f315376c3d5abf135a11a885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_28e235210cfa59909ac2251417dac61155b6d0c6f315376c3d5abf135a11a885->leave($__internal_28e235210cfa59909ac2251417dac61155b6d0c6f315376c3d5abf135a11a885_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
