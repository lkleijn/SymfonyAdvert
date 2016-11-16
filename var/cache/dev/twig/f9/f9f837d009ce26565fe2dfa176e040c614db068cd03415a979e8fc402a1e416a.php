<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a12ae2a8dc1a6b56c116b3577786dbd779950178c12a2267947bec0b3b01eec9 extends Twig_Template
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
        $__internal_1fe6bb5e6b5f7148f6b7f839e0d85a13e1096f4600a018a4c21c28db8d5fb16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe6bb5e6b5f7148f6b7f839e0d85a13e1096f4600a018a4c21c28db8d5fb16f->enter($__internal_1fe6bb5e6b5f7148f6b7f839e0d85a13e1096f4600a018a4c21c28db8d5fb16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1fe6bb5e6b5f7148f6b7f839e0d85a13e1096f4600a018a4c21c28db8d5fb16f->leave($__internal_1fe6bb5e6b5f7148f6b7f839e0d85a13e1096f4600a018a4c21c28db8d5fb16f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
