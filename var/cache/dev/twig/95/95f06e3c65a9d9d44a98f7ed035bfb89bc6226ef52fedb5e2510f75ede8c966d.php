<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_63cbf5ed016a17187f4b3e9466bfb9fabf048d076b39581cb7d8e24755cdf2c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a72163b17119fcbf2525f6e3c9dae1ddad3bb431f7e75ba4c50d2af56a224b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a72163b17119fcbf2525f6e3c9dae1ddad3bb431f7e75ba4c50d2af56a224b4->enter($__internal_7a72163b17119fcbf2525f6e3c9dae1ddad3bb431f7e75ba4c50d2af56a224b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a72163b17119fcbf2525f6e3c9dae1ddad3bb431f7e75ba4c50d2af56a224b4->leave($__internal_7a72163b17119fcbf2525f6e3c9dae1ddad3bb431f7e75ba4c50d2af56a224b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5b6d7c077a3ea8c749d2640d1be560f0cc6457f6e0a2deb5ba80bf7b9e51935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b6d7c077a3ea8c749d2640d1be560f0cc6457f6e0a2deb5ba80bf7b9e51935->enter($__internal_f5b6d7c077a3ea8c749d2640d1be560f0cc6457f6e0a2deb5ba80bf7b9e51935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5b6d7c077a3ea8c749d2640d1be560f0cc6457f6e0a2deb5ba80bf7b9e51935->leave($__internal_f5b6d7c077a3ea8c749d2640d1be560f0cc6457f6e0a2deb5ba80bf7b9e51935_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97890c7fa627a4cb46153ebd4310af1331b2fcbe07809e8ad570c4575194458d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97890c7fa627a4cb46153ebd4310af1331b2fcbe07809e8ad570c4575194458d->enter($__internal_97890c7fa627a4cb46153ebd4310af1331b2fcbe07809e8ad570c4575194458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97890c7fa627a4cb46153ebd4310af1331b2fcbe07809e8ad570c4575194458d->leave($__internal_97890c7fa627a4cb46153ebd4310af1331b2fcbe07809e8ad570c4575194458d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b943d25b54c0d70f485792e1fe7b02cc9bbfd0fe873af0b34865b505e994a254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b943d25b54c0d70f485792e1fe7b02cc9bbfd0fe873af0b34865b505e994a254->enter($__internal_b943d25b54c0d70f485792e1fe7b02cc9bbfd0fe873af0b34865b505e994a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b943d25b54c0d70f485792e1fe7b02cc9bbfd0fe873af0b34865b505e994a254->leave($__internal_b943d25b54c0d70f485792e1fe7b02cc9bbfd0fe873af0b34865b505e994a254_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
