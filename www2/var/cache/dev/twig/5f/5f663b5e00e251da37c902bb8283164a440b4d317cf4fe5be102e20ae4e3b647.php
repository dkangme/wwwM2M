<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3fc1358e249418e6fe19fb57b91067144c248480ab9d44d5e5c1aefcd9a7e2b6 extends Twig_Template
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
        $__internal_569108a9d7c3a13e078fb5c6450c000f33016608eda213c4c64282ff53c05698 = $this->env->getExtension("native_profiler");
        $__internal_569108a9d7c3a13e078fb5c6450c000f33016608eda213c4c64282ff53c05698->enter($__internal_569108a9d7c3a13e078fb5c6450c000f33016608eda213c4c64282ff53c05698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_569108a9d7c3a13e078fb5c6450c000f33016608eda213c4c64282ff53c05698->leave($__internal_569108a9d7c3a13e078fb5c6450c000f33016608eda213c4c64282ff53c05698_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
