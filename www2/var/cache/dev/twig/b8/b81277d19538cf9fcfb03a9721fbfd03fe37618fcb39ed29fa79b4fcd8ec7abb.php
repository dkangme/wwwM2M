<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c901b052decdb5676e227e9af36a65a708545dbab47b4f74c55c3330a6b0435c extends Twig_Template
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
        $__internal_24e70bb6f108a60a727f64129f9163069d35b9ec6832d92f9f8061fa6bf051e7 = $this->env->getExtension("native_profiler");
        $__internal_24e70bb6f108a60a727f64129f9163069d35b9ec6832d92f9f8061fa6bf051e7->enter($__internal_24e70bb6f108a60a727f64129f9163069d35b9ec6832d92f9f8061fa6bf051e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_24e70bb6f108a60a727f64129f9163069d35b9ec6832d92f9f8061fa6bf051e7->leave($__internal_24e70bb6f108a60a727f64129f9163069d35b9ec6832d92f9f8061fa6bf051e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
