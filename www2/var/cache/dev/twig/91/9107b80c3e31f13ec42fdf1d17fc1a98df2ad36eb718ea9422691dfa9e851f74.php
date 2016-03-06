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
        $__internal_1b88395a3c79177d6fddc3ab488106aaa5009b1ec00a4a8f27692b1ba3e4d5f0 = $this->env->getExtension("native_profiler");
        $__internal_1b88395a3c79177d6fddc3ab488106aaa5009b1ec00a4a8f27692b1ba3e4d5f0->enter($__internal_1b88395a3c79177d6fddc3ab488106aaa5009b1ec00a4a8f27692b1ba3e4d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b88395a3c79177d6fddc3ab488106aaa5009b1ec00a4a8f27692b1ba3e4d5f0->leave($__internal_1b88395a3c79177d6fddc3ab488106aaa5009b1ec00a4a8f27692b1ba3e4d5f0_prof);

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
