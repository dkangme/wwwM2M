<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c1d8e44bf7498608e1aa34cc16e627cd103df7eae8919597cd7766b674d75a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_b5f5e44741abd15ae8abca4ad49f8c1226bcff9cd93438403517a5e41479e8fe = $this->env->getExtension("native_profiler");
        $__internal_b5f5e44741abd15ae8abca4ad49f8c1226bcff9cd93438403517a5e41479e8fe->enter($__internal_b5f5e44741abd15ae8abca4ad49f8c1226bcff9cd93438403517a5e41479e8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f5e44741abd15ae8abca4ad49f8c1226bcff9cd93438403517a5e41479e8fe->leave($__internal_b5f5e44741abd15ae8abca4ad49f8c1226bcff9cd93438403517a5e41479e8fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19ad0892617e9e8c40c6a108d0b41481277e32134381922fe6854f9abf64a108 = $this->env->getExtension("native_profiler");
        $__internal_19ad0892617e9e8c40c6a108d0b41481277e32134381922fe6854f9abf64a108->enter($__internal_19ad0892617e9e8c40c6a108d0b41481277e32134381922fe6854f9abf64a108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_19ad0892617e9e8c40c6a108d0b41481277e32134381922fe6854f9abf64a108->leave($__internal_19ad0892617e9e8c40c6a108d0b41481277e32134381922fe6854f9abf64a108_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
