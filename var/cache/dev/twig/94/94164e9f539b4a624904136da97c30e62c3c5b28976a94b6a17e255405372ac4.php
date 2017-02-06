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
        $__internal_17e5405bf6058f41a266c2f07901d193f0e54a5a88258a231ef88c0a0c374f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e5405bf6058f41a266c2f07901d193f0e54a5a88258a231ef88c0a0c374f8a->enter($__internal_17e5405bf6058f41a266c2f07901d193f0e54a5a88258a231ef88c0a0c374f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3f381a100ac25f996146285a59d003a0654f75a7728c52a349d7b04c9a4b186a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f381a100ac25f996146285a59d003a0654f75a7728c52a349d7b04c9a4b186a->enter($__internal_3f381a100ac25f996146285a59d003a0654f75a7728c52a349d7b04c9a4b186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e5405bf6058f41a266c2f07901d193f0e54a5a88258a231ef88c0a0c374f8a->leave($__internal_17e5405bf6058f41a266c2f07901d193f0e54a5a88258a231ef88c0a0c374f8a_prof);

        
        $__internal_3f381a100ac25f996146285a59d003a0654f75a7728c52a349d7b04c9a4b186a->leave($__internal_3f381a100ac25f996146285a59d003a0654f75a7728c52a349d7b04c9a4b186a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e244f58ee35860cbb0d60a0ca202065c0de06aadf0eb875cdba3daf4466e9905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244f58ee35860cbb0d60a0ca202065c0de06aadf0eb875cdba3daf4466e9905->enter($__internal_e244f58ee35860cbb0d60a0ca202065c0de06aadf0eb875cdba3daf4466e9905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70256eb93fdc9e7571dfb9a2e1608e6b349896a832ca0af66612f3168285bb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70256eb93fdc9e7571dfb9a2e1608e6b349896a832ca0af66612f3168285bb46->enter($__internal_70256eb93fdc9e7571dfb9a2e1608e6b349896a832ca0af66612f3168285bb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70256eb93fdc9e7571dfb9a2e1608e6b349896a832ca0af66612f3168285bb46->leave($__internal_70256eb93fdc9e7571dfb9a2e1608e6b349896a832ca0af66612f3168285bb46_prof);

        
        $__internal_e244f58ee35860cbb0d60a0ca202065c0de06aadf0eb875cdba3daf4466e9905->leave($__internal_e244f58ee35860cbb0d60a0ca202065c0de06aadf0eb875cdba3daf4466e9905_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_373bf78baf31a7696a1edf94e84801651fecb3eb5cf72bba9ef8f5d5c08c1f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373bf78baf31a7696a1edf94e84801651fecb3eb5cf72bba9ef8f5d5c08c1f6d->enter($__internal_373bf78baf31a7696a1edf94e84801651fecb3eb5cf72bba9ef8f5d5c08c1f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_189d32f4d803852bc173ea822f680d6566cee36ffb4529203c78bf014592b06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189d32f4d803852bc173ea822f680d6566cee36ffb4529203c78bf014592b06e->enter($__internal_189d32f4d803852bc173ea822f680d6566cee36ffb4529203c78bf014592b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_189d32f4d803852bc173ea822f680d6566cee36ffb4529203c78bf014592b06e->leave($__internal_189d32f4d803852bc173ea822f680d6566cee36ffb4529203c78bf014592b06e_prof);

        
        $__internal_373bf78baf31a7696a1edf94e84801651fecb3eb5cf72bba9ef8f5d5c08c1f6d->leave($__internal_373bf78baf31a7696a1edf94e84801651fecb3eb5cf72bba9ef8f5d5c08c1f6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeb15452fe43c939b724a475cef35bdc592f70fd91b5139b97b5d8d506b0d23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb15452fe43c939b724a475cef35bdc592f70fd91b5139b97b5d8d506b0d23f->enter($__internal_aeb15452fe43c939b724a475cef35bdc592f70fd91b5139b97b5d8d506b0d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68c287bc1de3db393bbf53157bcf81b895ea2fe91a206f0450fd4d2aca1c9077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c287bc1de3db393bbf53157bcf81b895ea2fe91a206f0450fd4d2aca1c9077->enter($__internal_68c287bc1de3db393bbf53157bcf81b895ea2fe91a206f0450fd4d2aca1c9077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68c287bc1de3db393bbf53157bcf81b895ea2fe91a206f0450fd4d2aca1c9077->leave($__internal_68c287bc1de3db393bbf53157bcf81b895ea2fe91a206f0450fd4d2aca1c9077_prof);

        
        $__internal_aeb15452fe43c939b724a475cef35bdc592f70fd91b5139b97b5d8d506b0d23f->leave($__internal_aeb15452fe43c939b724a475cef35bdc592f70fd91b5139b97b5d8d506b0d23f_prof);

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
