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
        $__internal_6e925ce8acf9a51faef1fa8f134fdb1db6a8725e8128b4039291ecc9653c3bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e925ce8acf9a51faef1fa8f134fdb1db6a8725e8128b4039291ecc9653c3bd6->enter($__internal_6e925ce8acf9a51faef1fa8f134fdb1db6a8725e8128b4039291ecc9653c3bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e925ce8acf9a51faef1fa8f134fdb1db6a8725e8128b4039291ecc9653c3bd6->leave($__internal_6e925ce8acf9a51faef1fa8f134fdb1db6a8725e8128b4039291ecc9653c3bd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4b7e18797ceb875efbfe03d55f5fbd3d47fb3c0b6a8cde8dc42196c6921b8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b7e18797ceb875efbfe03d55f5fbd3d47fb3c0b6a8cde8dc42196c6921b8e9->enter($__internal_d4b7e18797ceb875efbfe03d55f5fbd3d47fb3c0b6a8cde8dc42196c6921b8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d4b7e18797ceb875efbfe03d55f5fbd3d47fb3c0b6a8cde8dc42196c6921b8e9->leave($__internal_d4b7e18797ceb875efbfe03d55f5fbd3d47fb3c0b6a8cde8dc42196c6921b8e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab0ce5c44436183b0efa69c364380a8e4e671b91868434d96c83c31747b09843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0ce5c44436183b0efa69c364380a8e4e671b91868434d96c83c31747b09843->enter($__internal_ab0ce5c44436183b0efa69c364380a8e4e671b91868434d96c83c31747b09843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab0ce5c44436183b0efa69c364380a8e4e671b91868434d96c83c31747b09843->leave($__internal_ab0ce5c44436183b0efa69c364380a8e4e671b91868434d96c83c31747b09843_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a13cfa2cd08c4ffca4103b0ffcf61c86f01c49c71cf561180efcd48707217ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a13cfa2cd08c4ffca4103b0ffcf61c86f01c49c71cf561180efcd48707217ba->enter($__internal_6a13cfa2cd08c4ffca4103b0ffcf61c86f01c49c71cf561180efcd48707217ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a13cfa2cd08c4ffca4103b0ffcf61c86f01c49c71cf561180efcd48707217ba->leave($__internal_6a13cfa2cd08c4ffca4103b0ffcf61c86f01c49c71cf561180efcd48707217ba_prof);

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
