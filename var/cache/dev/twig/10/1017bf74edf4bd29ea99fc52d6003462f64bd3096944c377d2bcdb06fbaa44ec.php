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
        $__internal_30428369d66563f264801b2f69261bd4ed858a02a1c810ba87176e93f3bc91b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30428369d66563f264801b2f69261bd4ed858a02a1c810ba87176e93f3bc91b8->enter($__internal_30428369d66563f264801b2f69261bd4ed858a02a1c810ba87176e93f3bc91b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30428369d66563f264801b2f69261bd4ed858a02a1c810ba87176e93f3bc91b8->leave($__internal_30428369d66563f264801b2f69261bd4ed858a02a1c810ba87176e93f3bc91b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee275d819595740505b51c2ff3d9677a14bf4d0f89981e54e4d1f3f42cb3360a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee275d819595740505b51c2ff3d9677a14bf4d0f89981e54e4d1f3f42cb3360a->enter($__internal_ee275d819595740505b51c2ff3d9677a14bf4d0f89981e54e4d1f3f42cb3360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ee275d819595740505b51c2ff3d9677a14bf4d0f89981e54e4d1f3f42cb3360a->leave($__internal_ee275d819595740505b51c2ff3d9677a14bf4d0f89981e54e4d1f3f42cb3360a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_bdd18b51d57d43ead0e3508e37f90b44aef39e56b4dedf8b5e16b86c2caba7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd18b51d57d43ead0e3508e37f90b44aef39e56b4dedf8b5e16b86c2caba7ed->enter($__internal_bdd18b51d57d43ead0e3508e37f90b44aef39e56b4dedf8b5e16b86c2caba7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

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
        
        $__internal_bdd18b51d57d43ead0e3508e37f90b44aef39e56b4dedf8b5e16b86c2caba7ed->leave($__internal_bdd18b51d57d43ead0e3508e37f90b44aef39e56b4dedf8b5e16b86c2caba7ed_prof);

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
