<?php

/* @OCPlatform/Advert/index.html.twig */
class __TwigTemplate_0104dc8b246bd30b1c6f62474ff06cef2f75f3e355527a4d004d32da2d42cd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/index.html.twig", 3);
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
        $__internal_4d971fb1145a66a74597155d1cf61faef7d2fd758946552ad5f4ab1b5cc0c982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d971fb1145a66a74597155d1cf61faef7d2fd758946552ad5f4ab1b5cc0c982->enter($__internal_4d971fb1145a66a74597155d1cf61faef7d2fd758946552ad5f4ab1b5cc0c982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d971fb1145a66a74597155d1cf61faef7d2fd758946552ad5f4ab1b5cc0c982->leave($__internal_4d971fb1145a66a74597155d1cf61faef7d2fd758946552ad5f4ab1b5cc0c982_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddfb5f74e63d9e9a777e63327b7ee87cb276eb1df191dfb9543d6d71336e95d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfb5f74e63d9e9a777e63327b7ee87cb276eb1df191dfb9543d6d71336e95d3->enter($__internal_ddfb5f74e63d9e9a777e63327b7ee87cb276eb1df191dfb9543d6d71336e95d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/index.html.twig"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ddfb5f74e63d9e9a777e63327b7ee87cb276eb1df191dfb9543d6d71336e95d3->leave($__internal_ddfb5f74e63d9e9a777e63327b7ee87cb276eb1df191dfb9543d6d71336e95d3_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ec8c29c58e5e1670f11e3fbd1eaa0a6cf8d2897816020c6f34c40526c14bd7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8c29c58e5e1670f11e3fbd1eaa0a6cf8d2897816020c6f34c40526c14bd7c0->enter($__internal_ec8c29c58e5e1670f11e3fbd1eaa0a6cf8d2897816020c6f34c40526c14bd7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/index.html.twig"));

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
        
        $__internal_ec8c29c58e5e1670f11e3fbd1eaa0a6cf8d2897816020c6f34c40526c14bd7c0->leave($__internal_ec8c29c58e5e1670f11e3fbd1eaa0a6cf8d2897816020c6f34c40526c14bd7c0_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/index.html.twig";
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

{% endblock %}", "@OCPlatform/Advert/index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
