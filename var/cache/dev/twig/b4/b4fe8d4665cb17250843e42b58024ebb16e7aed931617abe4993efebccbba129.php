<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bca5cf6ddf11805bd8741336323808617737f8a05dc22bd4155eb567850a4f52 extends Twig_Template
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
        $__internal_eb854ff7b1a1360d8270505aff4e7502ba06908aa0ad58d1a7cf2f68332bc85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb854ff7b1a1360d8270505aff4e7502ba06908aa0ad58d1a7cf2f68332bc85e->enter($__internal_eb854ff7b1a1360d8270505aff4e7502ba06908aa0ad58d1a7cf2f68332bc85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eb854ff7b1a1360d8270505aff4e7502ba06908aa0ad58d1a7cf2f68332bc85e->leave($__internal_eb854ff7b1a1360d8270505aff4e7502ba06908aa0ad58d1a7cf2f68332bc85e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
