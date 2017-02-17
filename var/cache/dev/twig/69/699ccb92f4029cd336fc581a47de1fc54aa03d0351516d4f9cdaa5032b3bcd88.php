<?php

/* FrontBundle:Default:index.html.twig  */
class __TwigTemplate_a51cba459752483ec0ec07bf51aa6df6954a76744e30943eab4809d11aac076b extends Twig_Template
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
        $__internal_202cf20f80d05259437fbc63681fad1043ebf098a7ff71c1a35b24a8b40034a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202cf20f80d05259437fbc63681fad1043ebf098a7ff71c1a35b24a8b40034a6->enter($__internal_202cf20f80d05259437fbc63681fad1043ebf098a7ff71c1a35b24a8b40034a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig "));

        $__internal_e5526daebffa27ce0536b47857ec1c08b78ea9bed673089c354285566640406f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5526daebffa27ce0536b47857ec1c08b78ea9bed673089c354285566640406f->enter($__internal_e5526daebffa27ce0536b47857ec1c08b78ea9bed673089c354285566640406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig "));

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
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "
</body>

</html>
";
        
        $__internal_202cf20f80d05259437fbc63681fad1043ebf098a7ff71c1a35b24a8b40034a6->leave($__internal_202cf20f80d05259437fbc63681fad1043ebf098a7ff71c1a35b24a8b40034a6_prof);

        
        $__internal_e5526daebffa27ce0536b47857ec1c08b78ea9bed673089c354285566640406f->leave($__internal_e5526daebffa27ce0536b47857ec1c08b78ea9bed673089c354285566640406f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86581e2faf60979c0e412785a53fe087aba6ef35ab0843b686e5ef013fd50981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86581e2faf60979c0e412785a53fe087aba6ef35ab0843b686e5ef013fd50981->enter($__internal_86581e2faf60979c0e412785a53fe087aba6ef35ab0843b686e5ef013fd50981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85cb2fc19c404f9103dc2d5e9b5895ac8555c20332baa1f8875aa1077af56249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cb2fc19c404f9103dc2d5e9b5895ac8555c20332baa1f8875aa1077af56249->enter($__internal_85cb2fc19c404f9103dc2d5e9b5895ac8555c20332baa1f8875aa1077af56249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Centre Médic Triage";
        
        $__internal_85cb2fc19c404f9103dc2d5e9b5895ac8555c20332baa1f8875aa1077af56249->leave($__internal_85cb2fc19c404f9103dc2d5e9b5895ac8555c20332baa1f8875aa1077af56249_prof);

        
        $__internal_86581e2faf60979c0e412785a53fe087aba6ef35ab0843b686e5ef013fd50981->leave($__internal_86581e2faf60979c0e412785a53fe087aba6ef35ab0843b686e5ef013fd50981_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_929e7ea01293a35beac4bd5e171817a9004709746c8252742ade9f1bcc8da9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929e7ea01293a35beac4bd5e171817a9004709746c8252742ade9f1bcc8da9dd->enter($__internal_929e7ea01293a35beac4bd5e171817a9004709746c8252742ade9f1bcc8da9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c35da4397506f6b05941f5b24d9791e1a8cb4912933496f7f391d859657579fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35da4397506f6b05941f5b24d9791e1a8cb4912933496f7f391d859657579fc->enter($__internal_c35da4397506f6b05941f5b24d9791e1a8cb4912933496f7f391d859657579fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c35da4397506f6b05941f5b24d9791e1a8cb4912933496f7f391d859657579fc->leave($__internal_c35da4397506f6b05941f5b24d9791e1a8cb4912933496f7f391d859657579fc_prof);

        
        $__internal_929e7ea01293a35beac4bd5e171817a9004709746c8252742ade9f1bcc8da9dd->leave($__internal_929e7ea01293a35beac4bd5e171817a9004709746c8252742ade9f1bcc8da9dd_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a04a9b185434b5538d86fee5a7e07ff4b6915afaa76ee201b017f6fbd886131a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04a9b185434b5538d86fee5a7e07ff4b6915afaa76ee201b017f6fbd886131a->enter($__internal_a04a9b185434b5538d86fee5a7e07ff4b6915afaa76ee201b017f6fbd886131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d126f0be023b31d2fb1c1ccf313e43dfa5f7675ba16519f5982f799bc976223d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d126f0be023b31d2fb1c1ccf313e43dfa5f7675ba16519f5982f799bc976223d->enter($__internal_d126f0be023b31d2fb1c1ccf313e43dfa5f7675ba16519f5982f799bc976223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('page_content', $context, $blocks);
        // line 65
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
        
        $__internal_d126f0be023b31d2fb1c1ccf313e43dfa5f7675ba16519f5982f799bc976223d->leave($__internal_d126f0be023b31d2fb1c1ccf313e43dfa5f7675ba16519f5982f799bc976223d_prof);

        
        $__internal_a04a9b185434b5538d86fee5a7e07ff4b6915afaa76ee201b017f6fbd886131a->leave($__internal_a04a9b185434b5538d86fee5a7e07ff4b6915afaa76ee201b017f6fbd886131a_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b5e5c84a8a45e9b9d8c89b657ae4aa7214b36c2b0b78d5fd49a064148e1f53f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e5c84a8a45e9b9d8c89b657ae4aa7214b36c2b0b78d5fd49a064148e1f53f8->enter($__internal_b5e5c84a8a45e9b9d8c89b657ae4aa7214b36c2b0b78d5fd49a064148e1f53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_0345e8f1469eae0a698cebdd92551aa670b37f6a3e2afef390aec55fa2ee7d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0345e8f1469eae0a698cebdd92551aa670b37f6a3e2afef390aec55fa2ee7d95->enter($__internal_0345e8f1469eae0a698cebdd92551aa670b37f6a3e2afef390aec55fa2ee7d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_medic_front_login");
        echo "\">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_0345e8f1469eae0a698cebdd92551aa670b37f6a3e2afef390aec55fa2ee7d95->leave($__internal_0345e8f1469eae0a698cebdd92551aa670b37f6a3e2afef390aec55fa2ee7d95_prof);

        
        $__internal_b5e5c84a8a45e9b9d8c89b657ae4aa7214b36c2b0b78d5fd49a064148e1f53f8->leave($__internal_b5e5c84a8a45e9b9d8c89b657ae4aa7214b36c2b0b78d5fd49a064148e1f53f8_prof);

    }

    // line 60
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2127be97db88f1dc9fdaa157b473809682db7d773043234fce6f74a299104aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2127be97db88f1dc9fdaa157b473809682db7d773043234fce6f74a299104aff->enter($__internal_2127be97db88f1dc9fdaa157b473809682db7d773043234fce6f74a299104aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_33e52d11c949f966755987cf4b41b9b64538a4d53add20272f40d62612de63f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e52d11c949f966755987cf4b41b9b64538a4d53add20272f40d62612de63f2->enter($__internal_33e52d11c949f966755987cf4b41b9b64538a4d53add20272f40d62612de63f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 61
        echo "            <!-- Page Content -->
        <h1> Wellcome to Medical Center Administration</h1>
            <!-- /.container -->
        ";
        
        $__internal_33e52d11c949f966755987cf4b41b9b64538a4d53add20272f40d62612de63f2->leave($__internal_33e52d11c949f966755987cf4b41b9b64538a4d53add20272f40d62612de63f2_prof);

        
        $__internal_2127be97db88f1dc9fdaa157b473809682db7d773043234fce6f74a299104aff->leave($__internal_2127be97db88f1dc9fdaa157b473809682db7d773043234fce6f74a299104aff_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f7cb8b840ad5974744cf5795c0b47f02fd600d73c3246c2df74f6c36dc52f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7cb8b840ad5974744cf5795c0b47f02fd600d73c3246c2df74f6c36dc52f70->enter($__internal_7f7cb8b840ad5974744cf5795c0b47f02fd600d73c3246c2df74f6c36dc52f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfcae31435fc6b6c82b764f2206a1f32bc933d05c7f7b5903ac5391841111978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcae31435fc6b6c82b764f2206a1f32bc933d05c7f7b5903ac5391841111978->enter($__internal_cfcae31435fc6b6c82b764f2206a1f32bc933d05c7f7b5903ac5391841111978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_cfcae31435fc6b6c82b764f2206a1f32bc933d05c7f7b5903ac5391841111978->leave($__internal_cfcae31435fc6b6c82b764f2206a1f32bc933d05c7f7b5903ac5391841111978_prof);

        
        $__internal_7f7cb8b840ad5974744cf5795c0b47f02fd600d73c3246c2df74f6c36dc52f70->leave($__internal_7f7cb8b840ad5974744cf5795c0b47f02fd600d73c3246c2df74f6c36dc52f70_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig ";
    }

    public function getDebugInfo()
    {
        return array (  268 => 85,  262 => 82,  259 => 81,  250 => 80,  237 => 61,  228 => 60,  209 => 50,  203 => 47,  197 => 44,  188 => 38,  175 => 27,  166 => 26,  143 => 65,  141 => 60,  138 => 59,  135 => 26,  126 => 25,  107 => 13,  101 => 10,  98 => 9,  89 => 8,  71 => 7,  57 => 87,  55 => 80,  52 => 79,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
                                <a href=\"{{ path('centre_medic_front_login') }}\">Login</a>
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
        <h1> Wellcome to Medical Center Administration</h1>
            <!-- /.container -->
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
", "FrontBundle:Default:index.html.twig ", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/index.html.twig ");
    }
}
