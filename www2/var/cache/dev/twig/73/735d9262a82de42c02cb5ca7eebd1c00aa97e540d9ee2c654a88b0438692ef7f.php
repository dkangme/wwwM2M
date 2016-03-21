<?php

/* notificationlist/index.html.twig */
class __TwigTemplate_7a7938a3078793d0cc6f87c5f895666e5824846bb0bc6c2637f46c2af761c93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notificationlist/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d3f97da2667afc27d9edeacd6e010030467769859d861d70ff643bc997af2c6 = $this->env->getExtension("native_profiler");
        $__internal_4d3f97da2667afc27d9edeacd6e010030467769859d861d70ff643bc997af2c6->enter($__internal_4d3f97da2667afc27d9edeacd6e010030467769859d861d70ff643bc997af2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notificationlist/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3f97da2667afc27d9edeacd6e010030467769859d861d70ff643bc997af2c6->leave($__internal_4d3f97da2667afc27d9edeacd6e010030467769859d861d70ff643bc997af2c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bbbd8f80637149f03e2dc297e0cf796ddf64d98cdeaacccf341bf94a4d39f61 = $this->env->getExtension("native_profiler");
        $__internal_9bbbd8f80637149f03e2dc297e0cf796ddf64d98cdeaacccf341bf94a4d39f61->enter($__internal_9bbbd8f80637149f03e2dc297e0cf796ddf64d98cdeaacccf341bf94a4d39f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notificationlist list</h1>

    <table class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Name</th>
                <th>List</th>
                <th>Idnotificationlist</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationlists"]) ? $context["notificationlists"] : $this->getContext($context, "notificationlists")));
        foreach ($context['_seq'] as $context["_key"] => $context["notificationlist"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_notificationlist_show", array("id" => $this->getAttribute($context["notificationlist"], "idnotificationlist", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificationlist"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificationlist"], "list", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificationlist"], "idnotificationlist", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_notificationlist_show", array("id" => $this->getAttribute($context["notificationlist"], "idnotificationlist", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_notificationlist_edit", array("id" => $this->getAttribute($context["notificationlist"], "idnotificationlist", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_notificationlist_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9bbbd8f80637149f03e2dc297e0cf796ddf64d98cdeaacccf341bf94a4d39f61->leave($__internal_9bbbd8f80637149f03e2dc297e0cf796ddf64d98cdeaacccf341bf94a4d39f61_prof);

    }

    public function getTemplateName()
    {
        return "notificationlist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notificationlist list</h1>*/
/* */
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>List</th>*/
/*                 <th>Idnotificationlist</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for notificationlist in notificationlists %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_notificationlist_show', { 'id': notificationlist.idnotificationlist }) }}">{{ notificationlist.name }}</a></td>*/
/*                 <td>{{ notificationlist.list }}</td>*/
/*                 <td>{{ notificationlist.idnotificationlist }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_notificationlist_show', { 'id': notificationlist.idnotificationlist }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_notificationlist_edit', { 'id': notificationlist.idnotificationlist }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_notificationlist_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
