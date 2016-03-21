<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c1d8e44bf7498608e1aa34cc16e627cd103df7eae8919597cd7766b674d75a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_80c2dac08c22c818f75e62e4342a3c5d7a7b851c0214416e92085ad131d19356 = $this->env->getExtension("native_profiler");
        $__internal_80c2dac08c22c818f75e62e4342a3c5d7a7b851c0214416e92085ad131d19356->enter($__internal_80c2dac08c22c818f75e62e4342a3c5d7a7b851c0214416e92085ad131d19356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c2dac08c22c818f75e62e4342a3c5d7a7b851c0214416e92085ad131d19356->leave($__internal_80c2dac08c22c818f75e62e4342a3c5d7a7b851c0214416e92085ad131d19356_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_649a1d2ab2160f49925923e74546f86e9f858ac95b3c4d7a0f2c3029f6938823 = $this->env->getExtension("native_profiler");
        $__internal_649a1d2ab2160f49925923e74546f86e9f858ac95b3c4d7a0f2c3029f6938823->enter($__internal_649a1d2ab2160f49925923e74546f86e9f858ac95b3c4d7a0f2c3029f6938823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_649a1d2ab2160f49925923e74546f86e9f858ac95b3c4d7a0f2c3029f6938823->leave($__internal_649a1d2ab2160f49925923e74546f86e9f858ac95b3c4d7a0f2c3029f6938823_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
