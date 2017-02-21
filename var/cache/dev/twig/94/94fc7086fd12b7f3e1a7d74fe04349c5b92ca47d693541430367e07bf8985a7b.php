<?php

/* FrontBundle:Default:login.html.twig */
class __TwigTemplate_ed5bd75c1ac277f6ef2e61cc9f44df3b79b2e8b3da8468a5a9cb59e28195d4f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:login.html.twig", 1);
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
        $__internal_51219af0380c6599f9f71dd0f182954160eb6590d1d81e8e23d691a88f874dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51219af0380c6599f9f71dd0f182954160eb6590d1d81e8e23d691a88f874dc3->enter($__internal_51219af0380c6599f9f71dd0f182954160eb6590d1d81e8e23d691a88f874dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_85e1a6b610dbeca52a6f8b301eacd43f16c3efef6d1cd2bb61e0db72840271d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e1a6b610dbeca52a6f8b301eacd43f16c3efef6d1cd2bb61e0db72840271d9->enter($__internal_85e1a6b610dbeca52a6f8b301eacd43f16c3efef6d1cd2bb61e0db72840271d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51219af0380c6599f9f71dd0f182954160eb6590d1d81e8e23d691a88f874dc3->leave($__internal_51219af0380c6599f9f71dd0f182954160eb6590d1d81e8e23d691a88f874dc3_prof);

        
        $__internal_85e1a6b610dbeca52a6f8b301eacd43f16c3efef6d1cd2bb61e0db72840271d9->leave($__internal_85e1a6b610dbeca52a6f8b301eacd43f16c3efef6d1cd2bb61e0db72840271d9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_20e68f038a59e52b5e835b2c96afb90e40707b2f7ecd641d26139f20427b3b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e68f038a59e52b5e835b2c96afb90e40707b2f7ecd641d26139f20427b3b1c->enter($__internal_20e68f038a59e52b5e835b2c96afb90e40707b2f7ecd641d26139f20427b3b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_795c6dfacfd44a3a84fde02443ca6d7c0cf48f92c1011b345ea116f06eb762b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795c6dfacfd44a3a84fde02443ca6d7c0cf48f92c1011b345ea116f06eb762b7->enter($__internal_795c6dfacfd44a3a84fde02443ca6d7c0cf48f92c1011b345ea116f06eb762b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_795c6dfacfd44a3a84fde02443ca6d7c0cf48f92c1011b345ea116f06eb762b7->leave($__internal_795c6dfacfd44a3a84fde02443ca6d7c0cf48f92c1011b345ea116f06eb762b7_prof);

        
        $__internal_20e68f038a59e52b5e835b2c96afb90e40707b2f7ecd641d26139f20427b3b1c->leave($__internal_20e68f038a59e52b5e835b2c96afb90e40707b2f7ecd641d26139f20427b3b1c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a0d57ab2b5f2c16e4498f26755d60546006fb584cbcf46c86211b7767f132b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d57ab2b5f2c16e4498f26755d60546006fb584cbcf46c86211b7767f132b6e->enter($__internal_a0d57ab2b5f2c16e4498f26755d60546006fb584cbcf46c86211b7767f132b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_5bba55ade6b56692b1a4d1ea81ac9710dce0bd0b9917328b90e50e36b5750c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba55ade6b56692b1a4d1ea81ac9710dce0bd0b9917328b90e50e36b5750c45->enter($__internal_5bba55ade6b56692b1a4d1ea81ac9710dce0bd0b9917328b90e50e36b5750c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
        <h1>Login</h1>
            <div class=\"col-sm-10 col-lg-6 col-md-6\">
            ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    
      
        <input type=\"hidden\" name=\"_back_homepage\" value=\"/account\" />
    

    <button type=\"submit\">login</button>
</form>
            </div>
        </div>
    </div>
";
        
        $__internal_5bba55ade6b56692b1a4d1ea81ac9710dce0bd0b9917328b90e50e36b5750c45->leave($__internal_5bba55ade6b56692b1a4d1ea81ac9710dce0bd0b9917328b90e50e36b5750c45_prof);

        
        $__internal_a0d57ab2b5f2c16e4498f26755d60546006fb584cbcf46c86211b7767f132b6e->leave($__internal_a0d57ab2b5f2c16e4498f26755d60546006fb584cbcf46c86211b7767f132b6e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  86 => 13,  83 => 12,  77 => 10,  75 => 9,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Login{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
        <h1>Login</h1>
            <div class=\"col-sm-10 col-lg-6 col-md-6\">
            {% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    
      
        <input type=\"hidden\" name=\"_back_homepage\" value=\"/account\" />
    

    <button type=\"submit\">login</button>
</form>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/login.html.twig");
    }
}
