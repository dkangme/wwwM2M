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
        $__internal_d91c64f3d7bd3b3f84941ee4e7ebe65b32158f932fe35086a9297df95102c00a = $this->env->getExtension("native_profiler");
        $__internal_d91c64f3d7bd3b3f84941ee4e7ebe65b32158f932fe35086a9297df95102c00a->enter($__internal_d91c64f3d7bd3b3f84941ee4e7ebe65b32158f932fe35086a9297df95102c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91c64f3d7bd3b3f84941ee4e7ebe65b32158f932fe35086a9297df95102c00a->leave($__internal_d91c64f3d7bd3b3f84941ee4e7ebe65b32158f932fe35086a9297df95102c00a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b785c595f53dc6903b2e5ae2691251e00dfba0127fe0c3c586efce20271e942e = $this->env->getExtension("native_profiler");
        $__internal_b785c595f53dc6903b2e5ae2691251e00dfba0127fe0c3c586efce20271e942e->enter($__internal_b785c595f53dc6903b2e5ae2691251e00dfba0127fe0c3c586efce20271e942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b785c595f53dc6903b2e5ae2691251e00dfba0127fe0c3c586efce20271e942e->leave($__internal_b785c595f53dc6903b2e5ae2691251e00dfba0127fe0c3c586efce20271e942e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f9337191f56ec14b4bf1152b899accf1b74752e1d0afe88984d41d93c23c599 = $this->env->getExtension("native_profiler");
        $__internal_8f9337191f56ec14b4bf1152b899accf1b74752e1d0afe88984d41d93c23c599->enter($__internal_8f9337191f56ec14b4bf1152b899accf1b74752e1d0afe88984d41d93c23c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f9337191f56ec14b4bf1152b899accf1b74752e1d0afe88984d41d93c23c599->leave($__internal_8f9337191f56ec14b4bf1152b899accf1b74752e1d0afe88984d41d93c23c599_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3fbee227e8c656216bc9374b7e8c694f38262b977f420dd08e926df08dbcb54 = $this->env->getExtension("native_profiler");
        $__internal_b3fbee227e8c656216bc9374b7e8c694f38262b977f420dd08e926df08dbcb54->enter($__internal_b3fbee227e8c656216bc9374b7e8c694f38262b977f420dd08e926df08dbcb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3fbee227e8c656216bc9374b7e8c694f38262b977f420dd08e926df08dbcb54->leave($__internal_b3fbee227e8c656216bc9374b7e8c694f38262b977f420dd08e926df08dbcb54_prof);

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
