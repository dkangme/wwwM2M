<?php

/* :views:base.html.twig */
class __TwigTemplate_40fdcd2cbb39be1402a3f457b2c8e3dac59b063c0a1262c8ff8d74877de49dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d0e7f03f22f9f373a245e1f9ebfab5b62f09974d8762898c3d7a7bc0a14fa0 = $this->env->getExtension("native_profiler");
        $__internal_23d0e7f03f22f9f373a245e1f9ebfab5b62f09974d8762898c3d7a7bc0a14fa0->enter($__internal_23d0e7f03f22f9f373a245e1f9ebfab5b62f09974d8762898c3d7a7bc0a14fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":views:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <!-- start: Meta -->
    <meta charset=\"utf-8\">
    <title>..:: MSA Safety - Chile ::..</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
    <meta name=\"author\" content=\"Dennis Ji\">
    <meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id=\"bootstrap-style\" href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
    <link id=\"base-style\" href=\"css/style.css\" rel=\"stylesheet\">
    <link id=\"base-style-responsive\" href=\"css/style-responsive.css\" rel=\"stylesheet\">
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
                    <a class=\"brand\" href=\"index.html\"><span>MSA M2M</span></a>
                                    
                    <!-- start: Header Menu -->
                    <div class=\"nav-no-collapse header-nav\">
                        <ul class=\"nav pull-right\">
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white warning-sign\"></i>
                                </a>
                                <ul class=\"dropdown-menu notifications\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 11 notifications</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>   

                                    <li>
                                        <a href=\"#\">
                                            <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                                            <span class=\"message\">New user registration</span>
                                            <span class=\"time\">1 min</span> 
                                        </a>
                                    </li>
                                    
                                    <li class=\"dropdown-menu-sub-footer\">
                                        <a>View all notifications</a>
                                    </li>   
                                </ul>
                            </li>
                            <!-- start: Notifications Dropdown -->
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white tasks\"></i>
                                </a>
                                <ul class=\"dropdown-menu tasks\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 17 tasks in progress</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"header\">
                                                <span class=\"title\">iOS Development</span>
                                                <span class=\"percent\"></span>
                                            </span>
                                            <div class=\"taskProgress progressSlim red\">80</div> 
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class=\"dropdown-menu-sub-footer\">View all tasks</a>
                                    </li>   
                                </ul>
                            </li>
                            <!-- end: Notifications Dropdown -->
                            <!-- start: Message Dropdown -->
                            <li class=\"dropdown hidden-phone\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white envelope\"></i>
                                </a>
                                <ul class=\"dropdown-menu messages\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>You have 9 messages</span>
                                        <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
                                    </li>   
                                    <li>
                                        <a href=\"#\">
                                            <span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
                                            <span class=\"header\">
                                                <span class=\"from\">
                                                    Dennis Ji
                                                 </span>
                                                <span class=\"time\">
                                                    6 min
                                                </span>
                                            </span>
                                            <span class=\"message\">
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                            </span>  
                                        </a>
                                    </li>

                                    <li>
                                        <a class=\"dropdown-menu-sub-footer\">View all messages</a>
                                    </li>   
                                </ul>
                            </li>
                            <!-- end: Message Dropdown -->
                            <li>
                                <a class=\"btn\" href=\"#\">
                                    <i class=\"halflings-icon white wrench\"></i>
                                </a>
                            </li>
                            <!-- start: User Dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"halflings-icon white user\"></i> Dennis Ji
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"dropdown-menu-title\">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href=\"#\"><i class=\"halflings-icon user\"></i> Profile</a></li>
                                    <li><a href=\"login.html\"><i class=\"halflings-icon off\"></i> Logout</a></li>
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
                            <li><a href=\"index.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>   
                            <li><a href=\"messages.html\"><i class=\"icon-exclamation-sign\"></i><span class=\"hidden-tablet\"> Eventos</span></a></li>
                            <li><a href=\"messages.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Reportes</span></a></li>
                            <li><a href=\"ui.html\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Usuarios</span></a></li>
                            <li>
                                <a class=\"dropmenu\" href=\"#\"><i class=\"icon-cogs\"></i><span class=\"hidden-tablet\"> Configuración</span></a>
                                <ul>
                                    <li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Clientes</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sensores</span></a></li>
                                    <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Alarmas</span></a></li>
                                </ul>   
                            </li>
                            <li><a href=\"login.html\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Login Page</span></a></li>
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
                
                    <ul class=\"breadcrumb\">
                        <li>
                            <i class=\"icon-home\"></i>
                            <a href=\"index.html\">Home</a> 
                            <i class=\"icon-angle-right\"></i>
                        </li>
                        <li><a href=\"#\">Dashboard</a></li>
                    </ul>

                    ";
        // line 212
        $this->displayBlock('body', $context, $blocks);
        // line 213
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

        <script src=\"js/jquery-1.9.1.min.js\"></script>
        <script src=\"js/jquery-migrate-1.0.0.min.js\"></script>
        <script src=\"js/jquery-ui-1.10.0.custom.min.js\"></script>
        <script src=\"js/jquery.ui.touch-punch.js\"></script>
        <script src=\"js/modernizr.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>
        <script src=\"js/jquery.cookie.js\"></script>
        <script src='js/fullcalendar.min.js'></script>
        <script src='js/jquery.dataTables.min.js'></script>
        <script src=\"js/excanvas.js\"></script>
        <script src=\"js/jquery.flot.js\"></script>
        <script src=\"js/jquery.flot.pie.js\"></script>
        <script src=\"js/jquery.flot.stack.js\"></script>
        <script src=\"js/jquery.flot.resize.min.js\"></script>
        <script src=\"js/jquery.chosen.min.js\"></script>
        <script src=\"js/jquery.uniform.min.js\"></script>
        <script src=\"js/jquery.cleditor.min.js\"></script>
        <script src=\"js/jquery.noty.js\"></script>
        <script src=\"js/jquery.elfinder.min.js\"></script>
        <script src=\"js/jquery.raty.min.js\"></script>
        <script src=\"js/jquery.iphone.toggle.js\"></script>
        <script src=\"js/jquery.uploadify-3.1.min.js\"></script>
        <script src=\"js/jquery.gritter.min.js\"></script>
        <script src=\"js/jquery.imagesloaded.js\"></script>
        <script src=\"js/jquery.masonry.min.js\"></script>
        <script src=\"js/jquery.knob.min.js\"></script>
        <script src=\"js/jquery.sparkline.min.js\"></script>
        <script src=\"js/counter.js\"></script>
        <script src=\"js/retina.js\"></script>
        <script src=\"js/custom.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js\"></script>
        
        <!-- end: JavaScript-->
        
        ";
        // line 281
        $this->displayBlock('javascripts', $context, $blocks);
        // line 282
        echo "
    </body>
</html>
";
        
        $__internal_23d0e7f03f22f9f373a245e1f9ebfab5b62f09974d8762898c3d7a7bc0a14fa0->leave($__internal_23d0e7f03f22f9f373a245e1f9ebfab5b62f09974d8762898c3d7a7bc0a14fa0_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb0b1c2590a3d5026ea170f60a1f7d3b53ce80c9351dbffab50f4228449f1364 = $this->env->getExtension("native_profiler");
        $__internal_cb0b1c2590a3d5026ea170f60a1f7d3b53ce80c9351dbffab50f4228449f1364->enter($__internal_cb0b1c2590a3d5026ea170f60a1f7d3b53ce80c9351dbffab50f4228449f1364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb0b1c2590a3d5026ea170f60a1f7d3b53ce80c9351dbffab50f4228449f1364->leave($__internal_cb0b1c2590a3d5026ea170f60a1f7d3b53ce80c9351dbffab50f4228449f1364_prof);

    }

    // line 212
    public function block_body($context, array $blocks = array())
    {
        $__internal_af492beaa6876a2be1a2866dc712c1f1011d3122069201673828f0faa3a8bdbf = $this->env->getExtension("native_profiler");
        $__internal_af492beaa6876a2be1a2866dc712c1f1011d3122069201673828f0faa3a8bdbf->enter($__internal_af492beaa6876a2be1a2866dc712c1f1011d3122069201673828f0faa3a8bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af492beaa6876a2be1a2866dc712c1f1011d3122069201673828f0faa3a8bdbf->leave($__internal_af492beaa6876a2be1a2866dc712c1f1011d3122069201673828f0faa3a8bdbf_prof);

    }

    // line 281
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f2ab2486db20c018b51b73fc96d54d0deea03c6c51f73955fd0c6353366d571 = $this->env->getExtension("native_profiler");
        $__internal_6f2ab2486db20c018b51b73fc96d54d0deea03c6c51f73955fd0c6353366d571->enter($__internal_6f2ab2486db20c018b51b73fc96d54d0deea03c6c51f73955fd0c6353366d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f2ab2486db20c018b51b73fc96d54d0deea03c6c51f73955fd0c6353366d571->leave($__internal_6f2ab2486db20c018b51b73fc96d54d0deea03c6c51f73955fd0c6353366d571_prof);

    }

    public function getTemplateName()
    {
        return ":views:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 281,  339 => 212,  328 => 39,  318 => 282,  316 => 281,  246 => 213,  244 => 212,  70 => 40,  68 => 39,  62 => 36,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*     <!-- start: Meta -->*/
/*     <meta charset="utf-8">*/
/*     <title>..:: MSA Safety - Chile ::..</title>*/
/*     <meta name="description" content="Bootstrap Metro Dashboard">*/
/*     <meta name="author" content="Dennis Ji">*/
/*     <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">*/
/*     <!-- end: Meta -->*/
/*     */
/*     <!-- start: Mobile Specific -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- end: Mobile Specific -->*/
/*     */
/*     <!-- start: CSS -->*/
/*     <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="css/bootstrap-responsive.min.css" rel="stylesheet">*/
/*     <link id="base-style" href="css/style.css" rel="stylesheet">*/
/*     <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">*/
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
/*                     <a class="brand" href="index.html"><span>MSA M2M</span></a>*/
/*                                     */
/*                     <!-- start: Header Menu -->*/
/*                     <div class="nav-no-collapse header-nav">*/
/*                         <ul class="nav pull-right">*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white warning-sign"></i>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu notifications">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 11 notifications</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>   */
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="icon blue"><i class="icon-user"></i></span>*/
/*                                             <span class="message">New user registration</span>*/
/*                                             <span class="time">1 min</span> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     */
/*                                     <li class="dropdown-menu-sub-footer">*/
/*                                         <a>View all notifications</a>*/
/*                                     </li>   */
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- start: Notifications Dropdown -->*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white tasks"></i>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu tasks">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 17 tasks in progress</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="header">*/
/*                                                 <span class="title">iOS Development</span>*/
/*                                                 <span class="percent"></span>*/
/*                                             </span>*/
/*                                             <div class="taskProgress progressSlim red">80</div> */
/*                                         </a>*/
/*                                     </li>*/
/*                                     */
/*                                     <li>*/
/*                                         <a class="dropdown-menu-sub-footer">View all tasks</a>*/
/*                                     </li>   */
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- end: Notifications Dropdown -->*/
/*                             <!-- start: Message Dropdown -->*/
/*                             <li class="dropdown hidden-phone">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white envelope"></i>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu messages">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>You have 9 messages</span>*/
/*                                         <a href="#refresh"><i class="icon-repeat"></i></a>*/
/*                                     </li>   */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>*/
/*                                             <span class="header">*/
/*                                                 <span class="from">*/
/*                                                     Dennis Ji*/
/*                                                  </span>*/
/*                                                 <span class="time">*/
/*                                                     6 min*/
/*                                                 </span>*/
/*                                             </span>*/
/*                                             <span class="message">*/
/*                                                 Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore*/
/*                                             </span>  */
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <li>*/
/*                                         <a class="dropdown-menu-sub-footer">View all messages</a>*/
/*                                     </li>   */
/*                                 </ul>*/
/*                             </li>*/
/*                             <!-- end: Message Dropdown -->*/
/*                             <li>*/
/*                                 <a class="btn" href="#">*/
/*                                     <i class="halflings-icon white wrench"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <!-- start: User Dropdown -->*/
/*                             <li class="dropdown">*/
/*                                 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="halflings-icon white user"></i> Dennis Ji*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="dropdown-menu-title">*/
/*                                         <span>Account Settings</span>*/
/*                                     </li>*/
/*                                     <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>*/
/*                                     <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>*/
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
/*                             <li><a href="index.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>   */
/*                             <li><a href="messages.html"><i class="icon-exclamation-sign"></i><span class="hidden-tablet"> Eventos</span></a></li>*/
/*                             <li><a href="messages.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Reportes</span></a></li>*/
/*                             <li><a href="ui.html"><i class="icon-user"></i><span class="hidden-tablet"> Usuarios</span></a></li>*/
/*                             <li>*/
/*                                 <a class="dropmenu" href="#"><i class="icon-cogs"></i><span class="hidden-tablet"> Configuración</span></a>*/
/*                                 <ul>*/
/*                                     <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Clientes</span></a></li>*/
/*                                     <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sensores</span></a></li>*/
/*                                     <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Alarmas</span></a></li>*/
/*                                 </ul>   */
/*                             </li>*/
/*                             <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>*/
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
/*                 */
/*                     <ul class="breadcrumb">*/
/*                         <li>*/
/*                             <i class="icon-home"></i>*/
/*                             <a href="index.html">Home</a> */
/*                             <i class="icon-angle-right"></i>*/
/*                         </li>*/
/*                         <li><a href="#">Dashboard</a></li>*/
/*                     </ul>*/
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
/*         <script src="js/jquery-1.9.1.min.js"></script>*/
/*         <script src="js/jquery-migrate-1.0.0.min.js"></script>*/
/*         <script src="js/jquery-ui-1.10.0.custom.min.js"></script>*/
/*         <script src="js/jquery.ui.touch-punch.js"></script>*/
/*         <script src="js/modernizr.js"></script>*/
/*         <script src="js/bootstrap.min.js"></script>*/
/*         <script src="js/jquery.cookie.js"></script>*/
/*         <script src='js/fullcalendar.min.js'></script>*/
/*         <script src='js/jquery.dataTables.min.js'></script>*/
/*         <script src="js/excanvas.js"></script>*/
/*         <script src="js/jquery.flot.js"></script>*/
/*         <script src="js/jquery.flot.pie.js"></script>*/
/*         <script src="js/jquery.flot.stack.js"></script>*/
/*         <script src="js/jquery.flot.resize.min.js"></script>*/
/*         <script src="js/jquery.chosen.min.js"></script>*/
/*         <script src="js/jquery.uniform.min.js"></script>*/
/*         <script src="js/jquery.cleditor.min.js"></script>*/
/*         <script src="js/jquery.noty.js"></script>*/
/*         <script src="js/jquery.elfinder.min.js"></script>*/
/*         <script src="js/jquery.raty.min.js"></script>*/
/*         <script src="js/jquery.iphone.toggle.js"></script>*/
/*         <script src="js/jquery.uploadify-3.1.min.js"></script>*/
/*         <script src="js/jquery.gritter.min.js"></script>*/
/*         <script src="js/jquery.imagesloaded.js"></script>*/
/*         <script src="js/jquery.masonry.min.js"></script>*/
/*         <script src="js/jquery.knob.min.js"></script>*/
/*         <script src="js/jquery.sparkline.min.js"></script>*/
/*         <script src="js/counter.js"></script>*/
/*         <script src="js/retina.js"></script>*/
/*         <script src="js/custom.js"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>*/
/*         */
/*         <!-- end: JavaScript-->*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
