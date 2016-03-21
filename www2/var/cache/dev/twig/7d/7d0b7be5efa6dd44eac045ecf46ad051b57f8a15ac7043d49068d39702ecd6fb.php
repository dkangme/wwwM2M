<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1d6cc7c0daa0076f800bca9565aacf1e02bc76f7237608a0bdf6d38e890d7945 extends Twig_Template
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
        $__internal_ebb3b6db9ee8691337a03f64083277185eed5f6c5c552f90603af55139b283ff = $this->env->getExtension("native_profiler");
        $__internal_ebb3b6db9ee8691337a03f64083277185eed5f6c5c552f90603af55139b283ff->enter($__internal_ebb3b6db9ee8691337a03f64083277185eed5f6c5c552f90603af55139b283ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ebb3b6db9ee8691337a03f64083277185eed5f6c5c552f90603af55139b283ff->leave($__internal_ebb3b6db9ee8691337a03f64083277185eed5f6c5c552f90603af55139b283ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
