<?php

/* :customer:new.html.twig */
class __TwigTemplate_3de41554af72dd47299479ff2e51d0b18744104d903cc5631afbecc349dda341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:new.html.twig", 1);
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
        $__internal_bba3fc2456f903cf7ecd976de0f12162f0cfd2b0210848e5bddbe1882bd180bc = $this->env->getExtension("native_profiler");
        $__internal_bba3fc2456f903cf7ecd976de0f12162f0cfd2b0210848e5bddbe1882bd180bc->enter($__internal_bba3fc2456f903cf7ecd976de0f12162f0cfd2b0210848e5bddbe1882bd180bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba3fc2456f903cf7ecd976de0f12162f0cfd2b0210848e5bddbe1882bd180bc->leave($__internal_bba3fc2456f903cf7ecd976de0f12162f0cfd2b0210848e5bddbe1882bd180bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1866c2aa7db5e04ed5dbadd8e703b91bdb9b158f4a4fd7b7e741f952e37ec470 = $this->env->getExtension("native_profiler");
        $__internal_1866c2aa7db5e04ed5dbadd8e703b91bdb9b158f4a4fd7b7e741f952e37ec470->enter($__internal_1866c2aa7db5e04ed5dbadd8e703b91bdb9b158f4a4fd7b7e741f952e37ec470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_customer_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1866c2aa7db5e04ed5dbadd8e703b91bdb9b158f4a4fd7b7e741f952e37ec470->leave($__internal_1866c2aa7db5e04ed5dbadd8e703b91bdb9b158f4a4fd7b7e741f952e37ec470_prof);

    }

    public function getTemplateName()
    {
        return ":customer:new.html.twig";
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
/*     <h1>Customer creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_customer_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
