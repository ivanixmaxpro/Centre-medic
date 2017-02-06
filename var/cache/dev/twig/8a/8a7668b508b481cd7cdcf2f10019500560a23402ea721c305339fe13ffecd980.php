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
        $__internal_f03bf1665aba44411ad901a52f2d12a1c8103a5ac3110e61bec9b782089e7964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03bf1665aba44411ad901a52f2d12a1c8103a5ac3110e61bec9b782089e7964->enter($__internal_f03bf1665aba44411ad901a52f2d12a1c8103a5ac3110e61bec9b782089e7964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d7e20d006a8d0cf1163ecdd1d072f6f7c347de70f76f465061734716c1f8aaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e20d006a8d0cf1163ecdd1d072f6f7c347de70f76f465061734716c1f8aaa4->enter($__internal_d7e20d006a8d0cf1163ecdd1d072f6f7c347de70f76f465061734716c1f8aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03bf1665aba44411ad901a52f2d12a1c8103a5ac3110e61bec9b782089e7964->leave($__internal_f03bf1665aba44411ad901a52f2d12a1c8103a5ac3110e61bec9b782089e7964_prof);

        
        $__internal_d7e20d006a8d0cf1163ecdd1d072f6f7c347de70f76f465061734716c1f8aaa4->leave($__internal_d7e20d006a8d0cf1163ecdd1d072f6f7c347de70f76f465061734716c1f8aaa4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93413e7dabf2411b3b074b7d3c1cae9aefc1baa3e629e30bedd3e04c9cc4b880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93413e7dabf2411b3b074b7d3c1cae9aefc1baa3e629e30bedd3e04c9cc4b880->enter($__internal_93413e7dabf2411b3b074b7d3c1cae9aefc1baa3e629e30bedd3e04c9cc4b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fa2c8a72093e4eeb73677172542e50b0f46051f01429840ad104c5a253f9909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa2c8a72093e4eeb73677172542e50b0f46051f01429840ad104c5a253f9909->enter($__internal_7fa2c8a72093e4eeb73677172542e50b0f46051f01429840ad104c5a253f9909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7fa2c8a72093e4eeb73677172542e50b0f46051f01429840ad104c5a253f9909->leave($__internal_7fa2c8a72093e4eeb73677172542e50b0f46051f01429840ad104c5a253f9909_prof);

        
        $__internal_93413e7dabf2411b3b074b7d3c1cae9aefc1baa3e629e30bedd3e04c9cc4b880->leave($__internal_93413e7dabf2411b3b074b7d3c1cae9aefc1baa3e629e30bedd3e04c9cc4b880_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_90df600086ac25b319e3bf944bb6784bc5e803c967b8dcd6cbe9183d93fa794e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90df600086ac25b319e3bf944bb6784bc5e803c967b8dcd6cbe9183d93fa794e->enter($__internal_90df600086ac25b319e3bf944bb6784bc5e803c967b8dcd6cbe9183d93fa794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d12e820ab58a0308b28409e836abdcbe0c76fc7c13ec66e16f7a59a34fb91c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d12e820ab58a0308b28409e836abdcbe0c76fc7c13ec66e16f7a59a34fb91c0->enter($__internal_6d12e820ab58a0308b28409e836abdcbe0c76fc7c13ec66e16f7a59a34fb91c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d12e820ab58a0308b28409e836abdcbe0c76fc7c13ec66e16f7a59a34fb91c0->leave($__internal_6d12e820ab58a0308b28409e836abdcbe0c76fc7c13ec66e16f7a59a34fb91c0_prof);

        
        $__internal_90df600086ac25b319e3bf944bb6784bc5e803c967b8dcd6cbe9183d93fa794e->leave($__internal_90df600086ac25b319e3bf944bb6784bc5e803c967b8dcd6cbe9183d93fa794e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f1423a4b32c50f830596a5dc46fd1816c483fb13ede5087faedbd4a16e6ff1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1423a4b32c50f830596a5dc46fd1816c483fb13ede5087faedbd4a16e6ff1a->enter($__internal_6f1423a4b32c50f830596a5dc46fd1816c483fb13ede5087faedbd4a16e6ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ddef5eda6063030041f04c027ae2fce533424c96d5544b0c74c31d80abd8f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddef5eda6063030041f04c027ae2fce533424c96d5544b0c74c31d80abd8f28->enter($__internal_2ddef5eda6063030041f04c027ae2fce533424c96d5544b0c74c31d80abd8f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2ddef5eda6063030041f04c027ae2fce533424c96d5544b0c74c31d80abd8f28->leave($__internal_2ddef5eda6063030041f04c027ae2fce533424c96d5544b0c74c31d80abd8f28_prof);

        
        $__internal_6f1423a4b32c50f830596a5dc46fd1816c483fb13ede5087faedbd4a16e6ff1a->leave($__internal_6f1423a4b32c50f830596a5dc46fd1816c483fb13ede5087faedbd4a16e6ff1a_prof);

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