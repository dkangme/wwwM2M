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
        $__internal_41dcc9b56f2db4c5318012978e99f808b7975cd4fa0302f70a4ecfaa05c05988 = $this->env->getExtension("native_profiler");
        $__internal_41dcc9b56f2db4c5318012978e99f808b7975cd4fa0302f70a4ecfaa05c05988->enter($__internal_41dcc9b56f2db4c5318012978e99f808b7975cd4fa0302f70a4ecfaa05c05988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":views/default:angular.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41dcc9b56f2db4c5318012978e99f808b7975cd4fa0302f70a4ecfaa05c05988->leave($__internal_41dcc9b56f2db4c5318012978e99f808b7975cd4fa0302f70a4ecfaa05c05988_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c2c32390e3fbdd8d64e929060c18a4dcea25839f13f447b3324a740ac4a18d = $this->env->getExtension("native_profiler");
        $__internal_81c2c32390e3fbdd8d64e929060c18a4dcea25839f13f447b3324a740ac4a18d->enter($__internal_81c2c32390e3fbdd8d64e929060c18a4dcea25839f13f447b3324a740ac4a18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81c2c32390e3fbdd8d64e929060c18a4dcea25839f13f447b3324a740ac4a18d->leave($__internal_81c2c32390e3fbdd8d64e929060c18a4dcea25839f13f447b3324a740ac4a18d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae1cc0a723c911065ae1bb6b36afeeaca62b1d914f6750d44049bb81a46b8874 = $this->env->getExtension("native_profiler");
        $__internal_ae1cc0a723c911065ae1bb6b36afeeaca62b1d914f6750d44049bb81a46b8874->enter($__internal_ae1cc0a723c911065ae1bb6b36afeeaca62b1d914f6750d44049bb81a46b8874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
";
        
        $__internal_ae1cc0a723c911065ae1bb6b36afeeaca62b1d914f6750d44049bb81a46b8874->leave($__internal_ae1cc0a723c911065ae1bb6b36afeeaca62b1d914f6750d44049bb81a46b8874_prof);

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
