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
        $__internal_9941cb7cda920a456cbf4401ac3f2e1bb6b78f47704c327334cf5c2928649a76 = $this->env->getExtension("native_profiler");
        $__internal_9941cb7cda920a456cbf4401ac3f2e1bb6b78f47704c327334cf5c2928649a76->enter($__internal_9941cb7cda920a456cbf4401ac3f2e1bb6b78f47704c327334cf5c2928649a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9941cb7cda920a456cbf4401ac3f2e1bb6b78f47704c327334cf5c2928649a76->leave($__internal_9941cb7cda920a456cbf4401ac3f2e1bb6b78f47704c327334cf5c2928649a76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43470e8f822123f9df189ab8f171941fb4e4dcd806b456224149e34e0243762 = $this->env->getExtension("native_profiler");
        $__internal_c43470e8f822123f9df189ab8f171941fb4e4dcd806b456224149e34e0243762->enter($__internal_c43470e8f822123f9df189ab8f171941fb4e4dcd806b456224149e34e0243762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c43470e8f822123f9df189ab8f171941fb4e4dcd806b456224149e34e0243762->leave($__internal_c43470e8f822123f9df189ab8f171941fb4e4dcd806b456224149e34e0243762_prof);

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
