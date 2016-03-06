<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_591fd2a5f8f569aeef6f95510395cad9ec70ca185cf21bc8b5234193741984c3 extends Twig_Template
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
        $__internal_9766592944a1e120168f7dae0f1919e4a92ce1ad948e5015139eaae9932a99d5 = $this->env->getExtension("native_profiler");
        $__internal_9766592944a1e120168f7dae0f1919e4a92ce1ad948e5015139eaae9932a99d5->enter($__internal_9766592944a1e120168f7dae0f1919e4a92ce1ad948e5015139eaae9932a99d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9766592944a1e120168f7dae0f1919e4a92ce1ad948e5015139eaae9932a99d5->leave($__internal_9766592944a1e120168f7dae0f1919e4a92ce1ad948e5015139eaae9932a99d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
