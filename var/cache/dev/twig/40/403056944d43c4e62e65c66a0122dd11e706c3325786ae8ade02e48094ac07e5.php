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
        $__internal_5a37709421a200d2068459c3f3f5919a8b005fa0d0043dd6746a7d1cedf93809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a37709421a200d2068459c3f3f5919a8b005fa0d0043dd6746a7d1cedf93809->enter($__internal_5a37709421a200d2068459c3f3f5919a8b005fa0d0043dd6746a7d1cedf93809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d266eef1108ed6708aa1a7c81d5a3e6ee4da5feb7822cc43cda338ee4135106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d266eef1108ed6708aa1a7c81d5a3e6ee4da5feb7822cc43cda338ee4135106->enter($__internal_9d266eef1108ed6708aa1a7c81d5a3e6ee4da5feb7822cc43cda338ee4135106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a37709421a200d2068459c3f3f5919a8b005fa0d0043dd6746a7d1cedf93809->leave($__internal_5a37709421a200d2068459c3f3f5919a8b005fa0d0043dd6746a7d1cedf93809_prof);

        
        $__internal_9d266eef1108ed6708aa1a7c81d5a3e6ee4da5feb7822cc43cda338ee4135106->leave($__internal_9d266eef1108ed6708aa1a7c81d5a3e6ee4da5feb7822cc43cda338ee4135106_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46a4a82111f8bf13dced6303a348e36c269be9f57a9738339263bb573680fe55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a4a82111f8bf13dced6303a348e36c269be9f57a9738339263bb573680fe55->enter($__internal_46a4a82111f8bf13dced6303a348e36c269be9f57a9738339263bb573680fe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73c82ee3f1cbff60b0b9e89dad7eb4f762e7a98bc2161aa6683a4c394bcf5597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c82ee3f1cbff60b0b9e89dad7eb4f762e7a98bc2161aa6683a4c394bcf5597->enter($__internal_73c82ee3f1cbff60b0b9e89dad7eb4f762e7a98bc2161aa6683a4c394bcf5597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73c82ee3f1cbff60b0b9e89dad7eb4f762e7a98bc2161aa6683a4c394bcf5597->leave($__internal_73c82ee3f1cbff60b0b9e89dad7eb4f762e7a98bc2161aa6683a4c394bcf5597_prof);

        
        $__internal_46a4a82111f8bf13dced6303a348e36c269be9f57a9738339263bb573680fe55->leave($__internal_46a4a82111f8bf13dced6303a348e36c269be9f57a9738339263bb573680fe55_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dc67722abf66f46c413487df0dd20faf8b5df59f65d8c4659d77ac7b623b62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc67722abf66f46c413487df0dd20faf8b5df59f65d8c4659d77ac7b623b62a->enter($__internal_7dc67722abf66f46c413487df0dd20faf8b5df59f65d8c4659d77ac7b623b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c2ef4ee7149cae87071f427a00d5fafb4783f3822a2ddc356c792db2c14a12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2ef4ee7149cae87071f427a00d5fafb4783f3822a2ddc356c792db2c14a12f->enter($__internal_3c2ef4ee7149cae87071f427a00d5fafb4783f3822a2ddc356c792db2c14a12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3c2ef4ee7149cae87071f427a00d5fafb4783f3822a2ddc356c792db2c14a12f->leave($__internal_3c2ef4ee7149cae87071f427a00d5fafb4783f3822a2ddc356c792db2c14a12f_prof);

        
        $__internal_7dc67722abf66f46c413487df0dd20faf8b5df59f65d8c4659d77ac7b623b62a->leave($__internal_7dc67722abf66f46c413487df0dd20faf8b5df59f65d8c4659d77ac7b623b62a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20657582c9ec4feb0e3da4dec8598c5b60cb2c8ae12bc26ddd37556e646be4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20657582c9ec4feb0e3da4dec8598c5b60cb2c8ae12bc26ddd37556e646be4a9->enter($__internal_20657582c9ec4feb0e3da4dec8598c5b60cb2c8ae12bc26ddd37556e646be4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e44f3dd231ac67943fe4f749395e0655207bece581b038394fb8fe2db2673529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44f3dd231ac67943fe4f749395e0655207bece581b038394fb8fe2db2673529->enter($__internal_e44f3dd231ac67943fe4f749395e0655207bece581b038394fb8fe2db2673529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e44f3dd231ac67943fe4f749395e0655207bece581b038394fb8fe2db2673529->leave($__internal_e44f3dd231ac67943fe4f749395e0655207bece581b038394fb8fe2db2673529_prof);

        
        $__internal_20657582c9ec4feb0e3da4dec8598c5b60cb2c8ae12bc26ddd37556e646be4a9->leave($__internal_20657582c9ec4feb0e3da4dec8598c5b60cb2c8ae12bc26ddd37556e646be4a9_prof);

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
