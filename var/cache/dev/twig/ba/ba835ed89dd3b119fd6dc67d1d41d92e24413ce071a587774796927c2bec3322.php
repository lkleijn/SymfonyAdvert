<?php

/* base.html.twig */
class __TwigTemplate_1253cc419bd2439f76909cedbc2a7855147b113c06569d315fc09c49a62066ab extends Twig_Template
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
        $__internal_56b82736a48105b650440102202ec4056730a46838d8c1b68237999cb1435fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b82736a48105b650440102202ec4056730a46838d8c1b68237999cb1435fab->enter($__internal_56b82736a48105b650440102202ec4056730a46838d8c1b68237999cb1435fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_56b82736a48105b650440102202ec4056730a46838d8c1b68237999cb1435fab->leave($__internal_56b82736a48105b650440102202ec4056730a46838d8c1b68237999cb1435fab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc3b458df8601a9466031c78a3c408d4bdcbaf97067160c69f8323e4ff6667fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3b458df8601a9466031c78a3c408d4bdcbaf97067160c69f8323e4ff6667fa->enter($__internal_bc3b458df8601a9466031c78a3c408d4bdcbaf97067160c69f8323e4ff6667fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_bc3b458df8601a9466031c78a3c408d4bdcbaf97067160c69f8323e4ff6667fa->leave($__internal_bc3b458df8601a9466031c78a3c408d4bdcbaf97067160c69f8323e4ff6667fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5977f69fef770dd74e62a068d15291706838cefcb0374ebe0d3a4de4e45893fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5977f69fef770dd74e62a068d15291706838cefcb0374ebe0d3a4de4e45893fe->enter($__internal_5977f69fef770dd74e62a068d15291706838cefcb0374ebe0d3a4de4e45893fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5977f69fef770dd74e62a068d15291706838cefcb0374ebe0d3a4de4e45893fe->leave($__internal_5977f69fef770dd74e62a068d15291706838cefcb0374ebe0d3a4de4e45893fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb92a15ad2e6ad1bd5a54afe1fb47a6b31aaa182e66d1fc3c9188155fe4b4164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb92a15ad2e6ad1bd5a54afe1fb47a6b31aaa182e66d1fc3c9188155fe4b4164->enter($__internal_fb92a15ad2e6ad1bd5a54afe1fb47a6b31aaa182e66d1fc3c9188155fe4b4164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_fb92a15ad2e6ad1bd5a54afe1fb47a6b31aaa182e66d1fc3c9188155fe4b4164->leave($__internal_fb92a15ad2e6ad1bd5a54afe1fb47a6b31aaa182e66d1fc3c9188155fe4b4164_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06fb8a3a5c85b9ee8b3cb1c71a30b3277ff17e0774b538d05fcbeab1410d8bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fb8a3a5c85b9ee8b3cb1c71a30b3277ff17e0774b538d05fcbeab1410d8bb9->enter($__internal_06fb8a3a5c85b9ee8b3cb1c71a30b3277ff17e0774b538d05fcbeab1410d8bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_06fb8a3a5c85b9ee8b3cb1c71a30b3277ff17e0774b538d05fcbeab1410d8bb9->leave($__internal_06fb8a3a5c85b9ee8b3cb1c71a30b3277ff17e0774b538d05fcbeab1410d8bb9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
