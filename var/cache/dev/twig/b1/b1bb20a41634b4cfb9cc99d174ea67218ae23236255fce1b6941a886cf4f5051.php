<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_c5878fae87b21d966bd1db18ad11b7bdc6ebbe8636fa8a5385d0fa90440ae9d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c20abf479be8d6d314ed86d5bc0dce9307e6ecf14445738f596d7b9cdaf14c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20abf479be8d6d314ed86d5bc0dce9307e6ecf14445738f596d7b9cdaf14c47->enter($__internal_c20abf479be8d6d314ed86d5bc0dce9307e6ecf14445738f596d7b9cdaf14c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_47ec6570f38c22bfec05f7f80a1975840c1751de9798da8d098f571ea77297e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ec6570f38c22bfec05f7f80a1975840c1751de9798da8d098f571ea77297e3->enter($__internal_47ec6570f38c22bfec05f7f80a1975840c1751de9798da8d098f571ea77297e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_6b428d3619ccd3afd24583fb16a7d08e457f4b671a242af95571c03cfeba99b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b428d3619ccd3afd24583fb16a7d08e457f4b671a242af95571c03cfeba99b3->enter($__internal_6b428d3619ccd3afd24583fb16a7d08e457f4b671a242af95571c03cfeba99b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_7d3a670bf85d7fdaf2ca32fe53ebe339c3c10406a291a67b682b3922687fe808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3a670bf85d7fdaf2ca32fe53ebe339c3c10406a291a67b682b3922687fe808->enter($__internal_7d3a670bf85d7fdaf2ca32fe53ebe339c3c10406a291a67b682b3922687fe808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> master

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
<<<<<<< HEAD
        $__internal_c20abf479be8d6d314ed86d5bc0dce9307e6ecf14445738f596d7b9cdaf14c47->leave($__internal_c20abf479be8d6d314ed86d5bc0dce9307e6ecf14445738f596d7b9cdaf14c47_prof);

        
        $__internal_47ec6570f38c22bfec05f7f80a1975840c1751de9798da8d098f571ea77297e3->leave($__internal_47ec6570f38c22bfec05f7f80a1975840c1751de9798da8d098f571ea77297e3_prof);
=======
        $__internal_6b428d3619ccd3afd24583fb16a7d08e457f4b671a242af95571c03cfeba99b3->leave($__internal_6b428d3619ccd3afd24583fb16a7d08e457f4b671a242af95571c03cfeba99b3_prof);

        
        $__internal_7d3a670bf85d7fdaf2ca32fe53ebe339c3c10406a291a67b682b3922687fe808->leave($__internal_7d3a670bf85d7fdaf2ca32fe53ebe339c3c10406a291a67b682b3922687fe808_prof);
>>>>>>> master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
