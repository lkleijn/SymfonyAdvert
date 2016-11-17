<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_648652598207b3ef89aa27dc7af8556c4f50d06a6398cb1b7887723a1c342d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_66e1baeabc92cf46a49fc78881e132cd4f0f1e18fe1f75e9fba797a586c13c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e1baeabc92cf46a49fc78881e132cd4f0f1e18fe1f75e9fba797a586c13c29->enter($__internal_66e1baeabc92cf46a49fc78881e132cd4f0f1e18fe1f75e9fba797a586c13c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e1baeabc92cf46a49fc78881e132cd4f0f1e18fe1f75e9fba797a586c13c29->leave($__internal_66e1baeabc92cf46a49fc78881e132cd4f0f1e18fe1f75e9fba797a586c13c29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7543cc63c5e2cec60a394d63ab817f8da074b6ab9af84d0e8f30f0d50fa56651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7543cc63c5e2cec60a394d63ab817f8da074b6ab9af84d0e8f30f0d50fa56651->enter($__internal_7543cc63c5e2cec60a394d63ab817f8da074b6ab9af84d0e8f30f0d50fa56651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:index.html.twig"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7543cc63c5e2cec60a394d63ab817f8da074b6ab9af84d0e8f30f0d50fa56651->leave($__internal_7543cc63c5e2cec60a394d63ab817f8da074b6ab9af84d0e8f30f0d50fa56651_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_309bb40e5e3b7f05136f31767e04d605e274cd8a99a57f1ab335f5877b7be3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309bb40e5e3b7f05136f31767e04d605e274cd8a99a57f1ab335f5877b7be3db->enter($__internal_309bb40e5e3b7f05136f31767e04d605e274cd8a99a57f1ab335f5877b7be3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:index.html.twig"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_309bb40e5e3b7f05136f31767e04d605e274cd8a99a57f1ab335f5877b7be3db->leave($__internal_309bb40e5e3b7f05136f31767e04d605e274cd8a99a57f1ab335f5877b7be3db_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
