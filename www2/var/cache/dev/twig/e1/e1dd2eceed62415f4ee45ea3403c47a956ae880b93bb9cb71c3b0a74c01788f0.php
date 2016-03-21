<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3e64df5561bbeafcffec596e8322c6cd84f3bcf104ca70bea1e492cb77712db1 extends Twig_Template
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
        $__internal_c939bdb36756e7fe6a48d761e698405567fb7e602469d39035327e40f6c49012 = $this->env->getExtension("native_profiler");
        $__internal_c939bdb36756e7fe6a48d761e698405567fb7e602469d39035327e40f6c49012->enter($__internal_c939bdb36756e7fe6a48d761e698405567fb7e602469d39035327e40f6c49012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c939bdb36756e7fe6a48d761e698405567fb7e602469d39035327e40f6c49012->leave($__internal_c939bdb36756e7fe6a48d761e698405567fb7e602469d39035327e40f6c49012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
