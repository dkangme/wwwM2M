<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c1969f19f7e987b09deccef122196b9c0a82be864c49f1824de8d0c899966936 extends Twig_Template
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
        $__internal_084cc1914ef3d4da1760b9a922b8d1169cb945d9c76286a0cab81ef3edae68f0 = $this->env->getExtension("native_profiler");
        $__internal_084cc1914ef3d4da1760b9a922b8d1169cb945d9c76286a0cab81ef3edae68f0->enter($__internal_084cc1914ef3d4da1760b9a922b8d1169cb945d9c76286a0cab81ef3edae68f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_084cc1914ef3d4da1760b9a922b8d1169cb945d9c76286a0cab81ef3edae68f0->leave($__internal_084cc1914ef3d4da1760b9a922b8d1169cb945d9c76286a0cab81ef3edae68f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
