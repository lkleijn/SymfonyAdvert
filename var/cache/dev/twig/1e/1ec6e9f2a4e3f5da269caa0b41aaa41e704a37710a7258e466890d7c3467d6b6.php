<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_69425a1fadca25ff918a93ef1998ab19619185748d5e9df9d972ecffca5daedd extends Twig_Template
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
        $__internal_c771fd450bb943bc1d6dfe566435a0bd3a15daca48fda1b987c0f5e87628ba65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c771fd450bb943bc1d6dfe566435a0bd3a15daca48fda1b987c0f5e87628ba65->enter($__internal_c771fd450bb943bc1d6dfe566435a0bd3a15daca48fda1b987c0f5e87628ba65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c771fd450bb943bc1d6dfe566435a0bd3a15daca48fda1b987c0f5e87628ba65->leave($__internal_c771fd450bb943bc1d6dfe566435a0bd3a15daca48fda1b987c0f5e87628ba65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
