<?php

/* sensor/dashboard.html.twig */
class __TwigTemplate_8689f0b3d6d55d260c24f54d1fd6d9906829961bd0d695064fe774f495105ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sensor/dashboard.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcumb' => array($this, 'block_breadcumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cb7ceab2c4472178686a0e70c1fb66f39dc22d0f7197079d59e597b4b503ca5 = $this->env->getExtension("native_profiler");
        $__internal_4cb7ceab2c4472178686a0e70c1fb66f39dc22d0f7197079d59e597b4b503ca5->enter($__internal_4cb7ceab2c4472178686a0e70c1fb66f39dc22d0f7197079d59e597b4b503ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb7ceab2c4472178686a0e70c1fb66f39dc22d0f7197079d59e597b4b503ca5->leave($__internal_4cb7ceab2c4472178686a0e70c1fb66f39dc22d0f7197079d59e597b4b503ca5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aab5d6ec800ca5d45dd96c630f9dc7b98871fddf6476cd875088e0b6e4a6daa0 = $this->env->getExtension("native_profiler");
        $__internal_aab5d6ec800ca5d45dd96c630f9dc7b98871fddf6476cd875088e0b6e4a6daa0->enter($__internal_aab5d6ec800ca5d45dd96c630f9dc7b98871fddf6476cd875088e0b6e4a6daa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "

";
        
        $__internal_aab5d6ec800ca5d45dd96c630f9dc7b98871fddf6476cd875088e0b6e4a6daa0->leave($__internal_aab5d6ec800ca5d45dd96c630f9dc7b98871fddf6476cd875088e0b6e4a6daa0_prof);

    }

    // line 8
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_7b79588aa59be4b661369d54c8eec54d87b5807f01839579ae102291e3ce2c98 = $this->env->getExtension("native_profiler");
        $__internal_7b79588aa59be4b661369d54c8eec54d87b5807f01839579ae102291e3ce2c98->enter($__internal_7b79588aa59be4b661369d54c8eec54d87b5807f01839579ae102291e3ce2c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 9
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/admin/sensor/dashboard\">Home</a> 
    </li>
</ul>

";
        
        $__internal_7b79588aa59be4b661369d54c8eec54d87b5807f01839579ae102291e3ce2c98->leave($__internal_7b79588aa59be4b661369d54c8eec54d87b5807f01839579ae102291e3ce2c98_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_88568fb4fe2d289d74ca0f0bbe41ce233a895a9d3b38cb5ac43c7e3cfd849edd = $this->env->getExtension("native_profiler");
        $__internal_88568fb4fe2d289d74ca0f0bbe41ce233a895a9d3b38cb5ac43c7e3cfd849edd->enter($__internal_88568fb4fe2d289d74ca0f0bbe41ce233a895a9d3b38cb5ac43c7e3cfd849edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <h1>";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</h1><br/>
    <div ng-app=\"angularTable\">
        <div ng-controller=\"listdata\">
            <div class=\"row-fluid\">
                <p style=\"color:blue\">";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("This control panel is refreshed every 5 seconds.", array(), "messages");
        echo "</p>
                <table class=\"table table-bordered table-striped table-striped dataTable\" ng-show=\"sensores\">
                    <thead>
                        <tr>
                            <th>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sensor", array(), "messages");
        echo "</th>
                            <th>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Alarm Level", array(), "messages");
        echo "</th>
                            <th>";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Value", array(), "messages");
        echo "</th>
                            <th>";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Report", array(), "messages");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat=\"sensor in sensores\">
                            <td><a href=\"/admin/sensor/chart/";
        // line 37
        echo "{{sensor.idsensor}}";
        echo "\">";
        echo "{{sensor.description}}";
        echo "</a></td>
                            <td ng-switch=\"";
        // line 38
        echo "{{sensor.alarmlevel}}";
        echo "\" align=\"center\" width=\"20%\">
                                <div ng-switch-when=\"0\">
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_green.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"1\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_yellow.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"2\">
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_orange.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"3\">
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_red.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                            </td>
                            <td width=\"20%\">";
        // line 52
        echo "{{sensor.humanvalue}} {{sensor.measurement}}";
        echo "</td>
                            <td width=\"20%\">";
        // line 53
        echo "{{sensor.lastreport}}";
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    

";
        
        $__internal_88568fb4fe2d289d74ca0f0bbe41ce233a895a9d3b38cb5ac43c7e3cfd849edd->leave($__internal_88568fb4fe2d289d74ca0f0bbe41ce233a895a9d3b38cb5ac43c7e3cfd849edd_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13b9345a0cb9fcc7feba972f1f1947bdcea47a0872cf6a7490797fc782eed622 = $this->env->getExtension("native_profiler");
        $__internal_13b9345a0cb9fcc7feba972f1f1947bdcea47a0872cf6a7490797fc782eed622->enter($__internal_13b9345a0cb9fcc7feba972f1f1947bdcea47a0872cf6a7490797fc782eed622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sensor.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_13b9345a0cb9fcc7feba972f1f1947bdcea47a0872cf6a7490797fc782eed622->leave($__internal_13b9345a0cb9fcc7feba972f1f1947bdcea47a0872cf6a7490797fc782eed622_prof);

    }

    public function getTemplateName()
    {
        return "sensor/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 67,  179 => 66,  173 => 65,  155 => 53,  151 => 52,  145 => 49,  139 => 46,  133 => 43,  127 => 40,  122 => 38,  116 => 37,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  89 => 25,  82 => 21,  79 => 20,  73 => 19,  58 => 9,  52 => 8,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* {% endblock stylesheets %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="/admin/sensor/dashboard">Home</a> */
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>{%trans%}Dashboard{%endtrans%}</h1><br/>*/
/*     <div ng-app="angularTable">*/
/*         <div ng-controller="listdata">*/
/*             <div class="row-fluid">*/
/*                 <p style="color:blue">{%trans%}This control panel is refreshed every 5 seconds.{%endtrans%}</p>*/
/*                 <table class="table table-bordered table-striped table-striped dataTable" ng-show="sensores">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>{%trans%}Sensor{%endtrans%}</th>*/
/*                             <th>{%trans%}Alarm Level{%endtrans%}</th>*/
/*                             <th>{%trans%}Last Value{%endtrans%}</th>*/
/*                             <th>{%trans%}Last Report{%endtrans%}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr ng-repeat="sensor in sensores">*/
/*                             <td><a href="/admin/sensor/chart/{{'{{sensor.idsensor}}'}}">{{'{{sensor.description}}'}}</a></td>*/
/*                             <td ng-switch="{{'{{sensor.alarmlevel}}'}}" align="center" width="20%">*/
/*                                 <div ng-switch-when="0">*/
/*                                     <img src="{{asset('img/dot_green.png')}}" width="32px" height="32px"/>*/
/*                                 </div>*/
/*                                 <div ng-switch-when="1">*/
/*                                     <img src="{{asset('img/dot_yellow.png')}}" width="32px" height="32px"/>*/
/*                                 </div>*/
/*                                 <div ng-switch-when="2">*/
/*                                     <img src="{{asset('img/dot_orange.png')}}" width="32px" height="32px"/>*/
/*                                 </div>*/
/*                                 <div ng-switch-when="3">*/
/*                                     <img src="{{asset('img/dot_red.png')}}" width="32px" height="32px"/>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td width="20%">{{'{{sensor.humanvalue}} {{sensor.measurement}}'}}</td>*/
/*                             <td width="20%">{{'{{sensor.lastreport}}'}}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* */
/*     */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('js/sensor.js') }}"></script>*/
/* */
/* {% endblock %}*/
