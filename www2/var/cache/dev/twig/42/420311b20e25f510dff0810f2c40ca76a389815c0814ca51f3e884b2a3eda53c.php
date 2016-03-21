<?php

/* :notificationlist:edit.html.twig */
class __TwigTemplate_6afb93861d1f22f611622079b2434ad61811097a8f4f1671872df37265e88f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notificationlist:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a663a1158fe1ce43fe72ee3d41b463aeff39d10047424b6e2377da0ae9e1e3e = $this->env->getExtension("native_profiler");
        $__internal_2a663a1158fe1ce43fe72ee3d41b463aeff39d10047424b6e2377da0ae9e1e3e->enter($__internal_2a663a1158fe1ce43fe72ee3d41b463aeff39d10047424b6e2377da0ae9e1e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notificationlist:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a663a1158fe1ce43fe72ee3d41b463aeff39d10047424b6e2377da0ae9e1e3e->leave($__internal_2a663a1158fe1ce43fe72ee3d41b463aeff39d10047424b6e2377da0ae9e1e3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3e7fa28fc7871efd16b42d6b3a5a694d87f18e26ab48ce25a1d253e6747be7 = $this->env->getExtension("native_profiler");
        $__internal_8d3e7fa28fc7871efd16b42d6b3a5a694d87f18e26ab48ce25a1d253e6747be7->enter($__internal_8d3e7fa28fc7871efd16b42d6b3a5a694d87f18e26ab48ce25a1d253e6747be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notificationlist edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_notificationlist_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8d3e7fa28fc7871efd16b42d6b3a5a694d87f18e26ab48ce25a1d253e6747be7->leave($__internal_8d3e7fa28fc7871efd16b42d6b3a5a694d87f18e26ab48ce25a1d253e6747be7_prof);

    }

    public function getTemplateName()
    {
        return ":notificationlist:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notificationlist edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_notificationlist_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
