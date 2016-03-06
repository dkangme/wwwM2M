<?php

/* :wei:index.html.twig */
class __TwigTemplate_c6c9d3fe8b1d9ad709e884f3ad0f30bf1fd66511df28414d9b55159a39db0c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:index.html.twig", 1);
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
        $__internal_f1aa2bb29cd7499d6a95647d0cde71cae298d53b2c816220f2805b13aaabfc9b = $this->env->getExtension("native_profiler");
        $__internal_f1aa2bb29cd7499d6a95647d0cde71cae298d53b2c816220f2805b13aaabfc9b->enter($__internal_f1aa2bb29cd7499d6a95647d0cde71cae298d53b2c816220f2805b13aaabfc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1aa2bb29cd7499d6a95647d0cde71cae298d53b2c816220f2805b13aaabfc9b->leave($__internal_f1aa2bb29cd7499d6a95647d0cde71cae298d53b2c816220f2805b13aaabfc9b_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_9d41bd698772243fd116fbad72b24fe5776e8f3ef58df1c02df2dbb918cb68a2 = $this->env->getExtension("native_profiler");
        $__internal_9d41bd698772243fd116fbad72b24fe5776e8f3ef58df1c02df2dbb918cb68a2->enter($__internal_9d41bd698772243fd116fbad72b24fe5776e8f3ef58df1c02df2dbb918cb68a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/\">Home</a> 
    </li>
    <li>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration", array(), "messages");
        echo "</li>
    <li><a href=\"/admin/wei\">ModWEI</a></li>
</ul>

";
        
        $__internal_9d41bd698772243fd116fbad72b24fe5776e8f3ef58df1c02df2dbb918cb68a2->leave($__internal_9d41bd698772243fd116fbad72b24fe5776e8f3ef58df1c02df2dbb918cb68a2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e700ab671575cb25954983c2431909f71965bd12cd797edae83c4ebd2d9f145b = $this->env->getExtension("native_profiler");
        $__internal_e700ab671575cb25954983c2431909f71965bd12cd797edae83c4ebd2d9f145b->enter($__internal_e700ab671575cb25954983c2431909f71965bd12cd797edae83c4ebd2d9f145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("MODWEI List", array(), "messages");
        echo "</h1>

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nickname", array(), "messages");
        echo "</th>
                <th>IMEI</th>
                <th>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Description", array(), "messages");
        echo "</th>
                <th>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Operator", array(), "messages");
        echo "</th>
                <th>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Customer", array(), "messages");
        echo "</th>
                <th>";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</th>
                <th>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "messages");
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weis"]) ? $context["weis"] : $this->getContext($context, "weis")));
        foreach ($context['_seq'] as $context["_key"] => $context["wei"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "nickname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "imei", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "operator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["wei"], "customer", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["wei"], "ModweiStatus", array()), "description", array()), "html", null, true);
            echo "
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_edit", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wei'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_wei_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e700ab671575cb25954983c2431909f71965bd12cd797edae83c4ebd2d9f145b->leave($__internal_e700ab671575cb25954983c2431909f71965bd12cd797edae83c4ebd2d9f145b_prof);

    }

    public function getTemplateName()
    {
        return ":wei:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  158 => 53,  146 => 47,  140 => 44,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  111 => 35,  108 => 34,  104 => 33,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  76 => 23,  67 => 18,  61 => 17,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="/">Home</a> */
/*     </li>*/
/*     <li>{%trans%}Configuration{%endtrans%}</li>*/
/*     <li><a href="/admin/wei">ModWEI</a></li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>{%trans%}MODWEI List{%endtrans%}</h1>*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{%trans%}Nickname{%endtrans%}</th>*/
/*                 <th>IMEI</th>*/
/*                 <th>{%trans%}Description{%endtrans%}</th>*/
/*                 <th>{%trans%}Operator{%endtrans%}</th>*/
/*                 <th>{%trans%}Customer{%endtrans%}</th>*/
/*                 <th>{%trans%}Status{%endtrans%}</th>*/
/*                 <th>{%trans%}Actions{%endtrans%}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for wei in weis %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_wei_show', { 'id': wei.idwei }) }}">{{ wei.nickname }}</a></td>*/
/*                 <td>{{ wei.imei }}</td>*/
/*                 <td>{{ wei.description }}</td>*/
/*                 <td>{{ wei.operator }}</td>*/
/*                 <td>{{ wei.customer.nombre }}</td>*/
/*                 <td>{{ wei.ModweiStatus.description }}*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_wei_show', { 'id': wei.idwei }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_wei_edit', { 'id': wei.idwei }) }}">edit</a>*/
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
/*             <a href="{{ path('admin_wei_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
