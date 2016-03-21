<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fe1f5fa17ff90e3baf76741384d48f02bf506896dda0db8d01594fe7f188645b extends Twig_Template
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
        $__internal_58f9a45f00187573797bf9ed12ea6d26a61cca2a7284595e21d1223a6dd68770 = $this->env->getExtension("native_profiler");
        $__internal_58f9a45f00187573797bf9ed12ea6d26a61cca2a7284595e21d1223a6dd68770->enter($__internal_58f9a45f00187573797bf9ed12ea6d26a61cca2a7284595e21d1223a6dd68770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f9a45f00187573797bf9ed12ea6d26a61cca2a7284595e21d1223a6dd68770->leave($__internal_58f9a45f00187573797bf9ed12ea6d26a61cca2a7284595e21d1223a6dd68770_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19d8ee1d5108d319d35a03ae7dfedb04989ef89d3167b1348bd198e9c4f07e0c = $this->env->getExtension("native_profiler");
        $__internal_19d8ee1d5108d319d35a03ae7dfedb04989ef89d3167b1348bd198e9c4f07e0c->enter($__internal_19d8ee1d5108d319d35a03ae7dfedb04989ef89d3167b1348bd198e9c4f07e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19d8ee1d5108d319d35a03ae7dfedb04989ef89d3167b1348bd198e9c4f07e0c->leave($__internal_19d8ee1d5108d319d35a03ae7dfedb04989ef89d3167b1348bd198e9c4f07e0c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9becad6dadb5df3f1e8752a77812fd80b2d8c949134c99e313ca0071847cad96 = $this->env->getExtension("native_profiler");
        $__internal_9becad6dadb5df3f1e8752a77812fd80b2d8c949134c99e313ca0071847cad96->enter($__internal_9becad6dadb5df3f1e8752a77812fd80b2d8c949134c99e313ca0071847cad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9becad6dadb5df3f1e8752a77812fd80b2d8c949134c99e313ca0071847cad96->leave($__internal_9becad6dadb5df3f1e8752a77812fd80b2d8c949134c99e313ca0071847cad96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22d6f4bcbbeb405a7d7995325ea29d3cdfa5c33dac422b1db5b8277d49d0ef7b = $this->env->getExtension("native_profiler");
        $__internal_22d6f4bcbbeb405a7d7995325ea29d3cdfa5c33dac422b1db5b8277d49d0ef7b->enter($__internal_22d6f4bcbbeb405a7d7995325ea29d3cdfa5c33dac422b1db5b8277d49d0ef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22d6f4bcbbeb405a7d7995325ea29d3cdfa5c33dac422b1db5b8277d49d0ef7b->leave($__internal_22d6f4bcbbeb405a7d7995325ea29d3cdfa5c33dac422b1db5b8277d49d0ef7b_prof);

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
