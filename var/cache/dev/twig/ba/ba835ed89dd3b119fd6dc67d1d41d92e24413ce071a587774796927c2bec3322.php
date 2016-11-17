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
        $__internal_9839dd706252ddf4d56529124e88abe7411cba78133ac85de8add338f5f1a929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9839dd706252ddf4d56529124e88abe7411cba78133ac85de8add338f5f1a929->enter($__internal_9839dd706252ddf4d56529124e88abe7411cba78133ac85de8add338f5f1a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9839dd706252ddf4d56529124e88abe7411cba78133ac85de8add338f5f1a929->leave($__internal_9839dd706252ddf4d56529124e88abe7411cba78133ac85de8add338f5f1a929_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c36b5a1fc83a1046aaaad82c0733bd31aea3d88849e8a15b0df6102d6575ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c36b5a1fc83a1046aaaad82c0733bd31aea3d88849e8a15b0df6102d6575ee7->enter($__internal_3c36b5a1fc83a1046aaaad82c0733bd31aea3d88849e8a15b0df6102d6575ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_3c36b5a1fc83a1046aaaad82c0733bd31aea3d88849e8a15b0df6102d6575ee7->leave($__internal_3c36b5a1fc83a1046aaaad82c0733bd31aea3d88849e8a15b0df6102d6575ee7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f462e1a77a1872ec2c6956e6b62b91ba1591a95a824ad705118109cd47a0fc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f462e1a77a1872ec2c6956e6b62b91ba1591a95a824ad705118109cd47a0fc3f->enter($__internal_f462e1a77a1872ec2c6956e6b62b91ba1591a95a824ad705118109cd47a0fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f462e1a77a1872ec2c6956e6b62b91ba1591a95a824ad705118109cd47a0fc3f->leave($__internal_f462e1a77a1872ec2c6956e6b62b91ba1591a95a824ad705118109cd47a0fc3f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9974ceb91b6893a049c16ad315be72eb55360ebb97f41d08c124325ca9e463a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9974ceb91b6893a049c16ad315be72eb55360ebb97f41d08c124325ca9e463a9->enter($__internal_9974ceb91b6893a049c16ad315be72eb55360ebb97f41d08c124325ca9e463a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_9974ceb91b6893a049c16ad315be72eb55360ebb97f41d08c124325ca9e463a9->leave($__internal_9974ceb91b6893a049c16ad315be72eb55360ebb97f41d08c124325ca9e463a9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fda158cf60e42b421b7c7d51d80748c9c769e66771e69e8306a94390ea0910ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda158cf60e42b421b7c7d51d80748c9c769e66771e69e8306a94390ea0910ea->enter($__internal_fda158cf60e42b421b7c7d51d80748c9c769e66771e69e8306a94390ea0910ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_fda158cf60e42b421b7c7d51d80748c9c769e66771e69e8306a94390ea0910ea->leave($__internal_fda158cf60e42b421b7c7d51d80748c9c769e66771e69e8306a94390ea0910ea_prof);

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
