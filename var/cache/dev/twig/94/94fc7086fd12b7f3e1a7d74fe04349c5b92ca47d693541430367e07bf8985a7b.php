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
        $__internal_4b2dad6cbed16e5b1cd7f21770a11256b9a4b20a2f57e3831d05d742cf54fe8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2dad6cbed16e5b1cd7f21770a11256b9a4b20a2f57e3831d05d742cf54fe8e->enter($__internal_4b2dad6cbed16e5b1cd7f21770a11256b9a4b20a2f57e3831d05d742cf54fe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_ae7708ada37540359330a96057441d743043c6e99ececc0510af9d465bf479a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7708ada37540359330a96057441d743043c6e99ececc0510af9d465bf479a2->enter($__internal_ae7708ada37540359330a96057441d743043c6e99ececc0510af9d465bf479a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2dad6cbed16e5b1cd7f21770a11256b9a4b20a2f57e3831d05d742cf54fe8e->leave($__internal_4b2dad6cbed16e5b1cd7f21770a11256b9a4b20a2f57e3831d05d742cf54fe8e_prof);

        
        $__internal_ae7708ada37540359330a96057441d743043c6e99ececc0510af9d465bf479a2->leave($__internal_ae7708ada37540359330a96057441d743043c6e99ececc0510af9d465bf479a2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3de30094c1f35a668a99f5b587b59456ac92eceb9714ff8e8db71360a9e29260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de30094c1f35a668a99f5b587b59456ac92eceb9714ff8e8db71360a9e29260->enter($__internal_3de30094c1f35a668a99f5b587b59456ac92eceb9714ff8e8db71360a9e29260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f72a4878743d7d2f715e6d2ac6ac89caeaacb19b2d8cef28528a3701a0f9b711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72a4878743d7d2f715e6d2ac6ac89caeaacb19b2d8cef28528a3701a0f9b711->enter($__internal_f72a4878743d7d2f715e6d2ac6ac89caeaacb19b2d8cef28528a3701a0f9b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_f72a4878743d7d2f715e6d2ac6ac89caeaacb19b2d8cef28528a3701a0f9b711->leave($__internal_f72a4878743d7d2f715e6d2ac6ac89caeaacb19b2d8cef28528a3701a0f9b711_prof);

        
        $__internal_3de30094c1f35a668a99f5b587b59456ac92eceb9714ff8e8db71360a9e29260->leave($__internal_3de30094c1f35a668a99f5b587b59456ac92eceb9714ff8e8db71360a9e29260_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_91f1ae5d6f8d660e2afc622eba689c48204d34cbcf989487b3d545efc12a93c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f1ae5d6f8d660e2afc622eba689c48204d34cbcf989487b3d545efc12a93c0->enter($__internal_91f1ae5d6f8d660e2afc622eba689c48204d34cbcf989487b3d545efc12a93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_66877a9f0e114ee318db1f143338db32f6029f7c25231d06dc66e26fbf1f5919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66877a9f0e114ee318db1f143338db32f6029f7c25231d06dc66e26fbf1f5919->enter($__internal_66877a9f0e114ee318db1f143338db32f6029f7c25231d06dc66e26fbf1f5919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_66877a9f0e114ee318db1f143338db32f6029f7c25231d06dc66e26fbf1f5919->leave($__internal_66877a9f0e114ee318db1f143338db32f6029f7c25231d06dc66e26fbf1f5919_prof);

        
        $__internal_91f1ae5d6f8d660e2afc622eba689c48204d34cbcf989487b3d545efc12a93c0->leave($__internal_91f1ae5d6f8d660e2afc622eba689c48204d34cbcf989487b3d545efc12a93c0_prof);

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
{% endblock %}", "FrontBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\Centremedic\\src\\FrontBundle/Resources/views/Default/login.html.twig");
    }
}
