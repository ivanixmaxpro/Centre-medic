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
        $__internal_d1c6a9ada3378c3a8755bd7a4830f8d509aa188fc7b8b62447b6231a8eb2ed14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c6a9ada3378c3a8755bd7a4830f8d509aa188fc7b8b62447b6231a8eb2ed14->enter($__internal_d1c6a9ada3378c3a8755bd7a4830f8d509aa188fc7b8b62447b6231a8eb2ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dab8c4ecbc990b60ee0aa8da89532b26ea91a6316218255a8c9cf2d8e0f23ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab8c4ecbc990b60ee0aa8da89532b26ea91a6316218255a8c9cf2d8e0f23ed9->enter($__internal_dab8c4ecbc990b60ee0aa8da89532b26ea91a6316218255a8c9cf2d8e0f23ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c6a9ada3378c3a8755bd7a4830f8d509aa188fc7b8b62447b6231a8eb2ed14->leave($__internal_d1c6a9ada3378c3a8755bd7a4830f8d509aa188fc7b8b62447b6231a8eb2ed14_prof);

        
        $__internal_dab8c4ecbc990b60ee0aa8da89532b26ea91a6316218255a8c9cf2d8e0f23ed9->leave($__internal_dab8c4ecbc990b60ee0aa8da89532b26ea91a6316218255a8c9cf2d8e0f23ed9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d6f8b3a6f79e792080a5c9a57bf22770287c3c5bc0133b465c1c31622cc86a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6f8b3a6f79e792080a5c9a57bf22770287c3c5bc0133b465c1c31622cc86a5->enter($__internal_1d6f8b3a6f79e792080a5c9a57bf22770287c3c5bc0133b465c1c31622cc86a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_560a537951c2f75a627419a7d434f55e9e1ac564e9c0f6d698193625f6d9802b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560a537951c2f75a627419a7d434f55e9e1ac564e9c0f6d698193625f6d9802b->enter($__internal_560a537951c2f75a627419a7d434f55e9e1ac564e9c0f6d698193625f6d9802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_560a537951c2f75a627419a7d434f55e9e1ac564e9c0f6d698193625f6d9802b->leave($__internal_560a537951c2f75a627419a7d434f55e9e1ac564e9c0f6d698193625f6d9802b_prof);

        
        $__internal_1d6f8b3a6f79e792080a5c9a57bf22770287c3c5bc0133b465c1c31622cc86a5->leave($__internal_1d6f8b3a6f79e792080a5c9a57bf22770287c3c5bc0133b465c1c31622cc86a5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96b7cce70e2f9ca5763ce14cce4c2337faa4cb6c199e082e14b51a1afd2c175f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b7cce70e2f9ca5763ce14cce4c2337faa4cb6c199e082e14b51a1afd2c175f->enter($__internal_96b7cce70e2f9ca5763ce14cce4c2337faa4cb6c199e082e14b51a1afd2c175f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af83a6b6ad5b3373f94a383ef44eba74193e6847f5eb33fd5b99bd497f8183f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af83a6b6ad5b3373f94a383ef44eba74193e6847f5eb33fd5b99bd497f8183f3->enter($__internal_af83a6b6ad5b3373f94a383ef44eba74193e6847f5eb33fd5b99bd497f8183f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af83a6b6ad5b3373f94a383ef44eba74193e6847f5eb33fd5b99bd497f8183f3->leave($__internal_af83a6b6ad5b3373f94a383ef44eba74193e6847f5eb33fd5b99bd497f8183f3_prof);

        
        $__internal_96b7cce70e2f9ca5763ce14cce4c2337faa4cb6c199e082e14b51a1afd2c175f->leave($__internal_96b7cce70e2f9ca5763ce14cce4c2337faa4cb6c199e082e14b51a1afd2c175f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e422b759fb8f845df58f5a5bc39bc2dde136adf41b6fa71cfc7b4e3e3bd0a99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e422b759fb8f845df58f5a5bc39bc2dde136adf41b6fa71cfc7b4e3e3bd0a99d->enter($__internal_e422b759fb8f845df58f5a5bc39bc2dde136adf41b6fa71cfc7b4e3e3bd0a99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82c7009072311bbc0c4389ce4bf678ed1270a30060d6ac9a911d37cedd0fd734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c7009072311bbc0c4389ce4bf678ed1270a30060d6ac9a911d37cedd0fd734->enter($__internal_82c7009072311bbc0c4389ce4bf678ed1270a30060d6ac9a911d37cedd0fd734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82c7009072311bbc0c4389ce4bf678ed1270a30060d6ac9a911d37cedd0fd734->leave($__internal_82c7009072311bbc0c4389ce4bf678ed1270a30060d6ac9a911d37cedd0fd734_prof);

        
        $__internal_e422b759fb8f845df58f5a5bc39bc2dde136adf41b6fa71cfc7b4e3e3bd0a99d->leave($__internal_e422b759fb8f845df58f5a5bc39bc2dde136adf41b6fa71cfc7b4e3e3bd0a99d_prof);

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
