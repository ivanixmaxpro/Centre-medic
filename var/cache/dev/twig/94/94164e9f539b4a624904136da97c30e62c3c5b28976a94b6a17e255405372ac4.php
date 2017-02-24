<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_af2982b5c1e4760addc8c0d1c0dff381e8cae34d99fc90ccf3f7ced1def5f5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2982b5c1e4760addc8c0d1c0dff381e8cae34d99fc90ccf3f7ced1def5f5fe->enter($__internal_af2982b5c1e4760addc8c0d1c0dff381e8cae34d99fc90ccf3f7ced1def5f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_550e2ddf6bff1fd59100fec408333082cce5e1d5063b2bc95c135a657e8a6413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550e2ddf6bff1fd59100fec408333082cce5e1d5063b2bc95c135a657e8a6413->enter($__internal_550e2ddf6bff1fd59100fec408333082cce5e1d5063b2bc95c135a657e8a6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2982b5c1e4760addc8c0d1c0dff381e8cae34d99fc90ccf3f7ced1def5f5fe->leave($__internal_af2982b5c1e4760addc8c0d1c0dff381e8cae34d99fc90ccf3f7ced1def5f5fe_prof);

        
        $__internal_550e2ddf6bff1fd59100fec408333082cce5e1d5063b2bc95c135a657e8a6413->leave($__internal_550e2ddf6bff1fd59100fec408333082cce5e1d5063b2bc95c135a657e8a6413_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c7409eb149bfa2a41c79609cdcdd5e0d959db27ba6811171bc688f5c4b13c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7409eb149bfa2a41c79609cdcdd5e0d959db27ba6811171bc688f5c4b13c38->enter($__internal_2c7409eb149bfa2a41c79609cdcdd5e0d959db27ba6811171bc688f5c4b13c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e8cdf7f140bd97eb0810da57b8b5101089854eb5a6eb6e4ace0d79b335b9465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8cdf7f140bd97eb0810da57b8b5101089854eb5a6eb6e4ace0d79b335b9465->enter($__internal_3e8cdf7f140bd97eb0810da57b8b5101089854eb5a6eb6e4ace0d79b335b9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e8cdf7f140bd97eb0810da57b8b5101089854eb5a6eb6e4ace0d79b335b9465->leave($__internal_3e8cdf7f140bd97eb0810da57b8b5101089854eb5a6eb6e4ace0d79b335b9465_prof);

        
        $__internal_2c7409eb149bfa2a41c79609cdcdd5e0d959db27ba6811171bc688f5c4b13c38->leave($__internal_2c7409eb149bfa2a41c79609cdcdd5e0d959db27ba6811171bc688f5c4b13c38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41d6eaf54acac70f4db4adf4af8d324f50070babdcedc9170565cb2f12be4b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d6eaf54acac70f4db4adf4af8d324f50070babdcedc9170565cb2f12be4b58->enter($__internal_41d6eaf54acac70f4db4adf4af8d324f50070babdcedc9170565cb2f12be4b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e57320018a6548b35b29da6f86aa559ca4a3f898a33daf276130c5676556975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e57320018a6548b35b29da6f86aa559ca4a3f898a33daf276130c5676556975->enter($__internal_1e57320018a6548b35b29da6f86aa559ca4a3f898a33daf276130c5676556975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e57320018a6548b35b29da6f86aa559ca4a3f898a33daf276130c5676556975->leave($__internal_1e57320018a6548b35b29da6f86aa559ca4a3f898a33daf276130c5676556975_prof);

        
        $__internal_41d6eaf54acac70f4db4adf4af8d324f50070babdcedc9170565cb2f12be4b58->leave($__internal_41d6eaf54acac70f4db4adf4af8d324f50070babdcedc9170565cb2f12be4b58_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ae1ec4713e9072036a6cc2434bb3391b503222e2fd0519f9abd56730aeb77d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae1ec4713e9072036a6cc2434bb3391b503222e2fd0519f9abd56730aeb77d7->enter($__internal_1ae1ec4713e9072036a6cc2434bb3391b503222e2fd0519f9abd56730aeb77d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e095400508b722e6a7eb307adab4adb3d0455dee8d234f0f22d1c27010a83af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e095400508b722e6a7eb307adab4adb3d0455dee8d234f0f22d1c27010a83af->enter($__internal_3e095400508b722e6a7eb307adab4adb3d0455dee8d234f0f22d1c27010a83af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e095400508b722e6a7eb307adab4adb3d0455dee8d234f0f22d1c27010a83af->leave($__internal_3e095400508b722e6a7eb307adab4adb3d0455dee8d234f0f22d1c27010a83af_prof);

        
        $__internal_1ae1ec4713e9072036a6cc2434bb3391b503222e2fd0519f9abd56730aeb77d7->leave($__internal_1ae1ec4713e9072036a6cc2434bb3391b503222e2fd0519f9abd56730aeb77d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
