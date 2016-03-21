<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c0bd78b86b3fec15017d3438e6509dc478b74c3e6db2cd8dce7ac489e38f820f extends Twig_Template
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
        $__internal_7b0ab35ffc531e15b1c0466bd20d627907a341a525f06a46788d6e74576a03b3 = $this->env->getExtension("native_profiler");
        $__internal_7b0ab35ffc531e15b1c0466bd20d627907a341a525f06a46788d6e74576a03b3->enter($__internal_7b0ab35ffc531e15b1c0466bd20d627907a341a525f06a46788d6e74576a03b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7b0ab35ffc531e15b1c0466bd20d627907a341a525f06a46788d6e74576a03b3->leave($__internal_7b0ab35ffc531e15b1c0466bd20d627907a341a525f06a46788d6e74576a03b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
