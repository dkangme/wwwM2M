<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1d6cc7c0daa0076f800bca9565aacf1e02bc76f7237608a0bdf6d38e890d7945 extends Twig_Template
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
        $__internal_7198111a66bcb4c8466439c46c0aa35ec14fe51b992d072ba35a596cea558ff5 = $this->env->getExtension("native_profiler");
        $__internal_7198111a66bcb4c8466439c46c0aa35ec14fe51b992d072ba35a596cea558ff5->enter($__internal_7198111a66bcb4c8466439c46c0aa35ec14fe51b992d072ba35a596cea558ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7198111a66bcb4c8466439c46c0aa35ec14fe51b992d072ba35a596cea558ff5->leave($__internal_7198111a66bcb4c8466439c46c0aa35ec14fe51b992d072ba35a596cea558ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
