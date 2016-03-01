<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c9fdbff7f6ee1527cf1590462649b0313fd365d97c91cecfa7b7eb4c7054864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d39011ef9bcf7ec3781ce113bf7edeeef20e87f450a0df98df095e906f5139ea = $this->env->getExtension("native_profiler");
        $__internal_d39011ef9bcf7ec3781ce113bf7edeeef20e87f450a0df98df095e906f5139ea->enter($__internal_d39011ef9bcf7ec3781ce113bf7edeeef20e87f450a0df98df095e906f5139ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39011ef9bcf7ec3781ce113bf7edeeef20e87f450a0df98df095e906f5139ea->leave($__internal_d39011ef9bcf7ec3781ce113bf7edeeef20e87f450a0df98df095e906f5139ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_950723382d5ef1a3085b2fbbb0e432df3233af43ddcb9b5def0128d87649e20d = $this->env->getExtension("native_profiler");
        $__internal_950723382d5ef1a3085b2fbbb0e432df3233af43ddcb9b5def0128d87649e20d->enter($__internal_950723382d5ef1a3085b2fbbb0e432df3233af43ddcb9b5def0128d87649e20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_950723382d5ef1a3085b2fbbb0e432df3233af43ddcb9b5def0128d87649e20d->leave($__internal_950723382d5ef1a3085b2fbbb0e432df3233af43ddcb9b5def0128d87649e20d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78f10b843d1a9e0c50f1dce913b4917b74ba74d108db188f96cd488b218d557d = $this->env->getExtension("native_profiler");
        $__internal_78f10b843d1a9e0c50f1dce913b4917b74ba74d108db188f96cd488b218d557d->enter($__internal_78f10b843d1a9e0c50f1dce913b4917b74ba74d108db188f96cd488b218d557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78f10b843d1a9e0c50f1dce913b4917b74ba74d108db188f96cd488b218d557d->leave($__internal_78f10b843d1a9e0c50f1dce913b4917b74ba74d108db188f96cd488b218d557d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_528fbb365784ecb3cdde70976a2d92dbed4d50da81be228b4d136ec67acb4d77 = $this->env->getExtension("native_profiler");
        $__internal_528fbb365784ecb3cdde70976a2d92dbed4d50da81be228b4d136ec67acb4d77->enter($__internal_528fbb365784ecb3cdde70976a2d92dbed4d50da81be228b4d136ec67acb4d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_528fbb365784ecb3cdde70976a2d92dbed4d50da81be228b4d136ec67acb4d77->leave($__internal_528fbb365784ecb3cdde70976a2d92dbed4d50da81be228b4d136ec67acb4d77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
