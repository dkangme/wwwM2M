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
        $__internal_83f75e066b8d8b5499db0677e720d3596da6ef074ed9013e69d6598c2bbfa9b5 = $this->env->getExtension("native_profiler");
        $__internal_83f75e066b8d8b5499db0677e720d3596da6ef074ed9013e69d6598c2bbfa9b5->enter($__internal_83f75e066b8d8b5499db0677e720d3596da6ef074ed9013e69d6598c2bbfa9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f75e066b8d8b5499db0677e720d3596da6ef074ed9013e69d6598c2bbfa9b5->leave($__internal_83f75e066b8d8b5499db0677e720d3596da6ef074ed9013e69d6598c2bbfa9b5_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_e1be8bb14296b9257be2ad5ed7f246bc7423dec4f8b22fe6533b573020d41d53 = $this->env->getExtension("native_profiler");
        $__internal_e1be8bb14296b9257be2ad5ed7f246bc7423dec4f8b22fe6533b573020d41d53->enter($__internal_e1be8bb14296b9257be2ad5ed7f246bc7423dec4f8b22fe6533b573020d41d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/admin/sensor/dashboard\">Home</a> 
    </li>
</ul>

";
        
        $__internal_e1be8bb14296b9257be2ad5ed7f246bc7423dec4f8b22fe6533b573020d41d53->leave($__internal_e1be8bb14296b9257be2ad5ed7f246bc7423dec4f8b22fe6533b573020d41d53_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_267eb39b3e0d43b8f09a1175d4d83676f125bf5aadac66c86b710e83bf008d8b = $this->env->getExtension("native_profiler");
        $__internal_267eb39b3e0d43b8f09a1175d4d83676f125bf5aadac66c86b710e83bf008d8b->enter($__internal_267eb39b3e0d43b8f09a1175d4d83676f125bf5aadac66c86b710e83bf008d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</h1><br/>
    <div ng-app=\"angularTable\">
        <div ng-controller=\"listdata\">
            <div class=\"row-fluid hideInIE8 circleStats\">
                
                    <div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\" ng-repeat=\"sensor in sensores\">
                        <div class=\"circleStatsItemBox green\">
                            <div class=\"header\">";
        // line 22
        echo "{{sensor.description}}";
        echo "</div>
                            <span class=\"percent\">";
        // line 23
        echo "{{sensor.sensortypesensortype.measurement}}";
        echo "</span>
                            <div class=\"circleStat\">
                                <input type=\"text\" value=\"10\" class=\"whiteCircle\" data-min=\"0\" data-max=\"300\" data-angleArc=\"250\" data-angleOffset=\"-125\"/>
                            </div>      
                            <div class=\"footer\">
                                <div class=\"footer\" style=\"font-size: 10px;\">Última medición 25-02-2016 18:04</div>
                                </span> 
                            </div>
                        </div>
                    </div>        

                    <div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\" >
                        <div class=\"circleStatsItemBox green\">
                            <div class=\"header\">sddsd</div>
                            <span class=\"percent\">PPM</span>
                            <div class=\"circleStat\">
                                <input type=\"text\" value=\"10\" class=\"whiteCircle\" data-min=\"0\" data-max=\"300\" data-angleArc=\"250\" data-angleOffset=\"-125\"/>
                            </div>      
                            <div class=\"footer\">
                                <div class=\"footer\" style=\"font-size: 10px;\">Última medición 25-02-2016 18:04</div>
                                </span> 
                            </div>
                        </div>
                    </div>                      
            </div>
        </div>
    </div> 


";
        
        $__internal_267eb39b3e0d43b8f09a1175d4d83676f125bf5aadac66c86b710e83bf008d8b->leave($__internal_267eb39b3e0d43b8f09a1175d4d83676f125bf5aadac66c86b710e83bf008d8b_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5eeb125875f14d8c10136b89b6fa8b52cfb706d6680ec3d7f566491a8c088bf = $this->env->getExtension("native_profiler");
        $__internal_e5eeb125875f14d8c10136b89b6fa8b52cfb706d6680ec3d7f566491a8c088bf->enter($__internal_e5eeb125875f14d8c10136b89b6fa8b52cfb706d6680ec3d7f566491a8c088bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sensor.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e5eeb125875f14d8c10136b89b6fa8b52cfb706d6680ec3d7f566491a8c088bf->leave($__internal_e5eeb125875f14d8c10136b89b6fa8b52cfb706d6680ec3d7f566491a8c088bf_prof);

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
        return array (  124 => 56,  121 => 55,  115 => 54,  78 => 23,  74 => 22,  63 => 15,  57 => 14,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <div class="row-fluid hideInIE8 circleStats">*/
/*                 */
/*                     <div class="span2" onTablet="span4" onDesktop="span2" ng-repeat="sensor in sensores">*/
/*                         <div class="circleStatsItemBox green">*/
/*                             <div class="header">{{ '{{sensor.description}}' }}</div>*/
/*                             <span class="percent">{{ '{{sensor.sensortypesensortype.measurement}}' }}</span>*/
/*                             <div class="circleStat">*/
/*                                 <input type="text" value="10" class="whiteCircle" data-min="0" data-max="300" data-angleArc="250" data-angleOffset="-125"/>*/
/*                             </div>      */
/*                             <div class="footer">*/
/*                                 <div class="footer" style="font-size: 10px;">Última medición 25-02-2016 18:04</div>*/
/*                                 </span> */
/*                             </div>*/
/*                         </div>*/
/*                     </div>        */
/* */
/*                     <div class="span2" onTablet="span4" onDesktop="span2" >*/
/*                         <div class="circleStatsItemBox green">*/
/*                             <div class="header">sddsd</div>*/
/*                             <span class="percent">PPM</span>*/
/*                             <div class="circleStat">*/
/*                                 <input type="text" value="10" class="whiteCircle" data-min="0" data-max="300" data-angleArc="250" data-angleOffset="-125"/>*/
/*                             </div>      */
/*                             <div class="footer">*/
/*                                 <div class="footer" style="font-size: 10px;">Última medición 25-02-2016 18:04</div>*/
/*                                 </span> */
/*                             </div>*/
/*                         </div>*/
/*                     </div>                      */
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
