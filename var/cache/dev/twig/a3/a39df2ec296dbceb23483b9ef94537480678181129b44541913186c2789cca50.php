<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_11350050c85f7a246727e097a224121efcbde25f805eba8713c0078564525fd9 extends Twig_Template
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
        $__internal_8e4272c89d8fa5711ef16d005b990389ecb566e0d44a44ea6928cfa0acb83e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4272c89d8fa5711ef16d005b990389ecb566e0d44a44ea6928cfa0acb83e05->enter($__internal_8e4272c89d8fa5711ef16d005b990389ecb566e0d44a44ea6928cfa0acb83e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8e4272c89d8fa5711ef16d005b990389ecb566e0d44a44ea6928cfa0acb83e05->leave($__internal_8e4272c89d8fa5711ef16d005b990389ecb566e0d44a44ea6928cfa0acb83e05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
