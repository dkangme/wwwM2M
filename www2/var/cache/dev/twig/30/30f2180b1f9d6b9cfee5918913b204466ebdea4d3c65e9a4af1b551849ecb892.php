<?php

/* :evento:show.html.twig */
class __TwigTemplate_0be07060a14f910e1fca73816b55fd4d72eb7d5892b547a6231a0c0c9c018f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":evento:show.html.twig", 1);
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
        $__internal_df5f0afcf9e140c52a7f690e35489ea2041650bf4fbaf3c9826c220d8e658ac0 = $this->env->getExtension("native_profiler");
        $__internal_df5f0afcf9e140c52a7f690e35489ea2041650bf4fbaf3c9826c220d8e658ac0->enter($__internal_df5f0afcf9e140c52a7f690e35489ea2041650bf4fbaf3c9826c220d8e658ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":evento:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5f0afcf9e140c52a7f690e35489ea2041650bf4fbaf3c9826c220d8e658ac0->leave($__internal_df5f0afcf9e140c52a7f690e35489ea2041650bf4fbaf3c9826c220d8e658ac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eaf32e40942596671f7286989ebc8662796ab50b5c4e8ac219da099c8e5aae6 = $this->env->getExtension("native_profiler");
        $__internal_3eaf32e40942596671f7286989ebc8662796ab50b5c4e8ac219da099c8e5aae6->enter($__internal_3eaf32e40942596671f7286989ebc8662796ab50b5c4e8ac219da099c8e5aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evento</h1>

    <table>
        <tbody>
            <tr>
                <th>Fechaevento</th>
                <td>";
        // line 10
        if ($this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "fechaevento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "fechaevento", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nivelevento</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "nivelevento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idevento</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "idevento", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_evento_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3eaf32e40942596671f7286989ebc8662796ab50b5c4e8ac219da099c8e5aae6->leave($__internal_3eaf32e40942596671f7286989ebc8662796ab50b5c4e8ac219da099c8e5aae6_prof);

    }

    public function getTemplateName()
    {
        return ":evento:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  71 => 22,  64 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Evento</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Fechaevento</th>*/
/*                 <td>{% if evento.fechaevento %}{{ evento.fechaevento|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nivelevento</th>*/
/*                 <td>{{ evento.nivelevento }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ evento.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idevento</th>*/
/*                 <td>{{ evento.idevento }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_evento_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
