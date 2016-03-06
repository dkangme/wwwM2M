<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_935fec91c184e6d3364b01a48a7463f9fb8006b18bbc7d3c9d99dc3b56b2bfa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a80cf163dc2177099b05bf4e2efcc4af918b024fc9c18b37daa3618600b5a15b = $this->env->getExtension("native_profiler");
        $__internal_a80cf163dc2177099b05bf4e2efcc4af918b024fc9c18b37daa3618600b5a15b->enter($__internal_a80cf163dc2177099b05bf4e2efcc4af918b024fc9c18b37daa3618600b5a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80cf163dc2177099b05bf4e2efcc4af918b024fc9c18b37daa3618600b5a15b->leave($__internal_a80cf163dc2177099b05bf4e2efcc4af918b024fc9c18b37daa3618600b5a15b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90a71b05dc1498e732f0dc4412e3870b475ce4fe5f889e8509c7d52ec6967602 = $this->env->getExtension("native_profiler");
        $__internal_90a71b05dc1498e732f0dc4412e3870b475ce4fe5f889e8509c7d52ec6967602->enter($__internal_90a71b05dc1498e732f0dc4412e3870b475ce4fe5f889e8509c7d52ec6967602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_90a71b05dc1498e732f0dc4412e3870b475ce4fe5f889e8509c7d52ec6967602->leave($__internal_90a71b05dc1498e732f0dc4412e3870b475ce4fe5f889e8509c7d52ec6967602_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
