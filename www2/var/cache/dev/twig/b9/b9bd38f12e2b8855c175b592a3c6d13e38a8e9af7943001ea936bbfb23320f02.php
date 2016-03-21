<?php

/* :notificationlist:new.html.twig */
class __TwigTemplate_a988e045b38907b19b799ef50ae5b1e24b9ec12e916c9cc5ea5446fc26739500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notificationlist:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ca7af54520fbc116d58f20130114382ba1e007e9c5a57c9d204c76198c5bf4a = $this->env->getExtension("native_profiler");
        $__internal_5ca7af54520fbc116d58f20130114382ba1e007e9c5a57c9d204c76198c5bf4a->enter($__internal_5ca7af54520fbc116d58f20130114382ba1e007e9c5a57c9d204c76198c5bf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notificationlist:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca7af54520fbc116d58f20130114382ba1e007e9c5a57c9d204c76198c5bf4a->leave($__internal_5ca7af54520fbc116d58f20130114382ba1e007e9c5a57c9d204c76198c5bf4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ceced121c7c721a8a9e94ba836aa8c29b74d0bd01f8e7481d8d5fbb1635d789 = $this->env->getExtension("native_profiler");
        $__internal_2ceced121c7c721a8a9e94ba836aa8c29b74d0bd01f8e7481d8d5fbb1635d789->enter($__internal_2ceced121c7c721a8a9e94ba836aa8c29b74d0bd01f8e7481d8d5fbb1635d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notificationlist creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_notificationlist_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2ceced121c7c721a8a9e94ba836aa8c29b74d0bd01f8e7481d8d5fbb1635d789->leave($__internal_2ceced121c7c721a8a9e94ba836aa8c29b74d0bd01f8e7481d8d5fbb1635d789_prof);

    }

    public function getTemplateName()
    {
        return ":notificationlist:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notificationlist creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_notificationlist_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
