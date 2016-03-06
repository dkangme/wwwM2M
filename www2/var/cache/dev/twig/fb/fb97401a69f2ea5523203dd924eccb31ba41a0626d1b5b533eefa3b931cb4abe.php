<?php

/* :customer:show.html.twig */
class __TwigTemplate_91c0ccb279dc54c334cec72f6734040204ca13c2398ba654c25984c6a57b4424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:show.html.twig", 1);
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
        $__internal_3b2fa00f9a3fecad2474dc45b156b050694fead6e70395b19da2a1f3f05af063 = $this->env->getExtension("native_profiler");
        $__internal_3b2fa00f9a3fecad2474dc45b156b050694fead6e70395b19da2a1f3f05af063->enter($__internal_3b2fa00f9a3fecad2474dc45b156b050694fead6e70395b19da2a1f3f05af063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2fa00f9a3fecad2474dc45b156b050694fead6e70395b19da2a1f3f05af063->leave($__internal_3b2fa00f9a3fecad2474dc45b156b050694fead6e70395b19da2a1f3f05af063_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03f661e28073f9719f3efc219b7b2a36e534117112cd9462f89ba0587c1e8982 = $this->env->getExtension("native_profiler");
        $__internal_03f661e28073f9719f3efc219b7b2a36e534117112cd9462f89ba0587c1e8982->enter($__internal_03f661e28073f9719f3efc219b7b2a36e534117112cd9462f89ba0587c1e8982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer</h1>

    <table>
        <tbody>
            <tr>
                <th>Razonsocial</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "razonsocial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccioncomercial</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "direccioncomercial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefonocontacto</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "telefonocontacto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailcontacto</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "emailcontacto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_customer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_edit", array("id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "id", array()))), "html", null, true);
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
        
        $__internal_03f661e28073f9719f3efc219b7b2a36e534117112cd9462f89ba0587c1e8982->leave($__internal_03f661e28073f9719f3efc219b7b2a36e534117112cd9462f89ba0587c1e8982_prof);

    }

    public function getTemplateName()
    {
        return ":customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Customer</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Razonsocial</th>*/
/*                 <td>{{ customer.razonsocial }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ customer.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccioncomercial</th>*/
/*                 <td>{{ customer.direccioncomercial }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefonocontacto</th>*/
/*                 <td>{{ customer.telefonocontacto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Emailcontacto</th>*/
/*                 <td>{{ customer.emailcontacto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ customer.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_customer_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_customer_edit', { 'id': customer.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
