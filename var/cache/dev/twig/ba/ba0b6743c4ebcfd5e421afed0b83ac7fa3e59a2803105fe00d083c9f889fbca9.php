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
        $__internal_e6c2ad0ebae62bc8f535f8c90a1c365f8b26908455122b5c3797978fe450f1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c2ad0ebae62bc8f535f8c90a1c365f8b26908455122b5c3797978fe450f1d2->enter($__internal_e6c2ad0ebae62bc8f535f8c90a1c365f8b26908455122b5c3797978fe450f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $__internal_056d350894d1feb227b85590dfe1ab9e5a8746cf078d95a24559393bb0e0ac2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056d350894d1feb227b85590dfe1ab9e5a8746cf078d95a24559393bb0e0ac2b->enter($__internal_056d350894d1feb227b85590dfe1ab9e5a8746cf078d95a24559393bb0e0ac2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c2ad0ebae62bc8f535f8c90a1c365f8b26908455122b5c3797978fe450f1d2->leave($__internal_e6c2ad0ebae62bc8f535f8c90a1c365f8b26908455122b5c3797978fe450f1d2_prof);

        
        $__internal_056d350894d1feb227b85590dfe1ab9e5a8746cf078d95a24559393bb0e0ac2b->leave($__internal_056d350894d1feb227b85590dfe1ab9e5a8746cf078d95a24559393bb0e0ac2b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c63867a13c3decc6b03187f97fe895051f77a2cf5753db3d8b03165e6ee3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c63867a13c3decc6b03187f97fe895051f77a2cf5753db3d8b03165e6ee3f4->enter($__internal_94c63867a13c3decc6b03187f97fe895051f77a2cf5753db3d8b03165e6ee3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcdafc61abe4f09ecc5e84903d52ba4b4e35f27f4fc58ec6c1f5eb7e9d7e948e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdafc61abe4f09ecc5e84903d52ba4b4e35f27f4fc58ec6c1f5eb7e9d7e948e->enter($__internal_fcdafc61abe4f09ecc5e84903d52ba4b4e35f27f4fc58ec6c1f5eb7e9d7e948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_fcdafc61abe4f09ecc5e84903d52ba4b4e35f27f4fc58ec6c1f5eb7e9d7e948e->leave($__internal_fcdafc61abe4f09ecc5e84903d52ba4b4e35f27f4fc58ec6c1f5eb7e9d7e948e_prof);

        
        $__internal_94c63867a13c3decc6b03187f97fe895051f77a2cf5753db3d8b03165e6ee3f4->leave($__internal_94c63867a13c3decc6b03187f97fe895051f77a2cf5753db3d8b03165e6ee3f4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d0c9cb81b7f5f0661e5eb1529cc9b8e5db7a3b60b9ed0c135037f8b4dbda4ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c9cb81b7f5f0661e5eb1529cc9b8e5db7a3b60b9ed0c135037f8b4dbda4ac2->enter($__internal_d0c9cb81b7f5f0661e5eb1529cc9b8e5db7a3b60b9ed0c135037f8b4dbda4ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4a3098bf151e2a5b664bd0a60851d8b32e363287982ad58f06c6be02ad7cae8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3098bf151e2a5b664bd0a60851d8b32e363287982ad58f06c6be02ad7cae8a->enter($__internal_4a3098bf151e2a5b664bd0a60851d8b32e363287982ad58f06c6be02ad7cae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>Llistat de visites:</p>
                <table class=\"table table-hover\">
                <th>ID</th>
                <th>Data</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visita"]) {
            // line 14
            echo "                <tr>
                \t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["visita"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["visita"], "data", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visita'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_4a3098bf151e2a5b664bd0a60851d8b32e363287982ad58f06c6be02ad7cae8a->leave($__internal_4a3098bf151e2a5b664bd0a60851d8b32e363287982ad58f06c6be02ad7cae8a_prof);

        
        $__internal_d0c9cb81b7f5f0661e5eb1529cc9b8e5db7a3b60b9ed0c135037f8b4dbda4ac2->leave($__internal_d0c9cb81b7f5f0661e5eb1529cc9b8e5db7a3b60b9ed0c135037f8b4dbda4ac2_prof);

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
        return array (  99 => 19,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                <th>ID</th>
                <th>Data</th>
                {% for visita in visites %}
                <tr>
                \t<td>{{ visita.id }}</td>
        \t\t\t<td>{{ visita.data }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:visites.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/visites.html.twig");
    }
}
