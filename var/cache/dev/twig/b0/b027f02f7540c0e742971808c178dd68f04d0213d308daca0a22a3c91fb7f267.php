<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_39a586061736587286c44e67c3b13141969ee101a76afb1d9b6f7bb2cdee03b1 extends Twig_Template
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
        $__internal_a59008c2565282c797bdd61dd0d1aa20976ef1ec1c369e337fad0800244ccf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59008c2565282c797bdd61dd0d1aa20976ef1ec1c369e337fad0800244ccf59->enter($__internal_a59008c2565282c797bdd61dd0d1aa20976ef1ec1c369e337fad0800244ccf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_9ed50be46430ccf1695d61c024b8c690f9770d35052893ab12505c2ba1be7990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed50be46430ccf1695d61c024b8c690f9770d35052893ab12505c2ba1be7990->enter($__internal_9ed50be46430ccf1695d61c024b8c690f9770d35052893ab12505c2ba1be7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_c5121eecb3e96d0932389885977e8064c2419bf2eec9d76baeca19bf51dac479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5121eecb3e96d0932389885977e8064c2419bf2eec9d76baeca19bf51dac479->enter($__internal_c5121eecb3e96d0932389885977e8064c2419bf2eec9d76baeca19bf51dac479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ee19c0435925d5713cb8b7c5af1953e5ebfde78b3d8a26c326700c20a2705235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee19c0435925d5713cb8b7c5af1953e5ebfde78b3d8a26c326700c20a2705235->enter($__internal_ee19c0435925d5713cb8b7c5af1953e5ebfde78b3d8a26c326700c20a2705235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> master

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_a59008c2565282c797bdd61dd0d1aa20976ef1ec1c369e337fad0800244ccf59->leave($__internal_a59008c2565282c797bdd61dd0d1aa20976ef1ec1c369e337fad0800244ccf59_prof);

        
        $__internal_9ed50be46430ccf1695d61c024b8c690f9770d35052893ab12505c2ba1be7990->leave($__internal_9ed50be46430ccf1695d61c024b8c690f9770d35052893ab12505c2ba1be7990_prof);
=======
        $__internal_c5121eecb3e96d0932389885977e8064c2419bf2eec9d76baeca19bf51dac479->leave($__internal_c5121eecb3e96d0932389885977e8064c2419bf2eec9d76baeca19bf51dac479_prof);

        
        $__internal_ee19c0435925d5713cb8b7c5af1953e5ebfde78b3d8a26c326700c20a2705235->leave($__internal_ee19c0435925d5713cb8b7c5af1953e5ebfde78b3d8a26c326700c20a2705235_prof);
>>>>>>> master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
