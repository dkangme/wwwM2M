<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3aa7050fb609375ddf559278eb0be031373e72f02240bfc4c5ef1db7b88fc374 extends Twig_Template
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
        $__internal_5d0d55fb18165f2af4ad24e653403c7fd2b382e8f0f8f238cda5a922d85e2e47 = $this->env->getExtension("native_profiler");
        $__internal_5d0d55fb18165f2af4ad24e653403c7fd2b382e8f0f8f238cda5a922d85e2e47->enter($__internal_5d0d55fb18165f2af4ad24e653403c7fd2b382e8f0f8f238cda5a922d85e2e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5d0d55fb18165f2af4ad24e653403c7fd2b382e8f0f8f238cda5a922d85e2e47->leave($__internal_5d0d55fb18165f2af4ad24e653403c7fd2b382e8f0f8f238cda5a922d85e2e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
