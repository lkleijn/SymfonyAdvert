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
        $__internal_a24234e5a0e80d4ba2066802c844935ace00788d45d78820b8705a3233949d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24234e5a0e80d4ba2066802c844935ace00788d45d78820b8705a3233949d44->enter($__internal_a24234e5a0e80d4ba2066802c844935ace00788d45d78820b8705a3233949d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24234e5a0e80d4ba2066802c844935ace00788d45d78820b8705a3233949d44->leave($__internal_a24234e5a0e80d4ba2066802c844935ace00788d45d78820b8705a3233949d44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db5adf7f484dceded3db6bea14f31e4a60d75d8eb6a1e89ea4418dcf26bab77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db5adf7f484dceded3db6bea14f31e4a60d75d8eb6a1e89ea4418dcf26bab77->enter($__internal_5db5adf7f484dceded3db6bea14f31e4a60d75d8eb6a1e89ea4418dcf26bab77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5db5adf7f484dceded3db6bea14f31e4a60d75d8eb6a1e89ea4418dcf26bab77->leave($__internal_5db5adf7f484dceded3db6bea14f31e4a60d75d8eb6a1e89ea4418dcf26bab77_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1d09bbd397d124c70ac46f27be1f50dfbaf56b0f0db090fe8249f20e1851748c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d09bbd397d124c70ac46f27be1f50dfbaf56b0f0db090fe8249f20e1851748c->enter($__internal_1d09bbd397d124c70ac46f27be1f50dfbaf56b0f0db090fe8249f20e1851748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

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
        
        $__internal_1d09bbd397d124c70ac46f27be1f50dfbaf56b0f0db090fe8249f20e1851748c->leave($__internal_1d09bbd397d124c70ac46f27be1f50dfbaf56b0f0db090fe8249f20e1851748c_prof);

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
