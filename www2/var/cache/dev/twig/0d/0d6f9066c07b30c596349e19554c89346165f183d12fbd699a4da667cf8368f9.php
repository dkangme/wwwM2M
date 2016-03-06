<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a6087f84dfddd859aaacb79d8b63b9d25dd8e1defc519dc6e03b1cd57113d08e extends Twig_Template
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
        $__internal_757d2692c58fb906f343363ae769998cd7e7506a3f76424fee7d469a929647d8 = $this->env->getExtension("native_profiler");
        $__internal_757d2692c58fb906f343363ae769998cd7e7506a3f76424fee7d469a929647d8->enter($__internal_757d2692c58fb906f343363ae769998cd7e7506a3f76424fee7d469a929647d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_757d2692c58fb906f343363ae769998cd7e7506a3f76424fee7d469a929647d8->leave($__internal_757d2692c58fb906f343363ae769998cd7e7506a3f76424fee7d469a929647d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
