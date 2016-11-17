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
        $__internal_32e1ffb2a3ca33ef52a16435f1ecd35d57a343f0d0b8cc1ef73fda33b1951ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e1ffb2a3ca33ef52a16435f1ecd35d57a343f0d0b8cc1ef73fda33b1951ce6->enter($__internal_32e1ffb2a3ca33ef52a16435f1ecd35d57a343f0d0b8cc1ef73fda33b1951ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_32e1ffb2a3ca33ef52a16435f1ecd35d57a343f0d0b8cc1ef73fda33b1951ce6->leave($__internal_32e1ffb2a3ca33ef52a16435f1ecd35d57a343f0d0b8cc1ef73fda33b1951ce6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_33629b97946c69527491dd6d6bb523b9486f8f05ead1737a8af63363fc428571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33629b97946c69527491dd6d6bb523b9486f8f05ead1737a8af63363fc428571->enter($__internal_33629b97946c69527491dd6d6bb523b9486f8f05ead1737a8af63363fc428571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "OC Plateforme";
        
        $__internal_33629b97946c69527491dd6d6bb523b9486f8f05ead1737a8af63363fc428571->leave($__internal_33629b97946c69527491dd6d6bb523b9486f8f05ead1737a8af63363fc428571_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9ec2a7dca2b0d0845a09a69051801b73b9b55329d4dd23a29aa4d939be20ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ec2a7dca2b0d0845a09a69051801b73b9b55329d4dd23a29aa4d939be20ef6->enter($__internal_d9ec2a7dca2b0d0845a09a69051801b73b9b55329d4dd23a29aa4d939be20ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_d9ec2a7dca2b0d0845a09a69051801b73b9b55329d4dd23a29aa4d939be20ef6->leave($__internal_d9ec2a7dca2b0d0845a09a69051801b73b9b55329d4dd23a29aa4d939be20ef6_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eee1e41804097c8d555ea2ad1fb0688c98d12ef53944e7751f9dec72b16050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eee1e41804097c8d555ea2ad1fb0688c98d12ef53944e7751f9dec72b16050f->enter($__internal_1eee1e41804097c8d555ea2ad1fb0688c98d12ef53944e7751f9dec72b16050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 45
        echo "        ";
        
        $__internal_1eee1e41804097c8d555ea2ad1fb0688c98d12ef53944e7751f9dec72b16050f->leave($__internal_1eee1e41804097c8d555ea2ad1fb0688c98d12ef53944e7751f9dec72b16050f_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bee4d48a14604ca43edc77025411ad4f829713b3b448c11450e31d5f6a168596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee4d48a14604ca43edc77025411ad4f829713b3b448c11450e31d5f6a168596->enter($__internal_bee4d48a14604ca43edc77025411ad4f829713b3b448c11450e31d5f6a168596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_bee4d48a14604ca43edc77025411ad4f829713b3b448c11450e31d5f6a168596->leave($__internal_bee4d48a14604ca43edc77025411ad4f829713b3b448c11450e31d5f6a168596_prof);

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
