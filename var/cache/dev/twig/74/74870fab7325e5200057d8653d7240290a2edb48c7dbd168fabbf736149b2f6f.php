<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_00e769470ebced0b6f05cac163f3d8f0aa134364788d59f509a859319697a806 extends Twig_Template
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
        $__internal_642c10d4758385b9e4f7323600f87ff6c057a00be0b1a7dc2a7de0ff7cb1594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642c10d4758385b9e4f7323600f87ff6c057a00be0b1a7dc2a7de0ff7cb1594e->enter($__internal_642c10d4758385b9e4f7323600f87ff6c057a00be0b1a7dc2a7de0ff7cb1594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_642c10d4758385b9e4f7323600f87ff6c057a00be0b1a7dc2a7de0ff7cb1594e->leave($__internal_642c10d4758385b9e4f7323600f87ff6c057a00be0b1a7dc2a7de0ff7cb1594e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
