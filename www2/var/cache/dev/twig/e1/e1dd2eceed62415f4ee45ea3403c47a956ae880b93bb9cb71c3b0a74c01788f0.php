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
        $__internal_6358053bee2bcf2ad182dfbc98535d841fe0a95cd767d90f40deedb5430ea23a = $this->env->getExtension("native_profiler");
        $__internal_6358053bee2bcf2ad182dfbc98535d841fe0a95cd767d90f40deedb5430ea23a->enter($__internal_6358053bee2bcf2ad182dfbc98535d841fe0a95cd767d90f40deedb5430ea23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6358053bee2bcf2ad182dfbc98535d841fe0a95cd767d90f40deedb5430ea23a->leave($__internal_6358053bee2bcf2ad182dfbc98535d841fe0a95cd767d90f40deedb5430ea23a_prof);

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
