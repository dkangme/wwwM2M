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
        $__internal_cdf88e54e2d7da316b4506fe87dbbee4ff067e8289aafc0fcdac51ec962b54d4 = $this->env->getExtension("native_profiler");
        $__internal_cdf88e54e2d7da316b4506fe87dbbee4ff067e8289aafc0fcdac51ec962b54d4->enter($__internal_cdf88e54e2d7da316b4506fe87dbbee4ff067e8289aafc0fcdac51ec962b54d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cdf88e54e2d7da316b4506fe87dbbee4ff067e8289aafc0fcdac51ec962b54d4->leave($__internal_cdf88e54e2d7da316b4506fe87dbbee4ff067e8289aafc0fcdac51ec962b54d4_prof);

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
