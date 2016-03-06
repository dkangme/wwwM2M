<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8813db53fbc311843a06c6920529b8a36d3e43065991538168ff98fc0e9549d4 extends Twig_Template
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
        $__internal_505fa3b05c04ba87b38d8be0efba72a2581f5a7ae6efb57f46b46bd35ec1782c = $this->env->getExtension("native_profiler");
        $__internal_505fa3b05c04ba87b38d8be0efba72a2581f5a7ae6efb57f46b46bd35ec1782c->enter($__internal_505fa3b05c04ba87b38d8be0efba72a2581f5a7ae6efb57f46b46bd35ec1782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_505fa3b05c04ba87b38d8be0efba72a2581f5a7ae6efb57f46b46bd35ec1782c->leave($__internal_505fa3b05c04ba87b38d8be0efba72a2581f5a7ae6efb57f46b46bd35ec1782c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
