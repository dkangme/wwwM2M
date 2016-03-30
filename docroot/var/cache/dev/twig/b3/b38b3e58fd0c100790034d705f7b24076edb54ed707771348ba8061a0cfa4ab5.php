<?php

/* base.html.twig */
class __TwigTemplate_86678bb8fd782c25ce85a0bf49c5d7be364750299fdd8ac51b4d19f348b8f366 extends Twig_Template
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
        $__internal_5c13118d6fcd99691a6bd22bb54811ea8be201ecb803c608f11370c24562f15e = $this->env->getExtension("native_profiler");
        $__internal_5c13118d6fcd99691a6bd22bb54811ea8be201ecb803c608f11370c24562f15e->enter($__internal_5c13118d6fcd99691a6bd22bb54811ea8be201ecb803c608f11370c24562f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>M2M | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.5 -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
  <!-- Morris chart -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

  ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "  
</head>
<body class=\"hold-transition skin-black sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"index2.html\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>M</b>2M</span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>M2M</b>DASHBOARD</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>

      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
        \t<li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\"/></li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">Alexander Pierce</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">MAIN MENU</li>
        <li>
          <a href=\"/data/sensor/dashboard\">
            <i class=\"fa fa-tachometer\"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href=\"/data/event\">
            <i class=\"fa fa-info-circle\"></i> <span>Events</span>
          </a>
        </li>
        <li class=\"treeview\">
\t\t\t<a href=\"#\">
            <i class=\"fa fa-cogs\"></i> <span>Configuration</span> <i class=\"fa fa-angle-left pull-right\"></i>
          </a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t<li><a href=\"/admin/customer\"><i class=\"fa fa-users\t\"></i> Customers</a></li>
\t\t\t\t<li><a href=\"/data/modwei\"><i class=\"fa fa-rss\"></i> MODWEI</a></li>
\t\t\t\t<li><a href=\"/data/sensor\"><i class=\"fa fa-stethoscope\"></i> Sensor</a></li>
\t\t\t\t<li><a href=\"/data/alarm\"><i class=\"fa fa-bullhorn\"></i> Alarms</a></li>
\t\t\t\t<li><a href=\"/data/notificationlist\"><i class=\"fa fa-envelope-o\"></i> Notification Lists</a></li>
\t\t\t</ul>
        </li>
        <li>
          <a href=\"/logout\">
            <i class=\"fa fa-sign-out\"></i> <span>Exit</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    
    ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 159
        echo "
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 3.1.1
    </div>
    <strong>Copyright &copy; 2015-2016 <a href=\"http://www.k-group.cl\">K-Group SpA</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript::;\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript::;\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript::;\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>


    <!-- end: JavaScript-->

    ";
        // line 407
        $this->displayBlock('javascripts', $context, $blocks);
        // line 408
        echo "
  </body>
</html>
";
        
        $__internal_5c13118d6fcd99691a6bd22bb54811ea8be201ecb803c608f11370c24562f15e->leave($__internal_5c13118d6fcd99691a6bd22bb54811ea8be201ecb803c608f11370c24562f15e_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3adee6040d6412ff8fa0b0e4a537b3a34e865f47af1266bba36ab924e74dc540 = $this->env->getExtension("native_profiler");
        $__internal_3adee6040d6412ff8fa0b0e4a537b3a34e865f47af1266bba36ab924e74dc540->enter($__internal_3adee6040d6412ff8fa0b0e4a537b3a34e865f47af1266bba36ab924e74dc540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3adee6040d6412ff8fa0b0e4a537b3a34e865f47af1266bba36ab924e74dc540->leave($__internal_3adee6040d6412ff8fa0b0e4a537b3a34e865f47af1266bba36ab924e74dc540_prof);

    }

    // line 156
    public function block_body($context, array $blocks = array())
    {
        $__internal_08ea1239fc21583c8da19dc1a25382ecc7d0593f04ee1c4988dc6f1b7c565169 = $this->env->getExtension("native_profiler");
        $__internal_08ea1239fc21583c8da19dc1a25382ecc7d0593f04ee1c4988dc6f1b7c565169->enter($__internal_08ea1239fc21583c8da19dc1a25382ecc7d0593f04ee1c4988dc6f1b7c565169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "
    ";
        
        $__internal_08ea1239fc21583c8da19dc1a25382ecc7d0593f04ee1c4988dc6f1b7c565169->leave($__internal_08ea1239fc21583c8da19dc1a25382ecc7d0593f04ee1c4988dc6f1b7c565169_prof);

    }

    // line 407
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1207f2fa1191256d3daf456182a4a2b6ae0ed9db01c286a63e1444aa849f35bb = $this->env->getExtension("native_profiler");
        $__internal_1207f2fa1191256d3daf456182a4a2b6ae0ed9db01c286a63e1444aa849f35bb->enter($__internal_1207f2fa1191256d3daf456182a4a2b6ae0ed9db01c286a63e1444aa849f35bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1207f2fa1191256d3daf456182a4a2b6ae0ed9db01c286a63e1444aa849f35bb->leave($__internal_1207f2fa1191256d3daf456182a4a2b6ae0ed9db01c286a63e1444aa849f35bb_prof);

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
        return array (  555 => 407,  547 => 157,  541 => 156,  530 => 40,  520 => 408,  518 => 407,  510 => 402,  505 => 400,  500 => 398,  495 => 396,  490 => 394,  485 => 392,  480 => 390,  475 => 388,  469 => 385,  464 => 383,  460 => 382,  455 => 380,  450 => 378,  444 => 375,  433 => 367,  223 => 159,  221 => 156,  135 => 73,  126 => 67,  119 => 63,  95 => 41,  93 => 40,  81 => 31,  76 => 29,  71 => 27,  66 => 25,  61 => 23,  56 => 21,  51 => 19,  45 => 16,  36 => 10,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>M2M | Dashboard</title>*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   <!-- Bootstrap 3.3.5 -->*/
/*   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">*/
/*   <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*        folder instead of downloading all of them to reduce the load. -->*/
/*   <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">*/
/*   <!-- iCheck -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">*/
/*   <!-- Morris chart -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">*/
/*   <!-- jvectormap -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">*/
/*   <!-- Date Picker -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">*/
/*   <!-- Daterange picker -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">*/
/*   <!-- bootstrap wysihtml5 - text editor -->*/
/*   <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">*/
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* */
/*   {% block stylesheets %}{% endblock %}*/
/*   */
/* </head>*/
/* <body class="hold-transition skin-black sidebar-mini">*/
/* <div class="wrapper">*/
/* */
/*   <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="index2.html" class="logo">*/
/*       <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*       <span class="logo-mini"><b>M</b>2M</span>*/
/*       <!-- logo for regular state and mobile devices -->*/
/*       <span class="logo-lg"><b>M2M</b>DASHBOARD</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*       <!-- Sidebar toggle button-->*/
/*       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*       </a>*/
/* */
/*       <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*         	<li><img src="{{asset('img/logo.jpg')}}"/></li>*/
/*           <!-- User Account: style can be found in dropdown.less -->*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <img src="{{asset('img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*               <span class="hidden-xs">Alexander Pierce</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <!-- User image -->*/
/*               <li class="user-header">*/
/*                 <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                 <p>*/
/*                   Alexander Pierce - Web Developer*/
/*                   <small>Member since Nov. 2012</small>*/
/*                 </p>*/
/*               </li>*/
/*               <!-- Menu Body -->*/
/*               <li class="user-body">*/
/*                 <div class="row">*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Followers</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Sales</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Friends</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*               </li>*/
/*               <!-- Menu Footer-->*/
/*               <li class="user-footer">*/
/*                 <div class="pull-left">*/
/*                   <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                 </div>*/
/*                 <div class="pull-right">*/
/*                   <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Control Sidebar Toggle Button -->*/
/*           <li>*/
/*             <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/*   <!-- Left side column. contains the logo and sidebar -->*/
/*   <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*       <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*       <ul class="sidebar-menu">*/
/*         <li class="header">MAIN MENU</li>*/
/*         <li>*/
/*           <a href="/data/sensor/dashboard">*/
/*             <i class="fa fa-tachometer"></i> <span>Dashboard</span>*/
/*           </a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="/data/event">*/
/*             <i class="fa fa-info-circle"></i> <span>Events</span>*/
/*           </a>*/
/*         </li>*/
/*         <li class="treeview">*/
/* 			<a href="#">*/
/*             <i class="fa fa-cogs"></i> <span>Configuration</span> <i class="fa fa-angle-left pull-right"></i>*/
/*           </a>*/
/* 			<ul class="treeview-menu">*/
/* 				<li><a href="/admin/customer"><i class="fa fa-users	"></i> Customers</a></li>*/
/* 				<li><a href="/data/modwei"><i class="fa fa-rss"></i> MODWEI</a></li>*/
/* 				<li><a href="/data/sensor"><i class="fa fa-stethoscope"></i> Sensor</a></li>*/
/* 				<li><a href="/data/alarm"><i class="fa fa-bullhorn"></i> Alarms</a></li>*/
/* 				<li><a href="/data/notificationlist"><i class="fa fa-envelope-o"></i> Notification Lists</a></li>*/
/* 			</ul>*/
/*         </li>*/
/*         <li>*/
/*           <a href="/logout">*/
/*             <i class="fa fa-sign-out"></i> <span>Exit</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
/* */
/*   <!-- Content Wrapper. Contains page content -->*/
/*   <div class="content-wrapper">*/
/*     */
/*     {%block body%}*/
/* */
/*     {% endblock body %}*/
/* */
/*   </div>*/
/*   <!-- /.content-wrapper -->*/
/*   <footer class="main-footer">*/
/*     <div class="pull-right hidden-xs">*/
/*       <b>Version</b> 3.1.1*/
/*     </div>*/
/*     <strong>Copyright &copy; 2015-2016 <a href="http://www.k-group.cl">K-Group SpA</a>.</strong> All rights*/
/*     reserved.*/
/*   </footer>*/
/* */
/*   <!-- Control Sidebar -->*/
/*   <aside class="control-sidebar control-sidebar-dark">*/
/*     <!-- Create the tabs -->*/
/*     <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*       <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*       <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*     </ul>*/
/*     <!-- Tab panes -->*/
/*     <div class="tab-content">*/
/*       <!-- Home tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-home-tab">*/
/*         <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                 <p>Will be 23 on April 24th</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <i class="menu-icon fa fa-user bg-yellow"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/* */
/*                 <p>New phone +1(800)555-1234</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/* */
/*                 <p>nora@example.com</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/* */
/*                 <p>Execution time 5 seconds</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*         <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Custom Template Design*/
/*                 <span class="label label-danger pull-right">70%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Update Resume*/
/*                 <span class="label label-success pull-right">95%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Laravel Integration*/
/*                 <span class="label label-warning pull-right">50%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Back End Framework*/
/*                 <span class="label label-primary pull-right">68%</span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Stats tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Settings tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*         <form method="post">*/
/*           <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Report panel usage*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Some information about this general settings option*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Allow mail redirect*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Other sets of options are available*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Expose author name in posts*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Allow the user to show his name in blog posts*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Show me as online*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Turn off notifications*/
/*               <input type="checkbox" class="pull-right">*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Delete chat history*/
/*               <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*             </label>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/*         </form>*/
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*     </div>*/
/*   </aside>*/
/*   <!-- /.control-sidebar -->*/
/*   <!-- Add the sidebar's background. This div must be placed*/
/*        immediately after the control sidebar -->*/
/*   <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* */
/*     <!-- jQuery 2.2.0 -->*/
/*     <script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>*/
/*     <!-- jQuery UI 1.11.4 -->*/
/*     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*     <script>*/
/*       $.widget.bridge('uibutton', $.ui.button);*/
/*     </script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*     <!-- Morris.js charts -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*     <script src="{{asset('plugins/morris/morris.min.js')}}"></script>*/
/*     <!-- Sparkline -->*/
/*     <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>*/
/*     <!-- jvectormap -->*/
/*     <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <!-- jQuery Knob Chart -->*/
/*     <script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>*/
/*     <!-- daterangepicker -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>*/
/*     <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>*/
/*     <!-- datepicker -->*/
/*     <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>*/
/*     <!-- Bootstrap WYSIHTML5 -->*/
/*     <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{asset('js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <script src="{{asset('js/pages/dashboard.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{asset('js/demo.js')}}"></script>*/
/* */
/* */
/*     <!-- end: JavaScript-->*/
/* */
/*     {% block javascripts %}{% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
