<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_1b16d855599286ab0f1a651ae13b010b3c8b77bf181d1aba2dc8f2596541d7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8b93b13da475da83e701d30dd7a5b767ed61c816e3bfb4551cd55925810da5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b93b13da475da83e701d30dd7a5b767ed61c816e3bfb4551cd55925810da5f->enter($__internal_a8b93b13da475da83e701d30dd7a5b767ed61c816e3bfb4551cd55925810da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_4d3517b2c421fd7fb9175a2ab0a41b2f4a22bdaa9ce64fa8bb3898bd69b885af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3517b2c421fd7fb9175a2ab0a41b2f4a22bdaa9ce64fa8bb3898bd69b885af->enter($__internal_4d3517b2c421fd7fb9175a2ab0a41b2f4a22bdaa9ce64fa8bb3898bd69b885af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>

<body>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 226
        echo "
    ";
        // line 227
        $this->displayBlock('javascripts', $context, $blocks);
        // line 234
        echo "
</body>

</html>
";
        
        $__internal_a8b93b13da475da83e701d30dd7a5b767ed61c816e3bfb4551cd55925810da5f->leave($__internal_a8b93b13da475da83e701d30dd7a5b767ed61c816e3bfb4551cd55925810da5f_prof);

        
        $__internal_4d3517b2c421fd7fb9175a2ab0a41b2f4a22bdaa9ce64fa8bb3898bd69b885af->leave($__internal_4d3517b2c421fd7fb9175a2ab0a41b2f4a22bdaa9ce64fa8bb3898bd69b885af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ad5deeab74bba4ffe20f92ea9382d4a47511b4f46bf7006509f7d6a7afd2010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad5deeab74bba4ffe20f92ea9382d4a47511b4f46bf7006509f7d6a7afd2010->enter($__internal_6ad5deeab74bba4ffe20f92ea9382d4a47511b4f46bf7006509f7d6a7afd2010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e74accd816d0afa1b7e081a55a09a6c2f2945c5f80e7a5845ae6bf97aa3fbde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74accd816d0afa1b7e081a55a09a6c2f2945c5f80e7a5845ae6bf97aa3fbde1->enter($__internal_e74accd816d0afa1b7e081a55a09a6c2f2945c5f80e7a5845ae6bf97aa3fbde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Centre Médic Triage";
        
        $__internal_e74accd816d0afa1b7e081a55a09a6c2f2945c5f80e7a5845ae6bf97aa3fbde1->leave($__internal_e74accd816d0afa1b7e081a55a09a6c2f2945c5f80e7a5845ae6bf97aa3fbde1_prof);

        
        $__internal_6ad5deeab74bba4ffe20f92ea9382d4a47511b4f46bf7006509f7d6a7afd2010->leave($__internal_6ad5deeab74bba4ffe20f92ea9382d4a47511b4f46bf7006509f7d6a7afd2010_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f22a358a0f5876236d9d4fdc4e1880a18d2f0d73c32c39d415b7d96670449c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22a358a0f5876236d9d4fdc4e1880a18d2f0d73c32c39d415b7d96670449c8d->enter($__internal_f22a358a0f5876236d9d4fdc4e1880a18d2f0d73c32c39d415b7d96670449c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_771ceafc3dbee53d105663a6cf451438d99820c4178a6b7eca63ddb9f8545c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771ceafc3dbee53d105663a6cf451438d99820c4178a6b7eca63ddb9f8545c86->enter($__internal_771ceafc3dbee53d105663a6cf451438d99820c4178a6b7eca63ddb9f8545c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
        
        $__internal_771ceafc3dbee53d105663a6cf451438d99820c4178a6b7eca63ddb9f8545c86->leave($__internal_771ceafc3dbee53d105663a6cf451438d99820c4178a6b7eca63ddb9f8545c86_prof);

        
        $__internal_f22a358a0f5876236d9d4fdc4e1880a18d2f0d73c32c39d415b7d96670449c8d->leave($__internal_f22a358a0f5876236d9d4fdc4e1880a18d2f0d73c32c39d415b7d96670449c8d_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d9f4394053f8163e4136167a02e47b5ed815d9392c758e94ec05fb74563a194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9f4394053f8163e4136167a02e47b5ed815d9392c758e94ec05fb74563a194->enter($__internal_1d9f4394053f8163e4136167a02e47b5ed815d9392c758e94ec05fb74563a194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c804f9283228b06c92b05c59a41eeddd0832a694244eb96f71c8f8f290bc286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c804f9283228b06c92b05c59a41eeddd0832a694244eb96f71c8f8f290bc286->enter($__internal_2c804f9283228b06c92b05c59a41eeddd0832a694244eb96f71c8f8f290bc286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('page_content', $context, $blocks);
        // line 212
        echo "
        <div class=\"container\">
            <hr>
            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Your Website 2017</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
    ";
        
        $__internal_2c804f9283228b06c92b05c59a41eeddd0832a694244eb96f71c8f8f290bc286->leave($__internal_2c804f9283228b06c92b05c59a41eeddd0832a694244eb96f71c8f8f290bc286_prof);

        
        $__internal_1d9f4394053f8163e4136167a02e47b5ed815d9392c758e94ec05fb74563a194->leave($__internal_1d9f4394053f8163e4136167a02e47b5ed815d9392c758e94ec05fb74563a194_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bb945923893fb655723414ced0a215dea1e7b78d23c04d20c1c6f9537b37d08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb945923893fb655723414ced0a215dea1e7b78d23c04d20c1c6f9537b37d08c->enter($__internal_bb945923893fb655723414ced0a215dea1e7b78d23c04d20c1c6f9537b37d08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_e485bde3697ec58555f795fc3bec401f35604581c9298fe2483cfe6c9324a1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e485bde3697ec58555f795fc3bec401f35604581c9298fe2483cfe6c9324a1c7->enter($__internal_e485bde3697ec58555f795fc3bec401f35604581c9298fe2483cfe6c9324a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"\">Visites</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_medic_llista_pacients");
        echo "\">Pacients</a>
                            </li>
                            <li>
                                <a href=\"\">Metges</a>
                            </li>
                            <li>
                                <a href=\"\">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_e485bde3697ec58555f795fc3bec401f35604581c9298fe2483cfe6c9324a1c7->leave($__internal_e485bde3697ec58555f795fc3bec401f35604581c9298fe2483cfe6c9324a1c7_prof);

        
        $__internal_bb945923893fb655723414ced0a215dea1e7b78d23c04d20c1c6f9537b37d08c->leave($__internal_bb945923893fb655723414ced0a215dea1e7b78d23c04d20c1c6f9537b37d08c_prof);

    }

    // line 60
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1be5958304a74dfa7f6f4c688f37801be165711e09c9772d456d15d5c640dc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be5958304a74dfa7f6f4c688f37801be165711e09c9772d456d15d5c640dc18->enter($__internal_1be5958304a74dfa7f6f4c688f37801be165711e09c9772d456d15d5c640dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d3e19c87bc3626f325a3ce852360936d6d57140cd8e6ee2ee13f3b05d688c195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e19c87bc3626f325a3ce852360936d6d57140cd8e6ee2ee13f3b05d688c195->enter($__internal_d3e19c87bc3626f325a3ce852360936d6d57140cd8e6ee2ee13f3b05d688c195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 61
        echo "            <!-- Page Content -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row carousel-holder\">
                            <div class=\"col-md-12\">
                                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/798/300/music\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/799/300/music\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/800/300/music\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$24.99</h4>
                                        <h4><a href=\"#\">First Product</a>
                                        </h4>
                                        <p>See more snippets like this online store item at <a target=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp - http://bootsnipp.com</a>.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">15 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$64.99</h4>
                                        <h4><a href=\"#\">Second Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">12 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$74.99</h4>
                                        <h4><a href=\"#\">Third Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">31 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$84.99</h4>
                                        <h4><a href=\"#\">Fourth Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">6 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$94.99</h4>
                                        <h4><a href=\"#\">Fifth Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">18 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <h4><a href=\"#\">Like this template?</a>
                                </h4>
                                <p>If you like this template, then check out <a target=\"_blank\" href=\"http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/\">this tutorial</a> on how to build a working review system for your online store!</p>
                                <a class=\"btn btn-primary\" target=\"_blank\" href=\"http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/\">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        ";
        
        $__internal_d3e19c87bc3626f325a3ce852360936d6d57140cd8e6ee2ee13f3b05d688c195->leave($__internal_d3e19c87bc3626f325a3ce852360936d6d57140cd8e6ee2ee13f3b05d688c195_prof);

        
        $__internal_1be5958304a74dfa7f6f4c688f37801be165711e09c9772d456d15d5c640dc18->leave($__internal_1be5958304a74dfa7f6f4c688f37801be165711e09c9772d456d15d5c640dc18_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9abe20b5d111dea3ccb5a52275bc6b3cad2dd2e73dbe9e928255f69682606905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abe20b5d111dea3ccb5a52275bc6b3cad2dd2e73dbe9e928255f69682606905->enter($__internal_9abe20b5d111dea3ccb5a52275bc6b3cad2dd2e73dbe9e928255f69682606905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90e802cb034861501ef049768c32d36016d9b9462043dbde27b892b5d754846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e802cb034861501ef049768c32d36016d9b9462043dbde27b892b5d754846a->enter($__internal_90e802cb034861501ef049768c32d36016d9b9462043dbde27b892b5d754846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 228
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_90e802cb034861501ef049768c32d36016d9b9462043dbde27b892b5d754846a->leave($__internal_90e802cb034861501ef049768c32d36016d9b9462043dbde27b892b5d754846a_prof);

        
        $__internal_9abe20b5d111dea3ccb5a52275bc6b3cad2dd2e73dbe9e928255f69682606905->leave($__internal_9abe20b5d111dea3ccb5a52275bc6b3cad2dd2e73dbe9e928255f69682606905_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  406 => 232,  400 => 229,  397 => 228,  388 => 227,  228 => 61,  219 => 60,  194 => 44,  175 => 27,  166 => 26,  143 => 212,  141 => 60,  138 => 59,  135 => 26,  126 => 25,  107 => 13,  101 => 10,  98 => 9,  89 => 8,  71 => 7,  57 => 234,  55 => 227,  52 => 226,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Centre Médic Triage{% endblock %}</title>
    {% block stylesheets %}
        <!-- Bootstrap Core CSS -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"{{ asset('css/shop-homepage.css') }}\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    {% endblock %}
</head>

<body>
    {% block body %}
        {% block navigation %}
            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"\">Visites</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('centre_medic_llista_pacients') }}\">Pacients</a>
                            </li>
                            <li>
                                <a href=\"\">Metges</a>
                            </li>
                            <li>
                                <a href=\"\">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        {% endblock %}

        {% block page_content %}
            <!-- Page Content -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row carousel-holder\">
                            <div class=\"col-md-12\">
                                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/798/300/music\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/799/300/music\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"http://loremflickr.com/800/300/music\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$24.99</h4>
                                        <h4><a href=\"#\">First Product</a>
                                        </h4>
                                        <p>See more snippets like this online store item at <a target=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp - http://bootsnipp.com</a>.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">15 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$64.99</h4>
                                        <h4><a href=\"#\">Second Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">12 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$74.99</h4>
                                        <h4><a href=\"#\">Third Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">31 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$84.99</h4>
                                        <h4><a href=\"#\">Fourth Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">6 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <div class=\"thumbnail\">
                                    <div class=\"caption\">
                                        <h4 class=\"pull-right\">\$94.99</h4>
                                        <h4><a href=\"#\">Fifth Product</a>
                                        </h4>
                                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class=\"ratings\">
                                        <p class=\"pull-right\">18 reviews</p>
                                        <p>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star\"></span>
                                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                <h4><a href=\"#\">Like this template?</a>
                                </h4>
                                <p>If you like this template, then check out <a target=\"_blank\" href=\"http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/\">this tutorial</a> on how to build a working review system for your online store!</p>
                                <a class=\"btn btn-primary\" target=\"_blank\" href=\"http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/\">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        {% endblock %}

        <div class=\"container\">
            <hr>
            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Your Website 2017</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
    {% endblock %}

    {% block javascripts %}
        <!-- jQuery -->
        <script src=\"{{ asset('js/jquery.js') }}\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    {% endblock %}

</body>

</html>
", "FrontBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
