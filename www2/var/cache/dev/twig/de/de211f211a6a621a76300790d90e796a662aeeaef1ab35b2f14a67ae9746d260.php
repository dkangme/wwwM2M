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
        $__internal_cb0c59a2b70eff54400b50a3aac7c3d0b745ce9ec0d2db19bd85549374deacb0 = $this->env->getExtension("native_profiler");
        $__internal_cb0c59a2b70eff54400b50a3aac7c3d0b745ce9ec0d2db19bd85549374deacb0->enter($__internal_cb0c59a2b70eff54400b50a3aac7c3d0b745ce9ec0d2db19bd85549374deacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cb0c59a2b70eff54400b50a3aac7c3d0b745ce9ec0d2db19bd85549374deacb0->leave($__internal_cb0c59a2b70eff54400b50a3aac7c3d0b745ce9ec0d2db19bd85549374deacb0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_879998799b3f67270206ee1334a1f93995e1d1f00685e817b9d45f4d4e8e7f53 = $this->env->getExtension("native_profiler");
        $__internal_879998799b3f67270206ee1334a1f93995e1d1f00685e817b9d45f4d4e8e7f53->enter($__internal_879998799b3f67270206ee1334a1f93995e1d1f00685e817b9d45f4d4e8e7f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_879998799b3f67270206ee1334a1f93995e1d1f00685e817b9d45f4d4e8e7f53->leave($__internal_879998799b3f67270206ee1334a1f93995e1d1f00685e817b9d45f4d4e8e7f53_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abf8359eee1cb7f21bceb6b62e1a375ccf9fe402953b9e3f6b935b0a1bd2ceb5 = $this->env->getExtension("native_profiler");
        $__internal_abf8359eee1cb7f21bceb6b62e1a375ccf9fe402953b9e3f6b935b0a1bd2ceb5->enter($__internal_abf8359eee1cb7f21bceb6b62e1a375ccf9fe402953b9e3f6b935b0a1bd2ceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abf8359eee1cb7f21bceb6b62e1a375ccf9fe402953b9e3f6b935b0a1bd2ceb5->leave($__internal_abf8359eee1cb7f21bceb6b62e1a375ccf9fe402953b9e3f6b935b0a1bd2ceb5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a7ab24f3cba39fc0e08ab5e23df12ca54ace218f5cb08fe80bc41d739f4f1d8 = $this->env->getExtension("native_profiler");
        $__internal_4a7ab24f3cba39fc0e08ab5e23df12ca54ace218f5cb08fe80bc41d739f4f1d8->enter($__internal_4a7ab24f3cba39fc0e08ab5e23df12ca54ace218f5cb08fe80bc41d739f4f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4a7ab24f3cba39fc0e08ab5e23df12ca54ace218f5cb08fe80bc41d739f4f1d8->leave($__internal_4a7ab24f3cba39fc0e08ab5e23df12ca54ace218f5cb08fe80bc41d739f4f1d8_prof);

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
