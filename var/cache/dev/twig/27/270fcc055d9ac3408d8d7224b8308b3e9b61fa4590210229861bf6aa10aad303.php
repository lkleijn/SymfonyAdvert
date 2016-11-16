<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d644c7d281a6b7130fdac141a6318de144677f86e6521bb243786e3aed0c0ce6 extends Twig_Template
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
        $__internal_b91e83d391ad711e1f7d9dd2d0c79f21cd4738e0bf25593a2cce3c03cdbfad4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91e83d391ad711e1f7d9dd2d0c79f21cd4738e0bf25593a2cce3c03cdbfad4b->enter($__internal_b91e83d391ad711e1f7d9dd2d0c79f21cd4738e0bf25593a2cce3c03cdbfad4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b91e83d391ad711e1f7d9dd2d0c79f21cd4738e0bf25593a2cce3c03cdbfad4b->leave($__internal_b91e83d391ad711e1f7d9dd2d0c79f21cd4738e0bf25593a2cce3c03cdbfad4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
