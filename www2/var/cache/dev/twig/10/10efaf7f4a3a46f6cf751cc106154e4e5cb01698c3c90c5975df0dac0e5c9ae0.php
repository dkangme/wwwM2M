<?php

/* :wei:show.html.twig */
class __TwigTemplate_2c4690e77d81f3289132538df6e7db662d6a310ae1aaf704f84ed4ba31a90d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:show.html.twig", 1);
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
        $__internal_530ca659c62ab6e3592880436c27cfda7446f2aa8335e7e7e04b5abead14cc10 = $this->env->getExtension("native_profiler");
        $__internal_530ca659c62ab6e3592880436c27cfda7446f2aa8335e7e7e04b5abead14cc10->enter($__internal_530ca659c62ab6e3592880436c27cfda7446f2aa8335e7e7e04b5abead14cc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530ca659c62ab6e3592880436c27cfda7446f2aa8335e7e7e04b5abead14cc10->leave($__internal_530ca659c62ab6e3592880436c27cfda7446f2aa8335e7e7e04b5abead14cc10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2b42d67e6ddbfe5da1aa9774ffff01f1b89f98e88c5115ee1e6f967365c1f10 = $this->env->getExtension("native_profiler");
        $__internal_f2b42d67e6ddbfe5da1aa9774ffff01f1b89f98e88c5115ee1e6f967365c1f10->enter($__internal_f2b42d67e6ddbfe5da1aa9774ffff01f1b89f98e88c5115ee1e6f967365c1f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("MODWEI Information", array(), "messages");
        echo "</h1><br/>

        <div class=\"row\">
            
            <div class=\"col-sm-4 col-md-4 col-lg-4\">

                <table class=\"table table-sm table-bordered\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "idwei", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nickname", array(), "messages");
        echo "</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "nickname", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last report", array(), "messages");
        echo "</th>
                            <td>";
        // line 22
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "lastreport", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "lastreport", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("IMEI", array(), "messages");
        echo "</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "imei", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Description", array(), "messages");
        echo "</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "description", array()), "html", null, true);
        echo "</td>
                       </tr>
                        <tr>
                            <th>";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telephone operator", array(), "messages");
        echo "</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "operator", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Activation date", array(), "messages");
        echo "</th>
                            <td>";
        // line 38
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "activationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "activationdate", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modification date", array(), "messages");
        echo "</th>
                            <td>";
        // line 42
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "modificationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "modificationdate", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Chip number", array(), "messages");
        echo "</th>
                            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "chipnumber", array()), "html", null, true);
        echo "</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class=\"col-sm-2 col-md-2 col-lg-2\"></div>
        </div>

    <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
        echo "\"><i class=\"icon-circle-arrow-left\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_edit", array("id" => $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "idwei", array()))), "html", null, true);
        echo "\"><i class=\"icon-pencil\"></i>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "</a>
";
        
        $__internal_f2b42d67e6ddbfe5da1aa9774ffff01f1b89f98e88c5115ee1e6f967365c1f10->leave($__internal_f2b42d67e6ddbfe5da1aa9774ffff01f1b89f98e88c5115ee1e6f967365c1f10_prof);

    }

    public function getTemplateName()
    {
        return ":wei:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  152 => 55,  140 => 46,  136 => 45,  128 => 42,  124 => 41,  116 => 38,  112 => 37,  106 => 34,  102 => 33,  96 => 30,  92 => 29,  86 => 26,  82 => 25,  74 => 22,  70 => 21,  64 => 18,  60 => 17,  54 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{%trans%}MODWEI Information{%endtrans%}</h1><br/>*/
/* */
/*         <div class="row">*/
/*             */
/*             <div class="col-sm-4 col-md-4 col-lg-4">*/
/* */
/*                 <table class="table table-sm table-bordered">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th>Id</th>*/
/*                             <td>{{ wei.idwei }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Nickname{%endtrans%}</th>*/
/*                             <td>{{ wei.nickname }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Last report{%endtrans%}</th>*/
/*                             <td>{% if wei.lastreport %}{{ wei.lastreport|date('d-m-Y H:i') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}IMEI{%endtrans%}</th>*/
/*                             <td>{{ wei.imei }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Description{%endtrans%}</th>*/
/*                             <td>{{ wei.description }}</td>*/
/*                        </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Telephone operator{%endtrans%}</th>*/
/*                             <td>{{ wei.operator }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Activation date{%endtrans%}</th>*/
/*                             <td>{% if wei.activationdate %}{{ wei.activationdate|date('d-m-Y H:i') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Modification date{%endtrans%}</th>*/
/*                             <td>{% if wei.modificationdate %}{{ wei.modificationdate|date('d-m-Y H:i') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>{%trans%}Chip number{%endtrans%}</th>*/
/*                             <td>{{ wei.chipnumber }}</td>*/
/*                         </tr>*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="col-sm-2 col-md-2 col-lg-2"></div>*/
/*         </div>*/
/* */
/*     <a href="{{ path('admin_wei_index') }}"><i class="icon-circle-arrow-left"></i> {%trans%}Back to the list{%endtrans%}</a>*/
/*     <a href="{{ path('admin_wei_edit', { 'id': wei.idwei }) }}"><i class="icon-pencil"></i>{%trans%}Edit{%endtrans%}</a>*/
/* {% endblock %}*/
/* */
