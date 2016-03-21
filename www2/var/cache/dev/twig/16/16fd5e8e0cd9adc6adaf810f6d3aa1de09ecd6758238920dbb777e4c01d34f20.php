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
        $__internal_201d269ab0c2dfd9ca76a4cac80cb4c4873564482bf86f743df29c2fe54b1fd3 = $this->env->getExtension("native_profiler");
        $__internal_201d269ab0c2dfd9ca76a4cac80cb4c4873564482bf86f743df29c2fe54b1fd3->enter($__internal_201d269ab0c2dfd9ca76a4cac80cb4c4873564482bf86f743df29c2fe54b1fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201d269ab0c2dfd9ca76a4cac80cb4c4873564482bf86f743df29c2fe54b1fd3->leave($__internal_201d269ab0c2dfd9ca76a4cac80cb4c4873564482bf86f743df29c2fe54b1fd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be16edc53c6f10c251e1989872593e64a6ca69d2afff25914dd61fa5e15fb4a = $this->env->getExtension("native_profiler");
        $__internal_1be16edc53c6f10c251e1989872593e64a6ca69d2afff25914dd61fa5e15fb4a->enter($__internal_1be16edc53c6f10c251e1989872593e64a6ca69d2afff25914dd61fa5e15fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1be16edc53c6f10c251e1989872593e64a6ca69d2afff25914dd61fa5e15fb4a->leave($__internal_1be16edc53c6f10c251e1989872593e64a6ca69d2afff25914dd61fa5e15fb4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d23c4a636c04afad6a3aa08a796969967dadbdab19cb2b3e30e08f778b8a76a2 = $this->env->getExtension("native_profiler");
        $__internal_d23c4a636c04afad6a3aa08a796969967dadbdab19cb2b3e30e08f778b8a76a2->enter($__internal_d23c4a636c04afad6a3aa08a796969967dadbdab19cb2b3e30e08f778b8a76a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d23c4a636c04afad6a3aa08a796969967dadbdab19cb2b3e30e08f778b8a76a2->leave($__internal_d23c4a636c04afad6a3aa08a796969967dadbdab19cb2b3e30e08f778b8a76a2_prof);

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
