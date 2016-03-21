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
        $__internal_c0b7f667748ba4e4209216949a32176c2a5b90cab4b7569f455e473a623e9552 = $this->env->getExtension("native_profiler");
        $__internal_c0b7f667748ba4e4209216949a32176c2a5b90cab4b7569f455e473a623e9552->enter($__internal_c0b7f667748ba4e4209216949a32176c2a5b90cab4b7569f455e473a623e9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b7f667748ba4e4209216949a32176c2a5b90cab4b7569f455e473a623e9552->leave($__internal_c0b7f667748ba4e4209216949a32176c2a5b90cab4b7569f455e473a623e9552_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42bb733809415e11c1239be03c234e5a70d6b2545ed4e2f4f344ba8335be9587 = $this->env->getExtension("native_profiler");
        $__internal_42bb733809415e11c1239be03c234e5a70d6b2545ed4e2f4f344ba8335be9587->enter($__internal_42bb733809415e11c1239be03c234e5a70d6b2545ed4e2f4f344ba8335be9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_42bb733809415e11c1239be03c234e5a70d6b2545ed4e2f4f344ba8335be9587->leave($__internal_42bb733809415e11c1239be03c234e5a70d6b2545ed4e2f4f344ba8335be9587_prof);

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
