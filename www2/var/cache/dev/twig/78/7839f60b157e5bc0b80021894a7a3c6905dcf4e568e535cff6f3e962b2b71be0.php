<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7f331b1dbccd44ca805013b848638264969cfd529751085e0444d5bc0ae28907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59e81a7b69c2ec8b58ce61ce8f83209979fb8032fe4a8a4b28ae56ce66ac6190 = $this->env->getExtension("native_profiler");
        $__internal_59e81a7b69c2ec8b58ce61ce8f83209979fb8032fe4a8a4b28ae56ce66ac6190->enter($__internal_59e81a7b69c2ec8b58ce61ce8f83209979fb8032fe4a8a4b28ae56ce66ac6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e81a7b69c2ec8b58ce61ce8f83209979fb8032fe4a8a4b28ae56ce66ac6190->leave($__internal_59e81a7b69c2ec8b58ce61ce8f83209979fb8032fe4a8a4b28ae56ce66ac6190_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8b9e085eddcdffb369ca5cf0a567c2e61778abe56d5b6c8fce40be24203cade = $this->env->getExtension("native_profiler");
        $__internal_c8b9e085eddcdffb369ca5cf0a567c2e61778abe56d5b6c8fce40be24203cade->enter($__internal_c8b9e085eddcdffb369ca5cf0a567c2e61778abe56d5b6c8fce40be24203cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c8b9e085eddcdffb369ca5cf0a567c2e61778abe56d5b6c8fce40be24203cade->leave($__internal_c8b9e085eddcdffb369ca5cf0a567c2e61778abe56d5b6c8fce40be24203cade_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c065df165f9f70ed225a36d7da24592dff0e8df1cc4ce2b1c9398e1dd661d15c = $this->env->getExtension("native_profiler");
        $__internal_c065df165f9f70ed225a36d7da24592dff0e8df1cc4ce2b1c9398e1dd661d15c->enter($__internal_c065df165f9f70ed225a36d7da24592dff0e8df1cc4ce2b1c9398e1dd661d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c065df165f9f70ed225a36d7da24592dff0e8df1cc4ce2b1c9398e1dd661d15c->leave($__internal_c065df165f9f70ed225a36d7da24592dff0e8df1cc4ce2b1c9398e1dd661d15c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e110cb8501d491d652f20ca0c598b0fe384f444902496accbd229e8fce1223c = $this->env->getExtension("native_profiler");
        $__internal_4e110cb8501d491d652f20ca0c598b0fe384f444902496accbd229e8fce1223c->enter($__internal_4e110cb8501d491d652f20ca0c598b0fe384f444902496accbd229e8fce1223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e110cb8501d491d652f20ca0c598b0fe384f444902496accbd229e8fce1223c->leave($__internal_4e110cb8501d491d652f20ca0c598b0fe384f444902496accbd229e8fce1223c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
