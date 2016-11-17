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
        $__internal_20212083d953c0d0b63b8cf03cee23a60af896265db18fc09c6ad79cdee26b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20212083d953c0d0b63b8cf03cee23a60af896265db18fc09c6ad79cdee26b0b->enter($__internal_20212083d953c0d0b63b8cf03cee23a60af896265db18fc09c6ad79cdee26b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20212083d953c0d0b63b8cf03cee23a60af896265db18fc09c6ad79cdee26b0b->leave($__internal_20212083d953c0d0b63b8cf03cee23a60af896265db18fc09c6ad79cdee26b0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_795825bca51af5291a593b387bd12b547d439f12979be19ed247b60a3f5cecb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795825bca51af5291a593b387bd12b547d439f12979be19ed247b60a3f5cecb4->enter($__internal_795825bca51af5291a593b387bd12b547d439f12979be19ed247b60a3f5cecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_795825bca51af5291a593b387bd12b547d439f12979be19ed247b60a3f5cecb4->leave($__internal_795825bca51af5291a593b387bd12b547d439f12979be19ed247b60a3f5cecb4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c69136b9eb949f696222b89ef9681e0dea9008f168f7f6ec48596d17ee1e9bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69136b9eb949f696222b89ef9681e0dea9008f168f7f6ec48596d17ee1e9bf7->enter($__internal_c69136b9eb949f696222b89ef9681e0dea9008f168f7f6ec48596d17ee1e9bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

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
        
        $__internal_c69136b9eb949f696222b89ef9681e0dea9008f168f7f6ec48596d17ee1e9bf7->leave($__internal_c69136b9eb949f696222b89ef9681e0dea9008f168f7f6ec48596d17ee1e9bf7_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_61066c5c31fd7b2293b36387982ffd8677b613ed30f5b940a51c000ff2c04da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61066c5c31fd7b2293b36387982ffd8677b613ed30f5b940a51c000ff2c04da7->enter($__internal_61066c5c31fd7b2293b36387982ffd8677b613ed30f5b940a51c000ff2c04da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_61066c5c31fd7b2293b36387982ffd8677b613ed30f5b940a51c000ff2c04da7->leave($__internal_61066c5c31fd7b2293b36387982ffd8677b613ed30f5b940a51c000ff2c04da7_prof);

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
