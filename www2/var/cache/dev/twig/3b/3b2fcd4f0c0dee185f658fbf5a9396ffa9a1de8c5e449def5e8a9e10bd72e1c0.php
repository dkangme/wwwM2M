<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e9e56cfe6345455873f56ee129936414c317e2189bbe663a7504ddeb2289aa35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1d8527437350bc6dd650bd94531a48e35ed68bff4350c20f010a063e31d147e1 = $this->env->getExtension("native_profiler");
        $__internal_1d8527437350bc6dd650bd94531a48e35ed68bff4350c20f010a063e31d147e1->enter($__internal_1d8527437350bc6dd650bd94531a48e35ed68bff4350c20f010a063e31d147e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8527437350bc6dd650bd94531a48e35ed68bff4350c20f010a063e31d147e1->leave($__internal_1d8527437350bc6dd650bd94531a48e35ed68bff4350c20f010a063e31d147e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d92874e33f1cfa2c23857f2fdda309ac640951dd377e3ae2dba68f08572ca748 = $this->env->getExtension("native_profiler");
        $__internal_d92874e33f1cfa2c23857f2fdda309ac640951dd377e3ae2dba68f08572ca748->enter($__internal_d92874e33f1cfa2c23857f2fdda309ac640951dd377e3ae2dba68f08572ca748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d92874e33f1cfa2c23857f2fdda309ac640951dd377e3ae2dba68f08572ca748->leave($__internal_d92874e33f1cfa2c23857f2fdda309ac640951dd377e3ae2dba68f08572ca748_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
