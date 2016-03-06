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
        $__internal_d12ce35889447f95105648d813eead1cfdfdfe4a33faa2cc586e74aa123839c7 = $this->env->getExtension("native_profiler");
        $__internal_d12ce35889447f95105648d813eead1cfdfdfe4a33faa2cc586e74aa123839c7->enter($__internal_d12ce35889447f95105648d813eead1cfdfdfe4a33faa2cc586e74aa123839c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12ce35889447f95105648d813eead1cfdfdfe4a33faa2cc586e74aa123839c7->leave($__internal_d12ce35889447f95105648d813eead1cfdfdfe4a33faa2cc586e74aa123839c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f79c7b7ec8e4f48858fef37a228a015bc78a1510b2f31e9c5df8de631473fd = $this->env->getExtension("native_profiler");
        $__internal_20f79c7b7ec8e4f48858fef37a228a015bc78a1510b2f31e9c5df8de631473fd->enter($__internal_20f79c7b7ec8e4f48858fef37a228a015bc78a1510b2f31e9c5df8de631473fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20f79c7b7ec8e4f48858fef37a228a015bc78a1510b2f31e9c5df8de631473fd->leave($__internal_20f79c7b7ec8e4f48858fef37a228a015bc78a1510b2f31e9c5df8de631473fd_prof);

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
