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
        $__internal_87f588fb5e7504b15bd5df1adb96ea3283c2afc09b368e4f8e9e6b257da47fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f588fb5e7504b15bd5df1adb96ea3283c2afc09b368e4f8e9e6b257da47fa1->enter($__internal_87f588fb5e7504b15bd5df1adb96ea3283c2afc09b368e4f8e9e6b257da47fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f588fb5e7504b15bd5df1adb96ea3283c2afc09b368e4f8e9e6b257da47fa1->leave($__internal_87f588fb5e7504b15bd5df1adb96ea3283c2afc09b368e4f8e9e6b257da47fa1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64fd1dbab68f1620f688e9bcd521c9ed1e5c72d468f7eda679856010a0e8d3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fd1dbab68f1620f688e9bcd521c9ed1e5c72d468f7eda679856010a0e8d3b0->enter($__internal_64fd1dbab68f1620f688e9bcd521c9ed1e5c72d468f7eda679856010a0e8d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_64fd1dbab68f1620f688e9bcd521c9ed1e5c72d468f7eda679856010a0e8d3b0->leave($__internal_64fd1dbab68f1620f688e9bcd521c9ed1e5c72d468f7eda679856010a0e8d3b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98de98c016cf1cae3ae1d68e69e06448073ef15fdf730dc352f464c3e8c5f98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98de98c016cf1cae3ae1d68e69e06448073ef15fdf730dc352f464c3e8c5f98e->enter($__internal_98de98c016cf1cae3ae1d68e69e06448073ef15fdf730dc352f464c3e8c5f98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98de98c016cf1cae3ae1d68e69e06448073ef15fdf730dc352f464c3e8c5f98e->leave($__internal_98de98c016cf1cae3ae1d68e69e06448073ef15fdf730dc352f464c3e8c5f98e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61e761d86b7553d9725c3fd9f0de89763fc91d8b784acdf66273ab3925f44ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e761d86b7553d9725c3fd9f0de89763fc91d8b784acdf66273ab3925f44ee1->enter($__internal_61e761d86b7553d9725c3fd9f0de89763fc91d8b784acdf66273ab3925f44ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61e761d86b7553d9725c3fd9f0de89763fc91d8b784acdf66273ab3925f44ee1->leave($__internal_61e761d86b7553d9725c3fd9f0de89763fc91d8b784acdf66273ab3925f44ee1_prof);

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
