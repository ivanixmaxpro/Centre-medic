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
        $__internal_1bbfa19a8d10ca238ba618847026b448939cc9e65371ab33865b6a2ae4e3c4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbfa19a8d10ca238ba618847026b448939cc9e65371ab33865b6a2ae4e3c4fb->enter($__internal_1bbfa19a8d10ca238ba618847026b448939cc9e65371ab33865b6a2ae4e3c4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_5fc37f39456dcade9768ac957305c15546f6ea00d10e4682a4a90508f07c95c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc37f39456dcade9768ac957305c15546f6ea00d10e4682a4a90508f07c95c6->enter($__internal_5fc37f39456dcade9768ac957305c15546f6ea00d10e4682a4a90508f07c95c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

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
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
</body>

</html>
";
        
        $__internal_1bbfa19a8d10ca238ba618847026b448939cc9e65371ab33865b6a2ae4e3c4fb->leave($__internal_1bbfa19a8d10ca238ba618847026b448939cc9e65371ab33865b6a2ae4e3c4fb_prof);

        
        $__internal_5fc37f39456dcade9768ac957305c15546f6ea00d10e4682a4a90508f07c95c6->leave($__internal_5fc37f39456dcade9768ac957305c15546f6ea00d10e4682a4a90508f07c95c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2bbe7ba11ad62cffa53d1c2bfe5ab54e2c662c69d83aced0511d89142018493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bbe7ba11ad62cffa53d1c2bfe5ab54e2c662c69d83aced0511d89142018493->enter($__internal_f2bbe7ba11ad62cffa53d1c2bfe5ab54e2c662c69d83aced0511d89142018493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7dd600009c20774319cee95bcc8af4580743dfa336ad7fa6e02d35cf2e7c94d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd600009c20774319cee95bcc8af4580743dfa336ad7fa6e02d35cf2e7c94d4->enter($__internal_7dd600009c20774319cee95bcc8af4580743dfa336ad7fa6e02d35cf2e7c94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Centre Médic Triage";
        
        $__internal_7dd600009c20774319cee95bcc8af4580743dfa336ad7fa6e02d35cf2e7c94d4->leave($__internal_7dd600009c20774319cee95bcc8af4580743dfa336ad7fa6e02d35cf2e7c94d4_prof);

        
        $__internal_f2bbe7ba11ad62cffa53d1c2bfe5ab54e2c662c69d83aced0511d89142018493->leave($__internal_f2bbe7ba11ad62cffa53d1c2bfe5ab54e2c662c69d83aced0511d89142018493_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81a9c750ba6fcf92dd318ed232160c6f22e6ee843e7654d2b9cb63e9f6e7307c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a9c750ba6fcf92dd318ed232160c6f22e6ee843e7654d2b9cb63e9f6e7307c->enter($__internal_81a9c750ba6fcf92dd318ed232160c6f22e6ee843e7654d2b9cb63e9f6e7307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71e0a5863037aa06770aad37570f97f04ebe5837bfb3e3af88b41cc7c3f51137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e0a5863037aa06770aad37570f97f04ebe5837bfb3e3af88b41cc7c3f51137->enter($__internal_71e0a5863037aa06770aad37570f97f04ebe5837bfb3e3af88b41cc7c3f51137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_71e0a5863037aa06770aad37570f97f04ebe5837bfb3e3af88b41cc7c3f51137->leave($__internal_71e0a5863037aa06770aad37570f97f04ebe5837bfb3e3af88b41cc7c3f51137_prof);

        
        $__internal_81a9c750ba6fcf92dd318ed232160c6f22e6ee843e7654d2b9cb63e9f6e7307c->leave($__internal_81a9c750ba6fcf92dd318ed232160c6f22e6ee843e7654d2b9cb63e9f6e7307c_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc65877474b7e941b7a389710677bb5498b64864523dda4693275673b4fcc1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc65877474b7e941b7a389710677bb5498b64864523dda4693275673b4fcc1e8->enter($__internal_bc65877474b7e941b7a389710677bb5498b64864523dda4693275673b4fcc1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb7fcab44a4f52d7cbe4cd092361718979a8ff1876732b65347a736dfebc7a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7fcab44a4f52d7cbe4cd092361718979a8ff1876732b65347a736dfebc7a0d->enter($__internal_bb7fcab44a4f52d7cbe4cd092361718979a8ff1876732b65347a736dfebc7a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('page_content', $context, $blocks);
        // line 67
        echo "
        <div class=\"container\">
            <hr>
            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Ivan Mir & Ernest Riccetto 2017</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
    ";
        
        $__internal_bb7fcab44a4f52d7cbe4cd092361718979a8ff1876732b65347a736dfebc7a0d->leave($__internal_bb7fcab44a4f52d7cbe4cd092361718979a8ff1876732b65347a736dfebc7a0d_prof);

        
        $__internal_bc65877474b7e941b7a389710677bb5498b64864523dda4693275673b4fcc1e8->leave($__internal_bc65877474b7e941b7a389710677bb5498b64864523dda4693275673b4fcc1e8_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9fa9b91e3ffdca691c2dc8f76e15f0017fc51c3abdf6b141f739e40357dca344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa9b91e3ffdca691c2dc8f76e15f0017fc51c3abdf6b141f739e40357dca344->enter($__internal_9fa9b91e3ffdca691c2dc8f76e15f0017fc51c3abdf6b141f739e40357dca344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_59732919b26d14412a0a657ee7e4ef33eee86858876533af4717a3a3bfd3dc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59732919b26d14412a0a657ee7e4ef33eee86858876533af4717a3a3bfd3dc34->enter($__internal_59732919b26d14412a0a657ee7e4ef33eee86858876533af4717a3a3bfd3dc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_medic_llista_visites");
        echo "\">Visites</a>
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
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_medic_llista_metges");
        echo "\">Metges</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_59732919b26d14412a0a657ee7e4ef33eee86858876533af4717a3a3bfd3dc34->leave($__internal_59732919b26d14412a0a657ee7e4ef33eee86858876533af4717a3a3bfd3dc34_prof);

        
        $__internal_9fa9b91e3ffdca691c2dc8f76e15f0017fc51c3abdf6b141f739e40357dca344->leave($__internal_9fa9b91e3ffdca691c2dc8f76e15f0017fc51c3abdf6b141f739e40357dca344_prof);

    }

    // line 60
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_07e5b26d5567df428e1446c8bec9aac56739dc5403b98d659f7e1378d7238ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e5b26d5567df428e1446c8bec9aac56739dc5403b98d659f7e1378d7238ef5->enter($__internal_07e5b26d5567df428e1446c8bec9aac56739dc5403b98d659f7e1378d7238ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e4b5d343750a59b23688937fb1b2f7038ec62f4ff1bc77162f4bd4a6b2839dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b5d343750a59b23688937fb1b2f7038ec62f4ff1bc77162f4bd4a6b2839dfe->enter($__internal_e4b5d343750a59b23688937fb1b2f7038ec62f4ff1bc77162f4bd4a6b2839dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 61
        echo "            <!-- Page Content -->
            <div class=\"container\">
        <h1> Wellcome to Medical Center Administration</h1>
            <!-- /.container -->
            </div>
        ";
        
        $__internal_e4b5d343750a59b23688937fb1b2f7038ec62f4ff1bc77162f4bd4a6b2839dfe->leave($__internal_e4b5d343750a59b23688937fb1b2f7038ec62f4ff1bc77162f4bd4a6b2839dfe_prof);

        
        $__internal_07e5b26d5567df428e1446c8bec9aac56739dc5403b98d659f7e1378d7238ef5->leave($__internal_07e5b26d5567df428e1446c8bec9aac56739dc5403b98d659f7e1378d7238ef5_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c952ce58475bb8a8ac5bc5d16f9d5ee94bca6638fbc150fbc6c5d45c15fc461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c952ce58475bb8a8ac5bc5d16f9d5ee94bca6638fbc150fbc6c5d45c15fc461->enter($__internal_1c952ce58475bb8a8ac5bc5d16f9d5ee94bca6638fbc150fbc6c5d45c15fc461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e17470fbf12b0b1712f8bcaa014b8af0ad30ed9bc5f851cdb97185a6c40e448a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17470fbf12b0b1712f8bcaa014b8af0ad30ed9bc5f851cdb97185a6c40e448a->enter($__internal_e17470fbf12b0b1712f8bcaa014b8af0ad30ed9bc5f851cdb97185a6c40e448a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_e17470fbf12b0b1712f8bcaa014b8af0ad30ed9bc5f851cdb97185a6c40e448a->leave($__internal_e17470fbf12b0b1712f8bcaa014b8af0ad30ed9bc5f851cdb97185a6c40e448a_prof);

        
        $__internal_1c952ce58475bb8a8ac5bc5d16f9d5ee94bca6638fbc150fbc6c5d45c15fc461->leave($__internal_1c952ce58475bb8a8ac5bc5d16f9d5ee94bca6638fbc150fbc6c5d45c15fc461_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  270 => 87,  264 => 84,  261 => 83,  252 => 82,  237 => 61,  228 => 60,  209 => 50,  203 => 47,  197 => 44,  188 => 38,  175 => 27,  166 => 26,  143 => 67,  141 => 60,  138 => 59,  135 => 26,  126 => 25,  107 => 13,  101 => 10,  98 => 9,  89 => 8,  71 => 7,  57 => 89,  55 => 82,  52 => 81,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
                        <a class=\"navbar-brand\" href=\"{{ path('centre_medic_llista_visites') }}\">Visites</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('centre_medic_llista_pacients') }}\">Pacients</a>
                            </li>
                            <li>
                                <a href=\"{{ path('centre_medic_llista_metges') }}\">Metges</a>
                            </li>
                            <li>
                                <a href=\"{{ path('login') }}\">Login</a>
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
        <h1> Wellcome to Medical Center Administration</h1>
            <!-- /.container -->
            </div>
        {% endblock %}

        <div class=\"container\">
            <hr>
            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Ivan Mir & Ernest Riccetto 2017</p>
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
", "FrontBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centremedic\\src\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
