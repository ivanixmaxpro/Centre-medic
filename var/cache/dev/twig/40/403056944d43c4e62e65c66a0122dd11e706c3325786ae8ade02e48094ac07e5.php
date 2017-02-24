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
        $__internal_8bc6297871349d17ba8b86580cd702570416a02a8b53cd4c104a55d4fdcebb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc6297871349d17ba8b86580cd702570416a02a8b53cd4c104a55d4fdcebb51->enter($__internal_8bc6297871349d17ba8b86580cd702570416a02a8b53cd4c104a55d4fdcebb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fd347d320924b4d45361e00c862c287e3e864a51e5df85779ce42647d49854e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd347d320924b4d45361e00c862c287e3e864a51e5df85779ce42647d49854e7->enter($__internal_fd347d320924b4d45361e00c862c287e3e864a51e5df85779ce42647d49854e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc6297871349d17ba8b86580cd702570416a02a8b53cd4c104a55d4fdcebb51->leave($__internal_8bc6297871349d17ba8b86580cd702570416a02a8b53cd4c104a55d4fdcebb51_prof);

        
        $__internal_fd347d320924b4d45361e00c862c287e3e864a51e5df85779ce42647d49854e7->leave($__internal_fd347d320924b4d45361e00c862c287e3e864a51e5df85779ce42647d49854e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6383ee83bb6896372c97045e72858b137acd88ebb3a8d39ddd6998aa72907c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6383ee83bb6896372c97045e72858b137acd88ebb3a8d39ddd6998aa72907c6->enter($__internal_e6383ee83bb6896372c97045e72858b137acd88ebb3a8d39ddd6998aa72907c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_301bb489dedff646475483bda18c0b3e27176a193d3daf669766a95849a99e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301bb489dedff646475483bda18c0b3e27176a193d3daf669766a95849a99e79->enter($__internal_301bb489dedff646475483bda18c0b3e27176a193d3daf669766a95849a99e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_301bb489dedff646475483bda18c0b3e27176a193d3daf669766a95849a99e79->leave($__internal_301bb489dedff646475483bda18c0b3e27176a193d3daf669766a95849a99e79_prof);

        
        $__internal_e6383ee83bb6896372c97045e72858b137acd88ebb3a8d39ddd6998aa72907c6->leave($__internal_e6383ee83bb6896372c97045e72858b137acd88ebb3a8d39ddd6998aa72907c6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75db9aa90078ced92348447393e72e8f25729a6f2e8a2a0021a478e1456760bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75db9aa90078ced92348447393e72e8f25729a6f2e8a2a0021a478e1456760bf->enter($__internal_75db9aa90078ced92348447393e72e8f25729a6f2e8a2a0021a478e1456760bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e702ad37d8d8139f35c99371f689a0bac74e1ac23d23c4293acb7ea580e19ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e702ad37d8d8139f35c99371f689a0bac74e1ac23d23c4293acb7ea580e19ca->enter($__internal_6e702ad37d8d8139f35c99371f689a0bac74e1ac23d23c4293acb7ea580e19ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6e702ad37d8d8139f35c99371f689a0bac74e1ac23d23c4293acb7ea580e19ca->leave($__internal_6e702ad37d8d8139f35c99371f689a0bac74e1ac23d23c4293acb7ea580e19ca_prof);

        
        $__internal_75db9aa90078ced92348447393e72e8f25729a6f2e8a2a0021a478e1456760bf->leave($__internal_75db9aa90078ced92348447393e72e8f25729a6f2e8a2a0021a478e1456760bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd221b61f8365e53d7d51bcd91ce4ec5a5446cfb8bb7e6bc9f3c3125f5497f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd221b61f8365e53d7d51bcd91ce4ec5a5446cfb8bb7e6bc9f3c3125f5497f65->enter($__internal_cd221b61f8365e53d7d51bcd91ce4ec5a5446cfb8bb7e6bc9f3c3125f5497f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_718b92f69d52190dd8b52acd483f0162d7f488a0526d3eb36081f210d0c316e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718b92f69d52190dd8b52acd483f0162d7f488a0526d3eb36081f210d0c316e1->enter($__internal_718b92f69d52190dd8b52acd483f0162d7f488a0526d3eb36081f210d0c316e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_718b92f69d52190dd8b52acd483f0162d7f488a0526d3eb36081f210d0c316e1->leave($__internal_718b92f69d52190dd8b52acd483f0162d7f488a0526d3eb36081f210d0c316e1_prof);

        
        $__internal_cd221b61f8365e53d7d51bcd91ce4ec5a5446cfb8bb7e6bc9f3c3125f5497f65->leave($__internal_cd221b61f8365e53d7d51bcd91ce4ec5a5446cfb8bb7e6bc9f3c3125f5497f65_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
