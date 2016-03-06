<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4193193450fca7cfd609ee108fd890a98cecf3d9ffab0fb4cbaba8425b78b4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f75b83d5b4c00fdc6af036f3ecd620dd2575f0a92c2a152035f41806ebd6a18d = $this->env->getExtension("native_profiler");
        $__internal_f75b83d5b4c00fdc6af036f3ecd620dd2575f0a92c2a152035f41806ebd6a18d->enter($__internal_f75b83d5b4c00fdc6af036f3ecd620dd2575f0a92c2a152035f41806ebd6a18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75b83d5b4c00fdc6af036f3ecd620dd2575f0a92c2a152035f41806ebd6a18d->leave($__internal_f75b83d5b4c00fdc6af036f3ecd620dd2575f0a92c2a152035f41806ebd6a18d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24412ca0625bb0ba6fbbe319335963f61429f01a1fbf977cf4929c09c211d128 = $this->env->getExtension("native_profiler");
        $__internal_24412ca0625bb0ba6fbbe319335963f61429f01a1fbf977cf4929c09c211d128->enter($__internal_24412ca0625bb0ba6fbbe319335963f61429f01a1fbf977cf4929c09c211d128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_24412ca0625bb0ba6fbbe319335963f61429f01a1fbf977cf4929c09c211d128->leave($__internal_24412ca0625bb0ba6fbbe319335963f61429f01a1fbf977cf4929c09c211d128_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
