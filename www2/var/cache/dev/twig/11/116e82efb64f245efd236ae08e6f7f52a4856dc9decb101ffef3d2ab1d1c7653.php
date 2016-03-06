<?php

/* :sensor:index.html.twig */
class __TwigTemplate_f93ae2fd14e0d2bb2ed44bc0537de0678091fc6f0eb2ae70ae0ff41773aa63eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:index.html.twig", 1);
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
        $__internal_f628ed429b7ded52c6239fc9ad5c282c7d26709bea4d0d9982ed218d9a89c0f3 = $this->env->getExtension("native_profiler");
        $__internal_f628ed429b7ded52c6239fc9ad5c282c7d26709bea4d0d9982ed218d9a89c0f3->enter($__internal_f628ed429b7ded52c6239fc9ad5c282c7d26709bea4d0d9982ed218d9a89c0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f628ed429b7ded52c6239fc9ad5c282c7d26709bea4d0d9982ed218d9a89c0f3->leave($__internal_f628ed429b7ded52c6239fc9ad5c282c7d26709bea4d0d9982ed218d9a89c0f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b92f895c1951f63e1cb559c628a0bf194b0c423ab722cdf629476e2b65c0125 = $this->env->getExtension("native_profiler");
        $__internal_7b92f895c1951f63e1cb559c628a0bf194b0c423ab722cdf629476e2b65c0125->enter($__internal_7b92f895c1951f63e1cb559c628a0bf194b0c423ab722cdf629476e2b65c0125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor list</h1>

    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Humanvalue</th>
                <th>Value</th>
                <th>Lastreport</th>
                <th>Description</th>
                <th>Idsensor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "value", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["sensor"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sensor"], "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "idsensor", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_edit", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_sensor_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7b92f895c1951f63e1cb559c628a0bf194b0c423ab722cdf629476e2b65c0125->leave($__internal_7b92f895c1951f63e1cb559c628a0bf194b0c423ab722cdf629476e2b65c0125_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  108 => 37,  96 => 31,  90 => 28,  83 => 24,  79 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor list</h1>*/
/* */
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Humanvalue</th>*/
/*                 <th>Value</th>*/
/*                 <th>Lastreport</th>*/
/*                 <th>Description</th>*/
/*                 <th>Idsensor</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for sensor in sensors %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_sensor_show', { 'id': sensor.idsensor }) }}">{{ sensor.humanvalue }}</a></td>*/
/*                 <td>{{ sensor.value }}</td>*/
/*                 <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ sensor.description }}</td>*/
/*                 <td>{{ sensor.idsensor }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_sensor_show', { 'id': sensor.idsensor }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_sensor_edit', { 'id': sensor.idsensor }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_sensor_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
