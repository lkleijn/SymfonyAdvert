<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_c58361b4a7b480db68669344ba026e37141700322e0898dacb1310aec7e7c608 extends Twig_Template
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
        // line 1
        echo "
<!DOCTYPE html>

<html>

    <head>

        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

    </head>

    <body>

        <h1>Hello ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " !</h1>

        

        <p>

            Le Hello World est un grand classique en programmation.

            Il signifie énormément, car cela veut dire que vous avez

            réussi à exécuter le programme pour accomplir une tâche simple :

            afficher ce hello world !

        </p>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>

<html>

    <head>

        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

    </head>

    <body>

        <h1>Hello {{nom}} !</h1>

        

        <p>

            Le Hello World est un grand classique en programmation.

            Il signifie énormément, car cela veut dire que vous avez

            réussi à exécuter le programme pour accomplir une tâche simple :

            afficher ce hello world !

        </p>

    </body>

</html>";
    }
}
