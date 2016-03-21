<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c9dc334f481034fe3575e9a1d1919b3ab64ba1511b1d07204ca3c56f97f98086 extends Twig_Template
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
        $__internal_392f58dd1b35f2995cd748cf4b62e6e4218bd84062fcb8fb126dfe4724528b31 = $this->env->getExtension("native_profiler");
        $__internal_392f58dd1b35f2995cd748cf4b62e6e4218bd84062fcb8fb126dfe4724528b31->enter($__internal_392f58dd1b35f2995cd748cf4b62e6e4218bd84062fcb8fb126dfe4724528b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_392f58dd1b35f2995cd748cf4b62e6e4218bd84062fcb8fb126dfe4724528b31->leave($__internal_392f58dd1b35f2995cd748cf4b62e6e4218bd84062fcb8fb126dfe4724528b31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
