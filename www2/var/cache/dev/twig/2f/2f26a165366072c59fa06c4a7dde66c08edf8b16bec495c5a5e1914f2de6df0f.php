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
        $__internal_468f2624c49e7ed91f0c3c0a4f8bd689a46c6571f3f5ef16854076b86765c000 = $this->env->getExtension("native_profiler");
        $__internal_468f2624c49e7ed91f0c3c0a4f8bd689a46c6571f3f5ef16854076b86765c000->enter($__internal_468f2624c49e7ed91f0c3c0a4f8bd689a46c6571f3f5ef16854076b86765c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_468f2624c49e7ed91f0c3c0a4f8bd689a46c6571f3f5ef16854076b86765c000->leave($__internal_468f2624c49e7ed91f0c3c0a4f8bd689a46c6571f3f5ef16854076b86765c000_prof);

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
