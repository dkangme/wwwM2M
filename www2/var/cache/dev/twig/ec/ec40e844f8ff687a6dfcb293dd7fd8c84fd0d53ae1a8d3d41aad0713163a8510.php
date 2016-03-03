<?php

/* base.html.twig */
class __TwigTemplate_94622cb2ec32a1d6e66c2fbeea4699a9c69d992af5716b8f42bd094b835107b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcumb' => array($this, 'block_breadcumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dbe57eea40c245b804713915529ecded959067bc20d12cb3f9b56d5a63ec7e9 = $this->env->getExtension("native_profiler");
        $__internal_7dbe57eea40c245b804713915529ecded959067bc20d12cb3f9b56d5a63ec7e9->enter($__internal_7dbe57eea40c245b804713915529ecded959067bc20d12cb3f9b56d5a63ec7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <!-- start: Meta -->
    <meta charset=\"utf-8\">
    <title>..:: MSA Safety - Chile ::..</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
    <meta name=\"author\" content=\"Dennis Kangme\">
    <meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id=\"bootstrap-style\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"base-style-responsive\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <link id=\"ie-style\" href=\"css/ie.css\" rel=\"stylesheet\">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id=\"ie9style\" href=\"css/ie9.css\" rel=\"stylesheet\">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- end: Favicon -->

    ";
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "        
    </head>
    <body>

        <!-- start: Header -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-inner\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"http://www.msasafety.cl\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; max-eight: auto; margin-top: -11px;\"/></a>
                </div>
                            
                <!-- start: Header Menu -->
                <div class=\"nav-no-collapse header-nav\">
                    <ul class=\"nav pull-right\">
                        <!-- start: User Dropdown -->
                        <li class=\"dropdown\">
                            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"halflings-icon white user\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown-menu-title\">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href=\"/profile\"><i class=\"halflings-icon user\"></i> Profile</a></li>
                                <li><a href=\"/logout\"><i class=\"halflings-icon off\"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
                    
                </div>
            </div>
        </nav>

        <!-- start: Header -->
        <div class=\"container-fluid-full\">
            <div class=\"row-fluid\">     
                <!-- start: Main Menu -->
                <div id=\"sidebar-left\" class=\"span2\">
                    <div class=\"nav-collapse sidebar-nav\">
                        <ul class=\"nav nav-tabs nav-stacked main-menu\">
                            <li><a href=\"index.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> ";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</span></a></li>   
                            <li><a href=\"/admin/evento\"><i class=\"icon-exclamation-sign\"></i><span class=\"hidden-tablet\"> ";
        // line 92
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events", array(), "messages");
        echo "</span></a></li>
                            <li><a href=\"messages.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reports", array(), "messages");
        echo "</span></a></li>
                            
                            <li>
                                <a class=\"dropmenu\" href=\"#\"><i class=\"icon-cogs\"></i><span class=\"hidden-tablet\"> ";
        // line 96
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration", array(), "messages");
        echo "</span></a>
                                <ul>
                                    <li><a href=\"ui.html\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> ";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/customer\"><i class=\"icon-group\"></i><span class=\"hidden-tablet\"> ";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("Customers", array(), "messages");
        echo "</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/wei\"><i class=\"icon-rss\"></i><span class=\"hidden-tablet\"> MODWEI</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/sensor\"><i class=\"icon-stethoscope\"></i><span class=\"hidden-tablet\"> ";
        // line 101
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sensors", array(), "messages");
        echo "</span></a></li>

                                    <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-bullhorn\"></i><span class=\"hidden-tablet\"> ";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("Set Alarms", array(), "messages");
        echo "</span></a></li>
                                </ul>   
                            </li>
                            <li><a href=\"login.html\"><i class=\"icon-signout\"></i><span class=\"hidden-tablet\"> ";
        // line 106
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->
                
                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>
                
                <!-- start: Content -->
                <div id=\"content\" class=\"span10\">

                    ";
        // line 122
        $this->displayBlock('breadcumb', $context, $blocks);
        // line 123
        echo "
                    ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
                
                </div><!--/.fluid-container-->
        
            <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class=\"modal hide fade\" id=\"myModal\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                <h3>Settings</h3>
            </div>
            <div class=\"modal-body\">
                <p>Here settings can be configured...</p>
            </div>
            <div class=\"modal-footer\">
                <a href=\"#\" class=\"btn\" data-dihttps://github.com/aterrien/jQuery-Knob.gitsmiss=\"modal\">Close</a>
                <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
            </div>
        </div>
        
        <div class=\"clearfix\"></div>
        
        <footer>

            <p>
                <span style=\"text-align:left;float:left\"><small>&copy; 2016 <a href=\"http://www.k-group.cl\" alt=\"K-Group M2M Dashboard\">K-Group M2M Dashboard</a></small></span>
                
            </p>
        </footer>

        <!-- start: JavaScript-->

        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/counter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/retina.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js\"></script>
        
        <!-- end: JavaScript-->
        
        ";
        // line 193
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "
    </body>
</html>
";
        
        $__internal_7dbe57eea40c245b804713915529ecded959067bc20d12cb3f9b56d5a63ec7e9->leave($__internal_7dbe57eea40c245b804713915529ecded959067bc20d12cb3f9b56d5a63ec7e9_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac883192dbca3f82b2db66beb86cf1aaea18d3cd39198ef412fc48d229045ea6 = $this->env->getExtension("native_profiler");
        $__internal_ac883192dbca3f82b2db66beb86cf1aaea18d3cd39198ef412fc48d229045ea6->enter($__internal_ac883192dbca3f82b2db66beb86cf1aaea18d3cd39198ef412fc48d229045ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac883192dbca3f82b2db66beb86cf1aaea18d3cd39198ef412fc48d229045ea6->leave($__internal_ac883192dbca3f82b2db66beb86cf1aaea18d3cd39198ef412fc48d229045ea6_prof);

    }

    // line 122
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_35afec47a712df3d8ed4015f37bc54d3262434352a926b4da6794239edcc33f6 = $this->env->getExtension("native_profiler");
        $__internal_35afec47a712df3d8ed4015f37bc54d3262434352a926b4da6794239edcc33f6->enter($__internal_35afec47a712df3d8ed4015f37bc54d3262434352a926b4da6794239edcc33f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        
        $__internal_35afec47a712df3d8ed4015f37bc54d3262434352a926b4da6794239edcc33f6->leave($__internal_35afec47a712df3d8ed4015f37bc54d3262434352a926b4da6794239edcc33f6_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dd1280bf93de7194ccafc36b58d2d077a90270bad66956f7e3d27dde67d4037 = $this->env->getExtension("native_profiler");
        $__internal_9dd1280bf93de7194ccafc36b58d2d077a90270bad66956f7e3d27dde67d4037->enter($__internal_9dd1280bf93de7194ccafc36b58d2d077a90270bad66956f7e3d27dde67d4037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dd1280bf93de7194ccafc36b58d2d077a90270bad66956f7e3d27dde67d4037->leave($__internal_9dd1280bf93de7194ccafc36b58d2d077a90270bad66956f7e3d27dde67d4037_prof);

    }

    // line 193
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_293c954e747ce6cc0bfd3708bcf13e205d7874dbbf1f49b7b26fe1da0fb9baf1 = $this->env->getExtension("native_profiler");
        $__internal_293c954e747ce6cc0bfd3708bcf13e205d7874dbbf1f49b7b26fe1da0fb9baf1->enter($__internal_293c954e747ce6cc0bfd3708bcf13e205d7874dbbf1f49b7b26fe1da0fb9baf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_293c954e747ce6cc0bfd3708bcf13e205d7874dbbf1f49b7b26fe1da0fb9baf1->leave($__internal_293c954e747ce6cc0bfd3708bcf13e205d7874dbbf1f49b7b26fe1da0fb9baf1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 193,  401 => 124,  390 => 122,  379 => 39,  369 => 194,  367 => 193,  359 => 188,  355 => 187,  351 => 186,  347 => 185,  343 => 184,  339 => 183,  335 => 182,  331 => 181,  327 => 180,  323 => 179,  319 => 178,  315 => 177,  311 => 176,  307 => 175,  303 => 174,  299 => 173,  295 => 172,  291 => 171,  287 => 170,  283 => 169,  279 => 168,  275 => 167,  271 => 166,  267 => 165,  263 => 164,  259 => 163,  255 => 162,  251 => 161,  247 => 160,  243 => 159,  207 => 125,  205 => 124,  202 => 123,  200 => 122,  181 => 106,  175 => 103,  170 => 101,  165 => 99,  161 => 98,  156 => 96,  150 => 93,  146 => 92,  142 => 91,  112 => 64,  100 => 55,  83 => 40,  81 => 39,  75 => 36,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*     <!-- start: Meta -->*/
/*     <meta charset="utf-8">*/
/*     <title>..:: MSA Safety - Chile ::..</title>*/
/*     <meta name="description" content="Bootstrap Metro Dashboard">*/
/*     <meta name="author" content="Dennis Kangme">*/
/*     <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">*/
/*     <!-- end: Meta -->*/
/*     */
/*     <!-- start: Mobile Specific -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- end: Mobile Specific -->*/
/*     */
/*     <!-- start: CSS -->*/
/*     <link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">*/
/*     <link id="base-style" href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     <link id="base-style-responsive" href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>*/
/*     <!-- end: CSS -->*/
/*     */
/* */
/*     <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <link id="ie-style" href="css/ie.css" rel="stylesheet">*/
/*     <![endif]-->*/
/*     */
/*     <!--[if IE 9]>*/
/*         <link id="ie9style" href="css/ie9.css" rel="stylesheet">*/
/*     <![endif]-->*/
/*         */
/*     <!-- start: Favicon -->*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <!-- end: Favicon -->*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*         */
/*     </head>*/
/*     <body>*/
/* */
/*         <!-- start: Header -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container-inner">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="http://www.msasafety.cl"><img src="{{ asset('img/logo.jpg') }}" style="max-width:100%; max-eight: auto; margin-top: -11px;"/></a>*/
/*                 </div>*/
/*                             */
/*                 <!-- start: Header Menu -->*/
/*                 <div class="nav-no-collapse header-nav">*/
/*                     <ul class="nav pull-right">*/
/*                         <!-- start: User Dropdown -->*/
/*                         <li class="dropdown">*/
/*                             <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                 <i class="halflings-icon white user"></i> {{ app.user.username }}*/
/*                                 <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="dropdown-menu-title">*/
/*                                     <span>Account Settings</span>*/
/*                                 </li>*/
/*                                 <li><a href="/profile"><i class="halflings-icon user"></i> Profile</a></li>*/
/*                                 <li><a href="/logout"><i class="halflings-icon off"></i> Logout</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- end: User Dropdown -->*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- end: Header Menu -->*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <!-- start: Header -->*/
/*         <div class="container-fluid-full">*/
/*             <div class="row-fluid">     */
/*                 <!-- start: Main Menu -->*/
/*                 <div id="sidebar-left" class="span2">*/
/*                     <div class="nav-collapse sidebar-nav">*/
/*                         <ul class="nav nav-tabs nav-stacked main-menu">*/
/*                             <li><a href="index.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> {% trans %}Dashboard{% endtrans %}</span></a></li>   */
/*                             <li><a href="/admin/evento"><i class="icon-exclamation-sign"></i><span class="hidden-tablet"> {% trans %}Events{% endtrans %}</span></a></li>*/
/*                             <li><a href="messages.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> {% trans %}Reports{% endtrans %}</span></a></li>*/
/*                             */
/*                             <li>*/
/*                                 <a class="dropmenu" href="#"><i class="icon-cogs"></i><span class="hidden-tablet"> {%trans%}Configuration{%endtrans%}</span></a>*/
/*                                 <ul>*/
/*                                     <li><a href="ui.html"><i class="icon-user"></i><span class="hidden-tablet"> {%trans%}Users{%endtrans%}</span></a></li>*/
/*                                     <li><a class="submenu" href="/admin/customer"><i class="icon-group"></i><span class="hidden-tablet"> {%trans%}Customers{%endtrans%}</span></a></li>*/
/*                                     <li><a class="submenu" href="/admin/wei"><i class="icon-rss"></i><span class="hidden-tablet"> MODWEI</span></a></li>*/
/*                                     <li><a class="submenu" href="/admin/sensor"><i class="icon-stethoscope"></i><span class="hidden-tablet"> {%trans%}Sensors{%endtrans%}</span></a></li>*/
/* */
/*                                     <li><a class="submenu" href="submenu3.html"><i class="icon-bullhorn"></i><span class="hidden-tablet"> {%trans%}Set Alarms{%endtrans%}</span></a></li>*/
/*                                 </ul>   */
/*                             </li>*/
/*                             <li><a href="login.html"><i class="icon-signout"></i><span class="hidden-tablet"> {%trans%}Logout{%endtrans%}</span></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- end: Main Menu -->*/
/*                 */
/*                 <noscript>*/
/*                     <div class="alert alert-block span10">*/
/*                         <h4 class="alert-heading">Warning!</h4>*/
/*                         <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>*/
/*                     </div>*/
/*                 </noscript>*/
/*                 */
/*                 <!-- start: Content -->*/
/*                 <div id="content" class="span10">*/
/* */
/*                     {% block breadcumb %}{% endblock breadcumb %}*/
/* */
/*                     {% block body %}{% endblock %}*/
/* */
/*                 */
/*                 </div><!--/.fluid-container-->*/
/*         */
/*             <!-- end: Content -->*/
/*             </div><!--/#content.span10-->*/
/*         </div><!--/fluid-row-->*/
/* */
/*         <div class="modal hide fade" id="myModal">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal">×</button>*/
/*                 <h3>Settings</h3>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <p>Here settings can be configured...</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <a href="#" class="btn" data-dihttps://github.com/aterrien/jQuery-Knob.gitsmiss="modal">Close</a>*/
/*                 <a href="#" class="btn btn-primary">Save changes</a>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="clearfix"></div>*/
/*         */
/*         <footer>*/
/* */
/*             <p>*/
/*                 <span style="text-align:left;float:left"><small>&copy; 2016 <a href="http://www.k-group.cl" alt="K-Group M2M Dashboard">K-Group M2M Dashboard</a></small></span>*/
/*                 */
/*             </p>*/
/*         </footer>*/
/* */
/*         <!-- start: JavaScript-->*/
/* */
/*         <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-migrate-1.0.0.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.ui.touch-punch.js') }}"></script>*/
/*         <script src="{{ asset('js/modernizr.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.cookie.js') }}"></script>*/
/*         <script src="{{ asset('js/fullcalendar.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>*/
/*         <script src="{{ asset('js/excanvas.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.flot.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.flot.pie.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.chosen.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.uniform.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.noty.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.raty.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.gritter.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.masonry.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.knob.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>*/
/*         <script src="{{ asset('js/counter.js') }}"></script>*/
/*         <script src="{{ asset('js/retina.js') }}"></script>*/
/*         <script src="{{ asset('js/custom.js') }}"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>*/
/*         */
/*         <!-- end: JavaScript-->*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
