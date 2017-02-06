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
        $__internal_7c1949d690d914a2ad7caec8e84c10895ded87c12b42fc266e84bbdbc1e9ceb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1949d690d914a2ad7caec8e84c10895ded87c12b42fc266e84bbdbc1e9ceb5->enter($__internal_7c1949d690d914a2ad7caec8e84c10895ded87c12b42fc266e84bbdbc1e9ceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c0c87cc4180716e780e06b0f039c68d794330195113bfaba83a14c950c342784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c87cc4180716e780e06b0f039c68d794330195113bfaba83a14c950c342784->enter($__internal_c0c87cc4180716e780e06b0f039c68d794330195113bfaba83a14c950c342784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1949d690d914a2ad7caec8e84c10895ded87c12b42fc266e84bbdbc1e9ceb5->leave($__internal_7c1949d690d914a2ad7caec8e84c10895ded87c12b42fc266e84bbdbc1e9ceb5_prof);

        
        $__internal_c0c87cc4180716e780e06b0f039c68d794330195113bfaba83a14c950c342784->leave($__internal_c0c87cc4180716e780e06b0f039c68d794330195113bfaba83a14c950c342784_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc896ee880b70ffcea4f3540e131c0d081565aef21821853965e2c1d42c9d95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc896ee880b70ffcea4f3540e131c0d081565aef21821853965e2c1d42c9d95e->enter($__internal_cc896ee880b70ffcea4f3540e131c0d081565aef21821853965e2c1d42c9d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3916c563ed26f9600a8e46cb9d44fa904af6a88f4bf0664c1bcc152b9b572786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3916c563ed26f9600a8e46cb9d44fa904af6a88f4bf0664c1bcc152b9b572786->enter($__internal_3916c563ed26f9600a8e46cb9d44fa904af6a88f4bf0664c1bcc152b9b572786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3916c563ed26f9600a8e46cb9d44fa904af6a88f4bf0664c1bcc152b9b572786->leave($__internal_3916c563ed26f9600a8e46cb9d44fa904af6a88f4bf0664c1bcc152b9b572786_prof);

        
        $__internal_cc896ee880b70ffcea4f3540e131c0d081565aef21821853965e2c1d42c9d95e->leave($__internal_cc896ee880b70ffcea4f3540e131c0d081565aef21821853965e2c1d42c9d95e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d4d9d8b5ebdd0ab41006c376eddb107b1fe4f215675636ca4b093be463d72fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4d9d8b5ebdd0ab41006c376eddb107b1fe4f215675636ca4b093be463d72fa->enter($__internal_1d4d9d8b5ebdd0ab41006c376eddb107b1fe4f215675636ca4b093be463d72fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f5efdfb6b1bba44109335a47d9ad046a7bab8336bd3f0de3ae527b8587eceb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5efdfb6b1bba44109335a47d9ad046a7bab8336bd3f0de3ae527b8587eceb6->enter($__internal_8f5efdfb6b1bba44109335a47d9ad046a7bab8336bd3f0de3ae527b8587eceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8f5efdfb6b1bba44109335a47d9ad046a7bab8336bd3f0de3ae527b8587eceb6->leave($__internal_8f5efdfb6b1bba44109335a47d9ad046a7bab8336bd3f0de3ae527b8587eceb6_prof);

        
        $__internal_1d4d9d8b5ebdd0ab41006c376eddb107b1fe4f215675636ca4b093be463d72fa->leave($__internal_1d4d9d8b5ebdd0ab41006c376eddb107b1fe4f215675636ca4b093be463d72fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04a93a0f419607669d500b2e98c10b12ec883d4b9b68ae664b7d28bf8d13aa87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a93a0f419607669d500b2e98c10b12ec883d4b9b68ae664b7d28bf8d13aa87->enter($__internal_04a93a0f419607669d500b2e98c10b12ec883d4b9b68ae664b7d28bf8d13aa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80a2f9e1d61234545e30a6654d54bd9489c35e6e9b43d6282beb1902cb35f281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a2f9e1d61234545e30a6654d54bd9489c35e6e9b43d6282beb1902cb35f281->enter($__internal_80a2f9e1d61234545e30a6654d54bd9489c35e6e9b43d6282beb1902cb35f281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_80a2f9e1d61234545e30a6654d54bd9489c35e6e9b43d6282beb1902cb35f281->leave($__internal_80a2f9e1d61234545e30a6654d54bd9489c35e6e9b43d6282beb1902cb35f281_prof);

        
        $__internal_04a93a0f419607669d500b2e98c10b12ec883d4b9b68ae664b7d28bf8d13aa87->leave($__internal_04a93a0f419607669d500b2e98c10b12ec883d4b9b68ae664b7d28bf8d13aa87_prof);

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
