<?php

/* FrontBundle:Default:pacients.html.twig */
class __TwigTemplate_9b6299173ffd83c29efaa06f33df15cb2b7e0c05c7a7440176ba62769b2f81b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:pacients.html.twig", 1);
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
        $__internal_36b97ba94b22f762e61db6fe6c3bab818f29e083adedcbcaf1a96734edd9b23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b97ba94b22f762e61db6fe6c3bab818f29e083adedcbcaf1a96734edd9b23b->enter($__internal_36b97ba94b22f762e61db6fe6c3bab818f29e083adedcbcaf1a96734edd9b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $__internal_eb521f90533d09bc5a48e8aaa116ee9b491be72a874c27c8617f34ea20d79cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb521f90533d09bc5a48e8aaa116ee9b491be72a874c27c8617f34ea20d79cac->enter($__internal_eb521f90533d09bc5a48e8aaa116ee9b491be72a874c27c8617f34ea20d79cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:pacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b97ba94b22f762e61db6fe6c3bab818f29e083adedcbcaf1a96734edd9b23b->leave($__internal_36b97ba94b22f762e61db6fe6c3bab818f29e083adedcbcaf1a96734edd9b23b_prof);

        
        $__internal_eb521f90533d09bc5a48e8aaa116ee9b491be72a874c27c8617f34ea20d79cac->leave($__internal_eb521f90533d09bc5a48e8aaa116ee9b491be72a874c27c8617f34ea20d79cac_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bcfdbc3baeeb4cf731a17ce3c4a02b6f4cb34e51ee9d4cd066fb3280b8cdba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcfdbc3baeeb4cf731a17ce3c4a02b6f4cb34e51ee9d4cd066fb3280b8cdba1->enter($__internal_9bcfdbc3baeeb4cf731a17ce3c4a02b6f4cb34e51ee9d4cd066fb3280b8cdba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9494bccb2b5630147c46ee593217ddf279e63f35092b1b6c92b7dc26befaa754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9494bccb2b5630147c46ee593217ddf279e63f35092b1b6c92b7dc26befaa754->enter($__internal_9494bccb2b5630147c46ee593217ddf279e63f35092b1b6c92b7dc26befaa754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_9494bccb2b5630147c46ee593217ddf279e63f35092b1b6c92b7dc26befaa754->leave($__internal_9494bccb2b5630147c46ee593217ddf279e63f35092b1b6c92b7dc26befaa754_prof);

        
        $__internal_9bcfdbc3baeeb4cf731a17ce3c4a02b6f4cb34e51ee9d4cd066fb3280b8cdba1->leave($__internal_9bcfdbc3baeeb4cf731a17ce3c4a02b6f4cb34e51ee9d4cd066fb3280b8cdba1_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b256a6121d3830bd3886df1fd5ef36b0002bfc3f34c76a93d3329a937c8ff275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b256a6121d3830bd3886df1fd5ef36b0002bfc3f34c76a93d3329a937c8ff275->enter($__internal_b256a6121d3830bd3886df1fd5ef36b0002bfc3f34c76a93d3329a937c8ff275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_79b397ebc259fa87fc544b3568f0b469e871378ac0137e6321e4819e79c63e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b397ebc259fa87fc544b3568f0b469e871378ac0137e6321e4819e79c63e28->enter($__internal_79b397ebc259fa87fc544b3568f0b469e871378ac0137e6321e4819e79c63e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>aqui anira la seccio de llista pacients</p>
            </div>
        </div>
    </div>
";
        
        $__internal_79b397ebc259fa87fc544b3568f0b469e871378ac0137e6321e4819e79c63e28->leave($__internal_79b397ebc259fa87fc544b3568f0b469e871378ac0137e6321e4819e79c63e28_prof);

        
        $__internal_b256a6121d3830bd3886df1fd5ef36b0002bfc3f34c76a93d3329a937c8ff275->leave($__internal_b256a6121d3830bd3886df1fd5ef36b0002bfc3f34c76a93d3329a937c8ff275_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:pacients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Pacients{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Pacients</h1>
                <p>aqui anira la seccio de llista pacients</p>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:pacients.html.twig", "C:\\xampp\\htdocs\\Centre-medic\\src\\FrontBundle/Resources/views/Default/pacients.html.twig");
    }
}
