<?php

/* sensor/linechart.html.twig */
class __TwigTemplate_04540fcf19d473edb8a6fadd577823d9709949ec015f63ed4e65c8a7e8e8e17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sensor/linechart.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_d7310b045cf08e4f7c78a51a72ad788c84b683e3f22862a241a81b7ea7e7f885 = $this->env->getExtension("native_profiler");
        $__internal_d7310b045cf08e4f7c78a51a72ad788c84b683e3f22862a241a81b7ea7e7f885->enter($__internal_d7310b045cf08e4f7c78a51a72ad788c84b683e3f22862a241a81b7ea7e7f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/linechart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7310b045cf08e4f7c78a51a72ad788c84b683e3f22862a241a81b7ea7e7f885->leave($__internal_d7310b045cf08e4f7c78a51a72ad788c84b683e3f22862a241a81b7ea7e7f885_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b872196b430477487cad01271c6e6c6eb8434d8bfdbbfb056f6c260eab4f503 = $this->env->getExtension("native_profiler");
        $__internal_2b872196b430477487cad01271c6e6c6eb8434d8bfdbbfb056f6c260eab4f503->enter($__internal_2b872196b430477487cad01271c6e6c6eb8434d8bfdbbfb056f6c260eab4f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    <script language=\"javascript\" type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js\">
    </script>

    <!-- Load Google JSAPI -->
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    
    <script type=\"text/javascript\">

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var jsonData = \$.ajax({
                url: \"/admin/sensor/get24/\" + ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "idsensor", array()), "html", null, true);
        echo ",
                dataType: \"json\",
                async: false
            }).responseText;

            //alert(jsonData);

            var data = new google.visualization.DataTable(jsonData);

            //alert(data);

            var options = {
                title: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "weiwei", array()), "description", array()), "html", null, true);
        echo "::";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "description", array()), "html", null, true);
        echo "',
                curveType: 'function',
                legend: { position: 'bottom' },
                hAxis: {
                    title: 'TimeStamp'
                },
                vAxis: {
                    title: '";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "sensortypesensortype", array()), "measurement", array()), "html", null, true);
        echo "'
                },
                height: 450,
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
    }

    </script>

";
        
        $__internal_2b872196b430477487cad01271c6e6c6eb8434d8bfdbbfb056f6c260eab4f503->leave($__internal_2b872196b430477487cad01271c6e6c6eb8434d8bfdbbfb056f6c260eab4f503_prof);

    }

    // line 53
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_2d69fc0b8d3c4f18e1ea54f34278280fc3cfb032bb15d51ca4608713458dfd4b = $this->env->getExtension("native_profiler");
        $__internal_2d69fc0b8d3c4f18e1ea54f34278280fc3cfb032bb15d51ca4608713458dfd4b->enter($__internal_2d69fc0b8d3c4f18e1ea54f34278280fc3cfb032bb15d51ca4608713458dfd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 54
        echo "
<ul class=\"breadcrumb\">
    <li>
        <i class=\"icon-home\"></i>
        <a href=\"/admin/sensor/dashboard\">Home</a> 
    </li>
</ul>

";
        
        $__internal_2d69fc0b8d3c4f18e1ea54f34278280fc3cfb032bb15d51ca4608713458dfd4b->leave($__internal_2d69fc0b8d3c4f18e1ea54f34278280fc3cfb032bb15d51ca4608713458dfd4b_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_850ca4be6aaa4a620d05b9e17d457d7df43ccb7b31fc6ea928782e8c23dfbad4 = $this->env->getExtension("native_profiler");
        $__internal_850ca4be6aaa4a620d05b9e17d457d7df43ccb7b31fc6ea928782e8c23dfbad4->enter($__internal_850ca4be6aaa4a620d05b9e17d457d7df43ccb7b31fc6ea928782e8c23dfbad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
    <h1>";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("Records of the last 24 hours", array(), "messages");
        echo "</h1><br/>

    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_sensor_dashboard");
        echo "\"><i class=\"icon-circle-arrow-left\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to dashboard", array(), "messages");
        echo "</a>

    <div id=\"curve_chart\" style=\"width: 900px; height: 300px\"></div>



";
        
        $__internal_850ca4be6aaa4a620d05b9e17d457d7df43ccb7b31fc6ea928782e8c23dfbad4->leave($__internal_850ca4be6aaa4a620d05b9e17d457d7df43ccb7b31fc6ea928782e8c23dfbad4_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e51940122b7e616ae654783a3d172e56975d01e2a77615c3f81b9f46430b02af = $this->env->getExtension("native_profiler");
        $__internal_e51940122b7e616ae654783a3d172e56975d01e2a77615c3f81b9f46430b02af->enter($__internal_e51940122b7e616ae654783a3d172e56975d01e2a77615c3f81b9f46430b02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sensor.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e51940122b7e616ae654783a3d172e56975d01e2a77615c3f81b9f46430b02af->leave($__internal_e51940122b7e616ae654783a3d172e56975d01e2a77615c3f81b9f46430b02af_prof);

    }

    public function getTemplateName()
    {
        return "sensor/linechart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  165 => 77,  159 => 76,  143 => 68,  138 => 66,  135 => 65,  129 => 64,  114 => 54,  108 => 53,  88 => 39,  76 => 32,  61 => 20,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     <script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js">*/
/*     </script>*/
/* */
/*     <!-- Load Google JSAPI -->*/
/*     <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>*/
/*     */
/*     <script type="text/javascript">*/
/* */
/*         google.charts.load('current', {'packages':['corechart']});*/
/*         google.charts.setOnLoadCallback(drawChart);*/
/* */
/*         function drawChart() {*/
/* */
/*             var jsonData = $.ajax({*/
/*                 url: "/admin/sensor/get24/" + {{ sensor.idsensor }},*/
/*                 dataType: "json",*/
/*                 async: false*/
/*             }).responseText;*/
/* */
/*             //alert(jsonData);*/
/* */
/*             var data = new google.visualization.DataTable(jsonData);*/
/* */
/*             //alert(data);*/
/* */
/*             var options = {*/
/*                 title: '{{sensor.weiwei.description}}::{{sensor.description}}',*/
/*                 curveType: 'function',*/
/*                 legend: { position: 'bottom' },*/
/*                 hAxis: {*/
/*                     title: 'TimeStamp'*/
/*                 },*/
/*                 vAxis: {*/
/*                     title: '{{sensor.sensortypesensortype.measurement}}'*/
/*                 },*/
/*                 height: 450,*/
/*             };*/
/* */
/*             var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));*/
/* */
/*             chart.draw(data, options);*/
/*     }*/
/* */
/*     </script>*/
/* */
/* {% endblock stylesheets %}*/
/* */
/* {% block breadcumb %}*/
/* */
/* <ul class="breadcrumb">*/
/*     <li>*/
/*         <i class="icon-home"></i>*/
/*         <a href="/admin/sensor/dashboard">Home</a> */
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock breadcumb %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>{%trans%}Records of the last 24 hours{%endtrans%}</h1><br/>*/
/* */
/*     <a href="{{ path('admin_sensor_dashboard') }}"><i class="icon-circle-arrow-left"></i> {%trans%}Back to dashboard{%endtrans%}</a>*/
/* */
/*     <div id="curve_chart" style="width: 900px; height: 300px"></div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('js/sensor.js') }}"></script>*/
/* */
/* {% endblock %}*/
