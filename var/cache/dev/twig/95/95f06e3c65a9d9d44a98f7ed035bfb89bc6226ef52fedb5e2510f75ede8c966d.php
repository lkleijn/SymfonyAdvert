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
        $__internal_3899029b9f8e033544d03cf29a6d7bba180135b35022bd6da5f170907272e35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3899029b9f8e033544d03cf29a6d7bba180135b35022bd6da5f170907272e35c->enter($__internal_3899029b9f8e033544d03cf29a6d7bba180135b35022bd6da5f170907272e35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3899029b9f8e033544d03cf29a6d7bba180135b35022bd6da5f170907272e35c->leave($__internal_3899029b9f8e033544d03cf29a6d7bba180135b35022bd6da5f170907272e35c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_318df07fc18e725bd6f3df49e3d09213b03c99d72f4b7e8093e430c91c1fdd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318df07fc18e725bd6f3df49e3d09213b03c99d72f4b7e8093e430c91c1fdd50->enter($__internal_318df07fc18e725bd6f3df49e3d09213b03c99d72f4b7e8093e430c91c1fdd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_318df07fc18e725bd6f3df49e3d09213b03c99d72f4b7e8093e430c91c1fdd50->leave($__internal_318df07fc18e725bd6f3df49e3d09213b03c99d72f4b7e8093e430c91c1fdd50_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81c1672758225d1a6363f581ca296a0963095ee19d375ef1f089a9d9f03c1140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c1672758225d1a6363f581ca296a0963095ee19d375ef1f089a9d9f03c1140->enter($__internal_81c1672758225d1a6363f581ca296a0963095ee19d375ef1f089a9d9f03c1140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81c1672758225d1a6363f581ca296a0963095ee19d375ef1f089a9d9f03c1140->leave($__internal_81c1672758225d1a6363f581ca296a0963095ee19d375ef1f089a9d9f03c1140_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72e5939040b430a6bd93665cb38bb5038e72f896670f52a3fbf7e6c6d31abd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e5939040b430a6bd93665cb38bb5038e72f896670f52a3fbf7e6c6d31abd25->enter($__internal_72e5939040b430a6bd93665cb38bb5038e72f896670f52a3fbf7e6c6d31abd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_72e5939040b430a6bd93665cb38bb5038e72f896670f52a3fbf7e6c6d31abd25->leave($__internal_72e5939040b430a6bd93665cb38bb5038e72f896670f52a3fbf7e6c6d31abd25_prof);

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
