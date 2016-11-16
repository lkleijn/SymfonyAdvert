<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_073f3c12c980592500d97875b9be1e2ffd69b82c20922686e80e9ec1a986ef1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_61761a2876519131ff8ba9a860c7339ec6de191924fabb2d409ae3bc8e6d719a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61761a2876519131ff8ba9a860c7339ec6de191924fabb2d409ae3bc8e6d719a->enter($__internal_61761a2876519131ff8ba9a860c7339ec6de191924fabb2d409ae3bc8e6d719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61761a2876519131ff8ba9a860c7339ec6de191924fabb2d409ae3bc8e6d719a->leave($__internal_61761a2876519131ff8ba9a860c7339ec6de191924fabb2d409ae3bc8e6d719a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_221de267b5486835e02013dd7f9fc15f8695ae7990b4f2149a6e5c72268b9009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221de267b5486835e02013dd7f9fc15f8695ae7990b4f2149a6e5c72268b9009->enter($__internal_221de267b5486835e02013dd7f9fc15f8695ae7990b4f2149a6e5c72268b9009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_221de267b5486835e02013dd7f9fc15f8695ae7990b4f2149a6e5c72268b9009->leave($__internal_221de267b5486835e02013dd7f9fc15f8695ae7990b4f2149a6e5c72268b9009_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_920229abe872a91d2538c0c4ec814dd1a637d6a55e83bb425fce56d3e3bca848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920229abe872a91d2538c0c4ec814dd1a637d6a55e83bb425fce56d3e3bca848->enter($__internal_920229abe872a91d2538c0c4ec814dd1a637d6a55e83bb425fce56d3e3bca848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_920229abe872a91d2538c0c4ec814dd1a637d6a55e83bb425fce56d3e3bca848->leave($__internal_920229abe872a91d2538c0c4ec814dd1a637d6a55e83bb425fce56d3e3bca848_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
