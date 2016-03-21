<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_1b2e33145f245af91b9128e7d901339fa677e8edca2a46e9436b2a10f8c4ab1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_1d2188ebb9ccbe851e67f400cf2d6c8b4105632e3a36daddbdf88c7a3017f7c6 = $this->env->getExtension("native_profiler");
        $__internal_1d2188ebb9ccbe851e67f400cf2d6c8b4105632e3a36daddbdf88c7a3017f7c6->enter($__internal_1d2188ebb9ccbe851e67f400cf2d6c8b4105632e3a36daddbdf88c7a3017f7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2188ebb9ccbe851e67f400cf2d6c8b4105632e3a36daddbdf88c7a3017f7c6->leave($__internal_1d2188ebb9ccbe851e67f400cf2d6c8b4105632e3a36daddbdf88c7a3017f7c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_718d13eeb40a5876de0dfd7f722d7c1215428e4263613f96e70f980e1eacf493 = $this->env->getExtension("native_profiler");
        $__internal_718d13eeb40a5876de0dfd7f722d7c1215428e4263613f96e70f980e1eacf493->enter($__internal_718d13eeb40a5876de0dfd7f722d7c1215428e4263613f96e70f980e1eacf493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_718d13eeb40a5876de0dfd7f722d7c1215428e4263613f96e70f980e1eacf493->leave($__internal_718d13eeb40a5876de0dfd7f722d7c1215428e4263613f96e70f980e1eacf493_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
