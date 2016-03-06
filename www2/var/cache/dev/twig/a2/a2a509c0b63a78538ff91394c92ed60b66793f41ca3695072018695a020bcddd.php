<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2bf05cc81e7841a6193f69edb633951d42580dd5a0fcb65cdc555ac6aba0a251 extends Twig_Template
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
        $__internal_eb08e079c7583b4d94a52e2242d60bc54972bfd3d6c7b98a923aa57f1121651f = $this->env->getExtension("native_profiler");
        $__internal_eb08e079c7583b4d94a52e2242d60bc54972bfd3d6c7b98a923aa57f1121651f->enter($__internal_eb08e079c7583b4d94a52e2242d60bc54972bfd3d6c7b98a923aa57f1121651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eb08e079c7583b4d94a52e2242d60bc54972bfd3d6c7b98a923aa57f1121651f->leave($__internal_eb08e079c7583b4d94a52e2242d60bc54972bfd3d6c7b98a923aa57f1121651f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
