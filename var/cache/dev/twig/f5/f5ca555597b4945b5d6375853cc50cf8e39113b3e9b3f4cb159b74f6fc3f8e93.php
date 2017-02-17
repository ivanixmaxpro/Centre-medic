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
        $__internal_fa56a8bc328601286d317dbf21c1ca82691b57a5e5aab0898db00961f04d0fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa56a8bc328601286d317dbf21c1ca82691b57a5e5aab0898db00961f04d0fbb->enter($__internal_fa56a8bc328601286d317dbf21c1ca82691b57a5e5aab0898db00961f04d0fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_5dd1ae9568136ee892beb6d42c938f417d353f54e7d5de84ed3b602084701e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd1ae9568136ee892beb6d42c938f417d353f54e7d5de84ed3b602084701e4c->enter($__internal_5dd1ae9568136ee892beb6d42c938f417d353f54e7d5de84ed3b602084701e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa56a8bc328601286d317dbf21c1ca82691b57a5e5aab0898db00961f04d0fbb->leave($__internal_fa56a8bc328601286d317dbf21c1ca82691b57a5e5aab0898db00961f04d0fbb_prof);

        
        $__internal_5dd1ae9568136ee892beb6d42c938f417d353f54e7d5de84ed3b602084701e4c->leave($__internal_5dd1ae9568136ee892beb6d42c938f417d353f54e7d5de84ed3b602084701e4c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef613b2863738b74a44dd3df04b774d68f45ee1f0d9662a06512e84b638b016c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef613b2863738b74a44dd3df04b774d68f45ee1f0d9662a06512e84b638b016c->enter($__internal_ef613b2863738b74a44dd3df04b774d68f45ee1f0d9662a06512e84b638b016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4e5af96f4c06993e76347d2c9a07d04d41f6d938776f20f6dd14926dafd3503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e5af96f4c06993e76347d2c9a07d04d41f6d938776f20f6dd14926dafd3503->enter($__internal_b4e5af96f4c06993e76347d2c9a07d04d41f6d938776f20f6dd14926dafd3503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_b4e5af96f4c06993e76347d2c9a07d04d41f6d938776f20f6dd14926dafd3503->leave($__internal_b4e5af96f4c06993e76347d2c9a07d04d41f6d938776f20f6dd14926dafd3503_prof);

        
        $__internal_ef613b2863738b74a44dd3df04b774d68f45ee1f0d9662a06512e84b638b016c->leave($__internal_ef613b2863738b74a44dd3df04b774d68f45ee1f0d9662a06512e84b638b016c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9ed5d0b71b468cc699db3a25557bbf4788d8740f9d95f12396d19d9e93f0583a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed5d0b71b468cc699db3a25557bbf4788d8740f9d95f12396d19d9e93f0583a->enter($__internal_9ed5d0b71b468cc699db3a25557bbf4788d8740f9d95f12396d19d9e93f0583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7082ce4c561054e0f0ecb2e7c736ce55880532fd8661de4a6e2d5f2498816972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7082ce4c561054e0f0ecb2e7c736ce55880532fd8661de4a6e2d5f2498816972->enter($__internal_7082ce4c561054e0f0ecb2e7c736ce55880532fd8661de4a6e2d5f2498816972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>Llistat de pacients:</p>
                <table class=\"table table-hover\">
                <th>nom</th>
                <th>cognom</th>
                <th>dni</th>
                <th>Dolencia</th>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pacients"] ?? $this->getContext($context, "pacients")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacient"]) {
            // line 16
            echo "                <tr>
                \t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "cognom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["pacient"], "dni", array())), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "dolencia", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_7082ce4c561054e0f0ecb2e7c736ce55880532fd8661de4a6e2d5f2498816972->leave($__internal_7082ce4c561054e0f0ecb2e7c736ce55880532fd8661de4a6e2d5f2498816972_prof);

        
        $__internal_9ed5d0b71b468cc699db3a25557bbf4788d8740f9d95f12396d19d9e93f0583a->leave($__internal_9ed5d0b71b468cc699db3a25557bbf4788d8740f9d95f12396d19d9e93f0583a_prof);

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
        return array (  109 => 23,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                <p>Llistat de pacients:</p>
                <table class=\"table table-hover\">
                <th>nom</th>
                <th>cognom</th>
                <th>dni</th>
                <th>Dolencia</th>
                {% for pacient in pacients %}
                <tr>
                \t<td>{{ pacient.nom }}</td>
                    <td>{{ pacient.cognom }}</td>
                    <td>{{ pacient.dni|upper }}</td>
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
