<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_ec8b46882cb1648714b6beb77e15b6f85bd1524e053fd45dfc8d532d9222a15c extends Twig_Template
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
        $__internal_1f8d8c11a4d48f8c9f52d2135f05497124a589d88c44a2be9adb0bd30bdb5347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d8c11a4d48f8c9f52d2135f05497124a589d88c44a2be9adb0bd30bdb5347->enter($__internal_1f8d8c11a4d48f8c9f52d2135f05497124a589d88c44a2be9adb0bd30bdb5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8d8c11a4d48f8c9f52d2135f05497124a589d88c44a2be9adb0bd30bdb5347->leave($__internal_1f8d8c11a4d48f8c9f52d2135f05497124a589d88c44a2be9adb0bd30bdb5347_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac1cc3a993698e535a3d7184876c54305ab0402ba23e892c4b7cfb167a4aa90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1cc3a993698e535a3d7184876c54305ab0402ba23e892c4b7cfb167a4aa90a->enter($__internal_ac1cc3a993698e535a3d7184876c54305ab0402ba23e892c4b7cfb167a4aa90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac1cc3a993698e535a3d7184876c54305ab0402ba23e892c4b7cfb167a4aa90a->leave($__internal_ac1cc3a993698e535a3d7184876c54305ab0402ba23e892c4b7cfb167a4aa90a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_540e0e8a0054e790e97176fda3da825145d0dd83593f0a318374d5cb076f5aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540e0e8a0054e790e97176fda3da825145d0dd83593f0a318374d5cb076f5aa2->enter($__internal_540e0e8a0054e790e97176fda3da825145d0dd83593f0a318374d5cb076f5aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

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
        
        $__internal_540e0e8a0054e790e97176fda3da825145d0dd83593f0a318374d5cb076f5aa2->leave($__internal_540e0e8a0054e790e97176fda3da825145d0dd83593f0a318374d5cb076f5aa2_prof);

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
