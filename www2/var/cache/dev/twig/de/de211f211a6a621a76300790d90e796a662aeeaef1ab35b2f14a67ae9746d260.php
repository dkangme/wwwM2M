<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7d40d310efd10b113720e885a06c38856b70f5d60d61f8b0402bf4c1b4eca233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e37db4d010eacf040d6a07bbb90e436d05bf033975152e3173263cf64d774e95 = $this->env->getExtension("native_profiler");
        $__internal_e37db4d010eacf040d6a07bbb90e436d05bf033975152e3173263cf64d774e95->enter($__internal_e37db4d010eacf040d6a07bbb90e436d05bf033975152e3173263cf64d774e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e37db4d010eacf040d6a07bbb90e436d05bf033975152e3173263cf64d774e95->leave($__internal_e37db4d010eacf040d6a07bbb90e436d05bf033975152e3173263cf64d774e95_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f6d83b1444494002d1f3531c83382d1dfec56658d88bf7ba7cf4274d8352f6ce = $this->env->getExtension("native_profiler");
        $__internal_f6d83b1444494002d1f3531c83382d1dfec56658d88bf7ba7cf4274d8352f6ce->enter($__internal_f6d83b1444494002d1f3531c83382d1dfec56658d88bf7ba7cf4274d8352f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f6d83b1444494002d1f3531c83382d1dfec56658d88bf7ba7cf4274d8352f6ce->leave($__internal_f6d83b1444494002d1f3531c83382d1dfec56658d88bf7ba7cf4274d8352f6ce_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77330275796939a2b70c4bc4237d8f9fa2b34dea94d93faacfc875fa1a662729 = $this->env->getExtension("native_profiler");
        $__internal_77330275796939a2b70c4bc4237d8f9fa2b34dea94d93faacfc875fa1a662729->enter($__internal_77330275796939a2b70c4bc4237d8f9fa2b34dea94d93faacfc875fa1a662729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77330275796939a2b70c4bc4237d8f9fa2b34dea94d93faacfc875fa1a662729->leave($__internal_77330275796939a2b70c4bc4237d8f9fa2b34dea94d93faacfc875fa1a662729_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bff0f51aef3875557ce64544cd72fc5c2dc442422618b6a65ae2a6d131835172 = $this->env->getExtension("native_profiler");
        $__internal_bff0f51aef3875557ce64544cd72fc5c2dc442422618b6a65ae2a6d131835172->enter($__internal_bff0f51aef3875557ce64544cd72fc5c2dc442422618b6a65ae2a6d131835172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bff0f51aef3875557ce64544cd72fc5c2dc442422618b6a65ae2a6d131835172->leave($__internal_bff0f51aef3875557ce64544cd72fc5c2dc442422618b6a65ae2a6d131835172_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
