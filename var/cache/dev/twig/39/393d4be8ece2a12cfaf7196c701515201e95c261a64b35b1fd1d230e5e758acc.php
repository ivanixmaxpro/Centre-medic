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
        $__internal_abc98c1211bb1293974a8ff8ef9b4a155af01f76c4e3391b5d9295beb0b32d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc98c1211bb1293974a8ff8ef9b4a155af01f76c4e3391b5d9295beb0b32d59->enter($__internal_abc98c1211bb1293974a8ff8ef9b4a155af01f76c4e3391b5d9295beb0b32d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_61fd76b967000a32d11405432d45c21f523c14137bb22759cc704966f7acd682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fd76b967000a32d11405432d45c21f523c14137bb22759cc704966f7acd682->enter($__internal_61fd76b967000a32d11405432d45c21f523c14137bb22759cc704966f7acd682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

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
        
        $__internal_abc98c1211bb1293974a8ff8ef9b4a155af01f76c4e3391b5d9295beb0b32d59->leave($__internal_abc98c1211bb1293974a8ff8ef9b4a155af01f76c4e3391b5d9295beb0b32d59_prof);

        
        $__internal_61fd76b967000a32d11405432d45c21f523c14137bb22759cc704966f7acd682->leave($__internal_61fd76b967000a32d11405432d45c21f523c14137bb22759cc704966f7acd682_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ea9fe29c0f242a7f15389be52005609d92602b56dfd605bbf57a730d4b57b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea9fe29c0f242a7f15389be52005609d92602b56dfd605bbf57a730d4b57b65->enter($__internal_8ea9fe29c0f242a7f15389be52005609d92602b56dfd605bbf57a730d4b57b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ad808103386e06fcc2f4906d7c489d9aee7345f7b0199c1b9b25ca0be964ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad808103386e06fcc2f4906d7c489d9aee7345f7b0199c1b9b25ca0be964ce9->enter($__internal_2ad808103386e06fcc2f4906d7c489d9aee7345f7b0199c1b9b25ca0be964ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our Shop!";
        
        $__internal_2ad808103386e06fcc2f4906d7c489d9aee7345f7b0199c1b9b25ca0be964ce9->leave($__internal_2ad808103386e06fcc2f4906d7c489d9aee7345f7b0199c1b9b25ca0be964ce9_prof);

        
        $__internal_8ea9fe29c0f242a7f15389be52005609d92602b56dfd605bbf57a730d4b57b65->leave($__internal_8ea9fe29c0f242a7f15389be52005609d92602b56dfd605bbf57a730d4b57b65_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3af905fa19ebfbaeb4237fb7c66cce2faccd993f906bd14a8c803807441f6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3af905fa19ebfbaeb4237fb7c66cce2faccd993f906bd14a8c803807441f6a2->enter($__internal_d3af905fa19ebfbaeb4237fb7c66cce2faccd993f906bd14a8c803807441f6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de873c45f2b3054fe2b0ab46adc375e60e5129b5eebdbb1f42604f5dcdb7f883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de873c45f2b3054fe2b0ab46adc375e60e5129b5eebdbb1f42604f5dcdb7f883->enter($__internal_de873c45f2b3054fe2b0ab46adc375e60e5129b5eebdbb1f42604f5dcdb7f883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_de873c45f2b3054fe2b0ab46adc375e60e5129b5eebdbb1f42604f5dcdb7f883->leave($__internal_de873c45f2b3054fe2b0ab46adc375e60e5129b5eebdbb1f42604f5dcdb7f883_prof);

        
        $__internal_d3af905fa19ebfbaeb4237fb7c66cce2faccd993f906bd14a8c803807441f6a2->leave($__internal_d3af905fa19ebfbaeb4237fb7c66cce2faccd993f906bd14a8c803807441f6a2_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2de0d9be8d82d396732fbae2dbc848bb3e8b4efce169b574d197930bf8adec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2de0d9be8d82d396732fbae2dbc848bb3e8b4efce169b574d197930bf8adec8->enter($__internal_a2de0d9be8d82d396732fbae2dbc848bb3e8b4efce169b574d197930bf8adec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_881fafea306228de0fd243c2c9b4c95633b6dbb575ae0f8e0505abb5cd440b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881fafea306228de0fd243c2c9b4c95633b6dbb575ae0f8e0505abb5cd440b88->enter($__internal_881fafea306228de0fd243c2c9b4c95633b6dbb575ae0f8e0505abb5cd440b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_881fafea306228de0fd243c2c9b4c95633b6dbb575ae0f8e0505abb5cd440b88->leave($__internal_881fafea306228de0fd243c2c9b4c95633b6dbb575ae0f8e0505abb5cd440b88_prof);

        
        $__internal_a2de0d9be8d82d396732fbae2dbc848bb3e8b4efce169b574d197930bf8adec8->leave($__internal_a2de0d9be8d82d396732fbae2dbc848bb3e8b4efce169b574d197930bf8adec8_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b2a8d54ff0800167d3b02a6e67c4a7581492c4bfdf207f2d5b1ff8bcf49ac306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a8d54ff0800167d3b02a6e67c4a7581492c4bfdf207f2d5b1ff8bcf49ac306->enter($__internal_b2a8d54ff0800167d3b02a6e67c4a7581492c4bfdf207f2d5b1ff8bcf49ac306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_8c7da0c5d42cefd2fb98dddfe1b8a50e07e8ab396b87331d855ee0046c2eccf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7da0c5d42cefd2fb98dddfe1b8a50e07e8ab396b87331d855ee0046c2eccf5->enter($__internal_8c7da0c5d42cefd2fb98dddfe1b8a50e07e8ab396b87331d855ee0046c2eccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                        <a class=\"navbar-brand\" href=\"\">Music-Shop</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"\">Discos</a>
                            </li>
                            <li>
                                <a href=\"\">Categories</a>
                            </li>
                            <li>
                                <a href=\"\">Artistes</a>
                            </li>
                            <li>
                                <a href=\"\">Contacte</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_8c7da0c5d42cefd2fb98dddfe1b8a50e07e8ab396b87331d855ee0046c2eccf5->leave($__internal_8c7da0c5d42cefd2fb98dddfe1b8a50e07e8ab396b87331d855ee0046c2eccf5_prof);

        
        $__internal_b2a8d54ff0800167d3b02a6e67c4a7581492c4bfdf207f2d5b1ff8bcf49ac306->leave($__internal_b2a8d54ff0800167d3b02a6e67c4a7581492c4bfdf207f2d5b1ff8bcf49ac306_prof);

    }

    // line 63
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_56599c2a997e99852c47641a0ea0e1fe70cb14ae36a467f60fe524430f131b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56599c2a997e99852c47641a0ea0e1fe70cb14ae36a467f60fe524430f131b72->enter($__internal_56599c2a997e99852c47641a0ea0e1fe70cb14ae36a467f60fe524430f131b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_92e8a58edf289821af1bb7d847dc2f7b817c9707a938368433868109fc028551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e8a58edf289821af1bb7d847dc2f7b817c9707a938368433868109fc028551->enter($__internal_92e8a58edf289821af1bb7d847dc2f7b817c9707a938368433868109fc028551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_92e8a58edf289821af1bb7d847dc2f7b817c9707a938368433868109fc028551->leave($__internal_92e8a58edf289821af1bb7d847dc2f7b817c9707a938368433868109fc028551_prof);

        
        $__internal_56599c2a997e99852c47641a0ea0e1fe70cb14ae36a467f60fe524430f131b72->leave($__internal_56599c2a997e99852c47641a0ea0e1fe70cb14ae36a467f60fe524430f131b72_prof);

    }

    // line 230
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eaca2f40adf363a616d06c4f2d5223ddc8a7665d7d0ff0b12896eeee56d33c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaca2f40adf363a616d06c4f2d5223ddc8a7665d7d0ff0b12896eeee56d33c36->enter($__internal_eaca2f40adf363a616d06c4f2d5223ddc8a7665d7d0ff0b12896eeee56d33c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e396f6914e09480ff6c25a61ca999cf8c17affc4b07c04b8887b1e2b8f3deb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e396f6914e09480ff6c25a61ca999cf8c17affc4b07c04b8887b1e2b8f3deb7f->enter($__internal_e396f6914e09480ff6c25a61ca999cf8c17affc4b07c04b8887b1e2b8f3deb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e396f6914e09480ff6c25a61ca999cf8c17affc4b07c04b8887b1e2b8f3deb7f->leave($__internal_e396f6914e09480ff6c25a61ca999cf8c17affc4b07c04b8887b1e2b8f3deb7f_prof);

        
        $__internal_eaca2f40adf363a616d06c4f2d5223ddc8a7665d7d0ff0b12896eeee56d33c36->leave($__internal_eaca2f40adf363a616d06c4f2d5223ddc8a7665d7d0ff0b12896eeee56d33c36_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  406 => 235,  400 => 232,  397 => 231,  388 => 230,  228 => 64,  219 => 63,  175 => 27,  166 => 26,  143 => 215,  141 => 63,  138 => 62,  135 => 26,  126 => 25,  107 => 13,  101 => 10,  98 => 9,  89 => 8,  71 => 7,  57 => 237,  55 => 230,  52 => 229,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
                        <a class=\"navbar-brand\" href=\"\">Music-Shop</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"\">Discos</a>
                            </li>
                            <li>
                                <a href=\"\">Categories</a>
                            </li>
                            <li>
                                <a href=\"\">Artistes</a>
                            </li>
                            <li>
                                <a href=\"\">Contacte</a>
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
