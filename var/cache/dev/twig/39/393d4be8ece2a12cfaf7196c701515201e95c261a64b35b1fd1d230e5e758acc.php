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
        $__internal_4a9c0e1c9788c0da443a7b35f86be095cabd4dcbac58455293eec1bb9ecf719b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9c0e1c9788c0da443a7b35f86be095cabd4dcbac58455293eec1bb9ecf719b->enter($__internal_4a9c0e1c9788c0da443a7b35f86be095cabd4dcbac58455293eec1bb9ecf719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_087876ffb08a8390320eae406818114dbb22156787468148d08b1736e2c6d474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087876ffb08a8390320eae406818114dbb22156787468148d08b1736e2c6d474->enter($__internal_087876ffb08a8390320eae406818114dbb22156787468148d08b1736e2c6d474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

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
        // line 229
        echo "
    ";
        // line 230
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "
</body>

</html>
";
        
        $__internal_4a9c0e1c9788c0da443a7b35f86be095cabd4dcbac58455293eec1bb9ecf719b->leave($__internal_4a9c0e1c9788c0da443a7b35f86be095cabd4dcbac58455293eec1bb9ecf719b_prof);

        
        $__internal_087876ffb08a8390320eae406818114dbb22156787468148d08b1736e2c6d474->leave($__internal_087876ffb08a8390320eae406818114dbb22156787468148d08b1736e2c6d474_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3185c36e19fb3f568c5f8fe2ae8acb1340bbcafd4f990ed34678942dec27d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3185c36e19fb3f568c5f8fe2ae8acb1340bbcafd4f990ed34678942dec27d3a->enter($__internal_e3185c36e19fb3f568c5f8fe2ae8acb1340bbcafd4f990ed34678942dec27d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3e441d3d06395bc796075ac006e0909c997eaafa4a9e1194c1b9f8dd4a4294b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e441d3d06395bc796075ac006e0909c997eaafa4a9e1194c1b9f8dd4a4294b->enter($__internal_f3e441d3d06395bc796075ac006e0909c997eaafa4a9e1194c1b9f8dd4a4294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our Shop!";
        
        $__internal_f3e441d3d06395bc796075ac006e0909c997eaafa4a9e1194c1b9f8dd4a4294b->leave($__internal_f3e441d3d06395bc796075ac006e0909c997eaafa4a9e1194c1b9f8dd4a4294b_prof);

        
        $__internal_e3185c36e19fb3f568c5f8fe2ae8acb1340bbcafd4f990ed34678942dec27d3a->leave($__internal_e3185c36e19fb3f568c5f8fe2ae8acb1340bbcafd4f990ed34678942dec27d3a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d91b25cdad6e3c603e3fa00ffa0d83d13ccb51f045c759210ee0ab7bea84519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d91b25cdad6e3c603e3fa00ffa0d83d13ccb51f045c759210ee0ab7bea84519->enter($__internal_7d91b25cdad6e3c603e3fa00ffa0d83d13ccb51f045c759210ee0ab7bea84519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c1fa93b0d8c77dd7c71e2b1baaf51a263ca10f0962a11488d8ff3285a4cf690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1fa93b0d8c77dd7c71e2b1baaf51a263ca10f0962a11488d8ff3285a4cf690->enter($__internal_7c1fa93b0d8c77dd7c71e2b1baaf51a263ca10f0962a11488d8ff3285a4cf690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7c1fa93b0d8c77dd7c71e2b1baaf51a263ca10f0962a11488d8ff3285a4cf690->leave($__internal_7c1fa93b0d8c77dd7c71e2b1baaf51a263ca10f0962a11488d8ff3285a4cf690_prof);

        
        $__internal_7d91b25cdad6e3c603e3fa00ffa0d83d13ccb51f045c759210ee0ab7bea84519->leave($__internal_7d91b25cdad6e3c603e3fa00ffa0d83d13ccb51f045c759210ee0ab7bea84519_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_41784119605df33afae304ea029fd3686b9e515b69ab4905a48ae51dd5e1efc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41784119605df33afae304ea029fd3686b9e515b69ab4905a48ae51dd5e1efc5->enter($__internal_41784119605df33afae304ea029fd3686b9e515b69ab4905a48ae51dd5e1efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0baed157a25704e3d1c9573e758333891628c79f1e6d7164d84af28a1464e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0baed157a25704e3d1c9573e758333891628c79f1e6d7164d84af28a1464e2f->enter($__internal_e0baed157a25704e3d1c9573e758333891628c79f1e6d7164d84af28a1464e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('page_content', $context, $blocks);
        // line 215
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
        
        $__internal_e0baed157a25704e3d1c9573e758333891628c79f1e6d7164d84af28a1464e2f->leave($__internal_e0baed157a25704e3d1c9573e758333891628c79f1e6d7164d84af28a1464e2f_prof);

        
        $__internal_41784119605df33afae304ea029fd3686b9e515b69ab4905a48ae51dd5e1efc5->leave($__internal_41784119605df33afae304ea029fd3686b9e515b69ab4905a48ae51dd5e1efc5_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_175226ec635dd5365570bd330643d7a75161cd598aceeb599613cc42942f667e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175226ec635dd5365570bd330643d7a75161cd598aceeb599613cc42942f667e->enter($__internal_175226ec635dd5365570bd330643d7a75161cd598aceeb599613cc42942f667e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_236d9ce90cb9cee5ca808bb5ef07ce5e931abd7cb83ac361689b00ce5de18fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236d9ce90cb9cee5ca808bb5ef07ce5e931abd7cb83ac361689b00ce5de18fbc->enter($__internal_236d9ce90cb9cee5ca808bb5ef07ce5e931abd7cb83ac361689b00ce5de18fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                        <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("music_shop_frontend_homepage");
        echo "\">Music-Shop</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("music_shop_frontend_albums");
        echo "\">Discos</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("music_shop_frontend_categories");
        echo "\">Categories</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("music_shop_frontend_artists");
        echo "\">Artistes</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("music_shop_frontend_contact_form");
        echo "\">Contacte</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_236d9ce90cb9cee5ca808bb5ef07ce5e931abd7cb83ac361689b00ce5de18fbc->leave($__internal_236d9ce90cb9cee5ca808bb5ef07ce5e931abd7cb83ac361689b00ce5de18fbc_prof);

        
        $__internal_175226ec635dd5365570bd330643d7a75161cd598aceeb599613cc42942f667e->leave($__internal_175226ec635dd5365570bd330643d7a75161cd598aceeb599613cc42942f667e_prof);

    }

    // line 63
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0a466c163da6d89aee91778635992808eaaf329ce3883e9d97a95068aff467f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a466c163da6d89aee91778635992808eaaf329ce3883e9d97a95068aff467f6->enter($__internal_0a466c163da6d89aee91778635992808eaaf329ce3883e9d97a95068aff467f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_5daaa3f45716b218a8a6c9ce7e07eb9585065d165a139b61cc8b920f993bc2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daaa3f45716b218a8a6c9ce7e07eb9585065d165a139b61cc8b920f993bc2e3->enter($__internal_5daaa3f45716b218a8a6c9ce7e07eb9585065d165a139b61cc8b920f993bc2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 64
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
        
        $__internal_5daaa3f45716b218a8a6c9ce7e07eb9585065d165a139b61cc8b920f993bc2e3->leave($__internal_5daaa3f45716b218a8a6c9ce7e07eb9585065d165a139b61cc8b920f993bc2e3_prof);

        
        $__internal_0a466c163da6d89aee91778635992808eaaf329ce3883e9d97a95068aff467f6->leave($__internal_0a466c163da6d89aee91778635992808eaaf329ce3883e9d97a95068aff467f6_prof);

    }

    // line 230
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf68bccc138430dd05f982d2f0c11f5b7b5564366ee7ad068662ceb93ef56f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf68bccc138430dd05f982d2f0c11f5b7b5564366ee7ad068662ceb93ef56f11->enter($__internal_cf68bccc138430dd05f982d2f0c11f5b7b5564366ee7ad068662ceb93ef56f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57f31eb9428c95c113cf9bde253d51fdc29694d505bb16495a7946d609bf0308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f31eb9428c95c113cf9bde253d51fdc29694d505bb16495a7946d609bf0308->enter($__internal_57f31eb9428c95c113cf9bde253d51fdc29694d505bb16495a7946d609bf0308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_57f31eb9428c95c113cf9bde253d51fdc29694d505bb16495a7946d609bf0308->leave($__internal_57f31eb9428c95c113cf9bde253d51fdc29694d505bb16495a7946d609bf0308_prof);

        
        $__internal_cf68bccc138430dd05f982d2f0c11f5b7b5564366ee7ad068662ceb93ef56f11->leave($__internal_cf68bccc138430dd05f982d2f0c11f5b7b5564366ee7ad068662ceb93ef56f11_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  421 => 235,  415 => 232,  412 => 231,  403 => 230,  243 => 64,  234 => 63,  215 => 53,  209 => 50,  203 => 47,  197 => 44,  188 => 38,  175 => 27,  166 => 26,  143 => 215,  141 => 63,  138 => 62,  135 => 26,  126 => 25,  107 => 13,  101 => 10,  98 => 9,  89 => 8,  71 => 7,  57 => 237,  55 => 230,  52 => 229,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
    <title>{% block title %}Welcome to our Shop!{% endblock %}</title>
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
                        <a class=\"navbar-brand\" href=\"{{ path('music_shop_frontend_homepage') }}\">Music-Shop</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('music_shop_frontend_albums') }}\">Discos</a>
                            </li>
                            <li>
                                <a href=\"{{ path('music_shop_frontend_categories') }}\">Categories</a>
                            </li>
                            <li>
                                <a href=\"{{ path('music_shop_frontend_artists') }}\">Artistes</a>
                            </li>
                            <li>
                                <a href=\"{{ path('music_shop_frontend_contact_form') }}\">Contacte</a>
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
