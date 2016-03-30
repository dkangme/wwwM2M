<?php

/* :customer:index.html.twig */
class __TwigTemplate_a455f9a198e9448f7af6683ae0ec7dc155283f7dac6186f3c3c8d8f180cd9dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:index.html.twig", 1);
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
        $__internal_e9681625c937e830d1301970047190f678d29d372769a5618857b02965147cfa = $this->env->getExtension("native_profiler");
        $__internal_e9681625c937e830d1301970047190f678d29d372769a5618857b02965147cfa->enter($__internal_e9681625c937e830d1301970047190f678d29d372769a5618857b02965147cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9681625c937e830d1301970047190f678d29d372769a5618857b02965147cfa->leave($__internal_e9681625c937e830d1301970047190f678d29d372769a5618857b02965147cfa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6020935d56ad289952ba71087b618400bf8c0be66e8e262a24b8add0f5585071 = $this->env->getExtension("native_profiler");
        $__internal_6020935d56ad289952ba71087b618400bf8c0be66e8e262a24b8add0f5585071->enter($__internal_6020935d56ad289952ba71087b618400bf8c0be66e8e262a24b8add0f5585071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer list</h1>

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Razonsocial</th>
                <th>Nombre</th>
                <th>Direccioncomercial</th>
                <th>Telefonocontacto</th>
                <th>Emailcontacto</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "razonsocial", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "direccioncomercial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "telefonocontacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "emailcontacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_edit", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("admin_customer_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6020935d56ad289952ba71087b618400bf8c0be66e8e262a24b8add0f5585071->leave($__internal_6020935d56ad289952ba71087b618400bf8c0be66e8e262a24b8add0f5585071_prof);

    }

    public function getTemplateName()
    {
        return ":customer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Customer list</h1>*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Razonsocial</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Direccioncomercial</th>*/
/*                 <th>Telefonocontacto</th>*/
/*                 <th>Emailcontacto</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for customer in customers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_customer_show', { 'id': customer.id }) }}">{{ customer.razonsocial }}</a></td>*/
/*                 <td>{{ customer.nombre }}</td>*/
/*                 <td>{{ customer.direccioncomercial }}</td>*/
/*                 <td>{{ customer.telefonocontacto }}</td>*/
/*                 <td>{{ customer.emailcontacto }}</td>*/
/*                 <td>{{ customer.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_customer_show', { 'id': customer.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_customer_edit', { 'id': customer.id }) }}">edit</a>*/
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
/*             <a href="{{ path('admin_customer_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
