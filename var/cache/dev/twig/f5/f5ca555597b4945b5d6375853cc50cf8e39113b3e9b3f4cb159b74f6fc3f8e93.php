<?php

/* FrontBundle:Default:pacients.html.twig */
class __TwigTemplate_9b6299173ffd83c29efaa06f33df15cb2b7e0c05c7a7440176ba62769b2f81b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:pacients.html.twig", 1);
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
        $__internal_48a2735c018ea2d0a21fbfe377db9579107d076cf8929b391510b2198d423107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a2735c018ea2d0a21fbfe377db9579107d076cf8929b391510b2198d423107->enter($__internal_48a2735c018ea2d0a21fbfe377db9579107d076cf8929b391510b2198d423107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_05e065cf3676ab934fa8348120ab174ddb7d1df512a05c16ef51e7d88e8b4066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e065cf3676ab934fa8348120ab174ddb7d1df512a05c16ef51e7d88e8b4066->enter($__internal_05e065cf3676ab934fa8348120ab174ddb7d1df512a05c16ef51e7d88e8b4066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a2735c018ea2d0a21fbfe377db9579107d076cf8929b391510b2198d423107->leave($__internal_48a2735c018ea2d0a21fbfe377db9579107d076cf8929b391510b2198d423107_prof);

        
        $__internal_05e065cf3676ab934fa8348120ab174ddb7d1df512a05c16ef51e7d88e8b4066->leave($__internal_05e065cf3676ab934fa8348120ab174ddb7d1df512a05c16ef51e7d88e8b4066_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9e45fbc71c60be1611ebad7154b6945c811a5e730ac3612bb1ce039b0d225c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9e45fbc71c60be1611ebad7154b6945c811a5e730ac3612bb1ce039b0d225c->enter($__internal_5d9e45fbc71c60be1611ebad7154b6945c811a5e730ac3612bb1ce039b0d225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cdfff5b325ebb79deff9d783b90b8383373cdc42cd8e05da04b16da4109defc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdfff5b325ebb79deff9d783b90b8383373cdc42cd8e05da04b16da4109defc->enter($__internal_0cdfff5b325ebb79deff9d783b90b8383373cdc42cd8e05da04b16da4109defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_0cdfff5b325ebb79deff9d783b90b8383373cdc42cd8e05da04b16da4109defc->leave($__internal_0cdfff5b325ebb79deff9d783b90b8383373cdc42cd8e05da04b16da4109defc_prof);

        
        $__internal_5d9e45fbc71c60be1611ebad7154b6945c811a5e730ac3612bb1ce039b0d225c->leave($__internal_5d9e45fbc71c60be1611ebad7154b6945c811a5e730ac3612bb1ce039b0d225c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_29d8625d753b2b632bea1ee2d330f2125e268017550f7c540213cd2287595af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d8625d753b2b632bea1ee2d330f2125e268017550f7c540213cd2287595af3->enter($__internal_29d8625d753b2b632bea1ee2d330f2125e268017550f7c540213cd2287595af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_855db67b25557612b58fb2e7f7bb594c7486b22c4a5a02333ad1db6c6b91b3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855db67b25557612b58fb2e7f7bb594c7486b22c4a5a02333ad1db6c6b91b3bb->enter($__internal_855db67b25557612b58fb2e7f7bb594c7486b22c4a5a02333ad1db6c6b91b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["pacients"] ?? $this->getContext($context, "pacients")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacient"]) {
            // line 12
            echo "                <tr>
                \t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "dolencia", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_855db67b25557612b58fb2e7f7bb594c7486b22c4a5a02333ad1db6c6b91b3bb->leave($__internal_855db67b25557612b58fb2e7f7bb594c7486b22c4a5a02333ad1db6c6b91b3bb_prof);

        
        $__internal_29d8625d753b2b632bea1ee2d330f2125e268017550f7c540213cd2287595af3->leave($__internal_29d8625d753b2b632bea1ee2d330f2125e268017550f7c540213cd2287595af3_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:pacients.html.twig";
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
                {% for pacient in pacients %}
                <tr>
                \t<td>{{ pacient.id }}</td>
        \t\t\t<td>{{ pacient.dolencia }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:pacients.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/pacients.html.twig");
    }
}
