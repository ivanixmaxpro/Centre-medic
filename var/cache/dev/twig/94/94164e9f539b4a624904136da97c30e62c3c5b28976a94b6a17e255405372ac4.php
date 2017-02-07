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
        $__internal_e19fa91cf3217b449d606c1475f8e1892ec499397753c5f5464109efc88ebc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19fa91cf3217b449d606c1475f8e1892ec499397753c5f5464109efc88ebc36->enter($__internal_e19fa91cf3217b449d606c1475f8e1892ec499397753c5f5464109efc88ebc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3af46ce49b68bf775e10a6954a2c5d3fa7a851936938635403236d381ed12bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af46ce49b68bf775e10a6954a2c5d3fa7a851936938635403236d381ed12bbf->enter($__internal_3af46ce49b68bf775e10a6954a2c5d3fa7a851936938635403236d381ed12bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19fa91cf3217b449d606c1475f8e1892ec499397753c5f5464109efc88ebc36->leave($__internal_e19fa91cf3217b449d606c1475f8e1892ec499397753c5f5464109efc88ebc36_prof);

        
        $__internal_3af46ce49b68bf775e10a6954a2c5d3fa7a851936938635403236d381ed12bbf->leave($__internal_3af46ce49b68bf775e10a6954a2c5d3fa7a851936938635403236d381ed12bbf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_919e651fbea485beab9b7735d07c6ec09708ec82d443a3ad756123181fc1ac1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919e651fbea485beab9b7735d07c6ec09708ec82d443a3ad756123181fc1ac1c->enter($__internal_919e651fbea485beab9b7735d07c6ec09708ec82d443a3ad756123181fc1ac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c9a17ba1b178db318e27c3df5f023507b0c621bb5a71efeb59f9759703ee711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9a17ba1b178db318e27c3df5f023507b0c621bb5a71efeb59f9759703ee711->enter($__internal_4c9a17ba1b178db318e27c3df5f023507b0c621bb5a71efeb59f9759703ee711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c9a17ba1b178db318e27c3df5f023507b0c621bb5a71efeb59f9759703ee711->leave($__internal_4c9a17ba1b178db318e27c3df5f023507b0c621bb5a71efeb59f9759703ee711_prof);

        
        $__internal_919e651fbea485beab9b7735d07c6ec09708ec82d443a3ad756123181fc1ac1c->leave($__internal_919e651fbea485beab9b7735d07c6ec09708ec82d443a3ad756123181fc1ac1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6dc686f9bdbd7baf422a35166108d7d4cc12dec2213ee33d8f8d94255bbb6bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc686f9bdbd7baf422a35166108d7d4cc12dec2213ee33d8f8d94255bbb6bb7->enter($__internal_6dc686f9bdbd7baf422a35166108d7d4cc12dec2213ee33d8f8d94255bbb6bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d551864763c897932b8e9f2d06b3a9b6f898102a000e84721c6faee41acabb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d551864763c897932b8e9f2d06b3a9b6f898102a000e84721c6faee41acabb3e->enter($__internal_d551864763c897932b8e9f2d06b3a9b6f898102a000e84721c6faee41acabb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d551864763c897932b8e9f2d06b3a9b6f898102a000e84721c6faee41acabb3e->leave($__internal_d551864763c897932b8e9f2d06b3a9b6f898102a000e84721c6faee41acabb3e_prof);

        
        $__internal_6dc686f9bdbd7baf422a35166108d7d4cc12dec2213ee33d8f8d94255bbb6bb7->leave($__internal_6dc686f9bdbd7baf422a35166108d7d4cc12dec2213ee33d8f8d94255bbb6bb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dad430704044eefd099d05271d9add32b7ee0cf263ca706f38f175773a295502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad430704044eefd099d05271d9add32b7ee0cf263ca706f38f175773a295502->enter($__internal_dad430704044eefd099d05271d9add32b7ee0cf263ca706f38f175773a295502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_979024bdd24b77e8bd7936cf567f53c07c23369a130479b9da117a0dbcecea67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979024bdd24b77e8bd7936cf567f53c07c23369a130479b9da117a0dbcecea67->enter($__internal_979024bdd24b77e8bd7936cf567f53c07c23369a130479b9da117a0dbcecea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_979024bdd24b77e8bd7936cf567f53c07c23369a130479b9da117a0dbcecea67->leave($__internal_979024bdd24b77e8bd7936cf567f53c07c23369a130479b9da117a0dbcecea67_prof);

        
        $__internal_dad430704044eefd099d05271d9add32b7ee0cf263ca706f38f175773a295502->leave($__internal_dad430704044eefd099d05271d9add32b7ee0cf263ca706f38f175773a295502_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
