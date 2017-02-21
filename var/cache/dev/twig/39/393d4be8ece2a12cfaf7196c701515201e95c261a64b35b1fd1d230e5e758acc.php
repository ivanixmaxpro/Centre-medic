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
        $__internal_1c22f15540928d560fdceb57e25d4af9808db36c0e317ade234e2af7debcd0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c22f15540928d560fdceb57e25d4af9808db36c0e317ade234e2af7debcd0dd->enter($__internal_1c22f15540928d560fdceb57e25d4af9808db36c0e317ade234e2af7debcd0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_494472b9a12fc1cb1cd90c98f435747e6741f8cd3a7dcc2195b19568fbfe96ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494472b9a12fc1cb1cd90c98f435747e6741f8cd3a7dcc2195b19568fbfe96ca->enter($__internal_494472b9a12fc1cb1cd90c98f435747e6741f8cd3a7dcc2195b19568fbfe96ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

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
        
        $__internal_1c22f15540928d560fdceb57e25d4af9808db36c0e317ade234e2af7debcd0dd->leave($__internal_1c22f15540928d560fdceb57e25d4af9808db36c0e317ade234e2af7debcd0dd_prof);

        
        $__internal_494472b9a12fc1cb1cd90c98f435747e6741f8cd3a7dcc2195b19568fbfe96ca->leave($__internal_494472b9a12fc1cb1cd90c98f435747e6741f8cd3a7dcc2195b19568fbfe96ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9dafb07affd50f07284ba6df5cbbbd386cbd556d12bf5022107725d8c42db09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dafb07affd50f07284ba6df5cbbbd386cbd556d12bf5022107725d8c42db09->enter($__internal_a9dafb07affd50f07284ba6df5cbbbd386cbd556d12bf5022107725d8c42db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84e3d205114cf0aafbcb2177027486631f7cff43ca25c2d121f0df6590ab48db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e3d205114cf0aafbcb2177027486631f7cff43ca25c2d121f0df6590ab48db->enter($__internal_84e3d205114cf0aafbcb2177027486631f7cff43ca25c2d121f0df6590ab48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Centre Médic Triage";
        
        $__internal_84e3d205114cf0aafbcb2177027486631f7cff43ca25c2d121f0df6590ab48db->leave($__internal_84e3d205114cf0aafbcb2177027486631f7cff43ca25c2d121f0df6590ab48db_prof);

        
        $__internal_a9dafb07affd50f07284ba6df5cbbbd386cbd556d12bf5022107725d8c42db09->leave($__internal_a9dafb07affd50f07284ba6df5cbbbd386cbd556d12bf5022107725d8c42db09_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65d57f1490e6a876f9893640870af423000f972864e8e7863c40cb402e5db4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d57f1490e6a876f9893640870af423000f972864e8e7863c40cb402e5db4f3->enter($__internal_65d57f1490e6a876f9893640870af423000f972864e8e7863c40cb402e5db4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_664987abce88cc141c31ebe9c437ff2fe8cb38282c9bd83645637d0d820e31d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664987abce88cc141c31ebe9c437ff2fe8cb38282c9bd83645637d0d820e31d5->enter($__internal_664987abce88cc141c31ebe9c437ff2fe8cb38282c9bd83645637d0d820e31d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_664987abce88cc141c31ebe9c437ff2fe8cb38282c9bd83645637d0d820e31d5->leave($__internal_664987abce88cc141c31ebe9c437ff2fe8cb38282c9bd83645637d0d820e31d5_prof);

        
        $__internal_65d57f1490e6a876f9893640870af423000f972864e8e7863c40cb402e5db4f3->leave($__internal_65d57f1490e6a876f9893640870af423000f972864e8e7863c40cb402e5db4f3_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c5c89a29c56a1bc043c98107fbe574ba0f3974a6c60d9ac4d9b852c165ce73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c5c89a29c56a1bc043c98107fbe574ba0f3974a6c60d9ac4d9b852c165ce73->enter($__internal_a0c5c89a29c56a1bc043c98107fbe574ba0f3974a6c60d9ac4d9b852c165ce73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56ff0beb729bfb96eb84a40ecc86275f0037c4a3d702bc39030cc6438678169f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ff0beb729bfb96eb84a40ecc86275f0037c4a3d702bc39030cc6438678169f->enter($__internal_56ff0beb729bfb96eb84a40ecc86275f0037c4a3d702bc39030cc6438678169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56ff0beb729bfb96eb84a40ecc86275f0037c4a3d702bc39030cc6438678169f->leave($__internal_56ff0beb729bfb96eb84a40ecc86275f0037c4a3d702bc39030cc6438678169f_prof);

        
        $__internal_a0c5c89a29c56a1bc043c98107fbe574ba0f3974a6c60d9ac4d9b852c165ce73->leave($__internal_a0c5c89a29c56a1bc043c98107fbe574ba0f3974a6c60d9ac4d9b852c165ce73_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_48d1aea92e51544fa954f6e6c88ced267150ab47530792b3152eb4eb8aecaa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d1aea92e51544fa954f6e6c88ced267150ab47530792b3152eb4eb8aecaa2d->enter($__internal_48d1aea92e51544fa954f6e6c88ced267150ab47530792b3152eb4eb8aecaa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6cea8a3bbd7850d05c94b9f4ce85dbe4a44e9eb7a4769f2ac8ca1e7155aa8ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cea8a3bbd7850d05c94b9f4ce85dbe4a44e9eb7a4769f2ac8ca1e7155aa8ad0->enter($__internal_6cea8a3bbd7850d05c94b9f4ce85dbe4a44e9eb7a4769f2ac8ca1e7155aa8ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_6cea8a3bbd7850d05c94b9f4ce85dbe4a44e9eb7a4769f2ac8ca1e7155aa8ad0->leave($__internal_6cea8a3bbd7850d05c94b9f4ce85dbe4a44e9eb7a4769f2ac8ca1e7155aa8ad0_prof);

        
        $__internal_48d1aea92e51544fa954f6e6c88ced267150ab47530792b3152eb4eb8aecaa2d->leave($__internal_48d1aea92e51544fa954f6e6c88ced267150ab47530792b3152eb4eb8aecaa2d_prof);

    }

    // line 60
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ec6e50722f508f8a856ef45bf27a78c6df217877ae82ced52ce0f01e4e1a3ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6e50722f508f8a856ef45bf27a78c6df217877ae82ced52ce0f01e4e1a3ec1->enter($__internal_ec6e50722f508f8a856ef45bf27a78c6df217877ae82ced52ce0f01e4e1a3ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_9013c810cc1c837ecf3abca4f72fb8620292cfbfc9b47dc7cb40e6b4790379e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9013c810cc1c837ecf3abca4f72fb8620292cfbfc9b47dc7cb40e6b4790379e6->enter($__internal_9013c810cc1c837ecf3abca4f72fb8620292cfbfc9b47dc7cb40e6b4790379e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 61
        echo "            <!-- Page Content -->
            <div class=\"container\">
        <h1> Wellcome to Medical Center Administration</h1>
            <!-- /.container -->
            </div>
        ";
        
        $__internal_9013c810cc1c837ecf3abca4f72fb8620292cfbfc9b47dc7cb40e6b4790379e6->leave($__internal_9013c810cc1c837ecf3abca4f72fb8620292cfbfc9b47dc7cb40e6b4790379e6_prof);

        
        $__internal_ec6e50722f508f8a856ef45bf27a78c6df217877ae82ced52ce0f01e4e1a3ec1->leave($__internal_ec6e50722f508f8a856ef45bf27a78c6df217877ae82ced52ce0f01e4e1a3ec1_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11f9e972774c8a94e7d7f730ae1469055ce1f771689d212e3f84d5ac461cc3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f9e972774c8a94e7d7f730ae1469055ce1f771689d212e3f84d5ac461cc3ab->enter($__internal_11f9e972774c8a94e7d7f730ae1469055ce1f771689d212e3f84d5ac461cc3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b02cbf3961bd1ea8e3401e6a9ef07f311b2750558f098a0f52e15b8fb4f00479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02cbf3961bd1ea8e3401e6a9ef07f311b2750558f098a0f52e15b8fb4f00479->enter($__internal_b02cbf3961bd1ea8e3401e6a9ef07f311b2750558f098a0f52e15b8fb4f00479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b02cbf3961bd1ea8e3401e6a9ef07f311b2750558f098a0f52e15b8fb4f00479->leave($__internal_b02cbf3961bd1ea8e3401e6a9ef07f311b2750558f098a0f52e15b8fb4f00479_prof);

        
        $__internal_11f9e972774c8a94e7d7f730ae1469055ce1f771689d212e3f84d5ac461cc3ab->leave($__internal_11f9e972774c8a94e7d7f730ae1469055ce1f771689d212e3f84d5ac461cc3ab_prof);

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
", "FrontBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
