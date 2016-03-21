<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a8f5e75e9faee6d615768c7a2db1e6fed227eeaa7520f41096fd42893f27307f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fadd1271f1f079951addc5dcc3c9ff64d83cba42bcbdb24d8d75335710306690 = $this->env->getExtension("native_profiler");
        $__internal_fadd1271f1f079951addc5dcc3c9ff64d83cba42bcbdb24d8d75335710306690->enter($__internal_fadd1271f1f079951addc5dcc3c9ff64d83cba42bcbdb24d8d75335710306690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fadd1271f1f079951addc5dcc3c9ff64d83cba42bcbdb24d8d75335710306690->leave($__internal_fadd1271f1f079951addc5dcc3c9ff64d83cba42bcbdb24d8d75335710306690_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_711a1dc42752477e5339e9a6b1918ba57c721e69f191780f7b18af818b129bec = $this->env->getExtension("native_profiler");
        $__internal_711a1dc42752477e5339e9a6b1918ba57c721e69f191780f7b18af818b129bec->enter($__internal_711a1dc42752477e5339e9a6b1918ba57c721e69f191780f7b18af818b129bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_711a1dc42752477e5339e9a6b1918ba57c721e69f191780f7b18af818b129bec->leave($__internal_711a1dc42752477e5339e9a6b1918ba57c721e69f191780f7b18af818b129bec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
