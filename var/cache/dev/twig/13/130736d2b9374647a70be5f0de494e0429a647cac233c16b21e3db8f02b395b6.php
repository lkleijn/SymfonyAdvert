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
        $__internal_346ab09ec09e91a23ef1a33825e09e0add6ea95bc82765aa95e674563f878d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346ab09ec09e91a23ef1a33825e09e0add6ea95bc82765aa95e674563f878d21->enter($__internal_346ab09ec09e91a23ef1a33825e09e0add6ea95bc82765aa95e674563f878d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346ab09ec09e91a23ef1a33825e09e0add6ea95bc82765aa95e674563f878d21->leave($__internal_346ab09ec09e91a23ef1a33825e09e0add6ea95bc82765aa95e674563f878d21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eccffd235bfd4fc759933c88e713046605eb853050843a12793e9ed2d36d6b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccffd235bfd4fc759933c88e713046605eb853050843a12793e9ed2d36d6b9b->enter($__internal_eccffd235bfd4fc759933c88e713046605eb853050843a12793e9ed2d36d6b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_eccffd235bfd4fc759933c88e713046605eb853050843a12793e9ed2d36d6b9b->leave($__internal_eccffd235bfd4fc759933c88e713046605eb853050843a12793e9ed2d36d6b9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_437a806999e5a1dc251afa63bab2400e497b25f754aad539059f2755c641164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437a806999e5a1dc251afa63bab2400e497b25f754aad539059f2755c641164e->enter($__internal_437a806999e5a1dc251afa63bab2400e497b25f754aad539059f2755c641164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_437a806999e5a1dc251afa63bab2400e497b25f754aad539059f2755c641164e->leave($__internal_437a806999e5a1dc251afa63bab2400e497b25f754aad539059f2755c641164e_prof);

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
