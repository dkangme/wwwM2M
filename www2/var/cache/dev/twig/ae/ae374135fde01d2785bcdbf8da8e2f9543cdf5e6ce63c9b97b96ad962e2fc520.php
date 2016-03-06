<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f816923aecc64de0641e82aa54ffe30c795e44c9f835aef61a8fed9e83f3f369 extends Twig_Template
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
        $__internal_e70c575826b3288a601fc145ef116e4fe6e2d88bf7fdab1ed1d0a7a401fd3412 = $this->env->getExtension("native_profiler");
        $__internal_e70c575826b3288a601fc145ef116e4fe6e2d88bf7fdab1ed1d0a7a401fd3412->enter($__internal_e70c575826b3288a601fc145ef116e4fe6e2d88bf7fdab1ed1d0a7a401fd3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e70c575826b3288a601fc145ef116e4fe6e2d88bf7fdab1ed1d0a7a401fd3412->leave($__internal_e70c575826b3288a601fc145ef116e4fe6e2d88bf7fdab1ed1d0a7a401fd3412_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
