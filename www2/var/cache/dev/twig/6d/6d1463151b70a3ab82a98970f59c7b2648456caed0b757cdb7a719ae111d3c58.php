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
        $__internal_c9b2ed46641d0b286b61734e7d7930a7b8f35dc771f1775a84b1b25cdf6e5274 = $this->env->getExtension("native_profiler");
        $__internal_c9b2ed46641d0b286b61734e7d7930a7b8f35dc771f1775a84b1b25cdf6e5274->enter($__internal_c9b2ed46641d0b286b61734e7d7930a7b8f35dc771f1775a84b1b25cdf6e5274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:angular.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b2ed46641d0b286b61734e7d7930a7b8f35dc771f1775a84b1b25cdf6e5274->leave($__internal_c9b2ed46641d0b286b61734e7d7930a7b8f35dc771f1775a84b1b25cdf6e5274_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_813bb4889e829836489ef2d49a12291cf242089f504f7f95190a66a98b5936cd = $this->env->getExtension("native_profiler");
        $__internal_813bb4889e829836489ef2d49a12291cf242089f504f7f95190a66a98b5936cd->enter($__internal_813bb4889e829836489ef2d49a12291cf242089f504f7f95190a66a98b5936cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_813bb4889e829836489ef2d49a12291cf242089f504f7f95190a66a98b5936cd->leave($__internal_813bb4889e829836489ef2d49a12291cf242089f504f7f95190a66a98b5936cd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0eb7a2890cdb68866a990cb125cc6f19fe80113b7b1b20bb4eca12f81ec6471e = $this->env->getExtension("native_profiler");
        $__internal_0eb7a2890cdb68866a990cb125cc6f19fe80113b7b1b20bb4eca12f81ec6471e->enter($__internal_0eb7a2890cdb68866a990cb125cc6f19fe80113b7b1b20bb4eca12f81ec6471e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
";
        
        $__internal_0eb7a2890cdb68866a990cb125cc6f19fe80113b7b1b20bb4eca12f81ec6471e->leave($__internal_0eb7a2890cdb68866a990cb125cc6f19fe80113b7b1b20bb4eca12f81ec6471e_prof);

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
