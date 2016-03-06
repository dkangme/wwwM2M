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
        $__internal_0e2fd8d785683ab407773704a6987dcc0837303555f958c62831789a55686f24 = $this->env->getExtension("native_profiler");
        $__internal_0e2fd8d785683ab407773704a6987dcc0837303555f958c62831789a55686f24->enter($__internal_0e2fd8d785683ab407773704a6987dcc0837303555f958c62831789a55686f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2fd8d785683ab407773704a6987dcc0837303555f958c62831789a55686f24->leave($__internal_0e2fd8d785683ab407773704a6987dcc0837303555f958c62831789a55686f24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_494181cf4f80de21e225e90dfa10d5a132b4c1c21db72090234a692698076b2d = $this->env->getExtension("native_profiler");
        $__internal_494181cf4f80de21e225e90dfa10d5a132b4c1c21db72090234a692698076b2d->enter($__internal_494181cf4f80de21e225e90dfa10d5a132b4c1c21db72090234a692698076b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_494181cf4f80de21e225e90dfa10d5a132b4c1c21db72090234a692698076b2d->leave($__internal_494181cf4f80de21e225e90dfa10d5a132b4c1c21db72090234a692698076b2d_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35e8440457b1486acb21bb1265b34b729b396715c2a1a4e8e0b4237c76fa874f = $this->env->getExtension("native_profiler");
        $__internal_35e8440457b1486acb21bb1265b34b729b396715c2a1a4e8e0b4237c76fa874f->enter($__internal_35e8440457b1486acb21bb1265b34b729b396715c2a1a4e8e0b4237c76fa874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "
";
        
        $__internal_35e8440457b1486acb21bb1265b34b729b396715c2a1a4e8e0b4237c76fa874f->leave($__internal_35e8440457b1486acb21bb1265b34b729b396715c2a1a4e8e0b4237c76fa874f_prof);

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
