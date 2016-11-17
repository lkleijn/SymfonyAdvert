<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_acb8ce091fc75cb4e6345c59501f828f88040c42d594bce265b8c0abf119ddbb extends Twig_Template
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
        $__internal_e05a7f04059e0e5f19ee315b91717323c5a61c5028b33cb6dc7d8cace2451cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05a7f04059e0e5f19ee315b91717323c5a61c5028b33cb6dc7d8cace2451cbc->enter($__internal_e05a7f04059e0e5f19ee315b91717323c5a61c5028b33cb6dc7d8cace2451cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e05a7f04059e0e5f19ee315b91717323c5a61c5028b33cb6dc7d8cace2451cbc->leave($__internal_e05a7f04059e0e5f19ee315b91717323c5a61c5028b33cb6dc7d8cace2451cbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
