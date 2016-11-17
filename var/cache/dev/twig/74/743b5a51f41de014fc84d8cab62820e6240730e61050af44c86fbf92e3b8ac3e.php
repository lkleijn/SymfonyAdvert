<?php

/* @OCPlatform/Advert/form.html.twig */
class __TwigTemplate_ef36bb0ad8ae89796931fc63aac337ae8fa10c95180cb088e89ac28c08e6f6be extends Twig_Template
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
        $__internal_bfe70cce8b088ada4c14778e5a771a1e19737c03f05b383e8be0963f52c320ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe70cce8b088ada4c14778e5a771a1e19737c03f05b383e8be0963f52c320ca->enter($__internal_bfe70cce8b088ada4c14778e5a771a1e19737c03f05b383e8be0963f52c320ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_bfe70cce8b088ada4c14778e5a771a1e19737c03f05b383e8be0963f52c320ca->leave($__internal_bfe70cce8b088ada4c14778e5a771a1e19737c03f05b383e8be0963f52c320ca_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  25 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
  Ici se trouvera le formulaire.
</div>", "@OCPlatform/Advert/form.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
