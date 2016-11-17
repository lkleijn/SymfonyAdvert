<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_95a0c728547f34059540c5b2d5ddfcbed561bde92e382f6239117c982e601249 extends Twig_Template
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
        $__internal_cc085df39054d1076dd4237c274bb8d4a30732b58faa6c0a0bb5635b631571be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc085df39054d1076dd4237c274bb8d4a30732b58faa6c0a0bb5635b631571be->enter($__internal_cc085df39054d1076dd4237c274bb8d4a30732b58faa6c0a0bb5635b631571be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cc085df39054d1076dd4237c274bb8d4a30732b58faa6c0a0bb5635b631571be->leave($__internal_cc085df39054d1076dd4237c274bb8d4a30732b58faa6c0a0bb5635b631571be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e99fd4b2fb7436bad27b7ddef5de1574d138b93a72b5af894d46414e398756d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e99fd4b2fb7436bad27b7ddef5de1574d138b93a72b5af894d46414e398756d->enter($__internal_2e99fd4b2fb7436bad27b7ddef5de1574d138b93a72b5af894d46414e398756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_2e99fd4b2fb7436bad27b7ddef5de1574d138b93a72b5af894d46414e398756d->leave($__internal_2e99fd4b2fb7436bad27b7ddef5de1574d138b93a72b5af894d46414e398756d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
