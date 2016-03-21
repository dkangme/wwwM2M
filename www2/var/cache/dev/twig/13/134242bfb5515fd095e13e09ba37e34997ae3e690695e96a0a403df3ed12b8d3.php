<?php

/* :wei:new.html.twig */
class __TwigTemplate_c301830bc12c6c10dd5003bb23d60cd3f0886cb04ead1b17051873a331e51b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:new.html.twig", 1);
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
        $__internal_0cf2e0fc9d0028604c7dac169ba931e4f02b49e5444e6fdbfaff1566f3991c02 = $this->env->getExtension("native_profiler");
        $__internal_0cf2e0fc9d0028604c7dac169ba931e4f02b49e5444e6fdbfaff1566f3991c02->enter($__internal_0cf2e0fc9d0028604c7dac169ba931e4f02b49e5444e6fdbfaff1566f3991c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf2e0fc9d0028604c7dac169ba931e4f02b49e5444e6fdbfaff1566f3991c02->leave($__internal_0cf2e0fc9d0028604c7dac169ba931e4f02b49e5444e6fdbfaff1566f3991c02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f2d52f05bbd34fc46a3b5c7e93277616c00ceba04a953306d52e97afd09e4a7 = $this->env->getExtension("native_profiler");
        $__internal_0f2d52f05bbd34fc46a3b5c7e93277616c00ceba04a953306d52e97afd09e4a7->enter($__internal_0f2d52f05bbd34fc46a3b5c7e93277616c00ceba04a953306d52e97afd09e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Wei creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0f2d52f05bbd34fc46a3b5c7e93277616c00ceba04a953306d52e97afd09e4a7->leave($__internal_0f2d52f05bbd34fc46a3b5c7e93277616c00ceba04a953306d52e97afd09e4a7_prof);

    }

    public function getTemplateName()
    {
        return ":wei:new.html.twig";
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
/*     <h1>Wei creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
