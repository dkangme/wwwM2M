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
        $__internal_c9d1d4fecd1c5d216b0672103687fe43c1a473cf5ba28fe94920904148e69bcd = $this->env->getExtension("native_profiler");
        $__internal_c9d1d4fecd1c5d216b0672103687fe43c1a473cf5ba28fe94920904148e69bcd->enter($__internal_c9d1d4fecd1c5d216b0672103687fe43c1a473cf5ba28fe94920904148e69bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d1d4fecd1c5d216b0672103687fe43c1a473cf5ba28fe94920904148e69bcd->leave($__internal_c9d1d4fecd1c5d216b0672103687fe43c1a473cf5ba28fe94920904148e69bcd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0003022c67fab2e54b9ad8b0dbebead8f8879224d1d2d06a4d2dd81febab8d8a = $this->env->getExtension("native_profiler");
        $__internal_0003022c67fab2e54b9ad8b0dbebead8f8879224d1d2d06a4d2dd81febab8d8a->enter($__internal_0003022c67fab2e54b9ad8b0dbebead8f8879224d1d2d06a4d2dd81febab8d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0003022c67fab2e54b9ad8b0dbebead8f8879224d1d2d06a4d2dd81febab8d8a->leave($__internal_0003022c67fab2e54b9ad8b0dbebead8f8879224d1d2d06a4d2dd81febab8d8a_prof);

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
