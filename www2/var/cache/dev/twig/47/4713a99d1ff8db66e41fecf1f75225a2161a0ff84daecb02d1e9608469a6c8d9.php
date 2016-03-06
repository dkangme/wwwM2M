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
        $__internal_4c91243c09c6a3537004f49e0d2c3eb75d9defc278e804f5af5af82a1cb5f775 = $this->env->getExtension("native_profiler");
        $__internal_4c91243c09c6a3537004f49e0d2c3eb75d9defc278e804f5af5af82a1cb5f775->enter($__internal_4c91243c09c6a3537004f49e0d2c3eb75d9defc278e804f5af5af82a1cb5f775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4c91243c09c6a3537004f49e0d2c3eb75d9defc278e804f5af5af82a1cb5f775->leave($__internal_4c91243c09c6a3537004f49e0d2c3eb75d9defc278e804f5af5af82a1cb5f775_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d900320fb98fd4a6b29942cdbd484135c26ebfb4ea3f733a36bef2782c8db47a = $this->env->getExtension("native_profiler");
        $__internal_d900320fb98fd4a6b29942cdbd484135c26ebfb4ea3f733a36bef2782c8db47a->enter($__internal_d900320fb98fd4a6b29942cdbd484135c26ebfb4ea3f733a36bef2782c8db47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d900320fb98fd4a6b29942cdbd484135c26ebfb4ea3f733a36bef2782c8db47a->leave($__internal_d900320fb98fd4a6b29942cdbd484135c26ebfb4ea3f733a36bef2782c8db47a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f292a412b2bbd0726e23b285b67b9d7519c81a36ed1c30eb4d00375bbc8bb834 = $this->env->getExtension("native_profiler");
        $__internal_f292a412b2bbd0726e23b285b67b9d7519c81a36ed1c30eb4d00375bbc8bb834->enter($__internal_f292a412b2bbd0726e23b285b67b9d7519c81a36ed1c30eb4d00375bbc8bb834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f292a412b2bbd0726e23b285b67b9d7519c81a36ed1c30eb4d00375bbc8bb834->leave($__internal_f292a412b2bbd0726e23b285b67b9d7519c81a36ed1c30eb4d00375bbc8bb834_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d629b05377b342c9725b3c437cb12b7b084ccee2c8dace2e4c141613f85cf871 = $this->env->getExtension("native_profiler");
        $__internal_d629b05377b342c9725b3c437cb12b7b084ccee2c8dace2e4c141613f85cf871->enter($__internal_d629b05377b342c9725b3c437cb12b7b084ccee2c8dace2e4c141613f85cf871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d629b05377b342c9725b3c437cb12b7b084ccee2c8dace2e4c141613f85cf871->leave($__internal_d629b05377b342c9725b3c437cb12b7b084ccee2c8dace2e4c141613f85cf871_prof);

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
