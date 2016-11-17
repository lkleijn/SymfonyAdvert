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
        $__internal_862edfb1f42ce88357c3d39373e744595599eb4873b79a80afd55a2ffe032c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862edfb1f42ce88357c3d39373e744595599eb4873b79a80afd55a2ffe032c90->enter($__internal_862edfb1f42ce88357c3d39373e744595599eb4873b79a80afd55a2ffe032c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_862edfb1f42ce88357c3d39373e744595599eb4873b79a80afd55a2ffe032c90->leave($__internal_862edfb1f42ce88357c3d39373e744595599eb4873b79a80afd55a2ffe032c90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e54afe19a4cbd5e01e7916ad7482b131f18829b417552a749b81dbc3d3a2dd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54afe19a4cbd5e01e7916ad7482b131f18829b417552a749b81dbc3d3a2dd60->enter($__internal_e54afe19a4cbd5e01e7916ad7482b131f18829b417552a749b81dbc3d3a2dd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e54afe19a4cbd5e01e7916ad7482b131f18829b417552a749b81dbc3d3a2dd60->leave($__internal_e54afe19a4cbd5e01e7916ad7482b131f18829b417552a749b81dbc3d3a2dd60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_055f11182daf9fcefdb28d4f844a8394b17e17bd626c1ca8701c79e42648ae48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055f11182daf9fcefdb28d4f844a8394b17e17bd626c1ca8701c79e42648ae48->enter($__internal_055f11182daf9fcefdb28d4f844a8394b17e17bd626c1ca8701c79e42648ae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_055f11182daf9fcefdb28d4f844a8394b17e17bd626c1ca8701c79e42648ae48->leave($__internal_055f11182daf9fcefdb28d4f844a8394b17e17bd626c1ca8701c79e42648ae48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66e312f12cec48a983ff46a0ab1b7f161678fa58ed0b9fa6b1c69fa49d4cdd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e312f12cec48a983ff46a0ab1b7f161678fa58ed0b9fa6b1c69fa49d4cdd45->enter($__internal_66e312f12cec48a983ff46a0ab1b7f161678fa58ed0b9fa6b1c69fa49d4cdd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66e312f12cec48a983ff46a0ab1b7f161678fa58ed0b9fa6b1c69fa49d4cdd45->leave($__internal_66e312f12cec48a983ff46a0ab1b7f161678fa58ed0b9fa6b1c69fa49d4cdd45_prof);

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
