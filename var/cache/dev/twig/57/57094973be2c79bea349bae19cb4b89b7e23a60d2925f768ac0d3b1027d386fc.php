<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8678dc4431abf954c931c864491c6576d98aed29db01017d8d4ec62e3c66e7b extends Twig_Template
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
        $__internal_6e88173ebb6402b9bf94c1ec9f39c61eac0c02d2be769dadfae93ecbb5b34aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e88173ebb6402b9bf94c1ec9f39c61eac0c02d2be769dadfae93ecbb5b34aa2->enter($__internal_6e88173ebb6402b9bf94c1ec9f39c61eac0c02d2be769dadfae93ecbb5b34aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e88173ebb6402b9bf94c1ec9f39c61eac0c02d2be769dadfae93ecbb5b34aa2->leave($__internal_6e88173ebb6402b9bf94c1ec9f39c61eac0c02d2be769dadfae93ecbb5b34aa2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_945e6c8cae818357bcf9d48f6c2d5aa4ca0868a50a2c95dc7ef604367666cbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945e6c8cae818357bcf9d48f6c2d5aa4ca0868a50a2c95dc7ef604367666cbef->enter($__internal_945e6c8cae818357bcf9d48f6c2d5aa4ca0868a50a2c95dc7ef604367666cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_945e6c8cae818357bcf9d48f6c2d5aa4ca0868a50a2c95dc7ef604367666cbef->leave($__internal_945e6c8cae818357bcf9d48f6c2d5aa4ca0868a50a2c95dc7ef604367666cbef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0c37b8e9d302595df76970edf81622a58f5798ba7cc7f613c5b021ded57dd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c37b8e9d302595df76970edf81622a58f5798ba7cc7f613c5b021ded57dd23->enter($__internal_b0c37b8e9d302595df76970edf81622a58f5798ba7cc7f613c5b021ded57dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0c37b8e9d302595df76970edf81622a58f5798ba7cc7f613c5b021ded57dd23->leave($__internal_b0c37b8e9d302595df76970edf81622a58f5798ba7cc7f613c5b021ded57dd23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_961f79905c00a1333d5a2c5ac48ac5e49b48796e5b398d7da3d2dfba78eef357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961f79905c00a1333d5a2c5ac48ac5e49b48796e5b398d7da3d2dfba78eef357->enter($__internal_961f79905c00a1333d5a2c5ac48ac5e49b48796e5b398d7da3d2dfba78eef357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_961f79905c00a1333d5a2c5ac48ac5e49b48796e5b398d7da3d2dfba78eef357->leave($__internal_961f79905c00a1333d5a2c5ac48ac5e49b48796e5b398d7da3d2dfba78eef357_prof);

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
