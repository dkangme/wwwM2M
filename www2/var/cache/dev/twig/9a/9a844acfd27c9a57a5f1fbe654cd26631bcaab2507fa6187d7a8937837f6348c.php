<?php

/* :alarm:index.html.twig */
class __TwigTemplate_0f0c6a495b4c4218820a90651e54a696a2724be584fd54c3f78f5f06561f5540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":alarm:index.html.twig", 1);
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
        $__internal_214c62de835d4e0c6884cc90925a14b1b1a095b33f43242d3991811d9f0ebca1 = $this->env->getExtension("native_profiler");
        $__internal_214c62de835d4e0c6884cc90925a14b1b1a095b33f43242d3991811d9f0ebca1->enter($__internal_214c62de835d4e0c6884cc90925a14b1b1a095b33f43242d3991811d9f0ebca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alarm:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214c62de835d4e0c6884cc90925a14b1b1a095b33f43242d3991811d9f0ebca1->leave($__internal_214c62de835d4e0c6884cc90925a14b1b1a095b33f43242d3991811d9f0ebca1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a1aec94ab16631dc97ba139d1f8f12fa42c1361e4820c0285afa61335271b80 = $this->env->getExtension("native_profiler");
        $__internal_1a1aec94ab16631dc97ba139d1f8f12fa42c1361e4820c0285afa61335271b80->enter($__internal_1a1aec94ab16631dc97ba139d1f8f12fa42c1361e4820c0285afa61335271b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Alarm list", array(), "messages");
        echo "</h1>

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Sensor</th>
                <th>Expression</th>
                <th>Nextalarminterval</th>
                <th>Alarmlevel</th>
                <th>Description</th>
                <th>Idalarm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alarms"]) ? $context["alarms"] : $this->getContext($context, "alarms")));
        foreach ($context['_seq'] as $context["_key"] => $context["alarm"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alarm"], "sensorsensor", array()), "description", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alarm_show", array("id" => $this->getAttribute($context["alarm"], "idalarm", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alarm"], "expression", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alarm"], "nextalarminterval", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["alarm"], "alarmlevel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["alarm"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alarm"], "idalarm", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alarm_show", array("id" => $this->getAttribute($context["alarm"], "idalarm", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alarm_edit", array("id" => $this->getAttribute($context["alarm"], "idalarm", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alarm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("admin_alarm_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_1a1aec94ab16631dc97ba139d1f8f12fa42c1361e4820c0285afa61335271b80->leave($__internal_1a1aec94ab16631dc97ba139d1f8f12fa42c1361e4820c0285afa61335271b80_prof);

    }

    public function getTemplateName()
    {
        return ":alarm:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  70 => 22,  66 => 21,  63 => 20,  59 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{%trans%}Alarm list{%endtrans%}</h1>*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Sensor</th>*/
/*                 <th>Expression</th>*/
/*                 <th>Nextalarminterval</th>*/
/*                 <th>Alarmlevel</th>*/
/*                 <th>Description</th>*/
/*                 <th>Idalarm</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for alarm in alarms %}*/
/*             <tr>*/
/*                 <td>{{ alarm.sensorsensor.description }}</td>*/
/*                 <td><a href="{{ path('admin_alarm_show', { 'id': alarm.idalarm }) }}">{{ alarm.expression }}</a></td>*/
/*                 <td>{{ alarm.nextalarminterval }}</td>*/
/*                 <td>{{ alarm.alarmlevel }}</td>*/
/*                 <td>{{ alarm.description }}</td>*/
/*                 <td>{{ alarm.idalarm }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_alarm_show', { 'id': alarm.idalarm }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_alarm_edit', { 'id': alarm.idalarm }) }}">edit</a>*/
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
/*             <a href="{{ path('admin_alarm_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
