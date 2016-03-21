<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ec0fc2ecf16d9ce2dd6dc33fe8c42e35e8a4edc68940862b0bfe490ac7cd6cc5 extends Twig_Template
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
        $__internal_c6557a78064ab8fc2e07f953c735659c67eef702f70a5dbd2657b120036c62c2 = $this->env->getExtension("native_profiler");
        $__internal_c6557a78064ab8fc2e07f953c735659c67eef702f70a5dbd2657b120036c62c2->enter($__internal_c6557a78064ab8fc2e07f953c735659c67eef702f70a5dbd2657b120036c62c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6557a78064ab8fc2e07f953c735659c67eef702f70a5dbd2657b120036c62c2->leave($__internal_c6557a78064ab8fc2e07f953c735659c67eef702f70a5dbd2657b120036c62c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_13a12b21945f0993584867ac2ef3bfac3a837dc6cf22e912e45a645debf1ebee = $this->env->getExtension("native_profiler");
        $__internal_13a12b21945f0993584867ac2ef3bfac3a837dc6cf22e912e45a645debf1ebee->enter($__internal_13a12b21945f0993584867ac2ef3bfac3a837dc6cf22e912e45a645debf1ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13a12b21945f0993584867ac2ef3bfac3a837dc6cf22e912e45a645debf1ebee->leave($__internal_13a12b21945f0993584867ac2ef3bfac3a837dc6cf22e912e45a645debf1ebee_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9044452304a9d034d6e70d49df19172ac38b0af57adb82fdbb24c200eba32132 = $this->env->getExtension("native_profiler");
        $__internal_9044452304a9d034d6e70d49df19172ac38b0af57adb82fdbb24c200eba32132->enter($__internal_9044452304a9d034d6e70d49df19172ac38b0af57adb82fdbb24c200eba32132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9044452304a9d034d6e70d49df19172ac38b0af57adb82fdbb24c200eba32132->leave($__internal_9044452304a9d034d6e70d49df19172ac38b0af57adb82fdbb24c200eba32132_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b1301f0f62829dfa062dabbfcf8b0014276c1ac44201e928f4c0292280d76af1 = $this->env->getExtension("native_profiler");
        $__internal_b1301f0f62829dfa062dabbfcf8b0014276c1ac44201e928f4c0292280d76af1->enter($__internal_b1301f0f62829dfa062dabbfcf8b0014276c1ac44201e928f4c0292280d76af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1301f0f62829dfa062dabbfcf8b0014276c1ac44201e928f4c0292280d76af1->leave($__internal_b1301f0f62829dfa062dabbfcf8b0014276c1ac44201e928f4c0292280d76af1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
