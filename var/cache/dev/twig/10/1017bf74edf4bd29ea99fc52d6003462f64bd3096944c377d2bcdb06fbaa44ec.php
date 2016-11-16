<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_fc413b9b55017c3ef5caf499b1435072f9fa322080d3ddec9bef1dc3b7311c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_c4d99a14ad5b2e9910abd4972eaacbfe9ac7ac6b0e20bd961d4f0286c1eacde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d99a14ad5b2e9910abd4972eaacbfe9ac7ac6b0e20bd961d4f0286c1eacde0->enter($__internal_c4d99a14ad5b2e9910abd4972eaacbfe9ac7ac6b0e20bd961d4f0286c1eacde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d99a14ad5b2e9910abd4972eaacbfe9ac7ac6b0e20bd961d4f0286c1eacde0->leave($__internal_c4d99a14ad5b2e9910abd4972eaacbfe9ac7ac6b0e20bd961d4f0286c1eacde0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b262d566c990904dd75d064bcf23c71fd0171a0bed13ef4f9143dfca587224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b262d566c990904dd75d064bcf23c71fd0171a0bed13ef4f9143dfca587224->enter($__internal_95b262d566c990904dd75d064bcf23c71fd0171a0bed13ef4f9143dfca587224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_95b262d566c990904dd75d064bcf23c71fd0171a0bed13ef4f9143dfca587224->leave($__internal_95b262d566c990904dd75d064bcf23c71fd0171a0bed13ef4f9143dfca587224_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2ad4e77b707af3b78affa732068e10d20e7d9f71f06a7da3b8aef8754150d7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad4e77b707af3b78affa732068e10d20e7d9f71f06a7da3b8aef8754150d7fa->enter($__internal_2ad4e77b707af3b78affa732068e10d20e7d9f71f06a7da3b8aef8754150d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

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
        
        $__internal_2ad4e77b707af3b78affa732068e10d20e7d9f71f06a7da3b8aef8754150d7fa->leave($__internal_2ad4e77b707af3b78affa732068e10d20e7d9f71f06a7da3b8aef8754150d7fa_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
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

{% endblock %}", "@OCPlatform/Advert/edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
