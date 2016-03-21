<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a8c90c3e87c3e652fe454de1824834125a163505b7db69c1129c8429b0594f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f5ec3d102a3f463d5f43bb02a1f4998f03d8751fcdc5c97db86afcf702898b8 = $this->env->getExtension("native_profiler");
        $__internal_2f5ec3d102a3f463d5f43bb02a1f4998f03d8751fcdc5c97db86afcf702898b8->enter($__internal_2f5ec3d102a3f463d5f43bb02a1f4998f03d8751fcdc5c97db86afcf702898b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2f5ec3d102a3f463d5f43bb02a1f4998f03d8751fcdc5c97db86afcf702898b8->leave($__internal_2f5ec3d102a3f463d5f43bb02a1f4998f03d8751fcdc5c97db86afcf702898b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
