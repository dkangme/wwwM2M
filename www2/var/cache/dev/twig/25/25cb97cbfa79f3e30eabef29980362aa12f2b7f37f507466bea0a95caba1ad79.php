<?php

/* :customer:index.html.twig */
class __TwigTemplate_33875306f617d958dcf70aab0f9def6f1c4e8289eb588ead2fe66a41157e05cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:index.html.twig", 1);
        $this->blocks = array(
            'breadcumb' => array($this, 'block_breadcumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd00129e1cbe0b2e218cc4c37c3fbcbec7502d01c9815816995ea4cea7198181 = $this->env->getExtension("native_profiler");
        $__internal_cd00129e1cbe0b2e218cc4c37c3fbcbec7502d01c9815816995ea4cea7198181->enter($__internal_cd00129e1cbe0b2e218cc4c37c3fbcbec7502d01c9815816995ea4cea7198181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd00129e1cbe0b2e218cc4c37c3fbcbec7502d01c9815816995ea4cea7198181->leave($__internal_cd00129e1cbe0b2e218cc4c37c3fbcbec7502d01c9815816995ea4cea7198181_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_4462c34eef76f7f05ca06415fba7753c11c45fd76f7fb6d7911e903db1129784 = $this->env->getExtension("native_profiler");
        $__internal_4462c34eef76f7f05ca06415fba7753c11c45fd76f7fb6d7911e903db1129784->enter($__internal_4462c34eef76f7f05ca06415fba7753c11c45fd76f7fb6d7911e903db1129784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"index.html\">Home</a> 
        <i class=\"icon-angle-right\"></i>
    </li>
    <li><a href=\"#\">Configuration</a><i class=\"icon-angle-right\"></i></li>
    <li><a href=\"#\">Customer</a></li>
</ul>

";
        
        $__internal_4462c34eef76f7f05ca06415fba7753c11c45fd76f7fb6d7911e903db1129784->leave($__internal_4462c34eef76f7f05ca06415fba7753c11c45fd76f7fb6d7911e903db1129784_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_55bb68da07747982a3944360b117a048a656709c781cd123dcfcd3d404cee778 = $this->env->getExtension("native_profiler");
        $__internal_55bb68da07747982a3944360b117a048a656709c781cd123dcfcd3d404cee778->enter($__internal_55bb68da07747982a3944360b117a048a656709c781cd123dcfcd3d404cee778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "razonsocial", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "direccioncomercial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "telefonocontacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "emailcontacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
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
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_customer_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_55bb68da07747982a3944360b117a048a656709c781cd123dcfcd3d404cee778->leave($__internal_55bb68da07747982a3944360b117a048a656709c781cd123dcfcd3d404cee778_prof);

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
        return array (  143 => 58,  136 => 53,  124 => 47,  118 => 44,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  89 => 35,  86 => 34,  82 => 33,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="index.html">Home</a> */
/*         <i class="icon-angle-right"></i>*/
/*     </li>*/
/*     <li><a href="#">Configuration</a><i class="icon-angle-right"></i></li>*/
/*     <li><a href="#">Customer</a></li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
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
