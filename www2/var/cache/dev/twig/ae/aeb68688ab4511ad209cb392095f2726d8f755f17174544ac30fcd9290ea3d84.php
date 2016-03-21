<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b3085b35b12c9c3aa8c40b40cb80dbdae6772e3107a2458599d03ddc318c6af7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_213d5f33df16c8c8d072b0887080a4194d64cc7ac9a49bd64241f29562d69658 = $this->env->getExtension("native_profiler");
        $__internal_213d5f33df16c8c8d072b0887080a4194d64cc7ac9a49bd64241f29562d69658->enter($__internal_213d5f33df16c8c8d072b0887080a4194d64cc7ac9a49bd64241f29562d69658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213d5f33df16c8c8d072b0887080a4194d64cc7ac9a49bd64241f29562d69658->leave($__internal_213d5f33df16c8c8d072b0887080a4194d64cc7ac9a49bd64241f29562d69658_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d13ec13686bc06123fd2c67ae61627a695396c11ed260ed098a94a0835ffca5 = $this->env->getExtension("native_profiler");
        $__internal_4d13ec13686bc06123fd2c67ae61627a695396c11ed260ed098a94a0835ffca5->enter($__internal_4d13ec13686bc06123fd2c67ae61627a695396c11ed260ed098a94a0835ffca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4d13ec13686bc06123fd2c67ae61627a695396c11ed260ed098a94a0835ffca5->leave($__internal_4d13ec13686bc06123fd2c67ae61627a695396c11ed260ed098a94a0835ffca5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
