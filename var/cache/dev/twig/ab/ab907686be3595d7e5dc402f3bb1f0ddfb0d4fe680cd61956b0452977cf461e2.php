<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d5f9db1f6c07ff6b4f49fa05c99f8862afa50e13f68d790b5f52f4d0275521b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_5b874c72a0e1352ed4cd9e22ad272a37069dc79bda95243150dbb118ec5b6c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b874c72a0e1352ed4cd9e22ad272a37069dc79bda95243150dbb118ec5b6c5f->enter($__internal_5b874c72a0e1352ed4cd9e22ad272a37069dc79bda95243150dbb118ec5b6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b874c72a0e1352ed4cd9e22ad272a37069dc79bda95243150dbb118ec5b6c5f->leave($__internal_5b874c72a0e1352ed4cd9e22ad272a37069dc79bda95243150dbb118ec5b6c5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b27e88f8ba6d51bb73e5bd7fa35f6c477c96b5db8747164b78d9c62c14c4dd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27e88f8ba6d51bb73e5bd7fa35f6c477c96b5db8747164b78d9c62c14c4dd22->enter($__internal_b27e88f8ba6d51bb73e5bd7fa35f6c477c96b5db8747164b78d9c62c14c4dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b27e88f8ba6d51bb73e5bd7fa35f6c477c96b5db8747164b78d9c62c14c4dd22->leave($__internal_b27e88f8ba6d51bb73e5bd7fa35f6c477c96b5db8747164b78d9c62c14c4dd22_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_656a944e4e6c521a289d9cf1bc7d4215091c9ff16e291adeacd2e052094e4cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656a944e4e6c521a289d9cf1bc7d4215091c9ff16e291adeacd2e052094e4cbd->enter($__internal_656a944e4e6c521a289d9cf1bc7d4215091c9ff16e291adeacd2e052094e4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

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
        
        $__internal_656a944e4e6c521a289d9cf1bc7d4215091c9ff16e291adeacd2e052094e4cbd->leave($__internal_656a944e4e6c521a289d9cf1bc7d4215091c9ff16e291adeacd2e052094e4cbd_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
