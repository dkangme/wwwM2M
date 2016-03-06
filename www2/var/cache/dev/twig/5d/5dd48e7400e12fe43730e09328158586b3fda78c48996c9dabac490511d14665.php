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
        $__internal_274f25e0aafa83b7dce7ee78ce3bf498919e6327fc4bd4c1e6bbf4398ee65074 = $this->env->getExtension("native_profiler");
        $__internal_274f25e0aafa83b7dce7ee78ce3bf498919e6327fc4bd4c1e6bbf4398ee65074->enter($__internal_274f25e0aafa83b7dce7ee78ce3bf498919e6327fc4bd4c1e6bbf4398ee65074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274f25e0aafa83b7dce7ee78ce3bf498919e6327fc4bd4c1e6bbf4398ee65074->leave($__internal_274f25e0aafa83b7dce7ee78ce3bf498919e6327fc4bd4c1e6bbf4398ee65074_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47c01c263b002d83140ee0e48ac2886b2e69444d22f3eedfaf5af2f708c65218 = $this->env->getExtension("native_profiler");
        $__internal_47c01c263b002d83140ee0e48ac2886b2e69444d22f3eedfaf5af2f708c65218->enter($__internal_47c01c263b002d83140ee0e48ac2886b2e69444d22f3eedfaf5af2f708c65218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_47c01c263b002d83140ee0e48ac2886b2e69444d22f3eedfaf5af2f708c65218->leave($__internal_47c01c263b002d83140ee0e48ac2886b2e69444d22f3eedfaf5af2f708c65218_prof);

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
