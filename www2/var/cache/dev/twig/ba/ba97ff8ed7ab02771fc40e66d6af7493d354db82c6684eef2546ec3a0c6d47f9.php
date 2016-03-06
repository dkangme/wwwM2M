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
        $__internal_0b92a63d3e5b0198160263c5c27fe93d371b45efa2bbbfb37e35469adf6f5174 = $this->env->getExtension("native_profiler");
        $__internal_0b92a63d3e5b0198160263c5c27fe93d371b45efa2bbbfb37e35469adf6f5174->enter($__internal_0b92a63d3e5b0198160263c5c27fe93d371b45efa2bbbfb37e35469adf6f5174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b92a63d3e5b0198160263c5c27fe93d371b45efa2bbbfb37e35469adf6f5174->leave($__internal_0b92a63d3e5b0198160263c5c27fe93d371b45efa2bbbfb37e35469adf6f5174_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9fe1b49510b9e1635b6bd3730d49b7075446b4a032983d736051ecad1a630e8 = $this->env->getExtension("native_profiler");
        $__internal_d9fe1b49510b9e1635b6bd3730d49b7075446b4a032983d736051ecad1a630e8->enter($__internal_d9fe1b49510b9e1635b6bd3730d49b7075446b4a032983d736051ecad1a630e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d9fe1b49510b9e1635b6bd3730d49b7075446b4a032983d736051ecad1a630e8->leave($__internal_d9fe1b49510b9e1635b6bd3730d49b7075446b4a032983d736051ecad1a630e8_prof);

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
