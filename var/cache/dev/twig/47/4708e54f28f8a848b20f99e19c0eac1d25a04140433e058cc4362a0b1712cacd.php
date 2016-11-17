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
        $__internal_7ccdfd801a0cc4d416a79f2fbc3d38eb360fef686e54b757c21ebdac20d1faca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccdfd801a0cc4d416a79f2fbc3d38eb360fef686e54b757c21ebdac20d1faca->enter($__internal_7ccdfd801a0cc4d416a79f2fbc3d38eb360fef686e54b757c21ebdac20d1faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7ccdfd801a0cc4d416a79f2fbc3d38eb360fef686e54b757c21ebdac20d1faca->leave($__internal_7ccdfd801a0cc4d416a79f2fbc3d38eb360fef686e54b757c21ebdac20d1faca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0c24ab52f4f7cb2336b64a5167cc7f3e61fd509343ec9ba10cd59158c30c095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c24ab52f4f7cb2336b64a5167cc7f3e61fd509343ec9ba10cd59158c30c095->enter($__internal_c0c24ab52f4f7cb2336b64a5167cc7f3e61fd509343ec9ba10cd59158c30c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_c0c24ab52f4f7cb2336b64a5167cc7f3e61fd509343ec9ba10cd59158c30c095->leave($__internal_c0c24ab52f4f7cb2336b64a5167cc7f3e61fd509343ec9ba10cd59158c30c095_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2407dcc7ff6e631a69764f992b8619f3d946f360edaf771613444de86043a4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2407dcc7ff6e631a69764f992b8619f3d946f360edaf771613444de86043a4e1->enter($__internal_2407dcc7ff6e631a69764f992b8619f3d946f360edaf771613444de86043a4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_2407dcc7ff6e631a69764f992b8619f3d946f360edaf771613444de86043a4e1->leave($__internal_2407dcc7ff6e631a69764f992b8619f3d946f360edaf771613444de86043a4e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1a97a2d1b961bcd8160e30f71054387aa61961aea26ebabf6f1368e2b5918a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1a97a2d1b961bcd8160e30f71054387aa61961aea26ebabf6f1368e2b5918a->enter($__internal_9c1a97a2d1b961bcd8160e30f71054387aa61961aea26ebabf6f1368e2b5918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_9c1a97a2d1b961bcd8160e30f71054387aa61961aea26ebabf6f1368e2b5918a->leave($__internal_9c1a97a2d1b961bcd8160e30f71054387aa61961aea26ebabf6f1368e2b5918a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b4ebd614a5d88fa3b61efdf5cdf3ac6e0ecf41ffd7a5a02bcc9c9f868d095da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4ebd614a5d88fa3b61efdf5cdf3ac6e0ecf41ffd7a5a02bcc9c9f868d095da->enter($__internal_4b4ebd614a5d88fa3b61efdf5cdf3ac6e0ecf41ffd7a5a02bcc9c9f868d095da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_4b4ebd614a5d88fa3b61efdf5cdf3ac6e0ecf41ffd7a5a02bcc9c9f868d095da->leave($__internal_4b4ebd614a5d88fa3b61efdf5cdf3ac6e0ecf41ffd7a5a02bcc9c9f868d095da_prof);

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
