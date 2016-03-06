<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_941708fc0d5882f601dbe61bfae4b6ad1ce725e25ca9ac964ffd327d3c99a7f5 extends Twig_Template
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
        $__internal_91a34852ff75d4602e1dbbc5407d25c10ba3550fe8e6b9a786a69c36dec1492f = $this->env->getExtension("native_profiler");
        $__internal_91a34852ff75d4602e1dbbc5407d25c10ba3550fe8e6b9a786a69c36dec1492f->enter($__internal_91a34852ff75d4602e1dbbc5407d25c10ba3550fe8e6b9a786a69c36dec1492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_91a34852ff75d4602e1dbbc5407d25c10ba3550fe8e6b9a786a69c36dec1492f->leave($__internal_91a34852ff75d4602e1dbbc5407d25c10ba3550fe8e6b9a786a69c36dec1492f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
