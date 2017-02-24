<?php

/* FrontBundle:Default:metges.html.twig */
class __TwigTemplate_ebdda32f74d34e38339cbbc62f6d41ea2aa6e6c040703565c70b231ae4728112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Default:index.html.twig ", "FrontBundle:Default:metges.html.twig", 1);
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
        $__internal_8599f7a0b8cc1bcdbee4857146f6860be74b9dc78e0fd2db83a9f971c57fac76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8599f7a0b8cc1bcdbee4857146f6860be74b9dc78e0fd2db83a9f971c57fac76->enter($__internal_8599f7a0b8cc1bcdbee4857146f6860be74b9dc78e0fd2db83a9f971c57fac76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $__internal_75613d23d980598cb98f9c9820e0dd585103ab7c92a4f4f7f37983b44d1e4079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75613d23d980598cb98f9c9820e0dd585103ab7c92a4f4f7f37983b44d1e4079->enter($__internal_75613d23d980598cb98f9c9820e0dd585103ab7c92a4f4f7f37983b44d1e4079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:metges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8599f7a0b8cc1bcdbee4857146f6860be74b9dc78e0fd2db83a9f971c57fac76->leave($__internal_8599f7a0b8cc1bcdbee4857146f6860be74b9dc78e0fd2db83a9f971c57fac76_prof);

        
        $__internal_75613d23d980598cb98f9c9820e0dd585103ab7c92a4f4f7f37983b44d1e4079->leave($__internal_75613d23d980598cb98f9c9820e0dd585103ab7c92a4f4f7f37983b44d1e4079_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96577fefcff581dbfd433ccd80f8d80efe466d69aa3a45e4237a97798ebc165d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96577fefcff581dbfd433ccd80f8d80efe466d69aa3a45e4237a97798ebc165d->enter($__internal_96577fefcff581dbfd433ccd80f8d80efe466d69aa3a45e4237a97798ebc165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a471c10f84171475ce0ecfcd960af585e5d0b8831f53499e68993468f4b06ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a471c10f84171475ce0ecfcd960af585e5d0b8831f53499e68993468f4b06ea->enter($__internal_3a471c10f84171475ce0ecfcd960af585e5d0b8831f53499e68993468f4b06ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_3a471c10f84171475ce0ecfcd960af585e5d0b8831f53499e68993468f4b06ea->leave($__internal_3a471c10f84171475ce0ecfcd960af585e5d0b8831f53499e68993468f4b06ea_prof);

        
        $__internal_96577fefcff581dbfd433ccd80f8d80efe466d69aa3a45e4237a97798ebc165d->leave($__internal_96577fefcff581dbfd433ccd80f8d80efe466d69aa3a45e4237a97798ebc165d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_25dc74e678675be6dd76c08eaff02ff58fdce4184b83c7547660eeb2cf5ad6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dc74e678675be6dd76c08eaff02ff58fdce4184b83c7547660eeb2cf5ad6f8->enter($__internal_25dc74e678675be6dd76c08eaff02ff58fdce4184b83c7547660eeb2cf5ad6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7f944e11dea0a82da6c04042cf7d156e8d7d6fd7d7af21da97cc97a187d03e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f944e11dea0a82da6c04042cf7d156e8d7d6fd7d7af21da97cc97a187d03e43->enter($__internal_7f944e11dea0a82da6c04042cf7d156e8d7d6fd7d7af21da97cc97a187d03e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Especialitat</th>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metges"] ?? $this->getContext($context, "metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 16
            echo "                <tr>
                \t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["metge"], "dni", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
        \t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</table>
            </div>
        </div>
    </div>
";
        
        $__internal_7f944e11dea0a82da6c04042cf7d156e8d7d6fd7d7af21da97cc97a187d03e43->leave($__internal_7f944e11dea0a82da6c04042cf7d156e8d7d6fd7d7af21da97cc97a187d03e43_prof);

        
        $__internal_25dc74e678675be6dd76c08eaff02ff58fdce4184b83c7547660eeb2cf5ad6f8->leave($__internal_25dc74e678675be6dd76c08eaff02ff58fdce4184b83c7547660eeb2cf5ad6f8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:metges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
\t    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h1>Metges</h1>
                <p>Llistat de metges:</p>
                <table class=\"table table-hover\">
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Especialitat</th>
                {% for metge in metges %}
                <tr>
                \t<td>{{ metge.nom }}</td>
                    <td>{{ metge.cognom }}</td>
                    <td>{{ metge.dni|upper }}</td>
                    <td>{{ metge.especialitat }}</td>
        \t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
            </div>
        </div>
    </div>
{% endblock %}", "FrontBundle:Default:metges.html.twig", "C:\\xampp\\htdocs\\Centremedic\\src\\FrontBundle/Resources/views/Default/metges.html.twig");
    }
}
