<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6a0c61e24a4760f4bf7c5ee809264c0a38f6a09dc02e4fffcc5f3bccde45c7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5dc4550dbb90f4ca3542e5a2445402521cdddb62bfe37d22b45839bf36735d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc4550dbb90f4ca3542e5a2445402521cdddb62bfe37d22b45839bf36735d5c->enter($__internal_5dc4550dbb90f4ca3542e5a2445402521cdddb62bfe37d22b45839bf36735d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc4550dbb90f4ca3542e5a2445402521cdddb62bfe37d22b45839bf36735d5c->leave($__internal_5dc4550dbb90f4ca3542e5a2445402521cdddb62bfe37d22b45839bf36735d5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49b753ab6db2421a7a63b45c906103191325784b0320ec50a96f4e9b5c46af8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b753ab6db2421a7a63b45c906103191325784b0320ec50a96f4e9b5c46af8b->enter($__internal_49b753ab6db2421a7a63b45c906103191325784b0320ec50a96f4e9b5c46af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_49b753ab6db2421a7a63b45c906103191325784b0320ec50a96f4e9b5c46af8b->leave($__internal_49b753ab6db2421a7a63b45c906103191325784b0320ec50a96f4e9b5c46af8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08175a51d22085a977661407b5dc1539062131e3e36a135d2fee9aaf6a82749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08175a51d22085a977661407b5dc1539062131e3e36a135d2fee9aaf6a82749->enter($__internal_e08175a51d22085a977661407b5dc1539062131e3e36a135d2fee9aaf6a82749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_e08175a51d22085a977661407b5dc1539062131e3e36a135d2fee9aaf6a82749->leave($__internal_e08175a51d22085a977661407b5dc1539062131e3e36a135d2fee9aaf6a82749_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
