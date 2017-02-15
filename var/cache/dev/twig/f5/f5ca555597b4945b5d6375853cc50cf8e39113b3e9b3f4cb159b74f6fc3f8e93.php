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
        $__internal_a26223a9605b27767197d2110d632e9be523d845290c08abb432a5dde31f1e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26223a9605b27767197d2110d632e9be523d845290c08abb432a5dde31f1e6f->enter($__internal_a26223a9605b27767197d2110d632e9be523d845290c08abb432a5dde31f1e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_e7c39de3c0137b13013ca67b942585517facdb2bdda3ec0a70de70613a0dea03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c39de3c0137b13013ca67b942585517facdb2bdda3ec0a70de70613a0dea03->enter($__internal_e7c39de3c0137b13013ca67b942585517facdb2bdda3ec0a70de70613a0dea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26223a9605b27767197d2110d632e9be523d845290c08abb432a5dde31f1e6f->leave($__internal_a26223a9605b27767197d2110d632e9be523d845290c08abb432a5dde31f1e6f_prof);

        
        $__internal_e7c39de3c0137b13013ca67b942585517facdb2bdda3ec0a70de70613a0dea03->leave($__internal_e7c39de3c0137b13013ca67b942585517facdb2bdda3ec0a70de70613a0dea03_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3607682bf700a99f87acfc8bd6c38eb02f41bc250ad74c3e3ef166b12d9c6ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3607682bf700a99f87acfc8bd6c38eb02f41bc250ad74c3e3ef166b12d9c6ef7->enter($__internal_3607682bf700a99f87acfc8bd6c38eb02f41bc250ad74c3e3ef166b12d9c6ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc004db703592b5ee19ade52ecbaf378d9c1228510055f531682444e77cd40cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc004db703592b5ee19ade52ecbaf378d9c1228510055f531682444e77cd40cc->enter($__internal_dc004db703592b5ee19ade52ecbaf378d9c1228510055f531682444e77cd40cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_dc004db703592b5ee19ade52ecbaf378d9c1228510055f531682444e77cd40cc->leave($__internal_dc004db703592b5ee19ade52ecbaf378d9c1228510055f531682444e77cd40cc_prof);

        
        $__internal_3607682bf700a99f87acfc8bd6c38eb02f41bc250ad74c3e3ef166b12d9c6ef7->leave($__internal_3607682bf700a99f87acfc8bd6c38eb02f41bc250ad74c3e3ef166b12d9c6ef7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_25a443ca4f0945e99976f0548749ec2dd31475b3aca5d558d6aa6075bbea537d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a443ca4f0945e99976f0548749ec2dd31475b3aca5d558d6aa6075bbea537d->enter($__internal_25a443ca4f0945e99976f0548749ec2dd31475b3aca5d558d6aa6075bbea537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_5600e00b72111925eb901d33d70abb48956e2f43a29ecfb555e01a57ea349b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5600e00b72111925eb901d33d70abb48956e2f43a29ecfb555e01a57ea349b8b->enter($__internal_5600e00b72111925eb901d33d70abb48956e2f43a29ecfb555e01a57ea349b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_5600e00b72111925eb901d33d70abb48956e2f43a29ecfb555e01a57ea349b8b->leave($__internal_5600e00b72111925eb901d33d70abb48956e2f43a29ecfb555e01a57ea349b8b_prof);

        
        $__internal_25a443ca4f0945e99976f0548749ec2dd31475b3aca5d558d6aa6075bbea537d->leave($__internal_25a443ca4f0945e99976f0548749ec2dd31475b3aca5d558d6aa6075bbea537d_prof);

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
