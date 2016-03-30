<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d96537282dcca7ae07956eec8cd28c777f775650182449a2ed82072a40bfa7dc extends Twig_Template
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
        $__internal_1580f5f537a9a04ed31bd595e3fc71c3f82cecea98e43506f39b8620604e64e3 = $this->env->getExtension("native_profiler");
        $__internal_1580f5f537a9a04ed31bd595e3fc71c3f82cecea98e43506f39b8620604e64e3->enter($__internal_1580f5f537a9a04ed31bd595e3fc71c3f82cecea98e43506f39b8620604e64e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1580f5f537a9a04ed31bd595e3fc71c3f82cecea98e43506f39b8620604e64e3->leave($__internal_1580f5f537a9a04ed31bd595e3fc71c3f82cecea98e43506f39b8620604e64e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30653b2d5702063988b85c371e35d25377f5c004651db1aa3a6e9ed0033728a4 = $this->env->getExtension("native_profiler");
        $__internal_30653b2d5702063988b85c371e35d25377f5c004651db1aa3a6e9ed0033728a4->enter($__internal_30653b2d5702063988b85c371e35d25377f5c004651db1aa3a6e9ed0033728a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30653b2d5702063988b85c371e35d25377f5c004651db1aa3a6e9ed0033728a4->leave($__internal_30653b2d5702063988b85c371e35d25377f5c004651db1aa3a6e9ed0033728a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ace205004dc36db0b3cf15b9dec4dece8f85363bfac0dea06b789972a6249ba = $this->env->getExtension("native_profiler");
        $__internal_1ace205004dc36db0b3cf15b9dec4dece8f85363bfac0dea06b789972a6249ba->enter($__internal_1ace205004dc36db0b3cf15b9dec4dece8f85363bfac0dea06b789972a6249ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ace205004dc36db0b3cf15b9dec4dece8f85363bfac0dea06b789972a6249ba->leave($__internal_1ace205004dc36db0b3cf15b9dec4dece8f85363bfac0dea06b789972a6249ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30d5f7a8bfb2072d7159307fd483028037fcb928368c5aa87b93add36dc7779e = $this->env->getExtension("native_profiler");
        $__internal_30d5f7a8bfb2072d7159307fd483028037fcb928368c5aa87b93add36dc7779e->enter($__internal_30d5f7a8bfb2072d7159307fd483028037fcb928368c5aa87b93add36dc7779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_30d5f7a8bfb2072d7159307fd483028037fcb928368c5aa87b93add36dc7779e->leave($__internal_30d5f7a8bfb2072d7159307fd483028037fcb928368c5aa87b93add36dc7779e_prof);

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
