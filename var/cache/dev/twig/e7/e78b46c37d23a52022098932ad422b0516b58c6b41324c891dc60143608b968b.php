<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3ea6e611d4fc94c66177d84bc56704961551e057279f9187ece6cebbdba6c0b7 extends Twig_Template
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
        $__internal_ff1fdc63133d3f5a6022d0bb4e6e6268ad02adaf1bff4286b94a76c243255b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1fdc63133d3f5a6022d0bb4e6e6268ad02adaf1bff4286b94a76c243255b21->enter($__internal_ff1fdc63133d3f5a6022d0bb4e6e6268ad02adaf1bff4286b94a76c243255b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ff1fdc63133d3f5a6022d0bb4e6e6268ad02adaf1bff4286b94a76c243255b21->leave($__internal_ff1fdc63133d3f5a6022d0bb4e6e6268ad02adaf1bff4286b94a76c243255b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
