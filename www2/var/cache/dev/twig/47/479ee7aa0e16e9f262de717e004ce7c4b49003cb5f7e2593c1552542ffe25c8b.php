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
        $__internal_0eae9022518e57b7b77ea9e80e68860efa913191d6f606c7f55a7a721c2b27dc = $this->env->getExtension("native_profiler");
        $__internal_0eae9022518e57b7b77ea9e80e68860efa913191d6f606c7f55a7a721c2b27dc->enter($__internal_0eae9022518e57b7b77ea9e80e68860efa913191d6f606c7f55a7a721c2b27dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::msa.html.twig"));

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
        
        $__internal_0eae9022518e57b7b77ea9e80e68860efa913191d6f606c7f55a7a721c2b27dc->leave($__internal_0eae9022518e57b7b77ea9e80e68860efa913191d6f606c7f55a7a721c2b27dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6024bf162f24e88e10c7237d4738aaad9353ed00caf39f75379520c340a4fe6e = $this->env->getExtension("native_profiler");
        $__internal_6024bf162f24e88e10c7237d4738aaad9353ed00caf39f75379520c340a4fe6e->enter($__internal_6024bf162f24e88e10c7237d4738aaad9353ed00caf39f75379520c340a4fe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSA DashBoard";
        
        $__internal_6024bf162f24e88e10c7237d4738aaad9353ed00caf39f75379520c340a4fe6e->leave($__internal_6024bf162f24e88e10c7237d4738aaad9353ed00caf39f75379520c340a4fe6e_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8435bedb6c5ecda9812a30b1fc8b5548cdd40f05a8e534f63fdfc6345d33bcd8 = $this->env->getExtension("native_profiler");
        $__internal_8435bedb6c5ecda9812a30b1fc8b5548cdd40f05a8e534f63fdfc6345d33bcd8->enter($__internal_8435bedb6c5ecda9812a30b1fc8b5548cdd40f05a8e534f63fdfc6345d33bcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8435bedb6c5ecda9812a30b1fc8b5548cdd40f05a8e534f63fdfc6345d33bcd8->leave($__internal_8435bedb6c5ecda9812a30b1fc8b5548cdd40f05a8e534f63fdfc6345d33bcd8_prof);

    }

    // line 100
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b6aecf4a2d06eb1ed989222ed6e3eec3a3dbcdabb5dedf03d891c377cf6e4cc = $this->env->getExtension("native_profiler");
        $__internal_3b6aecf4a2d06eb1ed989222ed6e3eec3a3dbcdabb5dedf03d891c377cf6e4cc->enter($__internal_3b6aecf4a2d06eb1ed989222ed6e3eec3a3dbcdabb5dedf03d891c377cf6e4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_3b6aecf4a2d06eb1ed989222ed6e3eec3a3dbcdabb5dedf03d891c377cf6e4cc->leave($__internal_3b6aecf4a2d06eb1ed989222ed6e3eec3a3dbcdabb5dedf03d891c377cf6e4cc_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dab58c05c9f5d773e4696a834970dd9c3f7680ccfa57baa47fde2783382e853 = $this->env->getExtension("native_profiler");
        $__internal_2dab58c05c9f5d773e4696a834970dd9c3f7680ccfa57baa47fde2783382e853->enter($__internal_2dab58c05c9f5d773e4696a834970dd9c3f7680ccfa57baa47fde2783382e853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2dab58c05c9f5d773e4696a834970dd9c3f7680ccfa57baa47fde2783382e853->leave($__internal_2dab58c05c9f5d773e4696a834970dd9c3f7680ccfa57baa47fde2783382e853_prof);

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
