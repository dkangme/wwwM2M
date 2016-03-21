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
        $__internal_c0a6ee914206fdc45920390e1c64be5496fc56672d7454920994b5cad7a5619c = $this->env->getExtension("native_profiler");
        $__internal_c0a6ee914206fdc45920390e1c64be5496fc56672d7454920994b5cad7a5619c->enter($__internal_c0a6ee914206fdc45920390e1c64be5496fc56672d7454920994b5cad7a5619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c0a6ee914206fdc45920390e1c64be5496fc56672d7454920994b5cad7a5619c->leave($__internal_c0a6ee914206fdc45920390e1c64be5496fc56672d7454920994b5cad7a5619c_prof);

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
