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
        $__internal_d84a682c960f2848137e62afe79243955d2cb21dca0faf485625611ea2de0b09 = $this->env->getExtension("native_profiler");
        $__internal_d84a682c960f2848137e62afe79243955d2cb21dca0faf485625611ea2de0b09->enter($__internal_d84a682c960f2848137e62afe79243955d2cb21dca0faf485625611ea2de0b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d84a682c960f2848137e62afe79243955d2cb21dca0faf485625611ea2de0b09->leave($__internal_d84a682c960f2848137e62afe79243955d2cb21dca0faf485625611ea2de0b09_prof);

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
