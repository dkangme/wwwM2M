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
            'breadcumb' => array($this, 'block_breadcumb'),
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
        $__internal_ad53b7118090a79bed0b1d9e29f6b51e8b6a2ee21093ce7545333b9bb9d77669 = $this->env->getExtension("native_profiler");
        $__internal_ad53b7118090a79bed0b1d9e29f6b51e8b6a2ee21093ce7545333b9bb9d77669->enter($__internal_ad53b7118090a79bed0b1d9e29f6b51e8b6a2ee21093ce7545333b9bb9d77669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad53b7118090a79bed0b1d9e29f6b51e8b6a2ee21093ce7545333b9bb9d77669->leave($__internal_ad53b7118090a79bed0b1d9e29f6b51e8b6a2ee21093ce7545333b9bb9d77669_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_6732a6ba8830b78d7abff2277eb316fa9211e4a3e85127b2021ba73214a0a3bc = $this->env->getExtension("native_profiler");
        $__internal_6732a6ba8830b78d7abff2277eb316fa9211e4a3e85127b2021ba73214a0a3bc->enter($__internal_6732a6ba8830b78d7abff2277eb316fa9211e4a3e85127b2021ba73214a0a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/admin/dashboard\">Home</a> 
    </li>
    <li><a href=\"/admin/evento\">";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Event", array(), "messages");
        echo "</a></li>
</ul>

";
        
        $__internal_6732a6ba8830b78d7abff2277eb316fa9211e4a3e85127b2021ba73214a0a3bc->leave($__internal_6732a6ba8830b78d7abff2277eb316fa9211e4a3e85127b2021ba73214a0a3bc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef08c480383aebc8b6de9b3df00ea12fb45e26e4d159526922029aab1e4d34a = $this->env->getExtension("native_profiler");
        $__internal_cef08c480383aebc8b6de9b3df00ea12fb45e26e4d159526922029aab1e4d34a->enter($__internal_cef08c480383aebc8b6de9b3df00ea12fb45e26e4d159526922029aab1e4d34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Event List", array(), "messages");
        echo "</h1><br/>
    <div ng-app=\"angularTable\">

        <div ng-controller=\"listdata\"> 
            <form class=\"form-inline\">
                <div class=\"form-group\">
                    <label >";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search", array(), "messages");
        echo "</label>
                    <input type=\"text\" ng-model=\"search\" autofocus=\"autofocus\" class=\"form-control\" placeholder=\"";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Type text to search", array(), "messages");
        echo "\">
                    </div>
            </form><br/>
            <p style=\"color:blue\">";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Click on the title of the column \"Time Stamp\" or \"Level\" to sort the contents of the column.", array(), "messages");
        echo "</p>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th width=\"20%\" ng-click=\"sort('fechaevento')\">";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time Stamp", array(), "messages");
        // line 31
        echo "                            <span class=\"glyphicon sort-icon\" ng-show=\"sortKey=='fechaevento'\" ng-class=\"{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}\"></span>
                        </th>
                        <th width=\"20%\" ng-click=\"sort('nivelevento')\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 34
        echo "                            <span class=\"glyphicon sort-icon\" ng-show=\"sortKey=='nivelevento'\" ng-class=\"{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}\"></span>
                        </th>
                        <th width=\"60%\">";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Event", array(), "messages");
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate=\"evento in eventos|orderBy:sortKey:reverse|filter:search|itemsPerPage:10\">
                        <td>";
        // line 41
        echo "{{evento.fechaevento.date}}";
        echo "</td>
                        <td>";
        // line 42
        echo "{{evento.nivelevento}}";
        echo "</td>
                        <td>";
        // line 43
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
        
        $__internal_cef08c480383aebc8b6de9b3df00ea12fb45e26e4d159526922029aab1e4d34a->leave($__internal_cef08c480383aebc8b6de9b3df00ea12fb45e26e4d159526922029aab1e4d34a_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbe1a8f00cb5b518d451862cca48e6c5e29e4b5c26f63e6c035a7ff3a9b8d664 = $this->env->getExtension("native_profiler");
        $__internal_fbe1a8f00cb5b518d451862cca48e6c5e29e4b5c26f63e6c035a7ff3a9b8d664->enter($__internal_fbe1a8f00cb5b518d451862cca48e6c5e29e4b5c26f63e6c035a7ff3a9b8d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/event.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/dirPagination.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_fbe1a8f00cb5b518d451862cca48e6c5e29e4b5c26f63e6c035a7ff3a9b8d664->leave($__internal_fbe1a8f00cb5b518d451862cca48e6c5e29e4b5c26f63e6c035a7ff3a9b8d664_prof);

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
        return array (  155 => 60,  151 => 59,  148 => 58,  142 => 57,  122 => 43,  118 => 42,  114 => 41,  106 => 36,  102 => 34,  100 => 33,  96 => 31,  94 => 30,  87 => 26,  81 => 23,  77 => 22,  67 => 16,  61 => 15,  50 => 10,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="/admin/dashboard">Home</a> */
/*     </li>*/
/*     <li><a href="/admin/evento">{%trans%}Event{%endtrans%}</a></li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
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
/*             <p style="color:blue">{%trans%}Click on the title of the column "Time Stamp" or "Level" to sort the contents of the column.{%endtrans%}</p>*/
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
