<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0823ab109f0f95156859c5412b525a3c7a4f13117516247a6b5a4f352a028adf extends Twig_Template
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
        $__internal_9c03516aaee7abd69de2ef61be8422c74c876101dba32ca2cb0a404d5650063a = $this->env->getExtension("native_profiler");
        $__internal_9c03516aaee7abd69de2ef61be8422c74c876101dba32ca2cb0a404d5650063a->enter($__internal_9c03516aaee7abd69de2ef61be8422c74c876101dba32ca2cb0a404d5650063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c03516aaee7abd69de2ef61be8422c74c876101dba32ca2cb0a404d5650063a->leave($__internal_9c03516aaee7abd69de2ef61be8422c74c876101dba32ca2cb0a404d5650063a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
