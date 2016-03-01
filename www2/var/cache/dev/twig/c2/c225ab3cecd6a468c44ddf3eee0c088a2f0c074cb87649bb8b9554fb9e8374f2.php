<?php

/* evento/index.html.twig */
class __TwigTemplate_31ddf4ab1668ca09dfb4845ca92f6ffb5b486e90275752319e800ef5021c26d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evento/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32beaae29559c0ae0176f88df426d8210cb13c116ec0dc6496d15834425f5084 = $this->env->getExtension("native_profiler");
        $__internal_32beaae29559c0ae0176f88df426d8210cb13c116ec0dc6496d15834425f5084->enter($__internal_32beaae29559c0ae0176f88df426d8210cb13c116ec0dc6496d15834425f5084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32beaae29559c0ae0176f88df426d8210cb13c116ec0dc6496d15834425f5084->leave($__internal_32beaae29559c0ae0176f88df426d8210cb13c116ec0dc6496d15834425f5084_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b61d4740a14cd71d5157ba4fb734d68c92ed3cfe6a639f89ad9c7b8407219753 = $this->env->getExtension("native_profiler");
        $__internal_b61d4740a14cd71d5157ba4fb734d68c92ed3cfe6a639f89ad9c7b8407219753->enter($__internal_b61d4740a14cd71d5157ba4fb734d68c92ed3cfe6a639f89ad9c7b8407219753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Event List", array(), "messages");
        echo "</h1><br/>
    <div ng-app=\"angularTable\">

        <div ng-controller=\"listdata\"> 
            <form class=\"form-inline\">
                <div class=\"form-group\">
                    <label >";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search", array(), "messages");
        echo "</label>
                    <input type=\"text\" ng-model=\"search\" autofocus=\"autofocus\" class=\"form-control\" placeholder=\"";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Type text to search", array(), "messages");
        echo "\">
                    </div>
            </form><br/>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th width=\"20%\" ng-click=\"sort('fechaevento')\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time Stamp", array(), "messages");
        // line 18
        echo "                            <span class=\"glyphicon sort-icon\" ng-show=\"sortKey=='fechaevento'\" ng-class=\"{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}\"></span>
                        </th>
                        <th width=\"20%\" ng-click=\"sort('nivelevento')\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 21
        echo "                            <span class=\"glyphicon sort-icon\" ng-show=\"sortKey=='nivelevento'\" ng-class=\"{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}\"></span>
                        </th>
                        <th width=\"60%\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Event", array(), "messages");
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate=\"evento in eventos|orderBy:sortKey:reverse|filter:search|itemsPerPage:10\">
                        <td>";
        // line 28
        echo "{{evento.fechaevento.date}}";
        echo "</td>
                        <td>";
        // line 29
        echo "{{evento.nivelevento}}";
        echo "</td>
                        <td>";
        // line 30
        echo "{{evento.descripcion}}";
        echo "</td>
                    </tr>
                </tbody>
            </table> 

            <dir-pagination-controls
                max-size=\"10\"
                direction-links=\"true\"
                boundary-links=\"true\" >
            </dir-pagination-controls>
        </div>
    </div>
";
        
        $__internal_b61d4740a14cd71d5157ba4fb734d68c92ed3cfe6a639f89ad9c7b8407219753->leave($__internal_b61d4740a14cd71d5157ba4fb734d68c92ed3cfe6a639f89ad9c7b8407219753_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49cee3587fe0c71855a8f81c7f5ff95d32d03387be49086cea95ca327a10b1f3 = $this->env->getExtension("native_profiler");
        $__internal_49cee3587fe0c71855a8f81c7f5ff95d32d03387be49086cea95ca327a10b1f3->enter($__internal_49cee3587fe0c71855a8f81c7f5ff95d32d03387be49086cea95ca327a10b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/event.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dirPagination.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_49cee3587fe0c71855a8f81c7f5ff95d32d03387be49086cea95ca327a10b1f3->leave($__internal_49cee3587fe0c71855a8f81c7f5ff95d32d03387be49086cea95ca327a10b1f3_prof);

    }

    public function getTemplateName()
    {
        return "evento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  121 => 46,  118 => 45,  112 => 44,  92 => 30,  88 => 29,  84 => 28,  76 => 23,  72 => 21,  70 => 20,  66 => 18,  64 => 17,  55 => 11,  51 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{%trans%}Event List{%endtrans%}</h1><br/>*/
/*     <div ng-app="angularTable">*/
/* */
/*         <div ng-controller="listdata"> */
/*             <form class="form-inline">*/
/*                 <div class="form-group">*/
/*                     <label >{%trans%}Search{%endtrans%}</label>*/
/*                     <input type="text" ng-model="search" autofocus="autofocus" class="form-control" placeholder="{%trans%}Type text to search{%endtrans%}">*/
/*                     </div>*/
/*             </form><br/>*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="20%" ng-click="sort('fechaevento')">{%trans%}Time Stamp{%endtrans%}*/
/*                             <span class="glyphicon sort-icon" ng-show="sortKey=='fechaevento'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>*/
/*                         </th>*/
/*                         <th width="20%" ng-click="sort('nivelevento')">{%trans%}Level{%endtrans%}*/
/*                             <span class="glyphicon sort-icon" ng-show="sortKey=='nivelevento'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>*/
/*                         </th>*/
/*                         <th width="60%">{%trans%}Event{%endtrans%}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr dir-paginate="evento in eventos|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">*/
/*                         <td>{{ '{{evento.fechaevento.date}}' }}</td>*/
/*                         <td>{{ '{{evento.nivelevento}}' }}</td>*/
/*                         <td>{{ '{{evento.descripcion}}' }}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table> */
/* */
/*             <dir-pagination-controls*/
/*                 max-size="10"*/
/*                 direction-links="true"*/
/*                 boundary-links="true" >*/
/*             </dir-pagination-controls>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('js/event.js') }}"></script>*/
/*     <script src="{{ asset('js/dirPagination.js') }}"></script>*/
/* */
/* {% endblock %}*/
