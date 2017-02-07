<?php

/* BackBundle:Default:index.html.twig */
class __TwigTemplate_1dfc7ec89a1625cb7e148f53a5dc16e084e9aa2bb22c873453d78faa55bb54f5 extends Twig_Template
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
        $__internal_a97f0b45280f8d6c05c863b2b760e6ff8a2d52f18b938ff6bbee5bd6af9dff56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97f0b45280f8d6c05c863b2b760e6ff8a2d52f18b938ff6bbee5bd6af9dff56->enter($__internal_a97f0b45280f8d6c05c863b2b760e6ff8a2d52f18b938ff6bbee5bd6af9dff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        $__internal_f40961270ae46f6aa5964646d35c5f4b3079ba49933d29ad9aeb36ec58bc2079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40961270ae46f6aa5964646d35c5f4b3079ba49933d29ad9aeb36ec58bc2079->enter($__internal_f40961270ae46f6aa5964646d35c5f4b3079ba49933d29ad9aeb36ec58bc2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a97f0b45280f8d6c05c863b2b760e6ff8a2d52f18b938ff6bbee5bd6af9dff56->leave($__internal_a97f0b45280f8d6c05c863b2b760e6ff8a2d52f18b938ff6bbee5bd6af9dff56_prof);

        
        $__internal_f40961270ae46f6aa5964646d35c5f4b3079ba49933d29ad9aeb36ec58bc2079->leave($__internal_f40961270ae46f6aa5964646d35c5f4b3079ba49933d29ad9aeb36ec58bc2079_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:index.html.twig";
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
", "BackBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\BackBundle/Resources/views/Default/index.html.twig");
    }
}
