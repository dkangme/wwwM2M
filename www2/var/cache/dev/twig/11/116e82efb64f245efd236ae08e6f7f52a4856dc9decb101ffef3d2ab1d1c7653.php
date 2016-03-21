<?php

/* sensor/index.html.twig */
class __TwigTemplate_f93ae2fd14e0d2bb2ed44bc0537de0678091fc6f0eb2ae70ae0ff41773aa63eb extends Twig_Template
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
        $__internal_2bb69aac3ee65977e9940023d3b03f49abf6ddc39a77c233134dfe3d92949afd = $this->env->getExtension("native_profiler");
        $__internal_2bb69aac3ee65977e9940023d3b03f49abf6ddc39a77c233134dfe3d92949afd->enter($__internal_2bb69aac3ee65977e9940023d3b03f49abf6ddc39a77c233134dfe3d92949afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb69aac3ee65977e9940023d3b03f49abf6ddc39a77c233134dfe3d92949afd->leave($__internal_2bb69aac3ee65977e9940023d3b03f49abf6ddc39a77c233134dfe3d92949afd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d990b86b481f6faf4fb3f453bc178ad50b25236675020b48b1fedea4d832be31 = $this->env->getExtension("native_profiler");
        $__internal_d990b86b481f6faf4fb3f453bc178ad50b25236675020b48b1fedea4d832be31->enter($__internal_d990b86b481f6faf4fb3f453bc178ad50b25236675020b48b1fedea4d832be31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor list</h1>

    <table class=\"table\">
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "idsensor", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "value", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["sensor"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sensor"], "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "alarmlevel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "formula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "channelid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "savehistoryevery", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
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
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("admin_sensor_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d990b86b481f6faf4fb3f453bc178ad50b25236675020b48b1fedea4d832be31->leave($__internal_d990b86b481f6faf4fb3f453bc178ad50b25236675020b48b1fedea4d832be31_prof);

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
        return array (  135 => 50,  128 => 45,  116 => 39,  110 => 36,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idsensor</th>*/
/*                 <th>Humanvalue</th>*/
/*                 <th>Value</th>*/
/*                 <th>Lastreport</th>*/
/*                 <th>Description</th>*/
/*                 <th>Alarmlevel</th>*/
/*                 <th>Formula</th>*/
/*                 <th>Channelid</th>*/
/*                 <th>Savehistoryevery</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for sensor in sensors %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_sensor_show', { 'id': sensor.idsensor }) }}">{{ sensor.idsensor }}</a></td>*/
/*                 <td>{{ sensor.humanvalue }}</td>*/
/*                 <td>{{ sensor.value }}</td>*/
/*                 <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ sensor.description }}</td>*/
/*                 <td>{{ sensor.alarmlevel }}</td>*/
/*                 <td>{{ sensor.formula }}</td>*/
/*                 <td>{{ sensor.channelid }}</td>*/
/*                 <td>{{ sensor.savehistoryevery }}</td>*/
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
