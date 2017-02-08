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
        $__internal_61d03aa01e67daffb4a84b83da80ed42bd6a8438398a692d82d74838cd3f555f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d03aa01e67daffb4a84b83da80ed42bd6a8438398a692d82d74838cd3f555f->enter($__internal_61d03aa01e67daffb4a84b83da80ed42bd6a8438398a692d82d74838cd3f555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $__internal_79897723791ddbde841e6e428786ca765d438c4e2f6d41cd9837fac1b9032b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79897723791ddbde841e6e428786ca765d438c4e2f6d41cd9837fac1b9032b03->enter($__internal_79897723791ddbde841e6e428786ca765d438c4e2f6d41cd9837fac1b9032b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:visites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d03aa01e67daffb4a84b83da80ed42bd6a8438398a692d82d74838cd3f555f->leave($__internal_61d03aa01e67daffb4a84b83da80ed42bd6a8438398a692d82d74838cd3f555f_prof);

        
        $__internal_79897723791ddbde841e6e428786ca765d438c4e2f6d41cd9837fac1b9032b03->leave($__internal_79897723791ddbde841e6e428786ca765d438c4e2f6d41cd9837fac1b9032b03_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f36f24581910cf1d064d3e28d98bc44a769278250b6386a102706927fb075c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36f24581910cf1d064d3e28d98bc44a769278250b6386a102706927fb075c89->enter($__internal_f36f24581910cf1d064d3e28d98bc44a769278250b6386a102706927fb075c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ec2a06ed02219211a0d567d5d1e1f7d69f59f8aa61dd84277509b4f899b5d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec2a06ed02219211a0d567d5d1e1f7d69f59f8aa61dd84277509b4f899b5d17->enter($__internal_3ec2a06ed02219211a0d567d5d1e1f7d69f59f8aa61dd84277509b4f899b5d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_3ec2a06ed02219211a0d567d5d1e1f7d69f59f8aa61dd84277509b4f899b5d17->leave($__internal_3ec2a06ed02219211a0d567d5d1e1f7d69f59f8aa61dd84277509b4f899b5d17_prof);

        
        $__internal_f36f24581910cf1d064d3e28d98bc44a769278250b6386a102706927fb075c89->leave($__internal_f36f24581910cf1d064d3e28d98bc44a769278250b6386a102706927fb075c89_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9fe514cdc772619e02bad5723ad59fc598a5769de30c11b098e4b34361088145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe514cdc772619e02bad5723ad59fc598a5769de30c11b098e4b34361088145->enter($__internal_9fe514cdc772619e02bad5723ad59fc598a5769de30c11b098e4b34361088145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_79981709bc026eddd80b953fc194bfb3aa43229ae94da7ef7b9264ffeac1c4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79981709bc026eddd80b953fc194bfb3aa43229ae94da7ef7b9264ffeac1c4b5->enter($__internal_79981709bc026eddd80b953fc194bfb3aa43229ae94da7ef7b9264ffeac1c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>aqui anira la seccio de llista de visites</p>
                 <table border=\"1\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visita"]) {
            // line 12
            echo "                <tr>
                \t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["visita"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["visita"], "data", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visita'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_79981709bc026eddd80b953fc194bfb3aa43229ae94da7ef7b9264ffeac1c4b5->leave($__internal_79981709bc026eddd80b953fc194bfb3aa43229ae94da7ef7b9264ffeac1c4b5_prof);

        
        $__internal_9fe514cdc772619e02bad5723ad59fc598a5769de30c11b098e4b34361088145->leave($__internal_9fe514cdc772619e02bad5723ad59fc598a5769de30c11b098e4b34361088145_prof);

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
{% block title %}Visites{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Visites</h1>
                <p>aqui anira la seccio de llista de visites</p>
                 <table border=\"1\">
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
