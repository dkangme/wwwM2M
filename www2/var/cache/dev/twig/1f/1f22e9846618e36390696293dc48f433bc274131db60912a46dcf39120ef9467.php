<?php

/* :sensor:new.html.twig */
class __TwigTemplate_cd9f2b39ef7d3c8030502faa45d50a3e5bc24630122aec6bfa44bdba4b55ea40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce909f0f632feba7f1d1e7e8b4abee3e17032c7eb95c4e83e759c1006361d9e6 = $this->env->getExtension("native_profiler");
        $__internal_ce909f0f632feba7f1d1e7e8b4abee3e17032c7eb95c4e83e759c1006361d9e6->enter($__internal_ce909f0f632feba7f1d1e7e8b4abee3e17032c7eb95c4e83e759c1006361d9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce909f0f632feba7f1d1e7e8b4abee3e17032c7eb95c4e83e759c1006361d9e6->leave($__internal_ce909f0f632feba7f1d1e7e8b4abee3e17032c7eb95c4e83e759c1006361d9e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebb603aaa7db69594c0136d24e20460e06c6186a2a15b8917a38ecc41ab84163 = $this->env->getExtension("native_profiler");
        $__internal_ebb603aaa7db69594c0136d24e20460e06c6186a2a15b8917a38ecc41ab84163->enter($__internal_ebb603aaa7db69594c0136d24e20460e06c6186a2a15b8917a38ecc41ab84163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_sensor_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ebb603aaa7db69594c0136d24e20460e06c6186a2a15b8917a38ecc41ab84163->leave($__internal_ebb603aaa7db69594c0136d24e20460e06c6186a2a15b8917a38ecc41ab84163_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
