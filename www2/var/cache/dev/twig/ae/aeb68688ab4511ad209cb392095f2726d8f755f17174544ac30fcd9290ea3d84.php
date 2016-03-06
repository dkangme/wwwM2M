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
        $__internal_bbf54ea81e4477bbe40a2218dd002cc34bcee5c3b73bab1110cccc045b04cd94 = $this->env->getExtension("native_profiler");
        $__internal_bbf54ea81e4477bbe40a2218dd002cc34bcee5c3b73bab1110cccc045b04cd94->enter($__internal_bbf54ea81e4477bbe40a2218dd002cc34bcee5c3b73bab1110cccc045b04cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf54ea81e4477bbe40a2218dd002cc34bcee5c3b73bab1110cccc045b04cd94->leave($__internal_bbf54ea81e4477bbe40a2218dd002cc34bcee5c3b73bab1110cccc045b04cd94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_694444096a95b46d21f39982f782ddd4e02c63ba85ab492d5f362df05e63a27c = $this->env->getExtension("native_profiler");
        $__internal_694444096a95b46d21f39982f782ddd4e02c63ba85ab492d5f362df05e63a27c->enter($__internal_694444096a95b46d21f39982f782ddd4e02c63ba85ab492d5f362df05e63a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_694444096a95b46d21f39982f782ddd4e02c63ba85ab492d5f362df05e63a27c->leave($__internal_694444096a95b46d21f39982f782ddd4e02c63ba85ab492d5f362df05e63a27c_prof);

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
