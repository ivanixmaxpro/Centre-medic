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
        $__internal_7596dd45b96749a1d1f90689ed523df62a3a965faf0b5354d5a48dab96ed7ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7596dd45b96749a1d1f90689ed523df62a3a965faf0b5354d5a48dab96ed7ad7->enter($__internal_7596dd45b96749a1d1f90689ed523df62a3a965faf0b5354d5a48dab96ed7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_64a28c0e7f9fbe03baef96bf555ce0071bc964977ce503f3b99cdbd42ead2a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a28c0e7f9fbe03baef96bf555ce0071bc964977ce503f3b99cdbd42ead2a0c->enter($__internal_64a28c0e7f9fbe03baef96bf555ce0071bc964977ce503f3b99cdbd42ead2a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7596dd45b96749a1d1f90689ed523df62a3a965faf0b5354d5a48dab96ed7ad7->leave($__internal_7596dd45b96749a1d1f90689ed523df62a3a965faf0b5354d5a48dab96ed7ad7_prof);

        
        $__internal_64a28c0e7f9fbe03baef96bf555ce0071bc964977ce503f3b99cdbd42ead2a0c->leave($__internal_64a28c0e7f9fbe03baef96bf555ce0071bc964977ce503f3b99cdbd42ead2a0c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbe53e8c068cee13e8676e2f0f8745a4bc7ddfe1b1ed0016caa0cbc659786476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe53e8c068cee13e8676e2f0f8745a4bc7ddfe1b1ed0016caa0cbc659786476->enter($__internal_bbe53e8c068cee13e8676e2f0f8745a4bc7ddfe1b1ed0016caa0cbc659786476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a520b6220fa62185fb7deebceb963faab18c6c2f96be3130baf6094dac58e2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a520b6220fa62185fb7deebceb963faab18c6c2f96be3130baf6094dac58e2a9->enter($__internal_a520b6220fa62185fb7deebceb963faab18c6c2f96be3130baf6094dac58e2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_a520b6220fa62185fb7deebceb963faab18c6c2f96be3130baf6094dac58e2a9->leave($__internal_a520b6220fa62185fb7deebceb963faab18c6c2f96be3130baf6094dac58e2a9_prof);

        
        $__internal_bbe53e8c068cee13e8676e2f0f8745a4bc7ddfe1b1ed0016caa0cbc659786476->leave($__internal_bbe53e8c068cee13e8676e2f0f8745a4bc7ddfe1b1ed0016caa0cbc659786476_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8774c101e32ef6bbd699009096a79174d0914c81b96905ff1639bac3021166c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8774c101e32ef6bbd699009096a79174d0914c81b96905ff1639bac3021166c8->enter($__internal_8774c101e32ef6bbd699009096a79174d0914c81b96905ff1639bac3021166c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_86a4fffe1640d300904419b3b89ccf2bbc0e1583cf6dfd0de644de8c7f30fa7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a4fffe1640d300904419b3b89ccf2bbc0e1583cf6dfd0de644de8c7f30fa7a->enter($__internal_86a4fffe1640d300904419b3b89ccf2bbc0e1583cf6dfd0de644de8c7f30fa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_86a4fffe1640d300904419b3b89ccf2bbc0e1583cf6dfd0de644de8c7f30fa7a->leave($__internal_86a4fffe1640d300904419b3b89ccf2bbc0e1583cf6dfd0de644de8c7f30fa7a_prof);

        
        $__internal_8774c101e32ef6bbd699009096a79174d0914c81b96905ff1639bac3021166c8->leave($__internal_8774c101e32ef6bbd699009096a79174d0914c81b96905ff1639bac3021166c8_prof);

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
{% endblock %}", "FrontBundle:Default:pacients.html.twig", "C:\\xampp\\htdocs\\Centremedic\\src\\FrontBundle/Resources/views/Default/pacients.html.twig");
    }
}
