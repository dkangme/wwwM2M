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
        $__internal_28568687c30e3f260c778d27817f00118efccaa44808d78c8d425453fefaf6f0 = $this->env->getExtension("native_profiler");
        $__internal_28568687c30e3f260c778d27817f00118efccaa44808d78c8d425453fefaf6f0->enter($__internal_28568687c30e3f260c778d27817f00118efccaa44808d78c8d425453fefaf6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28568687c30e3f260c778d27817f00118efccaa44808d78c8d425453fefaf6f0->leave($__internal_28568687c30e3f260c778d27817f00118efccaa44808d78c8d425453fefaf6f0_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_2010389906c546d319bcdf390d4eecc4074307cd1a25a593fa983401f72f14a5 = $this->env->getExtension("native_profiler");
        $__internal_2010389906c546d319bcdf390d4eecc4074307cd1a25a593fa983401f72f14a5->enter($__internal_2010389906c546d319bcdf390d4eecc4074307cd1a25a593fa983401f72f14a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/admin/sensor/dashboard\">Home</a> 
    </li>
</ul>

";
        
        $__internal_2010389906c546d319bcdf390d4eecc4074307cd1a25a593fa983401f72f14a5->leave($__internal_2010389906c546d319bcdf390d4eecc4074307cd1a25a593fa983401f72f14a5_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_60889b9634a8923dc82fc166f6e445e5225bae7d8bc720dcb0d5d048971f6aa9 = $this->env->getExtension("native_profiler");
        $__internal_60889b9634a8923dc82fc166f6e445e5225bae7d8bc720dcb0d5d048971f6aa9->enter($__internal_60889b9634a8923dc82fc166f6e445e5225bae7d8bc720dcb0d5d048971f6aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</h1><br/>
    <div ng-app=\"angularTable\">
        <div ng-controller=\"listdata\">
            <div class=\"row-fluid\">
                <p style=\"color:blue\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("This control panel is refreshed every 10 seconds.", array(), "messages");
        echo "</p>
                <table class=\"table table-bordered table-striped table-striped dataTable\" ng-show=\"sensores\">
                    <thead>
                        <tr>
                            <th>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sensor", array(), "messages");
        echo "</th>
                            <th>";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Alarm Level", array(), "messages");
        echo "</th>
                            <th>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Value", array(), "messages");
        echo "</th>
                            <th>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Report", array(), "messages");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat=\"sensor in sensores\">
                            <td>";
        // line 31
        echo "{{ sensor.description }}";
        echo "</td>
                            <td ng-switch=\"";
        // line 32
        echo "{{sensor.alarmlevel}}";
        echo "\" align=\"center\" width=\"20%\">
                                <div ng-switch-when=\"0\">
                                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_green.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"1\">
                                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_yellow.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"2\">
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_orange.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                                <div ng-switch-when=\"3\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/dot_red.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"/>
                                </div>
                            </td>
                            <td width=\"20%\">";
        // line 46
        echo "{{sensor.humanvalue}} {{sensor.measurement}}";
        echo "</td>
                            <td width=\"20%\">";
        // line 47
        echo "{{sensor.lastreport}}";
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 


";
        
        $__internal_60889b9634a8923dc82fc166f6e445e5225bae7d8bc720dcb0d5d048971f6aa9->leave($__internal_60889b9634a8923dc82fc166f6e445e5225bae7d8bc720dcb0d5d048971f6aa9_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_460e258d5a3178b0871593a814e157eabfbaf72995ed955e627cce5b38228a64 = $this->env->getExtension("native_profiler");
        $__internal_460e258d5a3178b0871593a814e157eabfbaf72995ed955e627cce5b38228a64->enter($__internal_460e258d5a3178b0871593a814e157eabfbaf72995ed955e627cce5b38228a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sensor.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_460e258d5a3178b0871593a814e157eabfbaf72995ed955e627cce5b38228a64->leave($__internal_460e258d5a3178b0871593a814e157eabfbaf72995ed955e627cce5b38228a64_prof);

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
        return array (  161 => 60,  158 => 59,  152 => 58,  135 => 47,  131 => 46,  125 => 43,  119 => 40,  113 => 37,  107 => 34,  102 => 32,  98 => 31,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  71 => 19,  63 => 15,  57 => 14,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
/*     <h1>{%trans%}Dashboard{%endtrans%}</h1><br/>*/
/*     <div ng-app="angularTable">*/
/*         <div ng-controller="listdata">*/
/*             <div class="row-fluid">*/
/*                 <p style="color:blue">{%trans%}This control panel is refreshed every 10 seconds.{%endtrans%}</p>*/
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
/*                             <td>{{'{{ sensor.description }}'}}</td>*/
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
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('js/sensor.js') }}"></script>*/
/* */
/* {% endblock %}*/
