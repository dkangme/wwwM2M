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
        $__internal_55ea7dc55d7d5d51a0734406e97a227515eadc164b0e154651a11b8add7fcc91 = $this->env->getExtension("native_profiler");
        $__internal_55ea7dc55d7d5d51a0734406e97a227515eadc164b0e154651a11b8add7fcc91->enter($__internal_55ea7dc55d7d5d51a0734406e97a227515eadc164b0e154651a11b8add7fcc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wei/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ea7dc55d7d5d51a0734406e97a227515eadc164b0e154651a11b8add7fcc91->leave($__internal_55ea7dc55d7d5d51a0734406e97a227515eadc164b0e154651a11b8add7fcc91_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_ab6bec47bc8d4c5418cf8b59a777cab9ce42180245b11b2453e9f24ce3b16add = $this->env->getExtension("native_profiler");
        $__internal_ab6bec47bc8d4c5418cf8b59a777cab9ce42180245b11b2453e9f24ce3b16add->enter($__internal_ab6bec47bc8d4c5418cf8b59a777cab9ce42180245b11b2453e9f24ce3b16add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

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
        
        $__internal_ab6bec47bc8d4c5418cf8b59a777cab9ce42180245b11b2453e9f24ce3b16add->leave($__internal_ab6bec47bc8d4c5418cf8b59a777cab9ce42180245b11b2453e9f24ce3b16add_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_58e3144fe548786182ab71d736342cad45c21fde93c553af8a4d115c217f99df = $this->env->getExtension("native_profiler");
        $__internal_58e3144fe548786182ab71d736342cad45c21fde93c553af8a4d115c217f99df->enter($__internal_58e3144fe548786182ab71d736342cad45c21fde93c553af8a4d115c217f99df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telephone operator", array(), "messages");
        echo "</th>
                <th>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</th>
                <th>";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "messages");
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weis"]) ? $context["weis"] : $this->getContext($context, "weis")));
        foreach ($context['_seq'] as $context["_key"] => $context["wei"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "nickname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "imei", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "operator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["wei"], "ModweiStatus", array()), "description", array()), "html", null, true);
            echo "
                <td>                    
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_edit", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit", array(), "messages");
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wei'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_wei_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Create a new MODWEI", array(), "messages");
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_58e3144fe548786182ab71d736342cad45c21fde93c553af8a4d115c217f99df->leave($__internal_58e3144fe548786182ab71d736342cad45c21fde93c553af8a4d115c217f99df_prof);

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
        return array (  149 => 49,  142 => 44,  130 => 40,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  107 => 34,  104 => 33,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  76 => 23,  67 => 18,  61 => 17,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <th>{%trans%}Telephone operator{%endtrans%}</th>*/
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
/*                 <td>{{ wei.ModweiStatus.description }}*/
/*                 <td>                    */
/*                     <a href="{{ path('admin_wei_edit', { 'id': wei.idwei }) }}"><i class="icon-pencil"></i> {%trans%}edit{%endtrans%}</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_new') }}">{%trans%}Create a new MODWEI{%endtrans%}</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
