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
        $__internal_62afc3040cf75cd2e4f9d0b383f23b33038bd2051649de5661c03ff97ad7b4e4 = $this->env->getExtension("native_profiler");
        $__internal_62afc3040cf75cd2e4f9d0b383f23b33038bd2051649de5661c03ff97ad7b4e4->enter($__internal_62afc3040cf75cd2e4f9d0b383f23b33038bd2051649de5661c03ff97ad7b4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_62afc3040cf75cd2e4f9d0b383f23b33038bd2051649de5661c03ff97ad7b4e4->leave($__internal_62afc3040cf75cd2e4f9d0b383f23b33038bd2051649de5661c03ff97ad7b4e4_prof);

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
