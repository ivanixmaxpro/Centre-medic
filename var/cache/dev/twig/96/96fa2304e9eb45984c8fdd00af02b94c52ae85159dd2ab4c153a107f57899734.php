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
        $__internal_c077ba8efe6d2b47f331427945ca42f3de9441cfd93c916347ab49f47bb8cb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c077ba8efe6d2b47f331427945ca42f3de9441cfd93c916347ab49f47bb8cb55->enter($__internal_c077ba8efe6d2b47f331427945ca42f3de9441cfd93c916347ab49f47bb8cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_0a01d62cf7a1d77ece36754fc760d79ecd3c8bceedf75fdfaa08ade0e811ffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a01d62cf7a1d77ece36754fc760d79ecd3c8bceedf75fdfaa08ade0e811ffbc->enter($__internal_0a01d62cf7a1d77ece36754fc760d79ecd3c8bceedf75fdfaa08ade0e811ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c077ba8efe6d2b47f331427945ca42f3de9441cfd93c916347ab49f47bb8cb55->leave($__internal_c077ba8efe6d2b47f331427945ca42f3de9441cfd93c916347ab49f47bb8cb55_prof);

        
        $__internal_0a01d62cf7a1d77ece36754fc760d79ecd3c8bceedf75fdfaa08ade0e811ffbc->leave($__internal_0a01d62cf7a1d77ece36754fc760d79ecd3c8bceedf75fdfaa08ade0e811ffbc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e98bceb7b8f4318d9cfede71c7c5a1627b49aeb1463950025445314b40e35679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98bceb7b8f4318d9cfede71c7c5a1627b49aeb1463950025445314b40e35679->enter($__internal_e98bceb7b8f4318d9cfede71c7c5a1627b49aeb1463950025445314b40e35679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07403cd31f59d6591cbad8f1aff15d750f16f624290d9ae59ddb86e6847b7d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07403cd31f59d6591cbad8f1aff15d750f16f624290d9ae59ddb86e6847b7d03->enter($__internal_07403cd31f59d6591cbad8f1aff15d750f16f624290d9ae59ddb86e6847b7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_07403cd31f59d6591cbad8f1aff15d750f16f624290d9ae59ddb86e6847b7d03->leave($__internal_07403cd31f59d6591cbad8f1aff15d750f16f624290d9ae59ddb86e6847b7d03_prof);

        
        $__internal_e98bceb7b8f4318d9cfede71c7c5a1627b49aeb1463950025445314b40e35679->leave($__internal_e98bceb7b8f4318d9cfede71c7c5a1627b49aeb1463950025445314b40e35679_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_054c8563f98fcafe49ffaede3e7be590fd4a091c6ebba9455e9d17732399b099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054c8563f98fcafe49ffaede3e7be590fd4a091c6ebba9455e9d17732399b099->enter($__internal_054c8563f98fcafe49ffaede3e7be590fd4a091c6ebba9455e9d17732399b099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8c73dfd0a83a7e7de9ecb7adc222042207737e446ccc886b4d227d19eea9ad8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c73dfd0a83a7e7de9ecb7adc222042207737e446ccc886b4d227d19eea9ad8e->enter($__internal_8c73dfd0a83a7e7de9ecb7adc222042207737e446ccc886b4d227d19eea9ad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8c73dfd0a83a7e7de9ecb7adc222042207737e446ccc886b4d227d19eea9ad8e->leave($__internal_8c73dfd0a83a7e7de9ecb7adc222042207737e446ccc886b4d227d19eea9ad8e_prof);

        
        $__internal_054c8563f98fcafe49ffaede3e7be590fd4a091c6ebba9455e9d17732399b099->leave($__internal_054c8563f98fcafe49ffaede3e7be590fd4a091c6ebba9455e9d17732399b099_prof);

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
