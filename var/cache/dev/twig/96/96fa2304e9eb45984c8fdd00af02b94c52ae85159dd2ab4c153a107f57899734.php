<?php

/* FrontBundle:Default:metges.html.twig */
class __TwigTemplate_ebdda32f74d34e38339cbbc62f6d41ea2aa6e6c040703565c70b231ae4728112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:metges.html.twig", 1);
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
        $__internal_2ecc1e0e6f253bf3bac54ae2b26707ce3d68cf8c74def8f98f26d9c41058fce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecc1e0e6f253bf3bac54ae2b26707ce3d68cf8c74def8f98f26d9c41058fce8->enter($__internal_2ecc1e0e6f253bf3bac54ae2b26707ce3d68cf8c74def8f98f26d9c41058fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_a02c8d2d32ec002079e81299493b1a23a2976af47a8f86c802295f8155c7321c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02c8d2d32ec002079e81299493b1a23a2976af47a8f86c802295f8155c7321c->enter($__internal_a02c8d2d32ec002079e81299493b1a23a2976af47a8f86c802295f8155c7321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecc1e0e6f253bf3bac54ae2b26707ce3d68cf8c74def8f98f26d9c41058fce8->leave($__internal_2ecc1e0e6f253bf3bac54ae2b26707ce3d68cf8c74def8f98f26d9c41058fce8_prof);

        
        $__internal_a02c8d2d32ec002079e81299493b1a23a2976af47a8f86c802295f8155c7321c->leave($__internal_a02c8d2d32ec002079e81299493b1a23a2976af47a8f86c802295f8155c7321c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a48bb810ffc89e762b008774652b383f4df4e2521e95530ec626d2adbea5db76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48bb810ffc89e762b008774652b383f4df4e2521e95530ec626d2adbea5db76->enter($__internal_a48bb810ffc89e762b008774652b383f4df4e2521e95530ec626d2adbea5db76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dda8727e47bf988753ff23376f443530e66a6250bdd7839d12f64aa58e7b58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dda8727e47bf988753ff23376f443530e66a6250bdd7839d12f64aa58e7b58e->enter($__internal_5dda8727e47bf988753ff23376f443530e66a6250bdd7839d12f64aa58e7b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_5dda8727e47bf988753ff23376f443530e66a6250bdd7839d12f64aa58e7b58e->leave($__internal_5dda8727e47bf988753ff23376f443530e66a6250bdd7839d12f64aa58e7b58e_prof);

        
        $__internal_a48bb810ffc89e762b008774652b383f4df4e2521e95530ec626d2adbea5db76->leave($__internal_a48bb810ffc89e762b008774652b383f4df4e2521e95530ec626d2adbea5db76_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_25968937663bcc2ddf732d31b78f0df38556d3d707bb78bff243b51878a382ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25968937663bcc2ddf732d31b78f0df38556d3d707bb78bff243b51878a382ff->enter($__internal_25968937663bcc2ddf732d31b78f0df38556d3d707bb78bff243b51878a382ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8d1baedcd2e08f6934635b876d47c191224918036188f2fb5462bc79c21292dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1baedcd2e08f6934635b876d47c191224918036188f2fb5462bc79c21292dd->enter($__internal_8d1baedcd2e08f6934635b876d47c191224918036188f2fb5462bc79c21292dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Llista metges</h1>
                <p>aqui anira la seccio de metges, es podra seleccionar per especialitat</p>
            </div>
        </div>
    </div>
";
        
        $__internal_8d1baedcd2e08f6934635b876d47c191224918036188f2fb5462bc79c21292dd->leave($__internal_8d1baedcd2e08f6934635b876d47c191224918036188f2fb5462bc79c21292dd_prof);

        
        $__internal_25968937663bcc2ddf732d31b78f0df38556d3d707bb78bff243b51878a382ff->leave($__internal_25968937663bcc2ddf732d31b78f0df38556d3d707bb78bff243b51878a382ff_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:metges.html.twig";
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
{% block title %}Metges{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Llista metges</h1>
                <p>aqui anira la seccio de metges, es podra seleccionar per especialitat</p>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:metges.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/metges.html.twig");
    }
}
