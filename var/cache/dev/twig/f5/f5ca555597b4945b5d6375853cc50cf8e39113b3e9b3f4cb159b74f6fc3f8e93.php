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
        $__internal_5248d7061d6a33fd648661c4c234f11774054e572d9c3855c2937a55ecd73521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5248d7061d6a33fd648661c4c234f11774054e572d9c3855c2937a55ecd73521->enter($__internal_5248d7061d6a33fd648661c4c234f11774054e572d9c3855c2937a55ecd73521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_2ba7898414ed2174722c2af3165d21be1b22c6daeff99f57dd1fe63731cc2b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba7898414ed2174722c2af3165d21be1b22c6daeff99f57dd1fe63731cc2b5a->enter($__internal_2ba7898414ed2174722c2af3165d21be1b22c6daeff99f57dd1fe63731cc2b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5248d7061d6a33fd648661c4c234f11774054e572d9c3855c2937a55ecd73521->leave($__internal_5248d7061d6a33fd648661c4c234f11774054e572d9c3855c2937a55ecd73521_prof);

        
        $__internal_2ba7898414ed2174722c2af3165d21be1b22c6daeff99f57dd1fe63731cc2b5a->leave($__internal_2ba7898414ed2174722c2af3165d21be1b22c6daeff99f57dd1fe63731cc2b5a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0201059317f35c7b5417dfbce2086e1cb7e553420de3e21d3b3df40bcc36a618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0201059317f35c7b5417dfbce2086e1cb7e553420de3e21d3b3df40bcc36a618->enter($__internal_0201059317f35c7b5417dfbce2086e1cb7e553420de3e21d3b3df40bcc36a618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7c915fbf456c092d4f45a88ca3b929d218f825a3c26feb4ba2a5e229229ae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c915fbf456c092d4f45a88ca3b929d218f825a3c26feb4ba2a5e229229ae6a->enter($__internal_d7c915fbf456c092d4f45a88ca3b929d218f825a3c26feb4ba2a5e229229ae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_d7c915fbf456c092d4f45a88ca3b929d218f825a3c26feb4ba2a5e229229ae6a->leave($__internal_d7c915fbf456c092d4f45a88ca3b929d218f825a3c26feb4ba2a5e229229ae6a_prof);

        
        $__internal_0201059317f35c7b5417dfbce2086e1cb7e553420de3e21d3b3df40bcc36a618->leave($__internal_0201059317f35c7b5417dfbce2086e1cb7e553420de3e21d3b3df40bcc36a618_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0dfc311555430d441e355849e8856a2c4caef3584a9433d6272c96f2a6ad2884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfc311555430d441e355849e8856a2c4caef3584a9433d6272c96f2a6ad2884->enter($__internal_0dfc311555430d441e355849e8856a2c4caef3584a9433d6272c96f2a6ad2884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f74b1c484e4d7ec04c9d1073bf7b8792d8cded3a5094d451d9b4c2c9ef62551e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74b1c484e4d7ec04c9d1073bf7b8792d8cded3a5094d451d9b4c2c9ef62551e->enter($__internal_f74b1c484e4d7ec04c9d1073bf7b8792d8cded3a5094d451d9b4c2c9ef62551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>Llistat de pacients:</p>
                <table class=\"table table-hover\">
                <th>ID</th>
                <th>Dolencia</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pacients"] ?? $this->getContext($context, "pacients")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacient"]) {
            // line 14
            echo "               
                <tr>
                \t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "dolencia", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_f74b1c484e4d7ec04c9d1073bf7b8792d8cded3a5094d451d9b4c2c9ef62551e->leave($__internal_f74b1c484e4d7ec04c9d1073bf7b8792d8cded3a5094d451d9b4c2c9ef62551e_prof);

        
        $__internal_0dfc311555430d441e355849e8856a2c4caef3584a9433d6272c96f2a6ad2884->leave($__internal_0dfc311555430d441e355849e8856a2c4caef3584a9433d6272c96f2a6ad2884_prof);

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
        return array (  100 => 20,  91 => 17,  87 => 16,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                <th>ID</th>
                <th>Dolencia</th>
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
