<?php

/* :default:index.html.twig */
class __TwigTemplate_393ebd4b3f03af550f4177ee714945945bdfafe5f5080b3b29e4cafbc2276bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f30939e7909ff51e7720000d3a8d252f9561f2c746a5e928506911532b69229 = $this->env->getExtension("native_profiler");
        $__internal_0f30939e7909ff51e7720000d3a8d252f9561f2c746a5e928506911532b69229->enter($__internal_0f30939e7909ff51e7720000d3a8d252f9561f2c746a5e928506911532b69229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f30939e7909ff51e7720000d3a8d252f9561f2c746a5e928506911532b69229->leave($__internal_0f30939e7909ff51e7720000d3a8d252f9561f2c746a5e928506911532b69229_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb158ce85bad716017fa7a42b34d751e0be3e351ac940a67c134bfdf5881cfda = $this->env->getExtension("native_profiler");
        $__internal_cb158ce85bad716017fa7a42b34d751e0be3e351ac940a67c134bfdf5881cfda->enter($__internal_cb158ce85bad716017fa7a42b34d751e0be3e351ac940a67c134bfdf5881cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row-fluid hideInIE8 circleStats\">
        
        <div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
            <div class=\"circleStatsItemBox orange\">
                <div class=\"header\">CO2 - MSA Demo 1</div>
                <span class=\"percent\">PPM</span>
                <div class=\"circleStat\">
                    <input type=\"text\" value=\"40\" class=\"whiteCircle\" data-min=\"0\" data-max=\"300\"/>
                </div>      
                <div class=\"footer\">
                    <div class=\"footer\" style=\"font-size: 10px;\">Última medición 25-02-2016 18:04</div>
                    </span> 
                </div>
            </div>
        </div>
        <div class=\"span2\" onTablet=\"span4\" onDesktop=\"span2\">
            <div class=\"circleStatsItemBox green\">
                <div class=\"header\">CO2 - MSA Demo 1</div>
                <span class=\"percent\">PPM</span>
                <div class=\"circleStat\">
                    <input type=\"text\" value=\"40\" class=\"whiteCircle\" data-min=\"0\" data-max=\"300\"/>
                </div>      
                <div class=\"footer\">
                    <div class=\"footer\" style=\"font-size: 10px;\">Última medición 25-02-2016 18:04</div>
                    </span> 
                </div>
            </div>
        </div>

    </div>       
";
        
        $__internal_cb158ce85bad716017fa7a42b34d751e0be3e351ac940a67c134bfdf5881cfda->leave($__internal_cb158ce85bad716017fa7a42b34d751e0be3e351ac940a67c134bfdf5881cfda_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20938516a3f546a40d13abc732193a9b93cca6e6aa40efc2922c9044b699a0ed = $this->env->getExtension("native_profiler");
        $__internal_20938516a3f546a40d13abc732193a9b93cca6e6aa40efc2922c9044b699a0ed->enter($__internal_20938516a3f546a40d13abc732193a9b93cca6e6aa40efc2922c9044b699a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "
";
        
        $__internal_20938516a3f546a40d13abc732193a9b93cca6e6aa40efc2922c9044b699a0ed->leave($__internal_20938516a3f546a40d13abc732193a9b93cca6e6aa40efc2922c9044b699a0ed_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  78 => 36,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row-fluid hideInIE8 circleStats">*/
/*         */
/*         <div class="span2" onTablet="span4" onDesktop="span2">*/
/*             <div class="circleStatsItemBox orange">*/
/*                 <div class="header">CO2 - MSA Demo 1</div>*/
/*                 <span class="percent">PPM</span>*/
/*                 <div class="circleStat">*/
/*                     <input type="text" value="40" class="whiteCircle" data-min="0" data-max="300"/>*/
/*                 </div>      */
/*                 <div class="footer">*/
/*                     <div class="footer" style="font-size: 10px;">Última medición 25-02-2016 18:04</div>*/
/*                     </span> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span2" onTablet="span4" onDesktop="span2">*/
/*             <div class="circleStatsItemBox green">*/
/*                 <div class="header">CO2 - MSA Demo 1</div>*/
/*                 <span class="percent">PPM</span>*/
/*                 <div class="circleStat">*/
/*                     <input type="text" value="40" class="whiteCircle" data-min="0" data-max="300"/>*/
/*                 </div>      */
/*                 <div class="footer">*/
/*                     <div class="footer" style="font-size: 10px;">Última medición 25-02-2016 18:04</div>*/
/*                     </span> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>       */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
