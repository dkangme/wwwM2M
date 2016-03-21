<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_64180e9c9c906407901152cc6016c8ff71f2c022a8bb31844e38f1c049ddd2d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a61e81be1f761213383f493f976df61395a0f557db522ef97975f10a134ebb78 = $this->env->getExtension("native_profiler");
        $__internal_a61e81be1f761213383f493f976df61395a0f557db522ef97975f10a134ebb78->enter($__internal_a61e81be1f761213383f493f976df61395a0f557db522ef97975f10a134ebb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a61e81be1f761213383f493f976df61395a0f557db522ef97975f10a134ebb78->leave($__internal_a61e81be1f761213383f493f976df61395a0f557db522ef97975f10a134ebb78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
