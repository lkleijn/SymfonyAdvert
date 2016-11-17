<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4fa99c0365f83e2479711911aa0a43bac57d5a6f0dc853eaef241968d5ded13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0ff91aed8051fda9eedbd31531edebfdbc3bb8d80705fa8ec55dc9e8027e8e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff91aed8051fda9eedbd31531edebfdbc3bb8d80705fa8ec55dc9e8027e8e46->enter($__internal_0ff91aed8051fda9eedbd31531edebfdbc3bb8d80705fa8ec55dc9e8027e8e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff91aed8051fda9eedbd31531edebfdbc3bb8d80705fa8ec55dc9e8027e8e46->leave($__internal_0ff91aed8051fda9eedbd31531edebfdbc3bb8d80705fa8ec55dc9e8027e8e46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2267986ffbc94e0bb3c7bb42f2bb8df2f43156fa8e7321ad7b4a001318b38f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2267986ffbc94e0bb3c7bb42f2bb8df2f43156fa8e7321ad7b4a001318b38f19->enter($__internal_2267986ffbc94e0bb3c7bb42f2bb8df2f43156fa8e7321ad7b4a001318b38f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2267986ffbc94e0bb3c7bb42f2bb8df2f43156fa8e7321ad7b4a001318b38f19->leave($__internal_2267986ffbc94e0bb3c7bb42f2bb8df2f43156fa8e7321ad7b4a001318b38f19_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_363296ecd04646bd9cbf11e87f79bd14bea86ba841b01148ce4d7ad21f112775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363296ecd04646bd9cbf11e87f79bd14bea86ba841b01148ce4d7ad21f112775->enter($__internal_363296ecd04646bd9cbf11e87f79bd14bea86ba841b01148ce4d7ad21f112775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_363296ecd04646bd9cbf11e87f79bd14bea86ba841b01148ce4d7ad21f112775->leave($__internal_363296ecd04646bd9cbf11e87f79bd14bea86ba841b01148ce4d7ad21f112775_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_527b610bfa09a8e4a5f125cf79348536ebda80392eedff72647b71b3f2fa5b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527b610bfa09a8e4a5f125cf79348536ebda80392eedff72647b71b3f2fa5b62->enter($__internal_527b610bfa09a8e4a5f125cf79348536ebda80392eedff72647b71b3f2fa5b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_527b610bfa09a8e4a5f125cf79348536ebda80392eedff72647b71b3f2fa5b62->leave($__internal_527b610bfa09a8e4a5f125cf79348536ebda80392eedff72647b71b3f2fa5b62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
