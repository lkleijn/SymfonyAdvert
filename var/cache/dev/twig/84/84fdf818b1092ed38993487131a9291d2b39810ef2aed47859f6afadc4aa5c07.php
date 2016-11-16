<?php

/* @WebProfiler/Icon/forward.svg */
class __TwigTemplate_c6a28f2b2ce701e4b25833d520e0a7bc73ab727032fdb2a4798d1cd82345784c extends Twig_Template
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
        $__internal_ba6db17c3cdba08324758d775cd89c4c11c18189d4dbd575003fe17027e4484e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6db17c3cdba08324758d775cd89c4c11c18189d4dbd575003fe17027e4484e->enter($__internal_ba6db17c3cdba08324758d775cd89c4c11c18189d4dbd575003fe17027e4484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/forward.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
";
        
        $__internal_ba6db17c3cdba08324758d775cd89c4c11c18189d4dbd575003fe17027e4484e->leave($__internal_ba6db17c3cdba08324758d775cd89c4c11c18189d4dbd575003fe17027e4484e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/forward.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
", "@WebProfiler/Icon/forward.svg", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Icon\\forward.svg");
    }
}
