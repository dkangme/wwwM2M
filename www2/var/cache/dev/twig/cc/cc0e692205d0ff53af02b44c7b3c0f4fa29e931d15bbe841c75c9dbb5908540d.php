<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_72f244dde14f05585953b436eb8107eb7de7bae356fe550688125c8ada2a745d extends Twig_Template
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
        $__internal_6bf906003a201c41ce0e0cbaa73000f489adda4183bb5fe84f774193cc3fe9fb = $this->env->getExtension("native_profiler");
        $__internal_6bf906003a201c41ce0e0cbaa73000f489adda4183bb5fe84f774193cc3fe9fb->enter($__internal_6bf906003a201c41ce0e0cbaa73000f489adda4183bb5fe84f774193cc3fe9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bf906003a201c41ce0e0cbaa73000f489adda4183bb5fe84f774193cc3fe9fb->leave($__internal_6bf906003a201c41ce0e0cbaa73000f489adda4183bb5fe84f774193cc3fe9fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
