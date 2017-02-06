<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_057113fe3677b209437f3be90e3cdf593aa7d20af51d1b5baef48338f18e0ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057113fe3677b209437f3be90e3cdf593aa7d20af51d1b5baef48338f18e0ad1->enter($__internal_057113fe3677b209437f3be90e3cdf593aa7d20af51d1b5baef48338f18e0ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4dcc5d4bd891b9b6f23a60dc38befcd81d586b7499a412fade94b0f53f686739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcc5d4bd891b9b6f23a60dc38befcd81d586b7499a412fade94b0f53f686739->enter($__internal_4dcc5d4bd891b9b6f23a60dc38befcd81d586b7499a412fade94b0f53f686739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_057113fe3677b209437f3be90e3cdf593aa7d20af51d1b5baef48338f18e0ad1->leave($__internal_057113fe3677b209437f3be90e3cdf593aa7d20af51d1b5baef48338f18e0ad1_prof);

        
        $__internal_4dcc5d4bd891b9b6f23a60dc38befcd81d586b7499a412fade94b0f53f686739->leave($__internal_4dcc5d4bd891b9b6f23a60dc38befcd81d586b7499a412fade94b0f53f686739_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7809a269c1659ebb11154a73e3b6926deab82a168926c7a5de8d6bef9f3ab85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7809a269c1659ebb11154a73e3b6926deab82a168926c7a5de8d6bef9f3ab85->enter($__internal_c7809a269c1659ebb11154a73e3b6926deab82a168926c7a5de8d6bef9f3ab85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_812d2916dd937950f227b1d9b7af64923920ed54fbeac28f662041f745869420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812d2916dd937950f227b1d9b7af64923920ed54fbeac28f662041f745869420->enter($__internal_812d2916dd937950f227b1d9b7af64923920ed54fbeac28f662041f745869420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_812d2916dd937950f227b1d9b7af64923920ed54fbeac28f662041f745869420->leave($__internal_812d2916dd937950f227b1d9b7af64923920ed54fbeac28f662041f745869420_prof);

        
        $__internal_c7809a269c1659ebb11154a73e3b6926deab82a168926c7a5de8d6bef9f3ab85->leave($__internal_c7809a269c1659ebb11154a73e3b6926deab82a168926c7a5de8d6bef9f3ab85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_731cf865334b7d9bbad3787e5f5d2e49a19f35b9598ab97aa473e6b3a02f850b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731cf865334b7d9bbad3787e5f5d2e49a19f35b9598ab97aa473e6b3a02f850b->enter($__internal_731cf865334b7d9bbad3787e5f5d2e49a19f35b9598ab97aa473e6b3a02f850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fbfb77def49c158af13d3aaa0988b83258d915ea8a2021e716c4de33942faeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbfb77def49c158af13d3aaa0988b83258d915ea8a2021e716c4de33942faeb->enter($__internal_1fbfb77def49c158af13d3aaa0988b83258d915ea8a2021e716c4de33942faeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fbfb77def49c158af13d3aaa0988b83258d915ea8a2021e716c4de33942faeb->leave($__internal_1fbfb77def49c158af13d3aaa0988b83258d915ea8a2021e716c4de33942faeb_prof);

        
        $__internal_731cf865334b7d9bbad3787e5f5d2e49a19f35b9598ab97aa473e6b3a02f850b->leave($__internal_731cf865334b7d9bbad3787e5f5d2e49a19f35b9598ab97aa473e6b3a02f850b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad018f5fd17810ffac41ac7a7f83ceb22e4c11bb434a0ff6fd1d35c7546bda6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad018f5fd17810ffac41ac7a7f83ceb22e4c11bb434a0ff6fd1d35c7546bda6c->enter($__internal_ad018f5fd17810ffac41ac7a7f83ceb22e4c11bb434a0ff6fd1d35c7546bda6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0163f42813020dc69dd8e2f0577b447f6a91454f95fd925d68be24b2099831e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0163f42813020dc69dd8e2f0577b447f6a91454f95fd925d68be24b2099831e2->enter($__internal_0163f42813020dc69dd8e2f0577b447f6a91454f95fd925d68be24b2099831e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0163f42813020dc69dd8e2f0577b447f6a91454f95fd925d68be24b2099831e2->leave($__internal_0163f42813020dc69dd8e2f0577b447f6a91454f95fd925d68be24b2099831e2_prof);

        
        $__internal_ad018f5fd17810ffac41ac7a7f83ceb22e4c11bb434a0ff6fd1d35c7546bda6c->leave($__internal_ad018f5fd17810ffac41ac7a7f83ceb22e4c11bb434a0ff6fd1d35c7546bda6c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88d9da485bf92adc260bb7d04fd637f15674a9979f0235b3d438a21b9ef1cf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d9da485bf92adc260bb7d04fd637f15674a9979f0235b3d438a21b9ef1cf44->enter($__internal_88d9da485bf92adc260bb7d04fd637f15674a9979f0235b3d438a21b9ef1cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ddfe8ed8510957a7fe7b637efc800f4e12b3cae1dc705aab521924a502696b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddfe8ed8510957a7fe7b637efc800f4e12b3cae1dc705aab521924a502696b8->enter($__internal_7ddfe8ed8510957a7fe7b637efc800f4e12b3cae1dc705aab521924a502696b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ddfe8ed8510957a7fe7b637efc800f4e12b3cae1dc705aab521924a502696b8->leave($__internal_7ddfe8ed8510957a7fe7b637efc800f4e12b3cae1dc705aab521924a502696b8_prof);

        
        $__internal_88d9da485bf92adc260bb7d04fd637f15674a9979f0235b3d438a21b9ef1cf44->leave($__internal_88d9da485bf92adc260bb7d04fd637f15674a9979f0235b3d438a21b9ef1cf44_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\app\\Resources\\views\\base.html.twig");
    }
}
