<?php

/* :notificationlist:show.html.twig */
class __TwigTemplate_78e3e89e8a6c2a777de567e853e2ff26588a7dfa262f4ea94b8a2c0f7dbed56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notificationlist:show.html.twig", 1);
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
        $__internal_f0cfd2292edd9cdbd38a5867660ba647d4c05e4f2f03f6ae6f7136db1cfba25e = $this->env->getExtension("native_profiler");
        $__internal_f0cfd2292edd9cdbd38a5867660ba647d4c05e4f2f03f6ae6f7136db1cfba25e->enter($__internal_f0cfd2292edd9cdbd38a5867660ba647d4c05e4f2f03f6ae6f7136db1cfba25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notificationlist:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0cfd2292edd9cdbd38a5867660ba647d4c05e4f2f03f6ae6f7136db1cfba25e->leave($__internal_f0cfd2292edd9cdbd38a5867660ba647d4c05e4f2f03f6ae6f7136db1cfba25e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a17c7ecff52d3bf26a9dca9934565ea942633ff42d186d657e0ddf068fae395e = $this->env->getExtension("native_profiler");
        $__internal_a17c7ecff52d3bf26a9dca9934565ea942633ff42d186d657e0ddf068fae395e->enter($__internal_a17c7ecff52d3bf26a9dca9934565ea942633ff42d186d657e0ddf068fae395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notificationlist</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notificationlist"]) ? $context["notificationlist"] : $this->getContext($context, "notificationlist")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>List</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notificationlist"]) ? $context["notificationlist"] : $this->getContext($context, "notificationlist")), "list", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idnotificationlist</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notificationlist"]) ? $context["notificationlist"] : $this->getContext($context, "notificationlist")), "idnotificationlist", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_notificationlist_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_notificationlist_edit", array("id" => $this->getAttribute((isset($context["notificationlist"]) ? $context["notificationlist"] : $this->getContext($context, "notificationlist")), "idnotificationlist", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a17c7ecff52d3bf26a9dca9934565ea942633ff42d186d657e0ddf068fae395e->leave($__internal_a17c7ecff52d3bf26a9dca9934565ea942633ff42d186d657e0ddf068fae395e_prof);

    }

    public function getTemplateName()
    {
        return ":notificationlist:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notificationlist</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ notificationlist.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>List</th>*/
/*                 <td>{{ notificationlist.list }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idnotificationlist</th>*/
/*                 <td>{{ notificationlist.idnotificationlist }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_notificationlist_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_notificationlist_edit', { 'id': notificationlist.idnotificationlist }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
