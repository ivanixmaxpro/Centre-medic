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
        $__internal_ddfbac7cd26863ba19710a438b4fa9cc742e96256ade45518e6e850f7c782a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfbac7cd26863ba19710a438b4fa9cc742e96256ade45518e6e850f7c782a0a->enter($__internal_ddfbac7cd26863ba19710a438b4fa9cc742e96256ade45518e6e850f7c782a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_8f696fc93e8e358206adcfa4ac04a370d3f37e731ffc212a0c5f9c64b184ab62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f696fc93e8e358206adcfa4ac04a370d3f37e731ffc212a0c5f9c64b184ab62->enter($__internal_8f696fc93e8e358206adcfa4ac04a370d3f37e731ffc212a0c5f9c64b184ab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddfbac7cd26863ba19710a438b4fa9cc742e96256ade45518e6e850f7c782a0a->leave($__internal_ddfbac7cd26863ba19710a438b4fa9cc742e96256ade45518e6e850f7c782a0a_prof);

        
        $__internal_8f696fc93e8e358206adcfa4ac04a370d3f37e731ffc212a0c5f9c64b184ab62->leave($__internal_8f696fc93e8e358206adcfa4ac04a370d3f37e731ffc212a0c5f9c64b184ab62_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9a08330001a978b70123b88b7dd9ae6a3a0430b32bddfeb520b538ec7c449af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a08330001a978b70123b88b7dd9ae6a3a0430b32bddfeb520b538ec7c449af->enter($__internal_c9a08330001a978b70123b88b7dd9ae6a3a0430b32bddfeb520b538ec7c449af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c0d4ea0ab0914bf64bd453d0e1a5a61d88601ec7f4a669f19e92e13ff217ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0d4ea0ab0914bf64bd453d0e1a5a61d88601ec7f4a669f19e92e13ff217ef3->enter($__internal_0c0d4ea0ab0914bf64bd453d0e1a5a61d88601ec7f4a669f19e92e13ff217ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_0c0d4ea0ab0914bf64bd453d0e1a5a61d88601ec7f4a669f19e92e13ff217ef3->leave($__internal_0c0d4ea0ab0914bf64bd453d0e1a5a61d88601ec7f4a669f19e92e13ff217ef3_prof);

        
        $__internal_c9a08330001a978b70123b88b7dd9ae6a3a0430b32bddfeb520b538ec7c449af->leave($__internal_c9a08330001a978b70123b88b7dd9ae6a3a0430b32bddfeb520b538ec7c449af_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f1d936d5def3bfd6370dc534ae1379ba8a28d4e690540230d114022ef4044fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d936d5def3bfd6370dc534ae1379ba8a28d4e690540230d114022ef4044fdc->enter($__internal_f1d936d5def3bfd6370dc534ae1379ba8a28d4e690540230d114022ef4044fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a5ac78fefe96620112d67bcc1dd2acb3a86feabafee58efcd895fc7164dada71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ac78fefe96620112d67bcc1dd2acb3a86feabafee58efcd895fc7164dada71->enter($__internal_a5ac78fefe96620112d67bcc1dd2acb3a86feabafee58efcd895fc7164dada71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>ID</th>
                <th>Especialitat</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metges"] ?? $this->getContext($context, "metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 14
            echo "                <tr>
                \t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "id", array()), "html", null, true);
            echo "</td>
        \t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_a5ac78fefe96620112d67bcc1dd2acb3a86feabafee58efcd895fc7164dada71->leave($__internal_a5ac78fefe96620112d67bcc1dd2acb3a86feabafee58efcd895fc7164dada71_prof);

        
        $__internal_f1d936d5def3bfd6370dc534ae1379ba8a28d4e690540230d114022ef4044fdc->leave($__internal_f1d936d5def3bfd6370dc534ae1379ba8a28d4e690540230d114022ef4044fdc_prof);

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
{% block title %}Pacients{% endblock %}
{% block page_content %}
    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>ID</th>
                <th>Especialitat</th>
                {% for metge in metges %}
                <tr>
                \t<td>{{ metge.id }}</td>
        \t\t\t<td>{{ metge.especialitat }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:metges.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/metges.html.twig");
    }
}
