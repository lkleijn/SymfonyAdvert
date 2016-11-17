<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_21f1e24ba07edd289182d34703690a86e993e1658ce4fe3db310b80373252d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_917837692927c69fe3d5f28bd4e9d9648019ece4e36e53a8d4aaac4d0d0f171a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917837692927c69fe3d5f28bd4e9d9648019ece4e36e53a8d4aaac4d0d0f171a->enter($__internal_917837692927c69fe3d5f28bd4e9d9648019ece4e36e53a8d4aaac4d0d0f171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917837692927c69fe3d5f28bd4e9d9648019ece4e36e53a8d4aaac4d0d0f171a->leave($__internal_917837692927c69fe3d5f28bd4e9d9648019ece4e36e53a8d4aaac4d0d0f171a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b8e5189417c456911df342d89b5b2b9887413c1081234481c0310ea8433ddb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8e5189417c456911df342d89b5b2b9887413c1081234481c0310ea8433ddb3->enter($__internal_0b8e5189417c456911df342d89b5b2b9887413c1081234481c0310ea8433ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b8e5189417c456911df342d89b5b2b9887413c1081234481c0310ea8433ddb3->leave($__internal_0b8e5189417c456911df342d89b5b2b9887413c1081234481c0310ea8433ddb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81a3613fc1b8f97d76df7fa65c6ca7a2c336c5583071824f6b495a2c3edf7f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a3613fc1b8f97d76df7fa65c6ca7a2c336c5583071824f6b495a2c3edf7f1e->enter($__internal_81a3613fc1b8f97d76df7fa65c6ca7a2c336c5583071824f6b495a2c3edf7f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81a3613fc1b8f97d76df7fa65c6ca7a2c336c5583071824f6b495a2c3edf7f1e->leave($__internal_81a3613fc1b8f97d76df7fa65c6ca7a2c336c5583071824f6b495a2c3edf7f1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_737930cb645ff11d460da52c72a9ed775b14218d8de0bd92efee064059a41207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737930cb645ff11d460da52c72a9ed775b14218d8de0bd92efee064059a41207->enter($__internal_737930cb645ff11d460da52c72a9ed775b14218d8de0bd92efee064059a41207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_737930cb645ff11d460da52c72a9ed775b14218d8de0bd92efee064059a41207->leave($__internal_737930cb645ff11d460da52c72a9ed775b14218d8de0bd92efee064059a41207_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
