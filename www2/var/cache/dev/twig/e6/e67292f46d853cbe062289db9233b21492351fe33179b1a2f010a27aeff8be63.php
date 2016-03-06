<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4ade3106be60a99c8b79116e5d08efefcd3efe81c7837f991777c21eea55fa60 extends Twig_Template
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
        $__internal_f7dcbeadef92151dbcfd3202fd1da4a75e33acd1e6cc914e8bbb3c2cad4f44e9 = $this->env->getExtension("native_profiler");
        $__internal_f7dcbeadef92151dbcfd3202fd1da4a75e33acd1e6cc914e8bbb3c2cad4f44e9->enter($__internal_f7dcbeadef92151dbcfd3202fd1da4a75e33acd1e6cc914e8bbb3c2cad4f44e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f7dcbeadef92151dbcfd3202fd1da4a75e33acd1e6cc914e8bbb3c2cad4f44e9->leave($__internal_f7dcbeadef92151dbcfd3202fd1da4a75e33acd1e6cc914e8bbb3c2cad4f44e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
