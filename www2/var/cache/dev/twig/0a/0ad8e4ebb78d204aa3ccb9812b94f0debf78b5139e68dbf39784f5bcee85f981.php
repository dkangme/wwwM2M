<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520b55745c8a8e7cafa385cc56b5d52999aaa4d64316135a4668e52b9c4edc0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2358c8614c2e3e6bd47c6e64a42c453f559ba30772753b750c36db50cec9d958 = $this->env->getExtension("native_profiler");
        $__internal_2358c8614c2e3e6bd47c6e64a42c453f559ba30772753b750c36db50cec9d958->enter($__internal_2358c8614c2e3e6bd47c6e64a42c453f559ba30772753b750c36db50cec9d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2358c8614c2e3e6bd47c6e64a42c453f559ba30772753b750c36db50cec9d958->leave($__internal_2358c8614c2e3e6bd47c6e64a42c453f559ba30772753b750c36db50cec9d958_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb8909430e41c916a8eca3bd811f55c75d03e04a499901f99adc38ccbd8b8384 = $this->env->getExtension("native_profiler");
        $__internal_fb8909430e41c916a8eca3bd811f55c75d03e04a499901f99adc38ccbd8b8384->enter($__internal_fb8909430e41c916a8eca3bd811f55c75d03e04a499901f99adc38ccbd8b8384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fb8909430e41c916a8eca3bd811f55c75d03e04a499901f99adc38ccbd8b8384->leave($__internal_fb8909430e41c916a8eca3bd811f55c75d03e04a499901f99adc38ccbd8b8384_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
