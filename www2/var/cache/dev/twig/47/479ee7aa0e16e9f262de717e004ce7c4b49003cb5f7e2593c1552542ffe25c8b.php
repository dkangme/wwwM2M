<?php

/* FOSUserBundle::msa.html.twig */
class __TwigTemplate_cffb8837c7e564688ce890f41728eb4e12f93763d828ba169f392c860b153c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55af412b29b1e9cded9d2547e3590cf6e09bca78f90e15f88a8beba6cacbfcbb = $this->env->getExtension("native_profiler");
        $__internal_55af412b29b1e9cded9d2547e3590cf6e09bca78f90e15f88a8beba6cacbfcbb->enter($__internal_55af412b29b1e9cded9d2547e3590cf6e09bca78f90e15f88a8beba6cacbfcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::msa.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

         <!-- Bootstrap -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css'>

        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

        <!-- Pree Style -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pree.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    </head>
    <body>
        <div class=\"row\">
            <div class=\"col-sm-5 col-md-5 col-lg-5\"></div>
            <div class=\"col-sm-2 col-md-2 col-lg-2\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-sm-5 col-md-5 col-lg-5\"></div>

        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-sm-2 col-md-2 col-lg-2\"></div>
            <div class=\"col-sm-7 col-md-7 col-lg-7\">

                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"5\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">

                        <div class=\"item active\">
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/gas_plant.jpg"), "html", null, true);
        echo "\" alt=\"Gas Plant\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/greenhouse.jpg"), "html", null, true);
        echo "\" alt=\"GreenHouse\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/oil_plant.jpg"), "html", null, true);
        echo "\" alt=\"Oil Plant\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/packing-2-pears.jpg"), "html", null, true);
        echo "\" alt=\"Packing\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/salmon.jpg"), "html", null, true);
        echo "\" alt=\"Salmon\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Water-Treatment.jpg"), "html", null, true);
        echo "\" alt=\"Riles\">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm-3 col-md-3 col-lg-3\"></div>        
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
            <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                ";
        // line 100
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 101
        echo "            </div>
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "    </body>
</html>
";
        
        $__internal_55af412b29b1e9cded9d2547e3590cf6e09bca78f90e15f88a8beba6cacbfcbb->leave($__internal_55af412b29b1e9cded9d2547e3590cf6e09bca78f90e15f88a8beba6cacbfcbb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65364e662368f22e07261d71a64ed2bf352985a1c115ab4ef151b1457aef25d6 = $this->env->getExtension("native_profiler");
        $__internal_65364e662368f22e07261d71a64ed2bf352985a1c115ab4ef151b1457aef25d6->enter($__internal_65364e662368f22e07261d71a64ed2bf352985a1c115ab4ef151b1457aef25d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSA DashBoard";
        
        $__internal_65364e662368f22e07261d71a64ed2bf352985a1c115ab4ef151b1457aef25d6->leave($__internal_65364e662368f22e07261d71a64ed2bf352985a1c115ab4ef151b1457aef25d6_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13774baee7c6b10ba68dbd7397975de19b8456a2d1966340efa87f655b577edc = $this->env->getExtension("native_profiler");
        $__internal_13774baee7c6b10ba68dbd7397975de19b8456a2d1966340efa87f655b577edc->enter($__internal_13774baee7c6b10ba68dbd7397975de19b8456a2d1966340efa87f655b577edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_13774baee7c6b10ba68dbd7397975de19b8456a2d1966340efa87f655b577edc->leave($__internal_13774baee7c6b10ba68dbd7397975de19b8456a2d1966340efa87f655b577edc_prof);

    }

    // line 100
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e90225d7cdd8ed7f4ebc85a5f45428391cc80737d06cf850628a23a37d2f252 = $this->env->getExtension("native_profiler");
        $__internal_6e90225d7cdd8ed7f4ebc85a5f45428391cc80737d06cf850628a23a37d2f252->enter($__internal_6e90225d7cdd8ed7f4ebc85a5f45428391cc80737d06cf850628a23a37d2f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_6e90225d7cdd8ed7f4ebc85a5f45428391cc80737d06cf850628a23a37d2f252->leave($__internal_6e90225d7cdd8ed7f4ebc85a5f45428391cc80737d06cf850628a23a37d2f252_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e577125eecaddcc351ce1ac135053cc538b79382a804c5c46352016464671b3d = $this->env->getExtension("native_profiler");
        $__internal_e577125eecaddcc351ce1ac135053cc538b79382a804c5c46352016464671b3d->enter($__internal_e577125eecaddcc351ce1ac135053cc538b79382a804c5c46352016464671b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e577125eecaddcc351ce1ac135053cc538b79382a804c5c46352016464671b3d->leave($__internal_e577125eecaddcc351ce1ac135053cc538b79382a804c5c46352016464671b3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::msa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 110,  213 => 100,  202 => 26,  190 => 5,  181 => 111,  179 => 110,  174 => 108,  165 => 101,  163 => 100,  138 => 78,  131 => 74,  124 => 70,  117 => 66,  110 => 62,  103 => 58,  75 => 33,  67 => 27,  65 => 26,  52 => 16,  43 => 10,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}MSA DashBoard{% endblock %}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*          <!-- Bootstrap -->*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type='text/css'>*/
/* */
/*         <!-- Google fonts-->*/
/*         <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>*/
/* */
/*         <!-- Pree Style -->*/
/*         <link href="{{ asset('css/pree.css') }}" rel='stylesheet' type='text/css'>*/
/*         */
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*         <div class="row">*/
/*             <div class="col-sm-5 col-md-5 col-lg-5"></div>*/
/*             <div class="col-sm-2 col-md-2 col-lg-2">*/
/*                 <img src="{{ asset('img/logo.jpg') }}">*/
/*             </div>*/
/*             <div class="col-sm-5 col-md-5 col-lg-5"></div>*/
/* */
/*         </div>*/
/*         <br/>*/
/*         <div class="row">*/
/*             <div class="col-sm-2 col-md-2 col-lg-2"></div>*/
/*             <div class="col-sm-7 col-md-7 col-lg-7">*/
/* */
/*                 <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*                     <!-- Indicators -->*/
/*                     <ol class="carousel-indicators">*/
/*                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="4"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="5"></li>*/
/*                     </ol>*/
/* */
/*                     <!-- Wrapper for slides -->*/
/*                     <div class="carousel-inner" role="listbox">*/
/* */
/*                         <div class="item active">*/
/*                             <img src="{{ asset('img/gas_plant.jpg') }}" alt="Gas Plant">*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('img/greenhouse.jpg') }}" alt="GreenHouse">*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('img/oil_plant.jpg') }}" alt="Oil Plant">*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('img/packing-2-pears.jpg') }}" alt="Packing">*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('img/salmon.jpg') }}" alt="Salmon">*/
/*                         </div>*/
/* */
/*                         <div class="item">*/
/*                             <img src="{{ asset('img/Water-Treatment.jpg') }}" alt="Riles">*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <!-- Left and right controls -->*/
/*                     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Previous</span>*/
/*                     </a>*/
/*                     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                         <span class="sr-only">Next</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-3 col-md-3 col-lg-3"></div>        */
/*         </div>*/
/*         <br/>*/
/*         <div class="row">*/
/*             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>*/
/*             <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">*/
/*                 {% block fos_user_content %}{% endblock fos_user_content %}*/
/*             </div>*/
/*             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>*/
/*         </div>*/
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
