<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_9a6cfc44d1a93212a134c2d9c68257c58f2022bc44fc7517479c2ce5903388c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_497521526cc32a5e19234f14bdedb8ff99a19cad0efb40825ea80027c9a9dc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497521526cc32a5e19234f14bdedb8ff99a19cad0efb40825ea80027c9a9dc77->enter($__internal_497521526cc32a5e19234f14bdedb8ff99a19cad0efb40825ea80027c9a9dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_497521526cc32a5e19234f14bdedb8ff99a19cad0efb40825ea80027c9a9dc77->leave($__internal_497521526cc32a5e19234f14bdedb8ff99a19cad0efb40825ea80027c9a9dc77_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
