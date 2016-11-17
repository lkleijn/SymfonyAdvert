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
        $__internal_d6f48ee5fc423b3159e8debb354e4aa4ecbe5da1e45005f3af36f47717214277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f48ee5fc423b3159e8debb354e4aa4ecbe5da1e45005f3af36f47717214277->enter($__internal_d6f48ee5fc423b3159e8debb354e4aa4ecbe5da1e45005f3af36f47717214277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f48ee5fc423b3159e8debb354e4aa4ecbe5da1e45005f3af36f47717214277->leave($__internal_d6f48ee5fc423b3159e8debb354e4aa4ecbe5da1e45005f3af36f47717214277_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61bf98d5fb2c1e8397245b60ce91d1decb5368eed8912c6b8284d15c5588cbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bf98d5fb2c1e8397245b60ce91d1decb5368eed8912c6b8284d15c5588cbd5->enter($__internal_61bf98d5fb2c1e8397245b60ce91d1decb5368eed8912c6b8284d15c5588cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_61bf98d5fb2c1e8397245b60ce91d1decb5368eed8912c6b8284d15c5588cbd5->leave($__internal_61bf98d5fb2c1e8397245b60ce91d1decb5368eed8912c6b8284d15c5588cbd5_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_398441d5caf4ed2cbc5ad12ce16c2ec846846b207bb92c1ea0df1c8884b5418e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398441d5caf4ed2cbc5ad12ce16c2ec846846b207bb92c1ea0df1c8884b5418e->enter($__internal_398441d5caf4ed2cbc5ad12ce16c2ec846846b207bb92c1ea0df1c8884b5418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

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
        
        $__internal_398441d5caf4ed2cbc5ad12ce16c2ec846846b207bb92c1ea0df1c8884b5418e->leave($__internal_398441d5caf4ed2cbc5ad12ce16c2ec846846b207bb92c1ea0df1c8884b5418e_prof);

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
