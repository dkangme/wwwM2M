<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_21623a8c5a3c7864f358dea0a932464e3675642bd8c376c475c10770fb5bbe56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_ee3137220a57d2979e152c9220d1385c5c588e4097162049599fc73d68522e54 = $this->env->getExtension("native_profiler");
        $__internal_ee3137220a57d2979e152c9220d1385c5c588e4097162049599fc73d68522e54->enter($__internal_ee3137220a57d2979e152c9220d1385c5c588e4097162049599fc73d68522e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3137220a57d2979e152c9220d1385c5c588e4097162049599fc73d68522e54->leave($__internal_ee3137220a57d2979e152c9220d1385c5c588e4097162049599fc73d68522e54_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d98a0f4bc8f2d0ba0f383b22e6737714bd84b2fadfdc3e4365aaf3e22fcae2b = $this->env->getExtension("native_profiler");
        $__internal_6d98a0f4bc8f2d0ba0f383b22e6737714bd84b2fadfdc3e4365aaf3e22fcae2b->enter($__internal_6d98a0f4bc8f2d0ba0f383b22e6737714bd84b2fadfdc3e4365aaf3e22fcae2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6d98a0f4bc8f2d0ba0f383b22e6737714bd84b2fadfdc3e4365aaf3e22fcae2b->leave($__internal_6d98a0f4bc8f2d0ba0f383b22e6737714bd84b2fadfdc3e4365aaf3e22fcae2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
