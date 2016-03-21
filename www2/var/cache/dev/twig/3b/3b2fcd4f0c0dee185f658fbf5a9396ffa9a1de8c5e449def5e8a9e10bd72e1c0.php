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
        $__internal_81154a4ce8662ce1579c0f180070ee4e1cddbc3b47bb4c9de80bf35ac0d19669 = $this->env->getExtension("native_profiler");
        $__internal_81154a4ce8662ce1579c0f180070ee4e1cddbc3b47bb4c9de80bf35ac0d19669->enter($__internal_81154a4ce8662ce1579c0f180070ee4e1cddbc3b47bb4c9de80bf35ac0d19669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81154a4ce8662ce1579c0f180070ee4e1cddbc3b47bb4c9de80bf35ac0d19669->leave($__internal_81154a4ce8662ce1579c0f180070ee4e1cddbc3b47bb4c9de80bf35ac0d19669_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5019743a161677d9825e45442f859bae8466db2b47c4c261030f0c73062108c = $this->env->getExtension("native_profiler");
        $__internal_c5019743a161677d9825e45442f859bae8466db2b47c4c261030f0c73062108c->enter($__internal_c5019743a161677d9825e45442f859bae8466db2b47c4c261030f0c73062108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c5019743a161677d9825e45442f859bae8466db2b47c4c261030f0c73062108c->leave($__internal_c5019743a161677d9825e45442f859bae8466db2b47c4c261030f0c73062108c_prof);

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
