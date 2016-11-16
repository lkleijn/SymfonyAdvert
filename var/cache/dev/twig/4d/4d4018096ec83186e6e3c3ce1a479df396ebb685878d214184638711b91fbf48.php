<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_384324e1910080eb0ab8adf2291d25aca34f1406b86395cd13c18c47a140fea6 extends Twig_Template
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
        $__internal_459f4fad490bf836c565f5f437be5a62f008d16f536f9957effac4d915f405cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459f4fad490bf836c565f5f437be5a62f008d16f536f9957effac4d915f405cf->enter($__internal_459f4fad490bf836c565f5f437be5a62f008d16f536f9957effac4d915f405cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459f4fad490bf836c565f5f437be5a62f008d16f536f9957effac4d915f405cf->leave($__internal_459f4fad490bf836c565f5f437be5a62f008d16f536f9957effac4d915f405cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a969c13424c06b2da1f62a3fdc2ba62be6d76acb993d72e50d283b47b116302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a969c13424c06b2da1f62a3fdc2ba62be6d76acb993d72e50d283b47b116302->enter($__internal_6a969c13424c06b2da1f62a3fdc2ba62be6d76acb993d72e50d283b47b116302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a969c13424c06b2da1f62a3fdc2ba62be6d76acb993d72e50d283b47b116302->leave($__internal_6a969c13424c06b2da1f62a3fdc2ba62be6d76acb993d72e50d283b47b116302_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6db3b2f8096e0a15c238d22b7fdd995cd285976230665ee59ce8ea2b28f38abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db3b2f8096e0a15c238d22b7fdd995cd285976230665ee59ce8ea2b28f38abb->enter($__internal_6db3b2f8096e0a15c238d22b7fdd995cd285976230665ee59ce8ea2b28f38abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

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
        
        $__internal_6db3b2f8096e0a15c238d22b7fdd995cd285976230665ee59ce8ea2b28f38abb->leave($__internal_6db3b2f8096e0a15c238d22b7fdd995cd285976230665ee59ce8ea2b28f38abb_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0b16bbe39613f01040cab8cf6b034a3a1e2eeb5b09dcee023c3523b5bd2eba32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16bbe39613f01040cab8cf6b034a3a1e2eeb5b09dcee023c3523b5bd2eba32->enter($__internal_0b16bbe39613f01040cab8cf6b034a3a1e2eeb5b09dcee023c3523b5bd2eba32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_0b16bbe39613f01040cab8cf6b034a3a1e2eeb5b09dcee023c3523b5bd2eba32->leave($__internal_0b16bbe39613f01040cab8cf6b034a3a1e2eeb5b09dcee023c3523b5bd2eba32_prof);

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
