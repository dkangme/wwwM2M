<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_342e6905e1dbf5f3839add83d1ce5016bbd701c2823df0ec6f58e402b3eb0309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_30331613b7e2a0c5a5f0b2d7caa69586e5276737bc7e9a28b6006fe515f89bef = $this->env->getExtension("native_profiler");
        $__internal_30331613b7e2a0c5a5f0b2d7caa69586e5276737bc7e9a28b6006fe515f89bef->enter($__internal_30331613b7e2a0c5a5f0b2d7caa69586e5276737bc7e9a28b6006fe515f89bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30331613b7e2a0c5a5f0b2d7caa69586e5276737bc7e9a28b6006fe515f89bef->leave($__internal_30331613b7e2a0c5a5f0b2d7caa69586e5276737bc7e9a28b6006fe515f89bef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07d2307d95afd9e82a588e2574c3e09d6bdf0b83fe3fee0130e7e69fcaa744c2 = $this->env->getExtension("native_profiler");
        $__internal_07d2307d95afd9e82a588e2574c3e09d6bdf0b83fe3fee0130e7e69fcaa744c2->enter($__internal_07d2307d95afd9e82a588e2574c3e09d6bdf0b83fe3fee0130e7e69fcaa744c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_07d2307d95afd9e82a588e2574c3e09d6bdf0b83fe3fee0130e7e69fcaa744c2->leave($__internal_07d2307d95afd9e82a588e2574c3e09d6bdf0b83fe3fee0130e7e69fcaa744c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
