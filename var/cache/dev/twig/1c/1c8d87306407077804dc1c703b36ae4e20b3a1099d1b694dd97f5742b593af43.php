<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f8a3d75e674cc935f9281da67f1aca38c9c5f5a04d33b4e8cfd0edc8dc395b53 extends Twig_Template
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
        $__internal_50d576773546e72dcbf2a50019bccf67bc3fbe346b3c5221bbf2854cc2a89271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d576773546e72dcbf2a50019bccf67bc3fbe346b3c5221bbf2854cc2a89271->enter($__internal_50d576773546e72dcbf2a50019bccf67bc3fbe346b3c5221bbf2854cc2a89271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_50d576773546e72dcbf2a50019bccf67bc3fbe346b3c5221bbf2854cc2a89271->leave($__internal_50d576773546e72dcbf2a50019bccf67bc3fbe346b3c5221bbf2854cc2a89271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
