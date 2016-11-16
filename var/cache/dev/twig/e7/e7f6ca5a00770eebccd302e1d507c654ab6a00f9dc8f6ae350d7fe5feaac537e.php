<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_979ca137f71a78c20134592840f9d6faffc6190d8cc0435d8436345198a7d34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f98fb1aa92aee35e7bc5306148a8498e21c67f336698d60858d9a9be4bbd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f98fb1aa92aee35e7bc5306148a8498e21c67f336698d60858d9a9be4bbd0a->enter($__internal_52f98fb1aa92aee35e7bc5306148a8498e21c67f336698d60858d9a9be4bbd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52f98fb1aa92aee35e7bc5306148a8498e21c67f336698d60858d9a9be4bbd0a->leave($__internal_52f98fb1aa92aee35e7bc5306148a8498e21c67f336698d60858d9a9be4bbd0a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_344bd6dc4e2fb5bc0fa6f2f3e479a996fcf8151661e4ba5fae051341d0b66c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344bd6dc4e2fb5bc0fa6f2f3e479a996fcf8151661e4ba5fae051341d0b66c14->enter($__internal_344bd6dc4e2fb5bc0fa6f2f3e479a996fcf8151661e4ba5fae051341d0b66c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_344bd6dc4e2fb5bc0fa6f2f3e479a996fcf8151661e4ba5fae051341d0b66c14->leave($__internal_344bd6dc4e2fb5bc0fa6f2f3e479a996fcf8151661e4ba5fae051341d0b66c14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
