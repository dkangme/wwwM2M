<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_270b43076a381281cc7eee6720b69e730e0cb0fe77ccf5d6c4b7b265d1961b2e extends Twig_Template
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
        $__internal_0395b6c28521a6f53a8d6cbdda76f8be4b22a1a744ddc7a8283e44bce1c63300 = $this->env->getExtension("native_profiler");
        $__internal_0395b6c28521a6f53a8d6cbdda76f8be4b22a1a744ddc7a8283e44bce1c63300->enter($__internal_0395b6c28521a6f53a8d6cbdda76f8be4b22a1a744ddc7a8283e44bce1c63300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0395b6c28521a6f53a8d6cbdda76f8be4b22a1a744ddc7a8283e44bce1c63300->leave($__internal_0395b6c28521a6f53a8d6cbdda76f8be4b22a1a744ddc7a8283e44bce1c63300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
