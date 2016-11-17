<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0d14de4d8cbdbc60f3a86899731dd6dd7410cdf6ef7bc1d7804fa028bffb7cd extends Twig_Template
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
        $__internal_cc98794510fa7ff1e628e432473f441ae4548e612d590ee656bb1e7db4a1174a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc98794510fa7ff1e628e432473f441ae4548e612d590ee656bb1e7db4a1174a->enter($__internal_cc98794510fa7ff1e628e432473f441ae4548e612d590ee656bb1e7db4a1174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc98794510fa7ff1e628e432473f441ae4548e612d590ee656bb1e7db4a1174a->leave($__internal_cc98794510fa7ff1e628e432473f441ae4548e612d590ee656bb1e7db4a1174a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_934d746ec19f10018e65348e02c95a6c9937abf914797e107848771cf76cc07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934d746ec19f10018e65348e02c95a6c9937abf914797e107848771cf76cc07f->enter($__internal_934d746ec19f10018e65348e02c95a6c9937abf914797e107848771cf76cc07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_934d746ec19f10018e65348e02c95a6c9937abf914797e107848771cf76cc07f->leave($__internal_934d746ec19f10018e65348e02c95a6c9937abf914797e107848771cf76cc07f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61917c8b87ebb08e4230a08ff104de1fbee8379a25d7e3e5327faa957967d565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61917c8b87ebb08e4230a08ff104de1fbee8379a25d7e3e5327faa957967d565->enter($__internal_61917c8b87ebb08e4230a08ff104de1fbee8379a25d7e3e5327faa957967d565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61917c8b87ebb08e4230a08ff104de1fbee8379a25d7e3e5327faa957967d565->leave($__internal_61917c8b87ebb08e4230a08ff104de1fbee8379a25d7e3e5327faa957967d565_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50cfcda287cc628129fb9a7e5d8f202e4c70a7d06ff8565c87766572e462bb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cfcda287cc628129fb9a7e5d8f202e4c70a7d06ff8565c87766572e462bb45->enter($__internal_50cfcda287cc628129fb9a7e5d8f202e4c70a7d06ff8565c87766572e462bb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_50cfcda287cc628129fb9a7e5d8f202e4c70a7d06ff8565c87766572e462bb45->leave($__internal_50cfcda287cc628129fb9a7e5d8f202e4c70a7d06ff8565c87766572e462bb45_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
