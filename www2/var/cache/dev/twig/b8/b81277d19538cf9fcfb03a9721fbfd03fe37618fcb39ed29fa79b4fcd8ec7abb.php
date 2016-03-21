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
        $__internal_d333f02d40adfe6e509bde8a3e49359d5a83637125bd2b8320c08ce3301c5d39 = $this->env->getExtension("native_profiler");
        $__internal_d333f02d40adfe6e509bde8a3e49359d5a83637125bd2b8320c08ce3301c5d39->enter($__internal_d333f02d40adfe6e509bde8a3e49359d5a83637125bd2b8320c08ce3301c5d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d333f02d40adfe6e509bde8a3e49359d5a83637125bd2b8320c08ce3301c5d39->leave($__internal_d333f02d40adfe6e509bde8a3e49359d5a83637125bd2b8320c08ce3301c5d39_prof);

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
