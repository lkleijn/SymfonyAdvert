<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_eb652e4a972513b81bf628ed2fb812d52195fdba87081af8b143a54925445bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de091654857cd07f918a264c50eecdc8ab4ce354c8116cd9ab7be468f727df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de091654857cd07f918a264c50eecdc8ab4ce354c8116cd9ab7be468f727df01->enter($__internal_de091654857cd07f918a264c50eecdc8ab4ce354c8116cd9ab7be468f727df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de091654857cd07f918a264c50eecdc8ab4ce354c8116cd9ab7be468f727df01->leave($__internal_de091654857cd07f918a264c50eecdc8ab4ce354c8116cd9ab7be468f727df01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f9c4ea19529e927d0d03898d429284ef20175fd119d97178104b6733f86b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f9c4ea19529e927d0d03898d429284ef20175fd119d97178104b6733f86b9b->enter($__internal_48f9c4ea19529e927d0d03898d429284ef20175fd119d97178104b6733f86b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48f9c4ea19529e927d0d03898d429284ef20175fd119d97178104b6733f86b9b->leave($__internal_48f9c4ea19529e927d0d03898d429284ef20175fd119d97178104b6733f86b9b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f35df8c4c8f4be2228cf067e3e030434ca106dc0365f5c0c0858a810718bc888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35df8c4c8f4be2228cf067e3e030434ca106dc0365f5c0c0858a810718bc888->enter($__internal_f35df8c4c8f4be2228cf067e3e030434ca106dc0365f5c0c0858a810718bc888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_f35df8c4c8f4be2228cf067e3e030434ca106dc0365f5c0c0858a810718bc888->leave($__internal_f35df8c4c8f4be2228cf067e3e030434ca106dc0365f5c0c0858a810718bc888_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_84850b58143196d6565cc5714079c3cb68e5dd9c2f48b6697f2b039a5003aa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84850b58143196d6565cc5714079c3cb68e5dd9c2f48b6697f2b039a5003aa50->enter($__internal_84850b58143196d6565cc5714079c3cb68e5dd9c2f48b6697f2b039a5003aa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_84850b58143196d6565cc5714079c3cb68e5dd9c2f48b6697f2b039a5003aa50->leave($__internal_84850b58143196d6565cc5714079c3cb68e5dd9c2f48b6697f2b039a5003aa50_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
