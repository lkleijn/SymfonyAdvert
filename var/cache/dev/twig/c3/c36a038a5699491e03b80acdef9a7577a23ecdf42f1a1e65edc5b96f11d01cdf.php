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
        $__internal_39d67c426a3819537aa6bee5619e30cc510f6ace2919444cdfffa9e23ecba58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d67c426a3819537aa6bee5619e30cc510f6ace2919444cdfffa9e23ecba58f->enter($__internal_39d67c426a3819537aa6bee5619e30cc510f6ace2919444cdfffa9e23ecba58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d67c426a3819537aa6bee5619e30cc510f6ace2919444cdfffa9e23ecba58f->leave($__internal_39d67c426a3819537aa6bee5619e30cc510f6ace2919444cdfffa9e23ecba58f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc7ba6a9f43c71d9f37cee48fc8c9d21ef5056be3a3416deb33a62754a766f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7ba6a9f43c71d9f37cee48fc8c9d21ef5056be3a3416deb33a62754a766f5c->enter($__internal_dc7ba6a9f43c71d9f37cee48fc8c9d21ef5056be3a3416deb33a62754a766f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dc7ba6a9f43c71d9f37cee48fc8c9d21ef5056be3a3416deb33a62754a766f5c->leave($__internal_dc7ba6a9f43c71d9f37cee48fc8c9d21ef5056be3a3416deb33a62754a766f5c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a34d10700e8f59588854c8e75f3794e7495f605aee74309221e61d8efde28b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a34d10700e8f59588854c8e75f3794e7495f605aee74309221e61d8efde28b4->enter($__internal_8a34d10700e8f59588854c8e75f3794e7495f605aee74309221e61d8efde28b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

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
        
        $__internal_8a34d10700e8f59588854c8e75f3794e7495f605aee74309221e61d8efde28b4->leave($__internal_8a34d10700e8f59588854c8e75f3794e7495f605aee74309221e61d8efde28b4_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5bf6d9c87be7888593295ce043036b5c3d670ece4b06ec362a78849d2724285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf6d9c87be7888593295ce043036b5c3d670ece4b06ec362a78849d2724285b->enter($__internal_5bf6d9c87be7888593295ce043036b5c3d670ece4b06ec362a78849d2724285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_5bf6d9c87be7888593295ce043036b5c3d670ece4b06ec362a78849d2724285b->leave($__internal_5bf6d9c87be7888593295ce043036b5c3d670ece4b06ec362a78849d2724285b_prof);

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
