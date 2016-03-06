<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8b221b742b8cd1b9844d57fb2106872c3432b0284938f799a2b34731aa3e19ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bce834f5df4de17a176882a42f4fbac3db0cb860470a8c31c6341562b330990d = $this->env->getExtension("native_profiler");
        $__internal_bce834f5df4de17a176882a42f4fbac3db0cb860470a8c31c6341562b330990d->enter($__internal_bce834f5df4de17a176882a42f4fbac3db0cb860470a8c31c6341562b330990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce834f5df4de17a176882a42f4fbac3db0cb860470a8c31c6341562b330990d->leave($__internal_bce834f5df4de17a176882a42f4fbac3db0cb860470a8c31c6341562b330990d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1c2b04cac66f6038a0a501e858f196c39365ee11892a5e283f739ac039f0e40 = $this->env->getExtension("native_profiler");
        $__internal_f1c2b04cac66f6038a0a501e858f196c39365ee11892a5e283f739ac039f0e40->enter($__internal_f1c2b04cac66f6038a0a501e858f196c39365ee11892a5e283f739ac039f0e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f1c2b04cac66f6038a0a501e858f196c39365ee11892a5e283f739ac039f0e40->leave($__internal_f1c2b04cac66f6038a0a501e858f196c39365ee11892a5e283f739ac039f0e40_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_181e799ab634ca5069965f968ecdb908bfd39095e0df0adb7ad7c893b8c92d75 = $this->env->getExtension("native_profiler");
        $__internal_181e799ab634ca5069965f968ecdb908bfd39095e0df0adb7ad7c893b8c92d75->enter($__internal_181e799ab634ca5069965f968ecdb908bfd39095e0df0adb7ad7c893b8c92d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_181e799ab634ca5069965f968ecdb908bfd39095e0df0adb7ad7c893b8c92d75->leave($__internal_181e799ab634ca5069965f968ecdb908bfd39095e0df0adb7ad7c893b8c92d75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
