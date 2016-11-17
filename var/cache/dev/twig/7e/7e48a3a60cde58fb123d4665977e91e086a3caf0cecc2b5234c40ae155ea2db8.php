<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2013163a19f3ad07fb260b1117063f4240698c71070907fdef2d768fd589129d extends Twig_Template
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
        $__internal_b6dccd1b42a5831552263315d7163ec487e0a69e0d88a2e6d0ab6b29fc4b6666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dccd1b42a5831552263315d7163ec487e0a69e0d88a2e6d0ab6b29fc4b6666->enter($__internal_b6dccd1b42a5831552263315d7163ec487e0a69e0d88a2e6d0ab6b29fc4b6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b6dccd1b42a5831552263315d7163ec487e0a69e0d88a2e6d0ab6b29fc4b6666->leave($__internal_b6dccd1b42a5831552263315d7163ec487e0a69e0d88a2e6d0ab6b29fc4b6666_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
