<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_424a1dbeb2d1057d6ff1e5c5818b2e9d70e68bbcc828ddf07c3dc611a79c7365 extends Twig_Template
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
        $__internal_fa327d13aca1374ee5dc463fa161ac3a4700b3d9fab5aee1e2aa1bcf586af568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa327d13aca1374ee5dc463fa161ac3a4700b3d9fab5aee1e2aa1bcf586af568->enter($__internal_fa327d13aca1374ee5dc463fa161ac3a4700b3d9fab5aee1e2aa1bcf586af568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fa327d13aca1374ee5dc463fa161ac3a4700b3d9fab5aee1e2aa1bcf586af568->leave($__internal_fa327d13aca1374ee5dc463fa161ac3a4700b3d9fab5aee1e2aa1bcf586af568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
