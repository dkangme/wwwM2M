<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3dd7408aeb3dae2f25d14d2b10b76f2ac2b5bea4912b5133f2a1e15bb600f9d1 extends Twig_Template
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
        $__internal_673ca05e7bf2dfb88ab883ab9a244f06bc81e74839f3fddb713dee49637e675b = $this->env->getExtension("native_profiler");
        $__internal_673ca05e7bf2dfb88ab883ab9a244f06bc81e74839f3fddb713dee49637e675b->enter($__internal_673ca05e7bf2dfb88ab883ab9a244f06bc81e74839f3fddb713dee49637e675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_673ca05e7bf2dfb88ab883ab9a244f06bc81e74839f3fddb713dee49637e675b->leave($__internal_673ca05e7bf2dfb88ab883ab9a244f06bc81e74839f3fddb713dee49637e675b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
