<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d7cd478321e7ac9375aabbcda02e4270e91b99358887b733bd23a192737cdfaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::msa.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::msa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4537156ef06cde7859edebddad25b376caf5e7880d323327ecd8e17705ebbcf8 = $this->env->getExtension("native_profiler");
        $__internal_4537156ef06cde7859edebddad25b376caf5e7880d323327ecd8e17705ebbcf8->enter($__internal_4537156ef06cde7859edebddad25b376caf5e7880d323327ecd8e17705ebbcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4537156ef06cde7859edebddad25b376caf5e7880d323327ecd8e17705ebbcf8->leave($__internal_4537156ef06cde7859edebddad25b376caf5e7880d323327ecd8e17705ebbcf8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb4640893d96073e5a26b330495e3c2a9ca1ee44aa5bd1a2eabb11e5ac8f45eb = $this->env->getExtension("native_profiler");
        $__internal_bb4640893d96073e5a26b330495e3c2a9ca1ee44aa5bd1a2eabb11e5ac8f45eb->enter($__internal_bb4640893d96073e5a26b330495e3c2a9ca1ee44aa5bd1a2eabb11e5ac8f45eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"form-signin alert alert-danger\"><strong>Error:</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo " </div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">Usuario: </label>
    <input class=\"form-control focusedInput\" autofocus=\"autofocus\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Clave: </label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
    <br/>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Entrar\" />
</form>
";
        
        $__internal_bb4640893d96073e5a26b330495e3c2a9ca1ee44aa5bd1a2eabb11e5ac8f45eb->leave($__internal_bb4640893d96073e5a26b330495e3c2a9ca1ee44aa5bd1a2eabb11e5ac8f45eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::msa.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div class="form-signin alert alert-danger"><strong>Error:</strong>{{ error.messageKey|trans(error.messageData, 'security') }} </div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="form">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">Usuario: </label>*/
/*     <input class="form-control focusedInput" autofocus="autofocus" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">Clave: </label>*/
/*     <input type="password" id="password" name="_password" required="required" class="form-control" />*/
/*     <br/>*/
/*     <input type="submit" id="_submit" name="_submit" value="Entrar" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
