<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_22f2fb00ae2d6008a7c121fee6f454335546e205aac490f7df269445448ac1b2 extends Twig_Template
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
        $__internal_300f4a060d0e1b1d3c02b2d35be51c329232f53e2e11775dfa4e90f39d1ae433 = $this->env->getExtension("native_profiler");
        $__internal_300f4a060d0e1b1d3c02b2d35be51c329232f53e2e11775dfa4e90f39d1ae433->enter($__internal_300f4a060d0e1b1d3c02b2d35be51c329232f53e2e11775dfa4e90f39d1ae433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_300f4a060d0e1b1d3c02b2d35be51c329232f53e2e11775dfa4e90f39d1ae433->leave($__internal_300f4a060d0e1b1d3c02b2d35be51c329232f53e2e11775dfa4e90f39d1ae433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
