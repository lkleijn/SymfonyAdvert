<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e5a02e267153a30f889bfcfadcc2f2215e7c78376a8375ae00641b550e4346ff extends Twig_Template
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
        $__internal_efdbcb6fcc40fdbf49a5e4cd4afe23f7f609dfc746932e4effbc8009390bda8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdbcb6fcc40fdbf49a5e4cd4afe23f7f609dfc746932e4effbc8009390bda8b->enter($__internal_efdbcb6fcc40fdbf49a5e4cd4afe23f7f609dfc746932e4effbc8009390bda8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_efdbcb6fcc40fdbf49a5e4cd4afe23f7f609dfc746932e4effbc8009390bda8b->leave($__internal_efdbcb6fcc40fdbf49a5e4cd4afe23f7f609dfc746932e4effbc8009390bda8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
