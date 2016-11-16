<?php

/* ::base.html.twig */
class __TwigTemplate_c54a315c6798241b083180101003a021ccd09f08ec12a9a8ff7571088e1a5d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc47bffc1c66f7868d5aa43041df62e35dab25b30f7a5de26019478046e03ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc47bffc1c66f7868d5aa43041df62e35dab25b30f7a5de26019478046e03ad->enter($__internal_8cc47bffc1c66f7868d5aa43041df62e35dab25b30f7a5de26019478046e03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8cc47bffc1c66f7868d5aa43041df62e35dab25b30f7a5de26019478046e03ad->leave($__internal_8cc47bffc1c66f7868d5aa43041df62e35dab25b30f7a5de26019478046e03ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70137e739880e3870af72802b3e9d570c1f4d6a229d18d7e4c9f91e898b03595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70137e739880e3870af72802b3e9d570c1f4d6a229d18d7e4c9f91e898b03595->enter($__internal_70137e739880e3870af72802b3e9d570c1f4d6a229d18d7e4c9f91e898b03595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_70137e739880e3870af72802b3e9d570c1f4d6a229d18d7e4c9f91e898b03595->leave($__internal_70137e739880e3870af72802b3e9d570c1f4d6a229d18d7e4c9f91e898b03595_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57dbe6e12754cf9776ed1ca0dca0bc6e6beed009443b6fe5da063d16a3a17cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dbe6e12754cf9776ed1ca0dca0bc6e6beed009443b6fe5da063d16a3a17cba->enter($__internal_57dbe6e12754cf9776ed1ca0dca0bc6e6beed009443b6fe5da063d16a3a17cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_57dbe6e12754cf9776ed1ca0dca0bc6e6beed009443b6fe5da063d16a3a17cba->leave($__internal_57dbe6e12754cf9776ed1ca0dca0bc6e6beed009443b6fe5da063d16a3a17cba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e13d2e4f1c6378046f9a3e1ea8e86b5a8f1fd7002e8c8e6d18b712ed4b9f1575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13d2e4f1c6378046f9a3e1ea8e86b5a8f1fd7002e8c8e6d18b712ed4b9f1575->enter($__internal_e13d2e4f1c6378046f9a3e1ea8e86b5a8f1fd7002e8c8e6d18b712ed4b9f1575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e13d2e4f1c6378046f9a3e1ea8e86b5a8f1fd7002e8c8e6d18b712ed4b9f1575->leave($__internal_e13d2e4f1c6378046f9a3e1ea8e86b5a8f1fd7002e8c8e6d18b712ed4b9f1575_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14d2fdf8f06356b6ab00c4cef9bb133066a6d63ac56a19b9a6a0f9cdcbd5b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d2fdf8f06356b6ab00c4cef9bb133066a6d63ac56a19b9a6a0f9cdcbd5b29e->enter($__internal_14d2fdf8f06356b6ab00c4cef9bb133066a6d63ac56a19b9a6a0f9cdcbd5b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_14d2fdf8f06356b6ab00c4cef9bb133066a6d63ac56a19b9a6a0f9cdcbd5b29e->leave($__internal_14d2fdf8f06356b6ab00c4cef9bb133066a6d63ac56a19b9a6a0f9cdcbd5b29e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
