<?php

/* sensor/index.html.twig */
class __TwigTemplate_1321782b8e4e72ea8dde83c1c6ccfac6e02e198a07ac9f8f50d7f131dfe8cca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sensor/index.html.twig", 1);
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
        $__internal_c0416c21e8ffd444206b5950198e2b1565e6dcc5ed5963637dd563880ae13509 = $this->env->getExtension("native_profiler");
        $__internal_c0416c21e8ffd444206b5950198e2b1565e6dcc5ed5963637dd563880ae13509->enter($__internal_c0416c21e8ffd444206b5950198e2b1565e6dcc5ed5963637dd563880ae13509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0416c21e8ffd444206b5950198e2b1565e6dcc5ed5963637dd563880ae13509->leave($__internal_c0416c21e8ffd444206b5950198e2b1565e6dcc5ed5963637dd563880ae13509_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21e6acdc2581e2d26196941db9af61f7197a63fe2437df43e68b8f39eae7d87c = $this->env->getExtension("native_profiler");
        $__internal_21e6acdc2581e2d26196941db9af61f7197a63fe2437df43e68b8f39eae7d87c->enter($__internal_21e6acdc2581e2d26196941db9af61f7197a63fe2437df43e68b8f39eae7d87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">

        <h1>Sensor list</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Idsensor</th>
                    <th>Humanvalue</th>
                    <th>Value</th>
                    <th>Lastreport</th>
                    <th>Description</th>
                    <th>Alarmlevel</th>
                    <th>Formula</th>
                    <th>Channelid</th>
                    <th>Savehistoryevery</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 26
            echo "                <tr>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("data_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "idsensor", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "value", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if ($this->getAttribute($context["sensor"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sensor"], "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "alarmlevel", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "formula", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "channelid", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "savehistoryevery", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("data_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("data_sensor_edit", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
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
        // line 48
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("data_sensor_new");
        echo "\">Create a new entry</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_21e6acdc2581e2d26196941db9af61f7197a63fe2437df43e68b8f39eae7d87c->leave($__internal_21e6acdc2581e2d26196941db9af61f7197a63fe2437df43e68b8f39eae7d87c_prof);

    }

    public function getTemplateName()
    {
        return "sensor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  131 => 48,  119 => 42,  113 => 39,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/* */
/*         <h1>Sensor list</h1>*/
/* */
/*         <table class="table table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Idsensor</th>*/
/*                     <th>Humanvalue</th>*/
/*                     <th>Value</th>*/
/*                     <th>Lastreport</th>*/
/*                     <th>Description</th>*/
/*                     <th>Alarmlevel</th>*/
/*                     <th>Formula</th>*/
/*                     <th>Channelid</th>*/
/*                     <th>Savehistoryevery</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for sensor in sensors %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('data_sensor_show', { 'id': sensor.idsensor }) }}">{{ sensor.idsensor }}</a></td>*/
/*                     <td>{{ sensor.humanvalue }}</td>*/
/*                     <td>{{ sensor.value }}</td>*/
/*                     <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ sensor.description }}</td>*/
/*                     <td>{{ sensor.alarmlevel }}</td>*/
/*                     <td>{{ sensor.formula }}</td>*/
/*                     <td>{{ sensor.channelid }}</td>*/
/*                     <td>{{ sensor.savehistoryevery }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('data_sensor_show', { 'id': sensor.idsensor }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('data_sensor_edit', { 'id': sensor.idsensor }) }}">edit</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('data_sensor_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
