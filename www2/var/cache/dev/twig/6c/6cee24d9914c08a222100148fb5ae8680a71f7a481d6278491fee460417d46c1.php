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
        $__internal_e866145d159751655d54146900112493d3ca017ce5af505fb2e1a40efdef9101 = $this->env->getExtension("native_profiler");
        $__internal_e866145d159751655d54146900112493d3ca017ce5af505fb2e1a40efdef9101->enter($__internal_e866145d159751655d54146900112493d3ca017ce5af505fb2e1a40efdef9101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e866145d159751655d54146900112493d3ca017ce5af505fb2e1a40efdef9101->leave($__internal_e866145d159751655d54146900112493d3ca017ce5af505fb2e1a40efdef9101_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e6956473dbc22bb62a4e7d2a6c7c6eae1cac73af800bb3f2b6f0e563c70eba9 = $this->env->getExtension("native_profiler");
        $__internal_1e6956473dbc22bb62a4e7d2a6c7c6eae1cac73af800bb3f2b6f0e563c70eba9->enter($__internal_1e6956473dbc22bb62a4e7d2a6c7c6eae1cac73af800bb3f2b6f0e563c70eba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e6956473dbc22bb62a4e7d2a6c7c6eae1cac73af800bb3f2b6f0e563c70eba9->leave($__internal_1e6956473dbc22bb62a4e7d2a6c7c6eae1cac73af800bb3f2b6f0e563c70eba9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0283f6ca5f9f05b38c9147a2f2a3bdf7f208bea174ebb77055ddf5da5661f25 = $this->env->getExtension("native_profiler");
        $__internal_e0283f6ca5f9f05b38c9147a2f2a3bdf7f208bea174ebb77055ddf5da5661f25->enter($__internal_e0283f6ca5f9f05b38c9147a2f2a3bdf7f208bea174ebb77055ddf5da5661f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0283f6ca5f9f05b38c9147a2f2a3bdf7f208bea174ebb77055ddf5da5661f25->leave($__internal_e0283f6ca5f9f05b38c9147a2f2a3bdf7f208bea174ebb77055ddf5da5661f25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61b0730aeb39f6a0c873a2f7f828e2b9e514d4fc9de673b6d6785fa33945811b = $this->env->getExtension("native_profiler");
        $__internal_61b0730aeb39f6a0c873a2f7f828e2b9e514d4fc9de673b6d6785fa33945811b->enter($__internal_61b0730aeb39f6a0c873a2f7f828e2b9e514d4fc9de673b6d6785fa33945811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61b0730aeb39f6a0c873a2f7f828e2b9e514d4fc9de673b6d6785fa33945811b->leave($__internal_61b0730aeb39f6a0c873a2f7f828e2b9e514d4fc9de673b6d6785fa33945811b_prof);

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
