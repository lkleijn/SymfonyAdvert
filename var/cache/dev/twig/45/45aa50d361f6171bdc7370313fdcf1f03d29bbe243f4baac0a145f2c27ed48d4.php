<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_95a0c728547f34059540c5b2d5ddfcbed561bde92e382f6239117c982e601249 extends Twig_Template
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
        $__internal_5108c0c2c63554bfc2db961ece88433271440181d85aec7d0afc32db7ca1b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5108c0c2c63554bfc2db961ece88433271440181d85aec7d0afc32db7ca1b370->enter($__internal_5108c0c2c63554bfc2db961ece88433271440181d85aec7d0afc32db7ca1b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5108c0c2c63554bfc2db961ece88433271440181d85aec7d0afc32db7ca1b370->leave($__internal_5108c0c2c63554bfc2db961ece88433271440181d85aec7d0afc32db7ca1b370_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_95dc6c846f0199b6dfc72fa2809da1066e0015c6c6f95e94d227bfe7bf4c1d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dc6c846f0199b6dfc72fa2809da1066e0015c6c6f95e94d227bfe7bf4c1d3e->enter($__internal_95dc6c846f0199b6dfc72fa2809da1066e0015c6c6f95e94d227bfe7bf4c1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_95dc6c846f0199b6dfc72fa2809da1066e0015c6c6f95e94d227bfe7bf4c1d3e->leave($__internal_95dc6c846f0199b6dfc72fa2809da1066e0015c6c6f95e94d227bfe7bf4c1d3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
