<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_979ca137f71a78c20134592840f9d6faffc6190d8cc0435d8436345198a7d34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d75748d2e9ba137010cdc7becc514e00ed4c299f7b8cbc777617f8aa486bc9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75748d2e9ba137010cdc7becc514e00ed4c299f7b8cbc777617f8aa486bc9c7->enter($__internal_d75748d2e9ba137010cdc7becc514e00ed4c299f7b8cbc777617f8aa486bc9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d75748d2e9ba137010cdc7becc514e00ed4c299f7b8cbc777617f8aa486bc9c7->leave($__internal_d75748d2e9ba137010cdc7becc514e00ed4c299f7b8cbc777617f8aa486bc9c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2a215e03f8afed045310c49e89c5879084d2d72bdb6908a9de79af8b5dee19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a215e03f8afed045310c49e89c5879084d2d72bdb6908a9de79af8b5dee19e->enter($__internal_e2a215e03f8afed045310c49e89c5879084d2d72bdb6908a9de79af8b5dee19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_e2a215e03f8afed045310c49e89c5879084d2d72bdb6908a9de79af8b5dee19e->leave($__internal_e2a215e03f8afed045310c49e89c5879084d2d72bdb6908a9de79af8b5dee19e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
