<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9551b7f78125f2ad7f88637e92a51336ef31e857d430f0d06c2d8fa9d39f72c8 extends Twig_Template
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
        $__internal_80c97ef2a21344cec72202c7e2b4d871a4d4c0d659e604f22b6c2d2ddce79b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c97ef2a21344cec72202c7e2b4d871a4d4c0d659e604f22b6c2d2ddce79b4a->enter($__internal_80c97ef2a21344cec72202c7e2b4d871a4d4c0d659e604f22b6c2d2ddce79b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_80c97ef2a21344cec72202c7e2b4d871a4d4c0d659e604f22b6c2d2ddce79b4a->leave($__internal_80c97ef2a21344cec72202c7e2b4d871a4d4c0d659e604f22b6c2d2ddce79b4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
