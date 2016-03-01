<?php

/* wei/index.html.twig */
class __TwigTemplate_c6c9d3fe8b1d9ad709e884f3ad0f30bf1fd66511df28414d9b55159a39db0c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wei/index.html.twig", 1);
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
        $__internal_dc91cc7fcd3991798b2d19418157a8d0fa1e7e5493e398e0d6931f41f1b79fea = $this->env->getExtension("native_profiler");
        $__internal_dc91cc7fcd3991798b2d19418157a8d0fa1e7e5493e398e0d6931f41f1b79fea->enter($__internal_dc91cc7fcd3991798b2d19418157a8d0fa1e7e5493e398e0d6931f41f1b79fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wei/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc91cc7fcd3991798b2d19418157a8d0fa1e7e5493e398e0d6931f41f1b79fea->leave($__internal_dc91cc7fcd3991798b2d19418157a8d0fa1e7e5493e398e0d6931f41f1b79fea_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_6c1022cc17f9bc9bd3d3e01cd3c342e8aecff686f1293d400a20f03afb40624b = $this->env->getExtension("native_profiler");
        $__internal_6c1022cc17f9bc9bd3d3e01cd3c342e8aecff686f1293d400a20f03afb40624b->enter($__internal_6c1022cc17f9bc9bd3d3e01cd3c342e8aecff686f1293d400a20f03afb40624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"index.html\">Home</a> 
        <i class=\"icon-angle-right\"></i>
    </li>
    <li><a href=\"#\">Configuration</a><i class=\"icon-angle-right\"></i></li>
    <li><a href=\"#\">ModWEI</a></li>
</ul>

";
        
        $__internal_6c1022cc17f9bc9bd3d3e01cd3c342e8aecff686f1293d400a20f03afb40624b->leave($__internal_6c1022cc17f9bc9bd3d3e01cd3c342e8aecff686f1293d400a20f03afb40624b_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4f884de4901696d02d5c99f7381fe4902d366add7c745cf06a1d901683b331d = $this->env->getExtension("native_profiler");
        $__internal_e4f884de4901696d02d5c99f7381fe4902d366add7c745cf06a1d901683b331d->enter($__internal_e4f884de4901696d02d5c99f7381fe4902d366add7c745cf06a1d901683b331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <h1>Wei list</h1>

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Nickname</th>
                <th>Imei</th>
                <th>Description</th>
                <th>Operator</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weis"]) ? $context["weis"] : $this->getContext($context, "weis")));
        foreach ($context['_seq'] as $context["_key"] => $context["wei"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "nickname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "imei", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "operator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["wei"], "customer", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["wei"], "ModweiStatus", array()), "description", array()), "html", null, true);
            echo "
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
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
        // line 54
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_wei_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e4f884de4901696d02d5c99f7381fe4902d366add7c745cf06a1d901683b331d->leave($__internal_e4f884de4901696d02d5c99f7381fe4902d366add7c745cf06a1d901683b331d_prof);

    }

    public function getTemplateName()
    {
        return "wei/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  136 => 54,  124 => 48,  118 => 45,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  89 => 36,  86 => 35,  82 => 34,  65 => 19,  59 => 18,  41 => 4,  35 => 3,  11 => 1,);
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
/*     <li><a href="#">ModWEI</a></li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Wei list</h1>*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nickname</th>*/
/*                 <th>Imei</th>*/
/*                 <th>Description</th>*/
/*                 <th>Operator</th>*/
/*                 <th>Customer</th>*/
/*                 <th>Status</th>*/
/*                 <th>Actions</th>*/
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
