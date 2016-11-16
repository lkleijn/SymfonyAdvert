<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c4dbf2dc0e96cfb8937c48ff9bad9dfc6a20ecd1640f6ba6b30ac46d95e5db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3d7444e274d5f0c4fe7b21a584b9f97be7fd01831d2d9f33475af834fe55683e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7444e274d5f0c4fe7b21a584b9f97be7fd01831d2d9f33475af834fe55683e->enter($__internal_3d7444e274d5f0c4fe7b21a584b9f97be7fd01831d2d9f33475af834fe55683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7444e274d5f0c4fe7b21a584b9f97be7fd01831d2d9f33475af834fe55683e->leave($__internal_3d7444e274d5f0c4fe7b21a584b9f97be7fd01831d2d9f33475af834fe55683e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42c14cde19785a5bcfe0b2051d17b76fa331623591ce7a8fa39695305084b305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c14cde19785a5bcfe0b2051d17b76fa331623591ce7a8fa39695305084b305->enter($__internal_42c14cde19785a5bcfe0b2051d17b76fa331623591ce7a8fa39695305084b305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_42c14cde19785a5bcfe0b2051d17b76fa331623591ce7a8fa39695305084b305->leave($__internal_42c14cde19785a5bcfe0b2051d17b76fa331623591ce7a8fa39695305084b305_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f6370ec35e41395bdde53b799d6cb319fe6fcba2b6d24611357dce8bfa10f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6370ec35e41395bdde53b799d6cb319fe6fcba2b6d24611357dce8bfa10f64->enter($__internal_8f6370ec35e41395bdde53b799d6cb319fe6fcba2b6d24611357dce8bfa10f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f6370ec35e41395bdde53b799d6cb319fe6fcba2b6d24611357dce8bfa10f64->leave($__internal_8f6370ec35e41395bdde53b799d6cb319fe6fcba2b6d24611357dce8bfa10f64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b880ede316eaa8d89fa21147c7e0ea5a8ee104324ce5aeb540eba1973fc58a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b880ede316eaa8d89fa21147c7e0ea5a8ee104324ce5aeb540eba1973fc58a9->enter($__internal_6b880ede316eaa8d89fa21147c7e0ea5a8ee104324ce5aeb540eba1973fc58a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b880ede316eaa8d89fa21147c7e0ea5a8ee104324ce5aeb540eba1973fc58a9->leave($__internal_6b880ede316eaa8d89fa21147c7e0ea5a8ee104324ce5aeb540eba1973fc58a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
