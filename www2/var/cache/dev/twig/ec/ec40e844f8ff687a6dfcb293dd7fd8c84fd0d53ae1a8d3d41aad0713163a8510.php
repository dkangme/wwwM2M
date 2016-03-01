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
        $__internal_1dd18bea2b702bc9cc9faf8f7d77ce1ec2a8cd07d84b20fd2050cf4fe75d1e06 = $this->env->getExtension("native_profiler");
        $__internal_1dd18bea2b702bc9cc9faf8f7d77ce1ec2a8cd07d84b20fd2050cf4fe75d1e06->enter($__internal_1dd18bea2b702bc9cc9faf8f7d77ce1ec2a8cd07d84b20fd2050cf4fe75d1e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"/\"><span>MSA M2M</span></a>
                                    
                    <!-- start: Header Menu -->
                    <div class=\"nav-no-collapse header-nav\">
                        <ul class=\"nav pull-right\">
                            <!-- start: User Dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white user\"></i> ";
        // line 61
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
        </div>

        <!-- start: Header -->
        <div class=\"container-fluid-full\">
            <div class=\"row-fluid\">     
                <!-- start: Main Menu -->
                <div id=\"sidebar-left\" class=\"span2\">
                    <div class=\"nav-collapse sidebar-nav\">
                        <ul class=\"nav nav-tabs nav-stacked main-menu\">
                            <li><a href=\"index.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> ";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</span></a></li>   
                            <li><a href=\"messages.html\"><i class=\"icon-exclamation-sign\"></i><span class=\"hidden-tablet\"> ";
        // line 89
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events", array(), "messages");
        echo "</span></a></li>
                            <li><a href=\"messages.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> ";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reports", array(), "messages");
        echo "</span></a></li>
                            
                            <li>
                                <a class=\"dropmenu\" href=\"#\"><i class=\"icon-cogs\"></i><span class=\"hidden-tablet\"> ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration", array(), "messages");
        echo "</span></a>
                                <ul>
                                    <li><a href=\"ui.html\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> ";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/customer\"><i class=\"icon-group\"></i><span class=\"hidden-tablet\"> ";
        // line 96
        echo $this->env->getExtension('translator')->getTranslator()->trans("Customers", array(), "messages");
        echo "</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/wei\"><i class=\"icon-rss\"></i><span class=\"hidden-tablet\"> MODWEI</span></a></li>
                                    <li><a class=\"submenu\" href=\"/admin/sensor\"><i class=\"icon-stethoscope\"></i><span class=\"hidden-tablet\"> ";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sensors", array(), "messages");
        echo "</span></a></li>

                                    <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-bullhorn\"></i><span class=\"hidden-tablet\"> ";
        // line 100
        echo $this->env->getExtension('translator')->getTranslator()->trans("Set Alarms", array(), "messages");
        echo "</span></a></li>
                                </ul>   
                            </li>
                            <li><a href=\"login.html\"><i class=\"icon-signout\"></i><span class=\"hidden-tablet\"> ";
        // line 103
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
        // line 119
        $this->displayBlock('breadcumb', $context, $blocks);
        // line 120
        echo "
                    ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/counter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/retina.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js\"></script>
        
        <!-- end: JavaScript-->
        
        ";
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 191
        echo "
    </body>
</html>
";
        
        $__internal_1dd18bea2b702bc9cc9faf8f7d77ce1ec2a8cd07d84b20fd2050cf4fe75d1e06->leave($__internal_1dd18bea2b702bc9cc9faf8f7d77ce1ec2a8cd07d84b20fd2050cf4fe75d1e06_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e81106cde43cc0682640b07a5942e112155e6c4c7c08f0920a4fd9129ad7972 = $this->env->getExtension("native_profiler");
        $__internal_9e81106cde43cc0682640b07a5942e112155e6c4c7c08f0920a4fd9129ad7972->enter($__internal_9e81106cde43cc0682640b07a5942e112155e6c4c7c08f0920a4fd9129ad7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e81106cde43cc0682640b07a5942e112155e6c4c7c08f0920a4fd9129ad7972->leave($__internal_9e81106cde43cc0682640b07a5942e112155e6c4c7c08f0920a4fd9129ad7972_prof);

    }

    // line 119
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_d77c0c82ab2526e60ac00f5e6bd920816cad3cedde55071fc83498a1d26be26a = $this->env->getExtension("native_profiler");
        $__internal_d77c0c82ab2526e60ac00f5e6bd920816cad3cedde55071fc83498a1d26be26a->enter($__internal_d77c0c82ab2526e60ac00f5e6bd920816cad3cedde55071fc83498a1d26be26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        
        $__internal_d77c0c82ab2526e60ac00f5e6bd920816cad3cedde55071fc83498a1d26be26a->leave($__internal_d77c0c82ab2526e60ac00f5e6bd920816cad3cedde55071fc83498a1d26be26a_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b47d0aecb337a0687cebc565fbab93f53743c3c90f68c678a3b2b04da45180 = $this->env->getExtension("native_profiler");
        $__internal_14b47d0aecb337a0687cebc565fbab93f53743c3c90f68c678a3b2b04da45180->enter($__internal_14b47d0aecb337a0687cebc565fbab93f53743c3c90f68c678a3b2b04da45180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14b47d0aecb337a0687cebc565fbab93f53743c3c90f68c678a3b2b04da45180->leave($__internal_14b47d0aecb337a0687cebc565fbab93f53743c3c90f68c678a3b2b04da45180_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8cac1ab0e9cc457f58d524befd4d3d27fdb6797a30fb8c45fd4709bf1d94bda = $this->env->getExtension("native_profiler");
        $__internal_c8cac1ab0e9cc457f58d524befd4d3d27fdb6797a30fb8c45fd4709bf1d94bda->enter($__internal_c8cac1ab0e9cc457f58d524befd4d3d27fdb6797a30fb8c45fd4709bf1d94bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c8cac1ab0e9cc457f58d524befd4d3d27fdb6797a30fb8c45fd4709bf1d94bda->leave($__internal_c8cac1ab0e9cc457f58d524befd4d3d27fdb6797a30fb8c45fd4709bf1d94bda_prof);

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
        return array (  406 => 190,  395 => 121,  384 => 119,  373 => 39,  363 => 191,  361 => 190,  353 => 185,  349 => 184,  345 => 183,  341 => 182,  337 => 181,  333 => 180,  329 => 179,  325 => 178,  321 => 177,  317 => 176,  313 => 175,  309 => 174,  305 => 173,  301 => 172,  297 => 171,  293 => 170,  289 => 169,  285 => 168,  281 => 167,  277 => 166,  273 => 165,  269 => 164,  265 => 163,  261 => 162,  257 => 161,  253 => 160,  249 => 159,  245 => 158,  241 => 157,  237 => 156,  201 => 122,  199 => 121,  196 => 120,  194 => 119,  175 => 103,  169 => 100,  164 => 98,  159 => 96,  155 => 95,  150 => 93,  144 => 90,  140 => 89,  136 => 88,  106 => 61,  83 => 40,  81 => 39,  75 => 36,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  26 => 1,);
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
/*         <div class="navbar">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container-fluid">*/
/*                     <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <a class="brand" href="/"><span>MSA M2M</span></a>*/
/*                                     */
/*                     <!-- start: Header Menu -->*/
/*                     <div class="nav-no-collapse header-nav">*/
/*                         <ul class="nav pull-right">*/
/*                             <!-- start: User Dropdown -->*/
/*                             <li class="dropdown">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white user"></i> {{ app.user.username }}*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>Account Settings</span>*/
/*                                     </li>*/
/*                                     <li><a href="/profile"><i class="halflings-icon user"></i> Profile</a></li>*/
/*                                     <li><a href="/logout"><i class="halflings-icon off"></i> Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- end: User Dropdown -->*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- end: Header Menu -->*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- start: Header -->*/
/*         <div class="container-fluid-full">*/
/*             <div class="row-fluid">     */
/*                 <!-- start: Main Menu -->*/
/*                 <div id="sidebar-left" class="span2">*/
/*                     <div class="nav-collapse sidebar-nav">*/
/*                         <ul class="nav nav-tabs nav-stacked main-menu">*/
/*                             <li><a href="index.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> {% trans %}Dashboard{% endtrans %}</span></a></li>   */
/*                             <li><a href="messages.html"><i class="icon-exclamation-sign"></i><span class="hidden-tablet"> {% trans %}Events{% endtrans %}</span></a></li>*/
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
