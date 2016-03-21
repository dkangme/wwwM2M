<?php

/* :sensor:show.html.twig */
class __TwigTemplate_b897512314b935ec21e5ff49094caf9bb0995520fca158f0bdc3ac5347918c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:show.html.twig", 1);
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
        $__internal_328a757c2c290d7f037202d2930f4d970f0f971f0b286f3b70a29eb0116b4f5c = $this->env->getExtension("native_profiler");
        $__internal_328a757c2c290d7f037202d2930f4d970f0f971f0b286f3b70a29eb0116b4f5c->enter($__internal_328a757c2c290d7f037202d2930f4d970f0f971f0b286f3b70a29eb0116b4f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328a757c2c290d7f037202d2930f4d970f0f971f0b286f3b70a29eb0116b4f5c->leave($__internal_328a757c2c290d7f037202d2930f4d970f0f971f0b286f3b70a29eb0116b4f5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfaba4eff691d509045f2e153b8b444438b7e80ba8bab3f372ef4777ec038822 = $this->env->getExtension("native_profiler");
        $__internal_bfaba4eff691d509045f2e153b8b444438b7e80ba8bab3f372ef4777ec038822->enter($__internal_bfaba4eff691d509045f2e153b8b444438b7e80ba8bab3f372ef4777ec038822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor</h1>

    <table>
        <tbody>
            <tr>
                <th>Humanvalue</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "humanvalue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastreport</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "lastreport", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alarmlevel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "alarmlevel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formula</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "formula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Channelid</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "channelid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idsensor</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "idsensor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_sensor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sensor_edit", array("id" => $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "idsensor", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bfaba4eff691d509045f2e153b8b444438b7e80ba8bab3f372ef4777ec038822->leave($__internal_bfaba4eff691d509045f2e153b8b444438b7e80ba8bab3f372ef4777ec038822_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  121 => 51,  115 => 48,  109 => 45,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Humanvalue</th>*/
/*                 <td>{{ sensor.humanvalue }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Value</th>*/
/*                 <td>{{ sensor.value }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastreport</th>*/
/*                 <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ sensor.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Alarmlevel</th>*/
/*                 <td>{{ sensor.alarmlevel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Formula</th>*/
/*                 <td>{{ sensor.formula }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Channelid</th>*/
/*                 <td>{{ sensor.channelid }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idsensor</th>*/
/*                 <td>{{ sensor.idsensor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_sensor_edit', { 'id': sensor.idsensor }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
