<?php

/* :default:angular.html.twig */
class __TwigTemplate_e7a02dfb4bc3342c5149d67e0031363baed340102dd15cbd7f2efdb313a0de63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:angular.html.twig", 1);
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
        $__internal_c2179adc190d964a1f2d8303098c4d7af203e47c6c8b197767c36661d083f650 = $this->env->getExtension("native_profiler");
        $__internal_c2179adc190d964a1f2d8303098c4d7af203e47c6c8b197767c36661d083f650->enter($__internal_c2179adc190d964a1f2d8303098c4d7af203e47c6c8b197767c36661d083f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:angular.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2179adc190d964a1f2d8303098c4d7af203e47c6c8b197767c36661d083f650->leave($__internal_c2179adc190d964a1f2d8303098c4d7af203e47c6c8b197767c36661d083f650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_173dc209503eca2ff97e2f62c67db41b93c50c78da21651164c687ba8a894305 = $this->env->getExtension("native_profiler");
        $__internal_173dc209503eca2ff97e2f62c67db41b93c50c78da21651164c687ba8a894305->enter($__internal_173dc209503eca2ff97e2f62c67db41b93c50c78da21651164c687ba8a894305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_173dc209503eca2ff97e2f62c67db41b93c50c78da21651164c687ba8a894305->leave($__internal_173dc209503eca2ff97e2f62c67db41b93c50c78da21651164c687ba8a894305_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08d9d23fc86ebf1ac44b9a192af41dddcd8a7d4faa4ad7bc74cac89835496367 = $this->env->getExtension("native_profiler");
        $__internal_08d9d23fc86ebf1ac44b9a192af41dddcd8a7d4faa4ad7bc74cac89835496367->enter($__internal_08d9d23fc86ebf1ac44b9a192af41dddcd8a7d4faa4ad7bc74cac89835496367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
";
        
        $__internal_08d9d23fc86ebf1ac44b9a192af41dddcd8a7d4faa4ad7bc74cac89835496367->leave($__internal_08d9d23fc86ebf1ac44b9a192af41dddcd8a7d4faa4ad7bc74cac89835496367_prof);

    }

    public function getTemplateName()
    {
        return ":default:angular.html.twig";
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
