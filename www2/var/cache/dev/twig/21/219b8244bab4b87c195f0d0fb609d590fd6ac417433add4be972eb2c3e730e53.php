<?php

/* :customer:edit.html.twig */
class __TwigTemplate_a3f38dd7a95c13295b7b45d46041e799b3ae51c9e4a47202d63b83bbbd7454a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:edit.html.twig", 1);
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
        $__internal_0064cb54a361419cd293fbec7bfc0cf9b08eda2bbd7ab8a4ea174986a45e97e6 = $this->env->getExtension("native_profiler");
        $__internal_0064cb54a361419cd293fbec7bfc0cf9b08eda2bbd7ab8a4ea174986a45e97e6->enter($__internal_0064cb54a361419cd293fbec7bfc0cf9b08eda2bbd7ab8a4ea174986a45e97e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0064cb54a361419cd293fbec7bfc0cf9b08eda2bbd7ab8a4ea174986a45e97e6->leave($__internal_0064cb54a361419cd293fbec7bfc0cf9b08eda2bbd7ab8a4ea174986a45e97e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c611cb640b7bd2db3b93a8829e9af325c5fe76ba8ccb000ff4c6dfdc195eb3c9 = $this->env->getExtension("native_profiler");
        $__internal_c611cb640b7bd2db3b93a8829e9af325c5fe76ba8ccb000ff4c6dfdc195eb3c9->enter($__internal_c611cb640b7bd2db3b93a8829e9af325c5fe76ba8ccb000ff4c6dfdc195eb3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_customer_index");
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
        
        $__internal_c611cb640b7bd2db3b93a8829e9af325c5fe76ba8ccb000ff4c6dfdc195eb3c9->leave($__internal_c611cb640b7bd2db3b93a8829e9af325c5fe76ba8ccb000ff4c6dfdc195eb3c9_prof);

    }

    public function getTemplateName()
    {
        return ":customer:edit.html.twig";
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
/*     <h1>Customer edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_customer_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
