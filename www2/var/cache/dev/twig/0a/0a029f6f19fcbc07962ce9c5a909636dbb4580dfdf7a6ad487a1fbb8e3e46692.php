<?php

/* :alarm:show.html.twig */
class __TwigTemplate_108ed90001233aa17d6ea8d73a959898645ede0fbaf397f01f78c664a6646c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":alarm:show.html.twig", 1);
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
        $__internal_c24ebda9433635e2ec4534944d10d740871a8426166663c9314ba336e4383b70 = $this->env->getExtension("native_profiler");
        $__internal_c24ebda9433635e2ec4534944d10d740871a8426166663c9314ba336e4383b70->enter($__internal_c24ebda9433635e2ec4534944d10d740871a8426166663c9314ba336e4383b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alarm:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24ebda9433635e2ec4534944d10d740871a8426166663c9314ba336e4383b70->leave($__internal_c24ebda9433635e2ec4534944d10d740871a8426166663c9314ba336e4383b70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc14f2aee0134de295b1f6e2c0c42ae46335f1c5e3d27720f583f1b89151f029 = $this->env->getExtension("native_profiler");
        $__internal_dc14f2aee0134de295b1f6e2c0c42ae46335f1c5e3d27720f583f1b89151f029->enter($__internal_dc14f2aee0134de295b1f6e2c0c42ae46335f1c5e3d27720f583f1b89151f029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Alarm</h1>

    <table>
        <tbody>
            <tr>
                <th>Expression</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "expression", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastalarm</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "lastalarm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "lastalarm", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nextalarminterval</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "nextalarminterval", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alarmlevel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "alarmlevel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idalarm</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "idalarm", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_alarm_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alarm_edit", array("id" => $this->getAttribute((isset($context["alarm"]) ? $context["alarm"] : $this->getContext($context, "alarm")), "idalarm", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dc14f2aee0134de295b1f6e2c0c42ae46335f1c5e3d27720f583f1b89151f029->leave($__internal_dc14f2aee0134de295b1f6e2c0c42ae46335f1c5e3d27720f583f1b89151f029_prof);

    }

    public function getTemplateName()
    {
        return ":alarm:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Alarm</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Expression</th>*/
/*                 <td>{{ alarm.expression }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastalarm</th>*/
/*                 <td>{% if alarm.lastalarm %}{{ alarm.lastalarm|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nextalarminterval</th>*/
/*                 <td>{{ alarm.nextalarminterval }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Alarmlevel</th>*/
/*                 <td>{{ alarm.alarmlevel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ alarm.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idalarm</th>*/
/*                 <td>{{ alarm.idalarm }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_alarm_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_alarm_edit', { 'id': alarm.idalarm }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
