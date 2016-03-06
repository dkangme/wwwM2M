<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e83f04a994f2283aa5d2bad359f03e2e3781f9bfad8eb635b1dd122d1756d7e2 extends Twig_Template
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
        $__internal_5d3546e9f79b1b5582e49d723b05f8f153ec48813166e1617a3fa4b89d71c892 = $this->env->getExtension("native_profiler");
        $__internal_5d3546e9f79b1b5582e49d723b05f8f153ec48813166e1617a3fa4b89d71c892->enter($__internal_5d3546e9f79b1b5582e49d723b05f8f153ec48813166e1617a3fa4b89d71c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5d3546e9f79b1b5582e49d723b05f8f153ec48813166e1617a3fa4b89d71c892->leave($__internal_5d3546e9f79b1b5582e49d723b05f8f153ec48813166e1617a3fa4b89d71c892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
