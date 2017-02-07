<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e80be7c53eadee7891733299361a41a2526bc51087d488cf51194cc48f923be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e80be7c53eadee7891733299361a41a2526bc51087d488cf51194cc48f923be->enter($__internal_0e80be7c53eadee7891733299361a41a2526bc51087d488cf51194cc48f923be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1a4e843009ae99928488617392020b84e7e5f8c840cd0d8893df5caf17f82a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4e843009ae99928488617392020b84e7e5f8c840cd0d8893df5caf17f82a13->enter($__internal_1a4e843009ae99928488617392020b84e7e5f8c840cd0d8893df5caf17f82a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e80be7c53eadee7891733299361a41a2526bc51087d488cf51194cc48f923be->leave($__internal_0e80be7c53eadee7891733299361a41a2526bc51087d488cf51194cc48f923be_prof);

        
        $__internal_1a4e843009ae99928488617392020b84e7e5f8c840cd0d8893df5caf17f82a13->leave($__internal_1a4e843009ae99928488617392020b84e7e5f8c840cd0d8893df5caf17f82a13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be0367621ba4e4ecafef351f99b22fcb94db9ad8a841c2d1f06f5a5307c3c6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0367621ba4e4ecafef351f99b22fcb94db9ad8a841c2d1f06f5a5307c3c6e1->enter($__internal_be0367621ba4e4ecafef351f99b22fcb94db9ad8a841c2d1f06f5a5307c3c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcc5d187f4177ad9ec5f5076de400ee196eb5dd9b229c0396341ab5b1277101a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc5d187f4177ad9ec5f5076de400ee196eb5dd9b229c0396341ab5b1277101a->enter($__internal_bcc5d187f4177ad9ec5f5076de400ee196eb5dd9b229c0396341ab5b1277101a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bcc5d187f4177ad9ec5f5076de400ee196eb5dd9b229c0396341ab5b1277101a->leave($__internal_bcc5d187f4177ad9ec5f5076de400ee196eb5dd9b229c0396341ab5b1277101a_prof);

        
        $__internal_be0367621ba4e4ecafef351f99b22fcb94db9ad8a841c2d1f06f5a5307c3c6e1->leave($__internal_be0367621ba4e4ecafef351f99b22fcb94db9ad8a841c2d1f06f5a5307c3c6e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f94870e54db2ce6c1cbaa865f123f1d4b2dcb8d28e04ca6bc411543f37ea2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f94870e54db2ce6c1cbaa865f123f1d4b2dcb8d28e04ca6bc411543f37ea2e8->enter($__internal_7f94870e54db2ce6c1cbaa865f123f1d4b2dcb8d28e04ca6bc411543f37ea2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4acf217d059bfe612e457426b0d3be498e6d57a5582c1fbf6a5a2baa1183a72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acf217d059bfe612e457426b0d3be498e6d57a5582c1fbf6a5a2baa1183a72f->enter($__internal_4acf217d059bfe612e457426b0d3be498e6d57a5582c1fbf6a5a2baa1183a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4acf217d059bfe612e457426b0d3be498e6d57a5582c1fbf6a5a2baa1183a72f->leave($__internal_4acf217d059bfe612e457426b0d3be498e6d57a5582c1fbf6a5a2baa1183a72f_prof);

        
        $__internal_7f94870e54db2ce6c1cbaa865f123f1d4b2dcb8d28e04ca6bc411543f37ea2e8->leave($__internal_7f94870e54db2ce6c1cbaa865f123f1d4b2dcb8d28e04ca6bc411543f37ea2e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0b79747b66318f40dd7c88a7e6b9a2aae730c159023453bce98d8704d9c207c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b79747b66318f40dd7c88a7e6b9a2aae730c159023453bce98d8704d9c207c->enter($__internal_b0b79747b66318f40dd7c88a7e6b9a2aae730c159023453bce98d8704d9c207c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9caf59950b4275ec585f588a7ecb56600c71a329fee5202d8cc7943f50146eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caf59950b4275ec585f588a7ecb56600c71a329fee5202d8cc7943f50146eaa->enter($__internal_9caf59950b4275ec585f588a7ecb56600c71a329fee5202d8cc7943f50146eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9caf59950b4275ec585f588a7ecb56600c71a329fee5202d8cc7943f50146eaa->leave($__internal_9caf59950b4275ec585f588a7ecb56600c71a329fee5202d8cc7943f50146eaa_prof);

        
        $__internal_b0b79747b66318f40dd7c88a7e6b9a2aae730c159023453bce98d8704d9c207c->leave($__internal_b0b79747b66318f40dd7c88a7e6b9a2aae730c159023453bce98d8704d9c207c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
