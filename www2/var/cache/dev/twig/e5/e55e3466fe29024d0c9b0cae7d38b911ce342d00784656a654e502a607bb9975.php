<?php

/* :views/default:angular.html.twig */
class __TwigTemplate_e0e8d7fd45fd3b5f74b81e0365171d63f379aa86b4a6c91cb23463c147b932d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":views/default:angular.html.twig", 1);
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
        $__internal_9b21ad268d7e7265acd20f4bb9c253f467f73237a8531a90cac68c9d2d11ec16 = $this->env->getExtension("native_profiler");
        $__internal_9b21ad268d7e7265acd20f4bb9c253f467f73237a8531a90cac68c9d2d11ec16->enter($__internal_9b21ad268d7e7265acd20f4bb9c253f467f73237a8531a90cac68c9d2d11ec16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":views/default:angular.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b21ad268d7e7265acd20f4bb9c253f467f73237a8531a90cac68c9d2d11ec16->leave($__internal_9b21ad268d7e7265acd20f4bb9c253f467f73237a8531a90cac68c9d2d11ec16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_556ed4c30848c05a82dbbfd4662a6fc18c16f4d4cfbf8ebecedcdeefac036db4 = $this->env->getExtension("native_profiler");
        $__internal_556ed4c30848c05a82dbbfd4662a6fc18c16f4d4cfbf8ebecedcdeefac036db4->enter($__internal_556ed4c30848c05a82dbbfd4662a6fc18c16f4d4cfbf8ebecedcdeefac036db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div ng-app=\"\">
    <p>Name : <input type=\"text\" ng-model=\"name\"></p>
    <h1>Hello ";
        // line 7
        echo "{{ name }}";
        echo "</h1>
</div>

";
        
        $__internal_556ed4c30848c05a82dbbfd4662a6fc18c16f4d4cfbf8ebecedcdeefac036db4->leave($__internal_556ed4c30848c05a82dbbfd4662a6fc18c16f4d4cfbf8ebecedcdeefac036db4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df44006c10a8c60ca76aadf8e304f39827effb471955f2a82134c3612650c5f3 = $this->env->getExtension("native_profiler");
        $__internal_df44006c10a8c60ca76aadf8e304f39827effb471955f2a82134c3612650c5f3->enter($__internal_df44006c10a8c60ca76aadf8e304f39827effb471955f2a82134c3612650c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
";
        
        $__internal_df44006c10a8c60ca76aadf8e304f39827effb471955f2a82134c3612650c5f3->leave($__internal_df44006c10a8c60ca76aadf8e304f39827effb471955f2a82134c3612650c5f3_prof);

    }

    public function getTemplateName()
    {
        return ":views/default:angular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 12,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div ng-app="">*/
/*     <p>Name : <input type="text" ng-model="name"></p>*/
/*     <h1>Hello {{ '{{ name }}' }}</h1>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
