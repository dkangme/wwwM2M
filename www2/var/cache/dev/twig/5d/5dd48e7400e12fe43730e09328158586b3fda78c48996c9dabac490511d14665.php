<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4e9515568f77b47de751d4d548d95ddf45ac97ee754df09218caed14ae764ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a7324d21d932aba81175fa436e5ee158c0279d1e789d766b6a49a1fa3149bc30 = $this->env->getExtension("native_profiler");
        $__internal_a7324d21d932aba81175fa436e5ee158c0279d1e789d766b6a49a1fa3149bc30->enter($__internal_a7324d21d932aba81175fa436e5ee158c0279d1e789d766b6a49a1fa3149bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7324d21d932aba81175fa436e5ee158c0279d1e789d766b6a49a1fa3149bc30->leave($__internal_a7324d21d932aba81175fa436e5ee158c0279d1e789d766b6a49a1fa3149bc30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52a3b830e702ad538230e8ad284b22e86dc2a3f20c1b961ed373204ca51c8e9e = $this->env->getExtension("native_profiler");
        $__internal_52a3b830e702ad538230e8ad284b22e86dc2a3f20c1b961ed373204ca51c8e9e->enter($__internal_52a3b830e702ad538230e8ad284b22e86dc2a3f20c1b961ed373204ca51c8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_52a3b830e702ad538230e8ad284b22e86dc2a3f20c1b961ed373204ca51c8e9e->leave($__internal_52a3b830e702ad538230e8ad284b22e86dc2a3f20c1b961ed373204ca51c8e9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
