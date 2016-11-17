<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_045cffa7638acb05d7125b9db2bc57e76af01ad03dec92610b475a29bae1625b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
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
        $__internal_43cc6db8ee847564a81770b7a8ffb6a9b8d07516407cfc45a8f0563986d167de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cc6db8ee847564a81770b7a8ffb6a9b8d07516407cfc45a8f0563986d167de->enter($__internal_43cc6db8ee847564a81770b7a8ffb6a9b8d07516407cfc45a8f0563986d167de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43cc6db8ee847564a81770b7a8ffb6a9b8d07516407cfc45a8f0563986d167de->leave($__internal_43cc6db8ee847564a81770b7a8ffb6a9b8d07516407cfc45a8f0563986d167de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cfc952c309e945da9dd54cfaf422df2285ea101e77abb183dc51eb365527067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfc952c309e945da9dd54cfaf422df2285ea101e77abb183dc51eb365527067->enter($__internal_4cfc952c309e945da9dd54cfaf422df2285ea101e77abb183dc51eb365527067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cfc952c309e945da9dd54cfaf422df2285ea101e77abb183dc51eb365527067->leave($__internal_4cfc952c309e945da9dd54cfaf422df2285ea101e77abb183dc51eb365527067_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_251f6be41b424c19ba0129d73e1768b9788ff0b1654a4aa8ce7cd8b7fd29f059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251f6be41b424c19ba0129d73e1768b9788ff0b1654a4aa8ce7cd8b7fd29f059->enter($__internal_251f6be41b424c19ba0129d73e1768b9788ff0b1654a4aa8ce7cd8b7fd29f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

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
        
        $__internal_251f6be41b424c19ba0129d73e1768b9788ff0b1654a4aa8ce7cd8b7fd29f059->leave($__internal_251f6be41b424c19ba0129d73e1768b9788ff0b1654a4aa8ce7cd8b7fd29f059_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f000516c00e34402036703a609e1606e5a4e3d920034dff613965ce1f0419ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f000516c00e34402036703a609e1606e5a4e3d920034dff613965ce1f0419ea7->enter($__internal_f000516c00e34402036703a609e1606e5a4e3d920034dff613965ce1f0419ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_f000516c00e34402036703a609e1606e5a4e3d920034dff613965ce1f0419ea7->leave($__internal_f000516c00e34402036703a609e1606e5a4e3d920034dff613965ce1f0419ea7_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
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

{% endblock %}", "@OCPlatform/layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
