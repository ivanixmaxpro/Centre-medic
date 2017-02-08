<?php

/* FrontBundle:Default:visites.html.twig */
class __TwigTemplate_8927a73135c5160c7bbbb34d3b5a581aa20095be66955b380210d481bb38a6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:visites.html.twig", 1);
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
        $__internal_4a1f840f264a82b1d6545982affb9519b40eac28d465b62eeea900d638a2744b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1f840f264a82b1d6545982affb9519b40eac28d465b62eeea900d638a2744b->enter($__internal_4a1f840f264a82b1d6545982affb9519b40eac28d465b62eeea900d638a2744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $__internal_266581d519e2d7aee89fa7e0416f0c61a81da78461a770e3427567805203954a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266581d519e2d7aee89fa7e0416f0c61a81da78461a770e3427567805203954a->enter($__internal_266581d519e2d7aee89fa7e0416f0c61a81da78461a770e3427567805203954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1f840f264a82b1d6545982affb9519b40eac28d465b62eeea900d638a2744b->leave($__internal_4a1f840f264a82b1d6545982affb9519b40eac28d465b62eeea900d638a2744b_prof);

        
        $__internal_266581d519e2d7aee89fa7e0416f0c61a81da78461a770e3427567805203954a->leave($__internal_266581d519e2d7aee89fa7e0416f0c61a81da78461a770e3427567805203954a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dafa66ba14a5464e4c5e3f75ffe261253cad8be1e4e97c6c97820622838ed97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dafa66ba14a5464e4c5e3f75ffe261253cad8be1e4e97c6c97820622838ed97->enter($__internal_3dafa66ba14a5464e4c5e3f75ffe261253cad8be1e4e97c6c97820622838ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5921bf7cf7f2227bab2054bc26875d9275773325f74bf8a675e47c800d0abb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5921bf7cf7f2227bab2054bc26875d9275773325f74bf8a675e47c800d0abb71->enter($__internal_5921bf7cf7f2227bab2054bc26875d9275773325f74bf8a675e47c800d0abb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_5921bf7cf7f2227bab2054bc26875d9275773325f74bf8a675e47c800d0abb71->leave($__internal_5921bf7cf7f2227bab2054bc26875d9275773325f74bf8a675e47c800d0abb71_prof);

        
        $__internal_3dafa66ba14a5464e4c5e3f75ffe261253cad8be1e4e97c6c97820622838ed97->leave($__internal_3dafa66ba14a5464e4c5e3f75ffe261253cad8be1e4e97c6c97820622838ed97_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b302fc1c4bc466f22d77c45938875a654d0cde4db48e81e9745b16614a73d016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b302fc1c4bc466f22d77c45938875a654d0cde4db48e81e9745b16614a73d016->enter($__internal_b302fc1c4bc466f22d77c45938875a654d0cde4db48e81e9745b16614a73d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_818f07f7d069354f2e82f6bfd248437aed585d8d29652ec33221048820d97505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818f07f7d069354f2e82f6bfd248437aed585d8d29652ec33221048820d97505->enter($__internal_818f07f7d069354f2e82f6bfd248437aed585d8d29652ec33221048820d97505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>aqui anira la seccio de llista de visites</p>
            </div>
        </div>
    </div>
";
        
        $__internal_818f07f7d069354f2e82f6bfd248437aed585d8d29652ec33221048820d97505->leave($__internal_818f07f7d069354f2e82f6bfd248437aed585d8d29652ec33221048820d97505_prof);

        
        $__internal_b302fc1c4bc466f22d77c45938875a654d0cde4db48e81e9745b16614a73d016->leave($__internal_b302fc1c4bc466f22d77c45938875a654d0cde4db48e81e9745b16614a73d016_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:visites.html.twig";
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
{% block title %}Visites{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>aqui anira la seccio de llista de visites</p>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:visites.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/visites.html.twig");
    }
}
