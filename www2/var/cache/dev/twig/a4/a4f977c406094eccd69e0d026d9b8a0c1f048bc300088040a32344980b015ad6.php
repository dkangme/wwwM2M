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
        $__internal_74372cb5a90706183bf353ff66aff1d6f813650cfd6836d4cfce9602cd92dfe9 = $this->env->getExtension("native_profiler");
        $__internal_74372cb5a90706183bf353ff66aff1d6f813650cfd6836d4cfce9602cd92dfe9->enter($__internal_74372cb5a90706183bf353ff66aff1d6f813650cfd6836d4cfce9602cd92dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_74372cb5a90706183bf353ff66aff1d6f813650cfd6836d4cfce9602cd92dfe9->leave($__internal_74372cb5a90706183bf353ff66aff1d6f813650cfd6836d4cfce9602cd92dfe9_prof);

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
