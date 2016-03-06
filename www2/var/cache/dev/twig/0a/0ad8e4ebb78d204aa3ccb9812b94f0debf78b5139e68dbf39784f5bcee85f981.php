<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520b55745c8a8e7cafa385cc56b5d52999aaa4d64316135a4668e52b9c4edc0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8eca68515c31aeb9173cdd9f4cc8b86860d469e774f77d120150dd13134c0b3a = $this->env->getExtension("native_profiler");
        $__internal_8eca68515c31aeb9173cdd9f4cc8b86860d469e774f77d120150dd13134c0b3a->enter($__internal_8eca68515c31aeb9173cdd9f4cc8b86860d469e774f77d120150dd13134c0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eca68515c31aeb9173cdd9f4cc8b86860d469e774f77d120150dd13134c0b3a->leave($__internal_8eca68515c31aeb9173cdd9f4cc8b86860d469e774f77d120150dd13134c0b3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9b443890a6e07fc40e4c19cfa3f00d82961c0ed1d4ed5f25142e9636515ce8b = $this->env->getExtension("native_profiler");
        $__internal_b9b443890a6e07fc40e4c19cfa3f00d82961c0ed1d4ed5f25142e9636515ce8b->enter($__internal_b9b443890a6e07fc40e4c19cfa3f00d82961c0ed1d4ed5f25142e9636515ce8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b9b443890a6e07fc40e4c19cfa3f00d82961c0ed1d4ed5f25142e9636515ce8b->leave($__internal_b9b443890a6e07fc40e4c19cfa3f00d82961c0ed1d4ed5f25142e9636515ce8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
