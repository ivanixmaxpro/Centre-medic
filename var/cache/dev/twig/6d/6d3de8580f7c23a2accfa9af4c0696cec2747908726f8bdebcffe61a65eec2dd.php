<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_118fa8d4821cef41223f47291209c1f29c7a3db418fbc1d315629b4ed5b74197 extends Twig_Template
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
        $__internal_584de9a99b505f2153c306056701e47f1fbcbc7e645e32e85a8c0666e2aaed9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584de9a99b505f2153c306056701e47f1fbcbc7e645e32e85a8c0666e2aaed9c->enter($__internal_584de9a99b505f2153c306056701e47f1fbcbc7e645e32e85a8c0666e2aaed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_93d531e11bdb3f25c6546208448c074ec870a283814e7573d5ce03121078e3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d531e11bdb3f25c6546208448c074ec870a283814e7573d5ce03121078e3f9->enter($__internal_93d531e11bdb3f25c6546208448c074ec870a283814e7573d5ce03121078e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_10b7381be0f2146edd407e09cf28185c5809f316f9aad61b2a938f09a4937402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b7381be0f2146edd407e09cf28185c5809f316f9aad61b2a938f09a4937402->enter($__internal_10b7381be0f2146edd407e09cf28185c5809f316f9aad61b2a938f09a4937402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_e3ad27960bcf81fb0ad723195afddc5e7a022a91dc6b04d9f65a4a59df8d2a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ad27960bcf81fb0ad723195afddc5e7a022a91dc6b04d9f65a4a59df8d2a11->enter($__internal_e3ad27960bcf81fb0ad723195afddc5e7a022a91dc6b04d9f65a4a59df8d2a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> master

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< HEAD
        $__internal_584de9a99b505f2153c306056701e47f1fbcbc7e645e32e85a8c0666e2aaed9c->leave($__internal_584de9a99b505f2153c306056701e47f1fbcbc7e645e32e85a8c0666e2aaed9c_prof);

        
        $__internal_93d531e11bdb3f25c6546208448c074ec870a283814e7573d5ce03121078e3f9->leave($__internal_93d531e11bdb3f25c6546208448c074ec870a283814e7573d5ce03121078e3f9_prof);
=======
        $__internal_10b7381be0f2146edd407e09cf28185c5809f316f9aad61b2a938f09a4937402->leave($__internal_10b7381be0f2146edd407e09cf28185c5809f316f9aad61b2a938f09a4937402_prof);

        
        $__internal_e3ad27960bcf81fb0ad723195afddc5e7a022a91dc6b04d9f65a4a59df8d2a11->leave($__internal_e3ad27960bcf81fb0ad723195afddc5e7a022a91dc6b04d9f65a4a59df8d2a11_prof);
>>>>>>> master

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
