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
        $__internal_f949c53914e1a0dbd910b1f02bf44ba8c1a1612a81ed12e0e6643463b7d01934 = $this->env->getExtension("native_profiler");
        $__internal_f949c53914e1a0dbd910b1f02bf44ba8c1a1612a81ed12e0e6643463b7d01934->enter($__internal_f949c53914e1a0dbd910b1f02bf44ba8c1a1612a81ed12e0e6643463b7d01934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f949c53914e1a0dbd910b1f02bf44ba8c1a1612a81ed12e0e6643463b7d01934->leave($__internal_f949c53914e1a0dbd910b1f02bf44ba8c1a1612a81ed12e0e6643463b7d01934_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b34912cae1ad8d1fa2e772196b1fdd4daba295dc52b15ad26733246282d3de3e = $this->env->getExtension("native_profiler");
        $__internal_b34912cae1ad8d1fa2e772196b1fdd4daba295dc52b15ad26733246282d3de3e->enter($__internal_b34912cae1ad8d1fa2e772196b1fdd4daba295dc52b15ad26733246282d3de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b34912cae1ad8d1fa2e772196b1fdd4daba295dc52b15ad26733246282d3de3e->leave($__internal_b34912cae1ad8d1fa2e772196b1fdd4daba295dc52b15ad26733246282d3de3e_prof);

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
