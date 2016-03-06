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
        $__internal_6d7ececb86d95d6cc46697e1489510b6e5fb6343060ba7cc0ba0f6a6f86f3403 = $this->env->getExtension("native_profiler");
        $__internal_6d7ececb86d95d6cc46697e1489510b6e5fb6343060ba7cc0ba0f6a6f86f3403->enter($__internal_6d7ececb86d95d6cc46697e1489510b6e5fb6343060ba7cc0ba0f6a6f86f3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7ececb86d95d6cc46697e1489510b6e5fb6343060ba7cc0ba0f6a6f86f3403->leave($__internal_6d7ececb86d95d6cc46697e1489510b6e5fb6343060ba7cc0ba0f6a6f86f3403_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93fc8b13c9a548d31aab2af48d3fc559b49365f139c205b009b6b48e6143023b = $this->env->getExtension("native_profiler");
        $__internal_93fc8b13c9a548d31aab2af48d3fc559b49365f139c205b009b6b48e6143023b->enter($__internal_93fc8b13c9a548d31aab2af48d3fc559b49365f139c205b009b6b48e6143023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93fc8b13c9a548d31aab2af48d3fc559b49365f139c205b009b6b48e6143023b->leave($__internal_93fc8b13c9a548d31aab2af48d3fc559b49365f139c205b009b6b48e6143023b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d47f24548a8f208f4605e458d170c519002600a879e67a9d1c90808b8d386b9 = $this->env->getExtension("native_profiler");
        $__internal_4d47f24548a8f208f4605e458d170c519002600a879e67a9d1c90808b8d386b9->enter($__internal_4d47f24548a8f208f4605e458d170c519002600a879e67a9d1c90808b8d386b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d47f24548a8f208f4605e458d170c519002600a879e67a9d1c90808b8d386b9->leave($__internal_4d47f24548a8f208f4605e458d170c519002600a879e67a9d1c90808b8d386b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fefe5222f9482bd2d947aed745e187146b7f719434a344783c9dbd75307c8348 = $this->env->getExtension("native_profiler");
        $__internal_fefe5222f9482bd2d947aed745e187146b7f719434a344783c9dbd75307c8348->enter($__internal_fefe5222f9482bd2d947aed745e187146b7f719434a344783c9dbd75307c8348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fefe5222f9482bd2d947aed745e187146b7f719434a344783c9dbd75307c8348->leave($__internal_fefe5222f9482bd2d947aed745e187146b7f719434a344783c9dbd75307c8348_prof);

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
