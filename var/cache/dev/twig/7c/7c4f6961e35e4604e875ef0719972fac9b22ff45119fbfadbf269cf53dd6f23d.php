<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_87b79b4656a655c78bcf405162001ec2fe2b7e32e4e18865a4298704ac1b5890 extends Twig_Template
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
        $__internal_dd1f61b8cc3f7b5f14ef149370ece802f255b39a89d3ef5b2a6fef99758e5056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1f61b8cc3f7b5f14ef149370ece802f255b39a89d3ef5b2a6fef99758e5056->enter($__internal_dd1f61b8cc3f7b5f14ef149370ece802f255b39a89d3ef5b2a6fef99758e5056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_a7b01da15acbdd58bb934ea31112707952435052eebc56e1171d2b993e677c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b01da15acbdd58bb934ea31112707952435052eebc56e1171d2b993e677c19->enter($__internal_a7b01da15acbdd58bb934ea31112707952435052eebc56e1171d2b993e677c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_29fad2f4a2cc97176d40638acd05b1265cc19b8a0662b6f81a6e16fcdb9d7278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fad2f4a2cc97176d40638acd05b1265cc19b8a0662b6f81a6e16fcdb9d7278->enter($__internal_29fad2f4a2cc97176d40638acd05b1265cc19b8a0662b6f81a6e16fcdb9d7278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_cd2e9094c0e621b46d4cbd62494ce403c79d6a142c442fe5d886cbf2791c0adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2e9094c0e621b46d4cbd62494ce403c79d6a142c442fe5d886cbf2791c0adf->enter($__internal_cd2e9094c0e621b46d4cbd62494ce403c79d6a142c442fe5d886cbf2791c0adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> master

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_dd1f61b8cc3f7b5f14ef149370ece802f255b39a89d3ef5b2a6fef99758e5056->leave($__internal_dd1f61b8cc3f7b5f14ef149370ece802f255b39a89d3ef5b2a6fef99758e5056_prof);

        
        $__internal_a7b01da15acbdd58bb934ea31112707952435052eebc56e1171d2b993e677c19->leave($__internal_a7b01da15acbdd58bb934ea31112707952435052eebc56e1171d2b993e677c19_prof);
=======
        $__internal_29fad2f4a2cc97176d40638acd05b1265cc19b8a0662b6f81a6e16fcdb9d7278->leave($__internal_29fad2f4a2cc97176d40638acd05b1265cc19b8a0662b6f81a6e16fcdb9d7278_prof);

        
        $__internal_cd2e9094c0e621b46d4cbd62494ce403c79d6a142c442fe5d886cbf2791c0adf->leave($__internal_cd2e9094c0e621b46d4cbd62494ce403c79d6a142c442fe5d886cbf2791c0adf_prof);
>>>>>>> master

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 3,  34 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
