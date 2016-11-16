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
        $__internal_927da3463b2dc7b554d5032343e735e71b6b434194409ecf118c793716c0ca05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927da3463b2dc7b554d5032343e735e71b6b434194409ecf118c793716c0ca05->enter($__internal_927da3463b2dc7b554d5032343e735e71b6b434194409ecf118c793716c0ca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_927da3463b2dc7b554d5032343e735e71b6b434194409ecf118c793716c0ca05->leave($__internal_927da3463b2dc7b554d5032343e735e71b6b434194409ecf118c793716c0ca05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_349d0cbc3d0f147e32cda7eee5a8c40803691ead5de317dd69298b1dd6a610cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349d0cbc3d0f147e32cda7eee5a8c40803691ead5de317dd69298b1dd6a610cd->enter($__internal_349d0cbc3d0f147e32cda7eee5a8c40803691ead5de317dd69298b1dd6a610cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_349d0cbc3d0f147e32cda7eee5a8c40803691ead5de317dd69298b1dd6a610cd->leave($__internal_349d0cbc3d0f147e32cda7eee5a8c40803691ead5de317dd69298b1dd6a610cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fb63e725f5bc01657935d5434532e5bbfbba6d9c0c5c4932989859840694f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb63e725f5bc01657935d5434532e5bbfbba6d9c0c5c4932989859840694f98->enter($__internal_0fb63e725f5bc01657935d5434532e5bbfbba6d9c0c5c4932989859840694f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0fb63e725f5bc01657935d5434532e5bbfbba6d9c0c5c4932989859840694f98->leave($__internal_0fb63e725f5bc01657935d5434532e5bbfbba6d9c0c5c4932989859840694f98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e43edbb6fed16f5f9038ef78ccbcfcd85d15090f2ca8174debf2c3daa310100d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43edbb6fed16f5f9038ef78ccbcfcd85d15090f2ca8174debf2c3daa310100d->enter($__internal_e43edbb6fed16f5f9038ef78ccbcfcd85d15090f2ca8174debf2c3daa310100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e43edbb6fed16f5f9038ef78ccbcfcd85d15090f2ca8174debf2c3daa310100d->leave($__internal_e43edbb6fed16f5f9038ef78ccbcfcd85d15090f2ca8174debf2c3daa310100d_prof);

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
