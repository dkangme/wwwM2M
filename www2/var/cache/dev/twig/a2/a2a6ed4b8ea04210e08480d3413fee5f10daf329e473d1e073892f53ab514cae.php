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
        $__internal_ccd183e701a37a560cd7d025194b701f54f88061db54f9e7e34f6d2800e5959c = $this->env->getExtension("native_profiler");
        $__internal_ccd183e701a37a560cd7d025194b701f54f88061db54f9e7e34f6d2800e5959c->enter($__internal_ccd183e701a37a560cd7d025194b701f54f88061db54f9e7e34f6d2800e5959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd183e701a37a560cd7d025194b701f54f88061db54f9e7e34f6d2800e5959c->leave($__internal_ccd183e701a37a560cd7d025194b701f54f88061db54f9e7e34f6d2800e5959c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bed5d8a8f4d57474c2804541b3a4cad37b8b7f5dbb921ea13176d7f7acf85eab = $this->env->getExtension("native_profiler");
        $__internal_bed5d8a8f4d57474c2804541b3a4cad37b8b7f5dbb921ea13176d7f7acf85eab->enter($__internal_bed5d8a8f4d57474c2804541b3a4cad37b8b7f5dbb921ea13176d7f7acf85eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bed5d8a8f4d57474c2804541b3a4cad37b8b7f5dbb921ea13176d7f7acf85eab->leave($__internal_bed5d8a8f4d57474c2804541b3a4cad37b8b7f5dbb921ea13176d7f7acf85eab_prof);

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
