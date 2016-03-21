<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_27d273e48ae008ddca6df198f2fad1005b40c73a2a6c58df7532b22b91b3b407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3739683b813ab5ca27e7e1731a07e1d2f6bd11cd18939ee5e3f55744c04ffd3e = $this->env->getExtension("native_profiler");
        $__internal_3739683b813ab5ca27e7e1731a07e1d2f6bd11cd18939ee5e3f55744c04ffd3e->enter($__internal_3739683b813ab5ca27e7e1731a07e1d2f6bd11cd18939ee5e3f55744c04ffd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3739683b813ab5ca27e7e1731a07e1d2f6bd11cd18939ee5e3f55744c04ffd3e->leave($__internal_3739683b813ab5ca27e7e1731a07e1d2f6bd11cd18939ee5e3f55744c04ffd3e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f562d3a71580d2ef5d6e2dd4b7429e9f86c43d2b4c1a45f29e4b1dc1de4ac1b = $this->env->getExtension("native_profiler");
        $__internal_0f562d3a71580d2ef5d6e2dd4b7429e9f86c43d2b4c1a45f29e4b1dc1de4ac1b->enter($__internal_0f562d3a71580d2ef5d6e2dd4b7429e9f86c43d2b4c1a45f29e4b1dc1de4ac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0f562d3a71580d2ef5d6e2dd4b7429e9f86c43d2b4c1a45f29e4b1dc1de4ac1b->leave($__internal_0f562d3a71580d2ef5d6e2dd4b7429e9f86c43d2b4c1a45f29e4b1dc1de4ac1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
