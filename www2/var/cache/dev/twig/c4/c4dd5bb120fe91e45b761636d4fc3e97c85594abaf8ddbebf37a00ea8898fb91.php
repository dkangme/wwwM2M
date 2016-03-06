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
        $__internal_537a93ab891d943106e8bfc57e60fbb949b93a2bd71d9bd821fa3acc0d02abcb = $this->env->getExtension("native_profiler");
        $__internal_537a93ab891d943106e8bfc57e60fbb949b93a2bd71d9bd821fa3acc0d02abcb->enter($__internal_537a93ab891d943106e8bfc57e60fbb949b93a2bd71d9bd821fa3acc0d02abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_537a93ab891d943106e8bfc57e60fbb949b93a2bd71d9bd821fa3acc0d02abcb->leave($__internal_537a93ab891d943106e8bfc57e60fbb949b93a2bd71d9bd821fa3acc0d02abcb_prof);

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
