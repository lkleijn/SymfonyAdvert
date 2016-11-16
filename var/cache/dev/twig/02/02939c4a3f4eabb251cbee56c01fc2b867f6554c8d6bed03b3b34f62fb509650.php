<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a9ebdc16154b22f9cb41c333dcff5a7226b726d02afdfbb884e7e29364e763e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d69af3ca7340797d7bb583c7aac5119fcd2e3b43dcba4cd68ca6e780bf6a587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d69af3ca7340797d7bb583c7aac5119fcd2e3b43dcba4cd68ca6e780bf6a587->enter($__internal_9d69af3ca7340797d7bb583c7aac5119fcd2e3b43dcba4cd68ca6e780bf6a587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d69af3ca7340797d7bb583c7aac5119fcd2e3b43dcba4cd68ca6e780bf6a587->leave($__internal_9d69af3ca7340797d7bb583c7aac5119fcd2e3b43dcba4cd68ca6e780bf6a587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e79e5f62de9667e377680b971f687c096e3459847a70b36f958943c1dc0d7e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79e5f62de9667e377680b971f687c096e3459847a70b36f958943c1dc0d7e51->enter($__internal_e79e5f62de9667e377680b971f687c096e3459847a70b36f958943c1dc0d7e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_e79e5f62de9667e377680b971f687c096e3459847a70b36f958943c1dc0d7e51->leave($__internal_e79e5f62de9667e377680b971f687c096e3459847a70b36f958943c1dc0d7e51_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47d9819f558a8c1658d3926b3eac02001f033d8a840e615adfadb8c78143cfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d9819f558a8c1658d3926b3eac02001f033d8a840e615adfadb8c78143cfb4->enter($__internal_47d9819f558a8c1658d3926b3eac02001f033d8a840e615adfadb8c78143cfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47d9819f558a8c1658d3926b3eac02001f033d8a840e615adfadb8c78143cfb4->leave($__internal_47d9819f558a8c1658d3926b3eac02001f033d8a840e615adfadb8c78143cfb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c788429be633f3bbff76cf364f11a204e419e8b8e593db77d918a175e4d32cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c788429be633f3bbff76cf364f11a204e419e8b8e593db77d918a175e4d32cf3->enter($__internal_c788429be633f3bbff76cf364f11a204e419e8b8e593db77d918a175e4d32cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c788429be633f3bbff76cf364f11a204e419e8b8e593db77d918a175e4d32cf3->leave($__internal_c788429be633f3bbff76cf364f11a204e419e8b8e593db77d918a175e4d32cf3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
