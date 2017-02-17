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
        $__internal_df11d671880d26bdbde347e2726eedad2674b22421a5f6c90c19187e378a6a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df11d671880d26bdbde347e2726eedad2674b22421a5f6c90c19187e378a6a79->enter($__internal_df11d671880d26bdbde347e2726eedad2674b22421a5f6c90c19187e378a6a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6e6fbef5300aa43eb9537e1b78ad8b21cbae71aabcc5fbd4e69634161fc8a63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6fbef5300aa43eb9537e1b78ad8b21cbae71aabcc5fbd4e69634161fc8a63f->enter($__internal_6e6fbef5300aa43eb9537e1b78ad8b21cbae71aabcc5fbd4e69634161fc8a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df11d671880d26bdbde347e2726eedad2674b22421a5f6c90c19187e378a6a79->leave($__internal_df11d671880d26bdbde347e2726eedad2674b22421a5f6c90c19187e378a6a79_prof);

        
        $__internal_6e6fbef5300aa43eb9537e1b78ad8b21cbae71aabcc5fbd4e69634161fc8a63f->leave($__internal_6e6fbef5300aa43eb9537e1b78ad8b21cbae71aabcc5fbd4e69634161fc8a63f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_211c12fbe68a4a6de646d8be4d1cb236dbf7d8f3df56342e25ecbab7c78ece42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211c12fbe68a4a6de646d8be4d1cb236dbf7d8f3df56342e25ecbab7c78ece42->enter($__internal_211c12fbe68a4a6de646d8be4d1cb236dbf7d8f3df56342e25ecbab7c78ece42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a86a803df1dac4c8db1fa47b80fd2b72f41dde9a7cd0ee71577f6edb8f3fd5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86a803df1dac4c8db1fa47b80fd2b72f41dde9a7cd0ee71577f6edb8f3fd5b5->enter($__internal_a86a803df1dac4c8db1fa47b80fd2b72f41dde9a7cd0ee71577f6edb8f3fd5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a86a803df1dac4c8db1fa47b80fd2b72f41dde9a7cd0ee71577f6edb8f3fd5b5->leave($__internal_a86a803df1dac4c8db1fa47b80fd2b72f41dde9a7cd0ee71577f6edb8f3fd5b5_prof);

        
        $__internal_211c12fbe68a4a6de646d8be4d1cb236dbf7d8f3df56342e25ecbab7c78ece42->leave($__internal_211c12fbe68a4a6de646d8be4d1cb236dbf7d8f3df56342e25ecbab7c78ece42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0410301338cba0d460f023f918a48b7dd211c2681c2a7b7ea1064b1fb12f90f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0410301338cba0d460f023f918a48b7dd211c2681c2a7b7ea1064b1fb12f90f9->enter($__internal_0410301338cba0d460f023f918a48b7dd211c2681c2a7b7ea1064b1fb12f90f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e060a507ab9557036c4bfc6d877e64773556105e973500090f7e16f40d541848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e060a507ab9557036c4bfc6d877e64773556105e973500090f7e16f40d541848->enter($__internal_e060a507ab9557036c4bfc6d877e64773556105e973500090f7e16f40d541848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e060a507ab9557036c4bfc6d877e64773556105e973500090f7e16f40d541848->leave($__internal_e060a507ab9557036c4bfc6d877e64773556105e973500090f7e16f40d541848_prof);

        
        $__internal_0410301338cba0d460f023f918a48b7dd211c2681c2a7b7ea1064b1fb12f90f9->leave($__internal_0410301338cba0d460f023f918a48b7dd211c2681c2a7b7ea1064b1fb12f90f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8649f40f238d2398e65f024388386b7693641ab064cab64751b976a601cf87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8649f40f238d2398e65f024388386b7693641ab064cab64751b976a601cf87d->enter($__internal_a8649f40f238d2398e65f024388386b7693641ab064cab64751b976a601cf87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0af4e0bfca6568c65f28abcc5346547f814121f551f2deb3ca39d10c762df271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af4e0bfca6568c65f28abcc5346547f814121f551f2deb3ca39d10c762df271->enter($__internal_0af4e0bfca6568c65f28abcc5346547f814121f551f2deb3ca39d10c762df271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0af4e0bfca6568c65f28abcc5346547f814121f551f2deb3ca39d10c762df271->leave($__internal_0af4e0bfca6568c65f28abcc5346547f814121f551f2deb3ca39d10c762df271_prof);

        
        $__internal_a8649f40f238d2398e65f024388386b7693641ab064cab64751b976a601cf87d->leave($__internal_a8649f40f238d2398e65f024388386b7693641ab064cab64751b976a601cf87d_prof);

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
