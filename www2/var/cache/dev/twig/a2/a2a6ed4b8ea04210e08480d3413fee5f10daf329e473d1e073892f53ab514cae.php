<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8a9d1b00d16ab8104c524fccf34bccd9e827352616ef4c4263010ba0716c3eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_84180970faeced161f9512fff67f8e983f9ff13efc7c0287b06059db98641644 = $this->env->getExtension("native_profiler");
        $__internal_84180970faeced161f9512fff67f8e983f9ff13efc7c0287b06059db98641644->enter($__internal_84180970faeced161f9512fff67f8e983f9ff13efc7c0287b06059db98641644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84180970faeced161f9512fff67f8e983f9ff13efc7c0287b06059db98641644->leave($__internal_84180970faeced161f9512fff67f8e983f9ff13efc7c0287b06059db98641644_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1b182f479a7a85592248a6444118c3a0827af648a730f300fd784aba0502e49 = $this->env->getExtension("native_profiler");
        $__internal_c1b182f479a7a85592248a6444118c3a0827af648a730f300fd784aba0502e49->enter($__internal_c1b182f479a7a85592248a6444118c3a0827af648a730f300fd784aba0502e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c1b182f479a7a85592248a6444118c3a0827af648a730f300fd784aba0502e49->leave($__internal_c1b182f479a7a85592248a6444118c3a0827af648a730f300fd784aba0502e49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
