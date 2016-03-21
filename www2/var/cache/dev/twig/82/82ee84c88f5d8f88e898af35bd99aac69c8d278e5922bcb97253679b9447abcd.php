<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9ef28819a44cf615bc96d86e0a201e8071e9e64a185deef775a6107edee9ed80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_15b5ee8f526edbbdf8d60dd2803d089314695d149e72499a25c038f30f3a4b17 = $this->env->getExtension("native_profiler");
        $__internal_15b5ee8f526edbbdf8d60dd2803d089314695d149e72499a25c038f30f3a4b17->enter($__internal_15b5ee8f526edbbdf8d60dd2803d089314695d149e72499a25c038f30f3a4b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b5ee8f526edbbdf8d60dd2803d089314695d149e72499a25c038f30f3a4b17->leave($__internal_15b5ee8f526edbbdf8d60dd2803d089314695d149e72499a25c038f30f3a4b17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cba56238494ec1a024f53e8c22a90a611a66d1ca3342f8a30ca4f620841d7409 = $this->env->getExtension("native_profiler");
        $__internal_cba56238494ec1a024f53e8c22a90a611a66d1ca3342f8a30ca4f620841d7409->enter($__internal_cba56238494ec1a024f53e8c22a90a611a66d1ca3342f8a30ca4f620841d7409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cba56238494ec1a024f53e8c22a90a611a66d1ca3342f8a30ca4f620841d7409->leave($__internal_cba56238494ec1a024f53e8c22a90a611a66d1ca3342f8a30ca4f620841d7409_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48424233d1532025f27ad7126ce19677a1cd2366857dfbe414b32c0b1922f873 = $this->env->getExtension("native_profiler");
        $__internal_48424233d1532025f27ad7126ce19677a1cd2366857dfbe414b32c0b1922f873->enter($__internal_48424233d1532025f27ad7126ce19677a1cd2366857dfbe414b32c0b1922f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48424233d1532025f27ad7126ce19677a1cd2366857dfbe414b32c0b1922f873->leave($__internal_48424233d1532025f27ad7126ce19677a1cd2366857dfbe414b32c0b1922f873_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f71407c77f65d5ac4ee5be3f34429b1160de043fde9a3dd93383ca9bed3cd8 = $this->env->getExtension("native_profiler");
        $__internal_17f71407c77f65d5ac4ee5be3f34429b1160de043fde9a3dd93383ca9bed3cd8->enter($__internal_17f71407c77f65d5ac4ee5be3f34429b1160de043fde9a3dd93383ca9bed3cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17f71407c77f65d5ac4ee5be3f34429b1160de043fde9a3dd93383ca9bed3cd8->leave($__internal_17f71407c77f65d5ac4ee5be3f34429b1160de043fde9a3dd93383ca9bed3cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
