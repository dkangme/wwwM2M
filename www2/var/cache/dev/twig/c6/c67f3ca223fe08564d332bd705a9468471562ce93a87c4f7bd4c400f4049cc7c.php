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
        $__internal_7e80a652320c99e04d30d90038acb0023332c7298345848c7c77b64c09af7e51 = $this->env->getExtension("native_profiler");
        $__internal_7e80a652320c99e04d30d90038acb0023332c7298345848c7c77b64c09af7e51->enter($__internal_7e80a652320c99e04d30d90038acb0023332c7298345848c7c77b64c09af7e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7e80a652320c99e04d30d90038acb0023332c7298345848c7c77b64c09af7e51->leave($__internal_7e80a652320c99e04d30d90038acb0023332c7298345848c7c77b64c09af7e51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d34b4f55fdba5bb4e3ed3a7d330c4e035ff70f03dd62dd6e9879fe162d9780ba = $this->env->getExtension("native_profiler");
        $__internal_d34b4f55fdba5bb4e3ed3a7d330c4e035ff70f03dd62dd6e9879fe162d9780ba->enter($__internal_d34b4f55fdba5bb4e3ed3a7d330c4e035ff70f03dd62dd6e9879fe162d9780ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d34b4f55fdba5bb4e3ed3a7d330c4e035ff70f03dd62dd6e9879fe162d9780ba->leave($__internal_d34b4f55fdba5bb4e3ed3a7d330c4e035ff70f03dd62dd6e9879fe162d9780ba_prof);

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
