<?php

/* FrontBundle:Default:metges.html.twig */
class __TwigTemplate_ebdda32f74d34e38339cbbc62f6d41ea2aa6e6c040703565c70b231ae4728112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:metges.html.twig", 1);
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
        $__internal_8459d5fd55ba935f22f503d40ab708001e4278ac86222605cbc8da24c548b82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8459d5fd55ba935f22f503d40ab708001e4278ac86222605cbc8da24c548b82e->enter($__internal_8459d5fd55ba935f22f503d40ab708001e4278ac86222605cbc8da24c548b82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_b19eba3172962323277356c8fdc9f1b6a590f0d48114574af33642d794b38b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19eba3172962323277356c8fdc9f1b6a590f0d48114574af33642d794b38b2a->enter($__internal_b19eba3172962323277356c8fdc9f1b6a590f0d48114574af33642d794b38b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8459d5fd55ba935f22f503d40ab708001e4278ac86222605cbc8da24c548b82e->leave($__internal_8459d5fd55ba935f22f503d40ab708001e4278ac86222605cbc8da24c548b82e_prof);

        
        $__internal_b19eba3172962323277356c8fdc9f1b6a590f0d48114574af33642d794b38b2a->leave($__internal_b19eba3172962323277356c8fdc9f1b6a590f0d48114574af33642d794b38b2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_541b1e9cd9c003a8835c90f3954e607dde76b44b2cd6ba429557485ebb5c8f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541b1e9cd9c003a8835c90f3954e607dde76b44b2cd6ba429557485ebb5c8f92->enter($__internal_541b1e9cd9c003a8835c90f3954e607dde76b44b2cd6ba429557485ebb5c8f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ebd73fc10ed0b57397fc9a0a224a17d52e18dc878e66e383d9fb7b59926c842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebd73fc10ed0b57397fc9a0a224a17d52e18dc878e66e383d9fb7b59926c842->enter($__internal_6ebd73fc10ed0b57397fc9a0a224a17d52e18dc878e66e383d9fb7b59926c842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_6ebd73fc10ed0b57397fc9a0a224a17d52e18dc878e66e383d9fb7b59926c842->leave($__internal_6ebd73fc10ed0b57397fc9a0a224a17d52e18dc878e66e383d9fb7b59926c842_prof);

        
        $__internal_541b1e9cd9c003a8835c90f3954e607dde76b44b2cd6ba429557485ebb5c8f92->leave($__internal_541b1e9cd9c003a8835c90f3954e607dde76b44b2cd6ba429557485ebb5c8f92_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e1944d76be6e584a047f76cafe7cefbf5876e0a1747c0e33f047f8d65fcb4caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1944d76be6e584a047f76cafe7cefbf5876e0a1747c0e33f047f8d65fcb4caa->enter($__internal_e1944d76be6e584a047f76cafe7cefbf5876e0a1747c0e33f047f8d65fcb4caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e00464e2d590e659a292e8070b673cdf46633290f2a6bda57def2143f85cefc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00464e2d590e659a292e8070b673cdf46633290f2a6bda57def2143f85cefc7->enter($__internal_e00464e2d590e659a292e8070b673cdf46633290f2a6bda57def2143f85cefc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>aqui anira la seccio de llista pacients</p>
                <table border=\"1\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metges"] ?? $this->getContext($context, "metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 12
            echo "                <tr>
                \t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_e00464e2d590e659a292e8070b673cdf46633290f2a6bda57def2143f85cefc7->leave($__internal_e00464e2d590e659a292e8070b673cdf46633290f2a6bda57def2143f85cefc7_prof);

        
        $__internal_e1944d76be6e584a047f76cafe7cefbf5876e0a1747c0e33f047f8d65fcb4caa->leave($__internal_e1944d76be6e584a047f76cafe7cefbf5876e0a1747c0e33f047f8d65fcb4caa_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:metges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  88 => 14,  84 => 13,  81 => 12,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Pacients{% endblock %}
{% block page_content %}
    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>aqui anira la seccio de llista pacients</p>
                <table border=\"1\">
                {% for metge in metges %}
                <tr>
                \t<td>{{ metge.id }}</td>
        \t\t\t<td>{{ metge.especialitat }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:metges.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/metges.html.twig");
    }
}
