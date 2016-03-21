<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_75bea73273673439a74078b2ff91ea6ecb1c97a96f647a1dc789e635f11991b3 extends Twig_Template
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
        $__internal_713e63a9998ed2dbd7ee12975745ec333af48f8f6ba3022d28d71ddf3f245990 = $this->env->getExtension("native_profiler");
        $__internal_713e63a9998ed2dbd7ee12975745ec333af48f8f6ba3022d28d71ddf3f245990->enter($__internal_713e63a9998ed2dbd7ee12975745ec333af48f8f6ba3022d28d71ddf3f245990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_713e63a9998ed2dbd7ee12975745ec333af48f8f6ba3022d28d71ddf3f245990->leave($__internal_713e63a9998ed2dbd7ee12975745ec333af48f8f6ba3022d28d71ddf3f245990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
