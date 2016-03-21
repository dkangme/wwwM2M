<?php

/* :views/default:index.html.twig */
class __TwigTemplate_c81da558c28faf35f945b18353db9e3f1c5f6706bf5634634a30f5fef6e03c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":views/default:index.html.twig", 1);
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
        $__internal_26f565b002aa0263016789efa4336aad2ecad471429e005dc2d623a78623d5eb = $this->env->getExtension("native_profiler");
        $__internal_26f565b002aa0263016789efa4336aad2ecad471429e005dc2d623a78623d5eb->enter($__internal_26f565b002aa0263016789efa4336aad2ecad471429e005dc2d623a78623d5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":views/default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f565b002aa0263016789efa4336aad2ecad471429e005dc2d623a78623d5eb->leave($__internal_26f565b002aa0263016789efa4336aad2ecad471429e005dc2d623a78623d5eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a934fbb105b90a68eaa8d690236321995399c56d40a4cde37cb0bd62f10a58e = $this->env->getExtension("native_profiler");
        $__internal_8a934fbb105b90a68eaa8d690236321995399c56d40a4cde37cb0bd62f10a58e->enter($__internal_8a934fbb105b90a68eaa8d690236321995399c56d40a4cde37cb0bd62f10a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a934fbb105b90a68eaa8d690236321995399c56d40a4cde37cb0bd62f10a58e->leave($__internal_8a934fbb105b90a68eaa8d690236321995399c56d40a4cde37cb0bd62f10a58e_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56d1c521bb96b5072b8dcbf717cc102b5f23ae1ab133353a07980ce76d3335b7 = $this->env->getExtension("native_profiler");
        $__internal_56d1c521bb96b5072b8dcbf717cc102b5f23ae1ab133353a07980ce76d3335b7->enter($__internal_56d1c521bb96b5072b8dcbf717cc102b5f23ae1ab133353a07980ce76d3335b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "
";
        
        $__internal_56d1c521bb96b5072b8dcbf717cc102b5f23ae1ab133353a07980ce76d3335b7->leave($__internal_56d1c521bb96b5072b8dcbf717cc102b5f23ae1ab133353a07980ce76d3335b7_prof);

    }

    public function getTemplateName()
    {
        return ":views/default:index.html.twig";
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
