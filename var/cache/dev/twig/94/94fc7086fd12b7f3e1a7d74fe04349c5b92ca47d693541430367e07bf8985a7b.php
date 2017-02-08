<?php

/* FrontBundle:Default:login.html.twig */
class __TwigTemplate_ed5bd75c1ac277f6ef2e61cc9f44df3b79b2e8b3da8468a5a9cb59e28195d4f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_100f59ac329fda7c61580a63e23b5c257b9fad685479239df93462789482c023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100f59ac329fda7c61580a63e23b5c257b9fad685479239df93462789482c023->enter($__internal_100f59ac329fda7c61580a63e23b5c257b9fad685479239df93462789482c023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_25b9224f82a4e87cdd84775537df85658c95be4cd55804278afc95a60606ff58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b9224f82a4e87cdd84775537df85658c95be4cd55804278afc95a60606ff58->enter($__internal_25b9224f82a4e87cdd84775537df85658c95be4cd55804278afc95a60606ff58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100f59ac329fda7c61580a63e23b5c257b9fad685479239df93462789482c023->leave($__internal_100f59ac329fda7c61580a63e23b5c257b9fad685479239df93462789482c023_prof);

        
        $__internal_25b9224f82a4e87cdd84775537df85658c95be4cd55804278afc95a60606ff58->leave($__internal_25b9224f82a4e87cdd84775537df85658c95be4cd55804278afc95a60606ff58_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9770d1f388f64ca6027f70dc8055b222c94065751937ba214521419e7c2ad70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9770d1f388f64ca6027f70dc8055b222c94065751937ba214521419e7c2ad70->enter($__internal_a9770d1f388f64ca6027f70dc8055b222c94065751937ba214521419e7c2ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b00779204fd1a4f1eed4513e1c33f81b7baea3f419672ffc7962c7022604377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b00779204fd1a4f1eed4513e1c33f81b7baea3f419672ffc7962c7022604377->enter($__internal_1b00779204fd1a4f1eed4513e1c33f81b7baea3f419672ffc7962c7022604377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_1b00779204fd1a4f1eed4513e1c33f81b7baea3f419672ffc7962c7022604377->leave($__internal_1b00779204fd1a4f1eed4513e1c33f81b7baea3f419672ffc7962c7022604377_prof);

        
        $__internal_a9770d1f388f64ca6027f70dc8055b222c94065751937ba214521419e7c2ad70->leave($__internal_a9770d1f388f64ca6027f70dc8055b222c94065751937ba214521419e7c2ad70_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_da9f8bc8d0c0cca35407e22aa869b4807d9ee37cd526aa18391a951f3ebea192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9f8bc8d0c0cca35407e22aa869b4807d9ee37cd526aa18391a951f3ebea192->enter($__internal_da9f8bc8d0c0cca35407e22aa869b4807d9ee37cd526aa18391a951f3ebea192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_14a6924b2e4b0a95b5cde53272f2f6a61c83af8987a4e2018a3377cb987cd011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a6924b2e4b0a95b5cde53272f2f6a61c83af8987a4e2018a3377cb987cd011->enter($__internal_14a6924b2e4b0a95b5cde53272f2f6a61c83af8987a4e2018a3377cb987cd011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Login</h1>
                <p>aqui anira la seccio de login</p>
            </div>
        </div>
    </div>
";
        
        $__internal_14a6924b2e4b0a95b5cde53272f2f6a61c83af8987a4e2018a3377cb987cd011->leave($__internal_14a6924b2e4b0a95b5cde53272f2f6a61c83af8987a4e2018a3377cb987cd011_prof);

        
        $__internal_da9f8bc8d0c0cca35407e22aa869b4807d9ee37cd526aa18391a951f3ebea192->leave($__internal_da9f8bc8d0c0cca35407e22aa869b4807d9ee37cd526aa18391a951f3ebea192_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle:Default:index.html.twig \" %}
{% block title %}Login{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Login</h1>
                <p>aqui anira la seccio de login</p>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/login.html.twig");
    }
}
