<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b626376904a6b3ed4e20f74c229daa4842619667a31e8778b3b223236667ec0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b626376904a6b3ed4e20f74c229daa4842619667a31e8778b3b223236667ec0e->enter($__internal_b626376904a6b3ed4e20f74c229daa4842619667a31e8778b3b223236667ec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d7085dd39ff73296b1bca66a93c216b3bb5d80e2d94f2846a796caa233829651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7085dd39ff73296b1bca66a93c216b3bb5d80e2d94f2846a796caa233829651->enter($__internal_d7085dd39ff73296b1bca66a93c216b3bb5d80e2d94f2846a796caa233829651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b626376904a6b3ed4e20f74c229daa4842619667a31e8778b3b223236667ec0e->leave($__internal_b626376904a6b3ed4e20f74c229daa4842619667a31e8778b3b223236667ec0e_prof);

        
        $__internal_d7085dd39ff73296b1bca66a93c216b3bb5d80e2d94f2846a796caa233829651->leave($__internal_d7085dd39ff73296b1bca66a93c216b3bb5d80e2d94f2846a796caa233829651_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_145c869a9afade520fd3e29215cc2d5b185c66403818f0c6f36b32914a55d132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145c869a9afade520fd3e29215cc2d5b185c66403818f0c6f36b32914a55d132->enter($__internal_145c869a9afade520fd3e29215cc2d5b185c66403818f0c6f36b32914a55d132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5755bc0c0ebd1a19c45ecf58db3e59a0eea3feabd6a7e9b55726fb941ce6fd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5755bc0c0ebd1a19c45ecf58db3e59a0eea3feabd6a7e9b55726fb941ce6fd79->enter($__internal_5755bc0c0ebd1a19c45ecf58db3e59a0eea3feabd6a7e9b55726fb941ce6fd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5755bc0c0ebd1a19c45ecf58db3e59a0eea3feabd6a7e9b55726fb941ce6fd79->leave($__internal_5755bc0c0ebd1a19c45ecf58db3e59a0eea3feabd6a7e9b55726fb941ce6fd79_prof);

        
        $__internal_145c869a9afade520fd3e29215cc2d5b185c66403818f0c6f36b32914a55d132->leave($__internal_145c869a9afade520fd3e29215cc2d5b185c66403818f0c6f36b32914a55d132_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e44e756157a8e0a4c7f7943cc274a6a7e6ee645f07082fc57c4e9c567366a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e44e756157a8e0a4c7f7943cc274a6a7e6ee645f07082fc57c4e9c567366a0->enter($__internal_d5e44e756157a8e0a4c7f7943cc274a6a7e6ee645f07082fc57c4e9c567366a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf581c7b16f7e714e595c430890bafa91d40972fcb72616fa3387ac7e5292103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf581c7b16f7e714e595c430890bafa91d40972fcb72616fa3387ac7e5292103->enter($__internal_bf581c7b16f7e714e595c430890bafa91d40972fcb72616fa3387ac7e5292103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bf581c7b16f7e714e595c430890bafa91d40972fcb72616fa3387ac7e5292103->leave($__internal_bf581c7b16f7e714e595c430890bafa91d40972fcb72616fa3387ac7e5292103_prof);

        
        $__internal_d5e44e756157a8e0a4c7f7943cc274a6a7e6ee645f07082fc57c4e9c567366a0->leave($__internal_d5e44e756157a8e0a4c7f7943cc274a6a7e6ee645f07082fc57c4e9c567366a0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_657a13f4c0cfe1076a44d928dc54690a7975180127a655c1597e4e2433198d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657a13f4c0cfe1076a44d928dc54690a7975180127a655c1597e4e2433198d77->enter($__internal_657a13f4c0cfe1076a44d928dc54690a7975180127a655c1597e4e2433198d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17c62f57055075a246874a9ef8503d350257207bd3f51fd603486e5e7bfafc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c62f57055075a246874a9ef8503d350257207bd3f51fd603486e5e7bfafc32->enter($__internal_17c62f57055075a246874a9ef8503d350257207bd3f51fd603486e5e7bfafc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_17c62f57055075a246874a9ef8503d350257207bd3f51fd603486e5e7bfafc32->leave($__internal_17c62f57055075a246874a9ef8503d350257207bd3f51fd603486e5e7bfafc32_prof);

        
        $__internal_657a13f4c0cfe1076a44d928dc54690a7975180127a655c1597e4e2433198d77->leave($__internal_657a13f4c0cfe1076a44d928dc54690a7975180127a655c1597e4e2433198d77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
