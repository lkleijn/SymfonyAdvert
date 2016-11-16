<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_eb652e4a972513b81bf628ed2fb812d52195fdba87081af8b143a54925445bbd extends Twig_Template
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
        $__internal_c9beaa055cd849da48e1f7f2fb5ede963e343a2f554ac79743d638d3abd0d80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9beaa055cd849da48e1f7f2fb5ede963e343a2f554ac79743d638d3abd0d80d->enter($__internal_c9beaa055cd849da48e1f7f2fb5ede963e343a2f554ac79743d638d3abd0d80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9beaa055cd849da48e1f7f2fb5ede963e343a2f554ac79743d638d3abd0d80d->leave($__internal_c9beaa055cd849da48e1f7f2fb5ede963e343a2f554ac79743d638d3abd0d80d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a730a5b247c71b34649db397e10822fcf2994ab92a2b2b550536e43ef2a9ecf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a730a5b247c71b34649db397e10822fcf2994ab92a2b2b550536e43ef2a9ecf4->enter($__internal_a730a5b247c71b34649db397e10822fcf2994ab92a2b2b550536e43ef2a9ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a730a5b247c71b34649db397e10822fcf2994ab92a2b2b550536e43ef2a9ecf4->leave($__internal_a730a5b247c71b34649db397e10822fcf2994ab92a2b2b550536e43ef2a9ecf4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b46f20403ec4745ee52375bcdb5b9caee0f938a7865642cf8405ce9b27c585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b46f20403ec4745ee52375bcdb5b9caee0f938a7865642cf8405ce9b27c585->enter($__internal_27b46f20403ec4745ee52375bcdb5b9caee0f938a7865642cf8405ce9b27c585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

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
        
        $__internal_27b46f20403ec4745ee52375bcdb5b9caee0f938a7865642cf8405ce9b27c585->leave($__internal_27b46f20403ec4745ee52375bcdb5b9caee0f938a7865642cf8405ce9b27c585_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e6629a62333f8e7790e28ff58cdecf8e28d826cfe179ae0da141e598673b516e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6629a62333f8e7790e28ff58cdecf8e28d826cfe179ae0da141e598673b516e->enter($__internal_e6629a62333f8e7790e28ff58cdecf8e28d826cfe179ae0da141e598673b516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle::layout.html.twig"));

        // line 18
        echo "  ";
        
        $__internal_e6629a62333f8e7790e28ff58cdecf8e28d826cfe179ae0da141e598673b516e->leave($__internal_e6629a62333f8e7790e28ff58cdecf8e28d826cfe179ae0da141e598673b516e_prof);

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
