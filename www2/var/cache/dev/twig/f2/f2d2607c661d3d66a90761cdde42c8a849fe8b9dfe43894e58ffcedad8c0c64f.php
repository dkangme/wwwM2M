<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_88a9222078b120fba1f2b3e216ed687a4a640d7bf73a52c3b8686e4991f8fc58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a96c59e8e1cf0cd6d9c459099fe0e3d9fd3a20552dd6a1928d23395c80942529 = $this->env->getExtension("native_profiler");
        $__internal_a96c59e8e1cf0cd6d9c459099fe0e3d9fd3a20552dd6a1928d23395c80942529->enter($__internal_a96c59e8e1cf0cd6d9c459099fe0e3d9fd3a20552dd6a1928d23395c80942529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96c59e8e1cf0cd6d9c459099fe0e3d9fd3a20552dd6a1928d23395c80942529->leave($__internal_a96c59e8e1cf0cd6d9c459099fe0e3d9fd3a20552dd6a1928d23395c80942529_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f21315ba35c1c0bef82a715a14cf02e50734de61166c716ad8b4ba5f1224a79 = $this->env->getExtension("native_profiler");
        $__internal_7f21315ba35c1c0bef82a715a14cf02e50734de61166c716ad8b4ba5f1224a79->enter($__internal_7f21315ba35c1c0bef82a715a14cf02e50734de61166c716ad8b4ba5f1224a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7f21315ba35c1c0bef82a715a14cf02e50734de61166c716ad8b4ba5f1224a79->leave($__internal_7f21315ba35c1c0bef82a715a14cf02e50734de61166c716ad8b4ba5f1224a79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
