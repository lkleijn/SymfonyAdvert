<?php

/* layout.html.twig */
class __TwigTemplate_474f67bcac1e0805adc3ca7e7543b480fb5daa87be2b305aade6bd199c293947 extends Twig_Template
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
        $__internal_d1ffad62ded4ae2e30cbc7f724a622ec0270abe6f3b67abc047a90d3ec0966ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ffad62ded4ae2e30cbc7f724a622ec0270abe6f3b67abc047a90d3ec0966ee->enter($__internal_d1ffad62ded4ae2e30cbc7f724a622ec0270abe6f3b67abc047a90d3ec0966ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_d1ffad62ded4ae2e30cbc7f724a622ec0270abe6f3b67abc047a90d3ec0966ee->leave($__internal_d1ffad62ded4ae2e30cbc7f724a622ec0270abe6f3b67abc047a90d3ec0966ee_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff5871f1f9781346624ecb421976ba666462fcfe5f2fa4c7c66f5264338d28ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5871f1f9781346624ecb421976ba666462fcfe5f2fa4c7c66f5264338d28ab->enter($__internal_ff5871f1f9781346624ecb421976ba666462fcfe5f2fa4c7c66f5264338d28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "OC Plateforme";
        
        $__internal_ff5871f1f9781346624ecb421976ba666462fcfe5f2fa4c7c66f5264338d28ab->leave($__internal_ff5871f1f9781346624ecb421976ba666462fcfe5f2fa4c7c66f5264338d28ab_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17318b1a855e20fe69b484cb3db5a658994b20dc8662fe166f1285b9c071e5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17318b1a855e20fe69b484cb3db5a658994b20dc8662fe166f1285b9c071e5d4->enter($__internal_17318b1a855e20fe69b484cb3db5a658994b20dc8662fe166f1285b9c071e5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_17318b1a855e20fe69b484cb3db5a658994b20dc8662fe166f1285b9c071e5d4->leave($__internal_17318b1a855e20fe69b484cb3db5a658994b20dc8662fe166f1285b9c071e5d4_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf0d01401adbe3a6a7739cfb7af9d2d3e2a888965a3abf667cc3b913253dbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf0d01401adbe3a6a7739cfb7af9d2d3e2a888965a3abf667cc3b913253dbf3->enter($__internal_ebf0d01401adbe3a6a7739cfb7af9d2d3e2a888965a3abf667cc3b913253dbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 45
        echo "        ";
        
        $__internal_ebf0d01401adbe3a6a7739cfb7af9d2d3e2a888965a3abf667cc3b913253dbf3->leave($__internal_ebf0d01401adbe3a6a7739cfb7af9d2d3e2a888965a3abf667cc3b913253dbf3_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_073c1fc1a44ceef6de383728f66484e81dfa7916e4b9c17ee89f7d5db933e612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073c1fc1a44ceef6de383728f66484e81dfa7916e4b9c17ee89f7d5db933e612->enter($__internal_073c1fc1a44ceef6de383728f66484e81dfa7916e4b9c17ee89f7d5db933e612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_073c1fc1a44ceef6de383728f66484e81dfa7916e4b9c17ee89f7d5db933e612->leave($__internal_073c1fc1a44ceef6de383728f66484e81dfa7916e4b9c17ee89f7d5db933e612_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  157 => 57,  151 => 56,  144 => 45,  138 => 44,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  101 => 61,  99 => 56,  92 => 52,  84 => 46,  82 => 44,  76 => 41,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "layout.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
