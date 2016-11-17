<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_3f843b9a078914c2206e45b5d4b622d9b9425a338ec5ea623ef676db008fa6d2 extends Twig_Template
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
        $__internal_093fc64984b80791cf247192dcf8252b348960ebe93055da26be5100dd2872c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093fc64984b80791cf247192dcf8252b348960ebe93055da26be5100dd2872c8->enter($__internal_093fc64984b80791cf247192dcf8252b348960ebe93055da26be5100dd2872c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093fc64984b80791cf247192dcf8252b348960ebe93055da26be5100dd2872c8->leave($__internal_093fc64984b80791cf247192dcf8252b348960ebe93055da26be5100dd2872c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2dee22672d1e9669d829d6a8dd9f75d522567a6acae549802e9ca6e73bdf6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dee22672d1e9669d829d6a8dd9f75d522567a6acae549802e9ca6e73bdf6b2->enter($__internal_e2dee22672d1e9669d829d6a8dd9f75d522567a6acae549802e9ca6e73bdf6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:index.html.twig"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2dee22672d1e9669d829d6a8dd9f75d522567a6acae549802e9ca6e73bdf6b2->leave($__internal_e2dee22672d1e9669d829d6a8dd9f75d522567a6acae549802e9ca6e73bdf6b2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1fa370336ece4f505817c512ce79e70ecdfd6c797391ab20bc574841c705b36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa370336ece4f505817c512ce79e70ecdfd6c797391ab20bc574841c705b36d->enter($__internal_1fa370336ece4f505817c512ce79e70ecdfd6c797391ab20bc574841c705b36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_1fa370336ece4f505817c512ce79e70ecdfd6c797391ab20bc574841c705b36d->leave($__internal_1fa370336ece4f505817c512ce79e70ecdfd6c797391ab20bc574841c705b36d_prof);

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
