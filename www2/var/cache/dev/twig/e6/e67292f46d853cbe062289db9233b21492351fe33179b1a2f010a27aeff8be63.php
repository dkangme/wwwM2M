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
        $__internal_0f55f2ed46ea9216fec160b5f29eea1fd0036f65395557a3f40257031b54b51c = $this->env->getExtension("native_profiler");
        $__internal_0f55f2ed46ea9216fec160b5f29eea1fd0036f65395557a3f40257031b54b51c->enter($__internal_0f55f2ed46ea9216fec160b5f29eea1fd0036f65395557a3f40257031b54b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0f55f2ed46ea9216fec160b5f29eea1fd0036f65395557a3f40257031b54b51c->leave($__internal_0f55f2ed46ea9216fec160b5f29eea1fd0036f65395557a3f40257031b54b51c_prof);

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
