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
        $__internal_577c9e7bb7c768b649f23290e8f231c907f277341ccc009bf6bc5c3760198302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577c9e7bb7c768b649f23290e8f231c907f277341ccc009bf6bc5c3760198302->enter($__internal_577c9e7bb7c768b649f23290e8f231c907f277341ccc009bf6bc5c3760198302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7017c06919f23f2dae290f0f30c499bf05c4c9c13fc2477a96bb80178c1a096a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7017c06919f23f2dae290f0f30c499bf05c4c9c13fc2477a96bb80178c1a096a->enter($__internal_7017c06919f23f2dae290f0f30c499bf05c4c9c13fc2477a96bb80178c1a096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577c9e7bb7c768b649f23290e8f231c907f277341ccc009bf6bc5c3760198302->leave($__internal_577c9e7bb7c768b649f23290e8f231c907f277341ccc009bf6bc5c3760198302_prof);

        
        $__internal_7017c06919f23f2dae290f0f30c499bf05c4c9c13fc2477a96bb80178c1a096a->leave($__internal_7017c06919f23f2dae290f0f30c499bf05c4c9c13fc2477a96bb80178c1a096a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3e988afca52e80b15c1aaa62cab1a2d7aede1f197e42fdd3c310d0eb1ea38d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e988afca52e80b15c1aaa62cab1a2d7aede1f197e42fdd3c310d0eb1ea38d4->enter($__internal_f3e988afca52e80b15c1aaa62cab1a2d7aede1f197e42fdd3c310d0eb1ea38d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3091c9db20f003f73270a5cafffe35099021e82714231f2f99214cbe26e2f9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3091c9db20f003f73270a5cafffe35099021e82714231f2f99214cbe26e2f9a9->enter($__internal_3091c9db20f003f73270a5cafffe35099021e82714231f2f99214cbe26e2f9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3091c9db20f003f73270a5cafffe35099021e82714231f2f99214cbe26e2f9a9->leave($__internal_3091c9db20f003f73270a5cafffe35099021e82714231f2f99214cbe26e2f9a9_prof);

        
        $__internal_f3e988afca52e80b15c1aaa62cab1a2d7aede1f197e42fdd3c310d0eb1ea38d4->leave($__internal_f3e988afca52e80b15c1aaa62cab1a2d7aede1f197e42fdd3c310d0eb1ea38d4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0581640409226d892eb07d27cfd1259cb44a6d71b57318444ca9e206826ee729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0581640409226d892eb07d27cfd1259cb44a6d71b57318444ca9e206826ee729->enter($__internal_0581640409226d892eb07d27cfd1259cb44a6d71b57318444ca9e206826ee729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_571eb6122a6678c3598432f74bd3de789aec85a4a7a88522509d38bb72af77eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571eb6122a6678c3598432f74bd3de789aec85a4a7a88522509d38bb72af77eb->enter($__internal_571eb6122a6678c3598432f74bd3de789aec85a4a7a88522509d38bb72af77eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_571eb6122a6678c3598432f74bd3de789aec85a4a7a88522509d38bb72af77eb->leave($__internal_571eb6122a6678c3598432f74bd3de789aec85a4a7a88522509d38bb72af77eb_prof);

        
        $__internal_0581640409226d892eb07d27cfd1259cb44a6d71b57318444ca9e206826ee729->leave($__internal_0581640409226d892eb07d27cfd1259cb44a6d71b57318444ca9e206826ee729_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb214c8a10868a64a963b3005626325fd6ee544ea3b01723a7c0318709643a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb214c8a10868a64a963b3005626325fd6ee544ea3b01723a7c0318709643a0->enter($__internal_adb214c8a10868a64a963b3005626325fd6ee544ea3b01723a7c0318709643a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31cc81333a9f2afadc42f8966b2085c6d7dd66c6552a3019c42264273e47a3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cc81333a9f2afadc42f8966b2085c6d7dd66c6552a3019c42264273e47a3aa->enter($__internal_31cc81333a9f2afadc42f8966b2085c6d7dd66c6552a3019c42264273e47a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_31cc81333a9f2afadc42f8966b2085c6d7dd66c6552a3019c42264273e47a3aa->leave($__internal_31cc81333a9f2afadc42f8966b2085c6d7dd66c6552a3019c42264273e47a3aa_prof);

        
        $__internal_adb214c8a10868a64a963b3005626325fd6ee544ea3b01723a7c0318709643a0->leave($__internal_adb214c8a10868a64a963b3005626325fd6ee544ea3b01723a7c0318709643a0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Centremedic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
