<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_18022e56298ceceb047aeef3ea413285285598b1c93f2a7de535d538bd6c29f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_b9c9987c9cf31612d931f57779e9f13ae2c45ac428be4f9ac955e5325326e0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c9987c9cf31612d931f57779e9f13ae2c45ac428be4f9ac955e5325326e0bb->enter($__internal_b9c9987c9cf31612d931f57779e9f13ae2c45ac428be4f9ac955e5325326e0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c9987c9cf31612d931f57779e9f13ae2c45ac428be4f9ac955e5325326e0bb->leave($__internal_b9c9987c9cf31612d931f57779e9f13ae2c45ac428be4f9ac955e5325326e0bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fc23f0875af32d6833b28c3d927a9d868c62b8a03ce382e02f10cd04ebbc3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc23f0875af32d6833b28c3d927a9d868c62b8a03ce382e02f10cd04ebbc3f8->enter($__internal_8fc23f0875af32d6833b28c3d927a9d868c62b8a03ce382e02f10cd04ebbc3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8fc23f0875af32d6833b28c3d927a9d868c62b8a03ce382e02f10cd04ebbc3f8->leave($__internal_8fc23f0875af32d6833b28c3d927a9d868c62b8a03ce382e02f10cd04ebbc3f8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_45ba50e088fc9677e1d2e4434f0954864f382847a821530daf4f5cd7b7d47df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ba50e088fc9677e1d2e4434f0954864f382847a821530daf4f5cd7b7d47df8->enter($__internal_45ba50e088fc9677e1d2e4434f0954864f382847a821530daf4f5cd7b7d47df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_45ba50e088fc9677e1d2e4434f0954864f382847a821530daf4f5cd7b7d47df8->leave($__internal_45ba50e088fc9677e1d2e4434f0954864f382847a821530daf4f5cd7b7d47df8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
