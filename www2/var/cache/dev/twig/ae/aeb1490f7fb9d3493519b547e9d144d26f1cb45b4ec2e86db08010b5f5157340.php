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
        $__internal_54ef06503f4f9b6210596da406d7b3f75ac8d5a1fd78ea79faead8d649cc6e8d = $this->env->getExtension("native_profiler");
        $__internal_54ef06503f4f9b6210596da406d7b3f75ac8d5a1fd78ea79faead8d649cc6e8d->enter($__internal_54ef06503f4f9b6210596da406d7b3f75ac8d5a1fd78ea79faead8d649cc6e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_54ef06503f4f9b6210596da406d7b3f75ac8d5a1fd78ea79faead8d649cc6e8d->leave($__internal_54ef06503f4f9b6210596da406d7b3f75ac8d5a1fd78ea79faead8d649cc6e8d_prof);

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
