<?php

/* sensor/edit.html.twig */
class __TwigTemplate_3b6203a50170333b24fd84c9637d5eabf6b9359f554c04466bc687c59c13e713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sensor/edit.html.twig", 1);
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
        $__internal_d32c07bf13dfc625786dadd0e8e0ad6bcae0452039c4ee42e8ca54c389b32034 = $this->env->getExtension("native_profiler");
        $__internal_d32c07bf13dfc625786dadd0e8e0ad6bcae0452039c4ee42e8ca54c389b32034->enter($__internal_d32c07bf13dfc625786dadd0e8e0ad6bcae0452039c4ee42e8ca54c389b32034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32c07bf13dfc625786dadd0e8e0ad6bcae0452039c4ee42e8ca54c389b32034->leave($__internal_d32c07bf13dfc625786dadd0e8e0ad6bcae0452039c4ee42e8ca54c389b32034_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53336aca16816d676bd1f7cb942fd89db2922cdedcd2fd60e73a70a8be25503e = $this->env->getExtension("native_profiler");
        $__internal_53336aca16816d676bd1f7cb942fd89db2922cdedcd2fd60e73a70a8be25503e->enter($__internal_53336aca16816d676bd1f7cb942fd89db2922cdedcd2fd60e73a70a8be25503e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_sensor_index");
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
        
        $__internal_53336aca16816d676bd1f7cb942fd89db2922cdedcd2fd60e73a70a8be25503e->leave($__internal_53336aca16816d676bd1f7cb942fd89db2922cdedcd2fd60e73a70a8be25503e_prof);

    }

    public function getTemplateName()
    {
        return "sensor/edit.html.twig";
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
/*     <h1>Sensor edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
