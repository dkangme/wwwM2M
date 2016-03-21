<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a70f26b0a1423fdedd6c27909e2d23b2da10d58808c187fe62e75733b46ddf77 extends Twig_Template
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
        $__internal_f9c244c1b901e178ff9cebec8bdc0017436e7eb0480921edda7b75f5e576d5bb = $this->env->getExtension("native_profiler");
        $__internal_f9c244c1b901e178ff9cebec8bdc0017436e7eb0480921edda7b75f5e576d5bb->enter($__internal_f9c244c1b901e178ff9cebec8bdc0017436e7eb0480921edda7b75f5e576d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f9c244c1b901e178ff9cebec8bdc0017436e7eb0480921edda7b75f5e576d5bb->leave($__internal_f9c244c1b901e178ff9cebec8bdc0017436e7eb0480921edda7b75f5e576d5bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
