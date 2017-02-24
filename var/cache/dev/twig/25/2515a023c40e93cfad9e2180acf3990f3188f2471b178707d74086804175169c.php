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
        $__internal_d9b605b7098ef5eebc7266f8cabc1339e03a86d2188a2f96d1bffbc3aab22e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b605b7098ef5eebc7266f8cabc1339e03a86d2188a2f96d1bffbc3aab22e41->enter($__internal_d9b605b7098ef5eebc7266f8cabc1339e03a86d2188a2f96d1bffbc3aab22e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        $__internal_a458c8336a9f43f6d4c8775c0cb1dbd3ca81855eaa0be44136327c6c8c3d6658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a458c8336a9f43f6d4c8775c0cb1dbd3ca81855eaa0be44136327c6c8c3d6658->enter($__internal_a458c8336a9f43f6d4c8775c0cb1dbd3ca81855eaa0be44136327c6c8c3d6658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d9b605b7098ef5eebc7266f8cabc1339e03a86d2188a2f96d1bffbc3aab22e41->leave($__internal_d9b605b7098ef5eebc7266f8cabc1339e03a86d2188a2f96d1bffbc3aab22e41_prof);

        
        $__internal_a458c8336a9f43f6d4c8775c0cb1dbd3ca81855eaa0be44136327c6c8c3d6658->leave($__internal_a458c8336a9f43f6d4c8775c0cb1dbd3ca81855eaa0be44136327c6c8c3d6658_prof);

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
", "BackBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Centremedic\\src\\BackBundle/Resources/views/Default/index.html.twig");
    }
}
