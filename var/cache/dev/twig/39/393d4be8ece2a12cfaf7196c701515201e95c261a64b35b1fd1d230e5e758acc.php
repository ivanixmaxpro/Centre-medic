<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_1b16d855599286ab0f1a651ae13b010b3c8b77bf181d1aba2dc8f2596541d7ff extends Twig_Template
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
        $__internal_230d6d2071128495882439242ebea01777a57c2638919d7407ba9d1eecf1ae44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230d6d2071128495882439242ebea01777a57c2638919d7407ba9d1eecf1ae44->enter($__internal_230d6d2071128495882439242ebea01777a57c2638919d7407ba9d1eecf1ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_1fdd3f209234d7a78aff1f2b070022d6ed852797c315f1d0ab4b2f4b0ab9ee13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdd3f209234d7a78aff1f2b070022d6ed852797c315f1d0ab4b2f4b0ab9ee13->enter($__internal_1fdd3f209234d7a78aff1f2b070022d6ed852797c315f1d0ab4b2f4b0ab9ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_230d6d2071128495882439242ebea01777a57c2638919d7407ba9d1eecf1ae44->leave($__internal_230d6d2071128495882439242ebea01777a57c2638919d7407ba9d1eecf1ae44_prof);

        
        $__internal_1fdd3f209234d7a78aff1f2b070022d6ed852797c315f1d0ab4b2f4b0ab9ee13->leave($__internal_1fdd3f209234d7a78aff1f2b070022d6ed852797c315f1d0ab4b2f4b0ab9ee13_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
