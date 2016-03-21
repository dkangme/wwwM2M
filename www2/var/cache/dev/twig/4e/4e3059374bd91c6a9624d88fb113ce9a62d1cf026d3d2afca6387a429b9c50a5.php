<?php

/* wei/edit.html.twig */
class __TwigTemplate_b73bf05e868e8c84a43fd0025f092d7a320ee38b883ed6bfed74c02da2d6d14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wei/edit.html.twig", 1);
        $this->blocks = array(
            'breadcumb' => array($this, 'block_breadcumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8abb2f3eb35a623335652933071c5415dd5f1357d779f2f59b3860da8c2f23db = $this->env->getExtension("native_profiler");
        $__internal_8abb2f3eb35a623335652933071c5415dd5f1357d779f2f59b3860da8c2f23db->enter($__internal_8abb2f3eb35a623335652933071c5415dd5f1357d779f2f59b3860da8c2f23db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wei/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abb2f3eb35a623335652933071c5415dd5f1357d779f2f59b3860da8c2f23db->leave($__internal_8abb2f3eb35a623335652933071c5415dd5f1357d779f2f59b3860da8c2f23db_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_4293e40b1fd23d4fea115a95973649e72030758ffd3c56f031ab2d096cbd1d3e = $this->env->getExtension("native_profiler");
        $__internal_4293e40b1fd23d4fea115a95973649e72030758ffd3c56f031ab2d096cbd1d3e->enter($__internal_4293e40b1fd23d4fea115a95973649e72030758ffd3c56f031ab2d096cbd1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/\">Home</a> 
    </li>
    <li>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration", array(), "messages");
        echo "</li>
    <li><a href=\"/admin/wei\">ModWEI</a></li>
    <li><a href=\"#\">";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "</a></li>
</ul>

";
        
        $__internal_4293e40b1fd23d4fea115a95973649e72030758ffd3c56f031ab2d096cbd1d3e->leave($__internal_4293e40b1fd23d4fea115a95973649e72030758ffd3c56f031ab2d096cbd1d3e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_06569b725497a2514161bb43e7837289b58c02ec7c9581324b25521b033b9747 = $this->env->getExtension("native_profiler");
        $__internal_06569b725497a2514161bb43e7837289b58c02ec7c9581324b25521b033b9747->enter($__internal_06569b725497a2514161bb43e7837289b58c02ec7c9581324b25521b033b9747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"row\">
        
        <div class=\"col-sm-4 col-md-4 col-lg-4\">
            <h1>";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("MODWEI edit", array(), "messages");
        echo "</h1>

            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "\" />
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <br/>
             <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
        echo "\"><i class=\"icon-circle-arrow-left\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>
        </div>
    </div>
   

";
        
        $__internal_06569b725497a2514161bb43e7837289b58c02ec7c9581324b25521b033b9747->leave($__internal_06569b725497a2514161bb43e7837289b58c02ec7c9581324b25521b033b9747_prof);

    }

    public function getTemplateName()
    {
        return "wei/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  76 => 21,  71 => 18,  65 => 17,  54 => 12,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="/">Home</a> */
/*     </li>*/
/*     <li>{%trans%}Configuration{%endtrans%}</li>*/
/*     <li><a href="/admin/wei">ModWEI</a></li>*/
/*     <li><a href="#">{%trans%}Edit{%endtrans%}</a></li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         */
/*         <div class="col-sm-4 col-md-4 col-lg-4">*/
/*             <h1>{%trans%}MODWEI edit{%endtrans%}</h1>*/
/* */
/*             {{ form_start(edit_form) }}*/
/*                 {{ form_widget(edit_form) }}*/
/*                 <input type="submit" value="{%trans%}Edit{%endtrans%}" />*/
/*             {{ form_end(edit_form) }}*/
/*             <br/>*/
/*              <a href="{{ path('admin_wei_index') }}"><i class="icon-circle-arrow-left"></i> {%trans%}Back to the list{%endtrans%}</a>*/
/*         </div>*/
/*     </div>*/
/*    */
/* */
/* {% endblock %}*/
/* */
