<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_027e776ce951b114d908011c17927fa67e6a48bc5d1addf0c9e0c2168303bbbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_011b192ac2e73f8061b4f1e6b0e9735e8dbf57efe1a900bac145759ed444856e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011b192ac2e73f8061b4f1e6b0e9735e8dbf57efe1a900bac145759ed444856e->enter($__internal_011b192ac2e73f8061b4f1e6b0e9735e8dbf57efe1a900bac145759ed444856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011b192ac2e73f8061b4f1e6b0e9735e8dbf57efe1a900bac145759ed444856e->leave($__internal_011b192ac2e73f8061b4f1e6b0e9735e8dbf57efe1a900bac145759ed444856e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ca247213fa6c1c0899203e2eb19cce29207c84741c622dd6abf8e2b6b6323b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca247213fa6c1c0899203e2eb19cce29207c84741c622dd6abf8e2b6b6323b2->enter($__internal_3ca247213fa6c1c0899203e2eb19cce29207c84741c622dd6abf8e2b6b6323b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3ca247213fa6c1c0899203e2eb19cce29207c84741c622dd6abf8e2b6b6323b2->leave($__internal_3ca247213fa6c1c0899203e2eb19cce29207c84741c622dd6abf8e2b6b6323b2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4b76429deac979a626436a0879a653907193fb91483a30b40a60f3f07a97d3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b76429deac979a626436a0879a653907193fb91483a30b40a60f3f07a97d3a1->enter($__internal_4b76429deac979a626436a0879a653907193fb91483a30b40a60f3f07a97d3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_4b76429deac979a626436a0879a653907193fb91483a30b40a60f3f07a97d3a1->leave($__internal_4b76429deac979a626436a0879a653907193fb91483a30b40a60f3f07a97d3a1_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}", "@OCPlatform/Advert/add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
