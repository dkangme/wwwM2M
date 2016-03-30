<?php

/* :sensor:index.html.twig */
class __TwigTemplate_1321782b8e4e72ea8dde83c1c6ccfac6e02e198a07ac9f8f50d7f131dfe8cca7 extends Twig_Template
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
        $__internal_63b7728c0e0df685efa9da8b5255f53d41cb2b131b358ccc16ee1b385dea4eb9 = $this->env->getExtension("native_profiler");
        $__internal_63b7728c0e0df685efa9da8b5255f53d41cb2b131b358ccc16ee1b385dea4eb9->enter($__internal_63b7728c0e0df685efa9da8b5255f53d41cb2b131b358ccc16ee1b385dea4eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b7728c0e0df685efa9da8b5255f53d41cb2b131b358ccc16ee1b385dea4eb9->leave($__internal_63b7728c0e0df685efa9da8b5255f53d41cb2b131b358ccc16ee1b385dea4eb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6f5f45418fb1ed2c309f1de547e5fce7d82383b68a43a7e27bf56c54a18394f = $this->env->getExtension("native_profiler");
        $__internal_b6f5f45418fb1ed2c309f1de547e5fce7d82383b68a43a7e27bf56c54a18394f->enter($__internal_b6f5f45418fb1ed2c309f1de547e5fce7d82383b68a43a7e27bf56c54a18394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sensor list", array(), "messages");
        echo "</h1>

    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("MODWEI", array(), "messages");
        echo "</th>
                <th>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Description", array(), "messages");
        echo "</th>
                <th>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Port Number", array(), "messages");
        echo "</th>
                <th>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Current Value", array(), "messages");
        echo "</th>
                <th>";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last report", array(), "messages");
        echo "</th>   
                <th>";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Alarm level", array(), "messages");
        echo "</th>
                <th>";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "messages");
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "weiwei", array()), "nickname", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("data_sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "description", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "channelid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "measurement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["sensor"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sensor"], "lastreport", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td align=\"center\">
                    ";
            // line 28
            if (($this->getAttribute($context["sensor"], "alarmlevel", array()) == 0)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_green.png"), "html", null, true);
                echo "\" width=\"24\" height=\"24\"/>";
            }
            // line 29
            echo "                    ";
            if (($this->getAttribute($context["sensor"], "alarmlevel", array()) == 1)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_yellow.png"), "html", null, true);
                echo "\" width=\"24\" height=\"24\"/>";
            }
            // line 30
            echo "                    ";
            if (($this->getAttribute($context["sensor"], "alarmlevel", array()) == 2)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_orange.png"), "html", null, true);
                echo "\" width=\"24\" height=\"24\"/>";
            }
            // line 31
            echo "                    ";
            if (($this->getAttribute($context["sensor"], "alarmlevel", array()) == 3)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_red.png"), "html", null, true);
                echo "\" width=\"24\" height=\"24\"/>";
            }
            // line 32
            echo "                </td>
                
                
                <td>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("data_sensor_edit", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\"></i> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit", array(), "messages");
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("data_sensor_new");
        echo "\"><i class=\"fa fa-plus-square-o\"></i>  ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Create a new entry", array(), "messages");
        echo "</a>
    </div>
";
        
        $__internal_b6f5f45418fb1ed2c309f1de547e5fce7d82383b68a43a7e27bf56c54a18394f->leave($__internal_b6f5f45418fb1ed2c309f1de547e5fce7d82383b68a43a7e27bf56c54a18394f_prof);

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
        return array (  166 => 43,  161 => 40,  149 => 36,  143 => 32,  136 => 31,  129 => 30,  122 => 29,  116 => 28,  109 => 26,  103 => 25,  99 => 24,  93 => 23,  89 => 22,  86 => 21,  82 => 20,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>{%trans%}Sensor list{%endtrans%}</h1>*/
/* */
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{%trans%}MODWEI{%endtrans%}</th>*/
/*                 <th>{%trans%}Description{%endtrans%}</th>*/
/*                 <th>{%trans%}Port Number{%endtrans%}</th>*/
/*                 <th>{%trans%}Current Value{%endtrans%}</th>*/
/*                 <th>{%trans%}Last report{%endtrans%}</th>   */
/*                 <th>{%trans%}Alarm level{%endtrans%}</th>*/
/*                 <th>{%trans%}Actions{%endtrans%}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for sensor in sensors %}*/
/*             <tr>*/
/*                 <td>{{ sensor.weiwei.nickname }}</td>*/
/*                 <td><a href="{{ path('data_sensor_show', { 'id': sensor.idsensor }) }}">{{ sensor.description }}</a></td>*/
/*                 <td>{{ sensor.channelid }}</td>*/
/*                 <td>{{ sensor.humanvalue }} {{ sensor.sensortypesensortype.measurement }}</td>*/
/*                 <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('d-m-Y H:i') }}{% endif %}</td>*/
/*                 <td align="center">*/
/*                     {% if sensor.alarmlevel== 0 %}<img src="{{ asset('img/dot_green.png') }}" width="24" height="24"/>{% endif %}*/
/*                     {% if sensor.alarmlevel== 1 %}<img src="{{ asset('img/dot_yellow.png') }}" width="24" height="24"/>{% endif %}*/
/*                     {% if sensor.alarmlevel== 2 %}<img src="{{ asset('img/dot_orange.png') }}" width="24" height="24"/>{% endif %}*/
/*                     {% if sensor.alarmlevel== 3 %}<img src="{{ asset('img/dot_red.png') }}" width="24" height="24"/>{% endif %}*/
/*                 </td>*/
/*                 */
/*                 */
/*                 <td>*/
/*                     <a href="{{ path('data_sensor_edit', { 'id': sensor.idsensor }) }}"><i class="fa fa-pencil-square-o"></i> {%trans%}edit{%endtrans%}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('data_sensor_new') }}"><i class="fa fa-plus-square-o"></i>  {%trans%}Create a new entry{%endtrans%}</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
