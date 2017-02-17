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
        $__internal_a89c8c212f765e0535fb0d8417d09df287d41eaa7e54790ed8f3c8f717216fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89c8c212f765e0535fb0d8417d09df287d41eaa7e54790ed8f3c8f717216fa9->enter($__internal_a89c8c212f765e0535fb0d8417d09df287d41eaa7e54790ed8f3c8f717216fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_311bfd3c2e2bfc5c68985fc9bbab1d8d219ca644aa0fd6d43c7d69a0836d6f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311bfd3c2e2bfc5c68985fc9bbab1d8d219ca644aa0fd6d43c7d69a0836d6f4c->enter($__internal_311bfd3c2e2bfc5c68985fc9bbab1d8d219ca644aa0fd6d43c7d69a0836d6f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89c8c212f765e0535fb0d8417d09df287d41eaa7e54790ed8f3c8f717216fa9->leave($__internal_a89c8c212f765e0535fb0d8417d09df287d41eaa7e54790ed8f3c8f717216fa9_prof);

        
        $__internal_311bfd3c2e2bfc5c68985fc9bbab1d8d219ca644aa0fd6d43c7d69a0836d6f4c->leave($__internal_311bfd3c2e2bfc5c68985fc9bbab1d8d219ca644aa0fd6d43c7d69a0836d6f4c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbc364a562ac13c7ac21c8d20c4587ff63ca19cd5d7bf3791c6e2f2b9a243196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc364a562ac13c7ac21c8d20c4587ff63ca19cd5d7bf3791c6e2f2b9a243196->enter($__internal_cbc364a562ac13c7ac21c8d20c4587ff63ca19cd5d7bf3791c6e2f2b9a243196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32fc06d269ad4dd59f88263124bdc7b3531ac4164fd1455803e22c8f1675bdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fc06d269ad4dd59f88263124bdc7b3531ac4164fd1455803e22c8f1675bdf2->enter($__internal_32fc06d269ad4dd59f88263124bdc7b3531ac4164fd1455803e22c8f1675bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_32fc06d269ad4dd59f88263124bdc7b3531ac4164fd1455803e22c8f1675bdf2->leave($__internal_32fc06d269ad4dd59f88263124bdc7b3531ac4164fd1455803e22c8f1675bdf2_prof);

        
        $__internal_cbc364a562ac13c7ac21c8d20c4587ff63ca19cd5d7bf3791c6e2f2b9a243196->leave($__internal_cbc364a562ac13c7ac21c8d20c4587ff63ca19cd5d7bf3791c6e2f2b9a243196_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7fc39702e383fb88b4fadd59312e740621d5a9b3e6f538e971f499b315edc6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc39702e383fb88b4fadd59312e740621d5a9b3e6f538e971f499b315edc6e1->enter($__internal_7fc39702e383fb88b4fadd59312e740621d5a9b3e6f538e971f499b315edc6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a7a5bb1a450646b12e4ca8def0ad481987eae03ce4f6f0777891a0d4233da861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a5bb1a450646b12e4ca8def0ad481987eae03ce4f6f0777891a0d4233da861->enter($__internal_a7a5bb1a450646b12e4ca8def0ad481987eae03ce4f6f0777891a0d4233da861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Especialitat</th>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metges"] ?? $this->getContext($context, "metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 16
            echo "                <tr>
                \t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["metge"], "dni", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_a7a5bb1a450646b12e4ca8def0ad481987eae03ce4f6f0777891a0d4233da861->leave($__internal_a7a5bb1a450646b12e4ca8def0ad481987eae03ce4f6f0777891a0d4233da861_prof);

        
        $__internal_7fc39702e383fb88b4fadd59312e740621d5a9b3e6f538e971f499b315edc6e1->leave($__internal_7fc39702e383fb88b4fadd59312e740621d5a9b3e6f538e971f499b315edc6e1_prof);

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
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Especialitat</th>
                {% for metge in metges %}
                <tr>
                \t<td>{{ metge.nom }}</td>
                    <td>{{ metge.cognom }}</td>
                    <td>{{ metge.dni|upper }}</td>
                    <td>{{ metge.especialitat }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:metges.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/metges.html.twig");
    }
}
