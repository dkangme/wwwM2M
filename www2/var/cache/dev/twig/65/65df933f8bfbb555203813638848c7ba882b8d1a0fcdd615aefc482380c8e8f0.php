<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_3553d30b2db8689813d7372336b7aee436b826795b19832866eafdc480573008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45e55eb220ab25f9c261f081287d7b28999b6635915164ba8c919d0c311082b = $this->env->getExtension("native_profiler");
        $__internal_f45e55eb220ab25f9c261f081287d7b28999b6635915164ba8c919d0c311082b->enter($__internal_f45e55eb220ab25f9c261f081287d7b28999b6635915164ba8c919d0c311082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f45e55eb220ab25f9c261f081287d7b28999b6635915164ba8c919d0c311082b->leave($__internal_f45e55eb220ab25f9c261f081287d7b28999b6635915164ba8c919d0c311082b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
