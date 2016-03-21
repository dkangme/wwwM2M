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
        $__internal_f8f85899987a30f1dbe49c2ce6342d89cbdf5e19f975bf57aad5b152c563cbfa = $this->env->getExtension("native_profiler");
        $__internal_f8f85899987a30f1dbe49c2ce6342d89cbdf5e19f975bf57aad5b152c563cbfa->enter($__internal_f8f85899987a30f1dbe49c2ce6342d89cbdf5e19f975bf57aad5b152c563cbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f8f85899987a30f1dbe49c2ce6342d89cbdf5e19f975bf57aad5b152c563cbfa->leave($__internal_f8f85899987a30f1dbe49c2ce6342d89cbdf5e19f975bf57aad5b152c563cbfa_prof);

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
