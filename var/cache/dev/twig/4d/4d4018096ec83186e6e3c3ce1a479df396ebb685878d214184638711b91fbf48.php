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
        $__internal_1663e581a54a8905ff11de1567ec61e603bd5b5a785a66d0245ebaf4aeaa87f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1663e581a54a8905ff11de1567ec61e603bd5b5a785a66d0245ebaf4aeaa87f4->enter($__internal_1663e581a54a8905ff11de1567ec61e603bd5b5a785a66d0245ebaf4aeaa87f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1663e581a54a8905ff11de1567ec61e603bd5b5a785a66d0245ebaf4aeaa87f4->leave($__internal_1663e581a54a8905ff11de1567ec61e603bd5b5a785a66d0245ebaf4aeaa87f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_303324da8cbb8553c96ab2d6db287173947f1edbfdb1758f4800bb5faa9c5a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303324da8cbb8553c96ab2d6db287173947f1edbfdb1758f4800bb5faa9c5a1a->enter($__internal_303324da8cbb8553c96ab2d6db287173947f1edbfdb1758f4800bb5faa9c5a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_303324da8cbb8553c96ab2d6db287173947f1edbfdb1758f4800bb5faa9c5a1a->leave($__internal_303324da8cbb8553c96ab2d6db287173947f1edbfdb1758f4800bb5faa9c5a1a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6268497bdd71ba071352f986bce0c11a6217fda2493632945899bd7fcb73efc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6268497bdd71ba071352f986bce0c11a6217fda2493632945899bd7fcb73efc1->enter($__internal_6268497bdd71ba071352f986bce0c11a6217fda2493632945899bd7fcb73efc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

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
        
        $__internal_6268497bdd71ba071352f986bce0c11a6217fda2493632945899bd7fcb73efc1->leave($__internal_6268497bdd71ba071352f986bce0c11a6217fda2493632945899bd7fcb73efc1_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9eaa5d472f1b32700ff49e5b451ba0fed99d560cd99c904a0dc0cd3213789650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaa5d472f1b32700ff49e5b451ba0fed99d560cd99c904a0dc0cd3213789650->enter($__internal_9eaa5d472f1b32700ff49e5b451ba0fed99d560cd99c904a0dc0cd3213789650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_9eaa5d472f1b32700ff49e5b451ba0fed99d560cd99c904a0dc0cd3213789650->leave($__internal_9eaa5d472f1b32700ff49e5b451ba0fed99d560cd99c904a0dc0cd3213789650_prof);

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
