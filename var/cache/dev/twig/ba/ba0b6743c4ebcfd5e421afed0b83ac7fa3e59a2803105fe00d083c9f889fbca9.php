<?php

/* FrontBundle:Default:visites.html.twig */
class __TwigTemplate_8927a73135c5160c7bbbb34d3b5a581aa20095be66955b380210d481bb38a6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:visites.html.twig", 1);
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
        $__internal_e4d29e7a91271ee97b44e80e547e1b208650cf43ba830dd55acb499018ab377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d29e7a91271ee97b44e80e547e1b208650cf43ba830dd55acb499018ab377a->enter($__internal_e4d29e7a91271ee97b44e80e547e1b208650cf43ba830dd55acb499018ab377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $__internal_13617cacf7e4bf4ac513cfa92d0d259d660e9e6c0f109d9bb6ca40d4b387ff60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13617cacf7e4bf4ac513cfa92d0d259d660e9e6c0f109d9bb6ca40d4b387ff60->enter($__internal_13617cacf7e4bf4ac513cfa92d0d259d660e9e6c0f109d9bb6ca40d4b387ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d29e7a91271ee97b44e80e547e1b208650cf43ba830dd55acb499018ab377a->leave($__internal_e4d29e7a91271ee97b44e80e547e1b208650cf43ba830dd55acb499018ab377a_prof);

        
        $__internal_13617cacf7e4bf4ac513cfa92d0d259d660e9e6c0f109d9bb6ca40d4b387ff60->leave($__internal_13617cacf7e4bf4ac513cfa92d0d259d660e9e6c0f109d9bb6ca40d4b387ff60_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3862a02d6bc733e830282e8e247bbce8ef0e62d2653b296658087bbd18654b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3862a02d6bc733e830282e8e247bbce8ef0e62d2653b296658087bbd18654b6f->enter($__internal_3862a02d6bc733e830282e8e247bbce8ef0e62d2653b296658087bbd18654b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06646ae32184af789ce017b2370f76809fcab35f1d301c67d281ea8dd11eb277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06646ae32184af789ce017b2370f76809fcab35f1d301c67d281ea8dd11eb277->enter($__internal_06646ae32184af789ce017b2370f76809fcab35f1d301c67d281ea8dd11eb277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_06646ae32184af789ce017b2370f76809fcab35f1d301c67d281ea8dd11eb277->leave($__internal_06646ae32184af789ce017b2370f76809fcab35f1d301c67d281ea8dd11eb277_prof);

        
        $__internal_3862a02d6bc733e830282e8e247bbce8ef0e62d2653b296658087bbd18654b6f->leave($__internal_3862a02d6bc733e830282e8e247bbce8ef0e62d2653b296658087bbd18654b6f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6a47fdc9c4a915827f81201a48af9c0623b20b28c63653173c1a0fb998d4e24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a47fdc9c4a915827f81201a48af9c0623b20b28c63653173c1a0fb998d4e24c->enter($__internal_6a47fdc9c4a915827f81201a48af9c0623b20b28c63653173c1a0fb998d4e24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_de236b1179e3bb9556f3f79a3be5f484057c57df2dcc8f182fbca4e7da475598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de236b1179e3bb9556f3f79a3be5f484057c57df2dcc8f182fbca4e7da475598->enter($__internal_de236b1179e3bb9556f3f79a3be5f484057c57df2dcc8f182fbca4e7da475598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>Llistat de visites:</p>
                <table class=\"table table-hover\">
                <th>Data</th>
                <th>tractament</th>
                <th>Metge que atén</th>
                <th>Pacient atés</th>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visita"]) {
            // line 16
            echo "                <tr>
                \t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visita"], "data", array()), "m/d/Y"), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visita"], "tractamentsFk", array()), "tipus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visita"], "metgesFk", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visita"], "pacientsFk", array()), "nom", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visita"], "pacientsFk", array()), "cognom", array()), "html", null, true);
            echo " amb DNI: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visita"], "pacientsFk", array()), "dni", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visita'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_de236b1179e3bb9556f3f79a3be5f484057c57df2dcc8f182fbca4e7da475598->leave($__internal_de236b1179e3bb9556f3f79a3be5f484057c57df2dcc8f182fbca4e7da475598_prof);

        
        $__internal_6a47fdc9c4a915827f81201a48af9c0623b20b28c63653173c1a0fb998d4e24c->leave($__internal_6a47fdc9c4a915827f81201a48af9c0623b20b28c63653173c1a0fb998d4e24c_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:visites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Visites{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>Llistat de visites:</p>
                <table class=\"table table-hover\">
                <th>Data</th>
                <th>tractament</th>
                <th>Metge que atén</th>
                <th>Pacient atés</th>
                {% for visita in visites %}
                <tr>
                \t<td>{{ visita.data|date(\"m/d/Y\") }}</td>
        \t\t\t<td>{{ visita.tractamentsFk.tipus }}</td>
                    <td>{{ visita.metgesFk.nom}}</td>
                    <td>{{ visita.pacientsFk.nom}}, {{ visita.pacientsFk.cognom}} amb DNI: {{ visita.pacientsFk.dni }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:visites.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/visites.html.twig");
    }
}
