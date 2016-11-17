<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_3c87eb42004037dfaa64da7e47bb241e19ed88a1f580e7e9784348127dca49e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6048d433b98c97ae7d487d1cd94c9500e01069bbbfd865dc2663333f63f9b96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6048d433b98c97ae7d487d1cd94c9500e01069bbbfd865dc2663333f63f9b96c->enter($__internal_6048d433b98c97ae7d487d1cd94c9500e01069bbbfd865dc2663333f63f9b96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6048d433b98c97ae7d487d1cd94c9500e01069bbbfd865dc2663333f63f9b96c->leave($__internal_6048d433b98c97ae7d487d1cd94c9500e01069bbbfd865dc2663333f63f9b96c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffc42852f4ebf2985a27a3b885fe2812657531eaffdd04a4a41a252564b0927a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc42852f4ebf2985a27a3b885fe2812657531eaffdd04a4a41a252564b0927a->enter($__internal_ffc42852f4ebf2985a27a3b885fe2812657531eaffdd04a4a41a252564b0927a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ffc42852f4ebf2985a27a3b885fe2812657531eaffdd04a4a41a252564b0927a->leave($__internal_ffc42852f4ebf2985a27a3b885fe2812657531eaffdd04a4a41a252564b0927a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_12cd2985c6befc5e7f7b83993f8de3867f789d4a9c6c18ed7082f69adb7de0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cd2985c6befc5e7f7b83993f8de3867f789d4a9c6c18ed7082f69adb7de0c7->enter($__internal_12cd2985c6befc5e7f7b83993f8de3867f789d4a9c6c18ed7082f69adb7de0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_12cd2985c6befc5e7f7b83993f8de3867f789d4a9c6c18ed7082f69adb7de0c7->leave($__internal_12cd2985c6befc5e7f7b83993f8de3867f789d4a9c6c18ed7082f69adb7de0c7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
