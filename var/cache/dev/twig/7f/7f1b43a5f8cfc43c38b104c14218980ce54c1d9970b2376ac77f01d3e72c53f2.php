<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9197fc73273f2c8937bca46b2c378911447e4751a664551d61044567085632d6 extends Twig_Template
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
        $__internal_0206f2dc2c9764cb895245756f8d265e0bb67090c5a42c1f7ec34935b1378b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0206f2dc2c9764cb895245756f8d265e0bb67090c5a42c1f7ec34935b1378b6b->enter($__internal_0206f2dc2c9764cb895245756f8d265e0bb67090c5a42c1f7ec34935b1378b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0206f2dc2c9764cb895245756f8d265e0bb67090c5a42c1f7ec34935b1378b6b->leave($__internal_0206f2dc2c9764cb895245756f8d265e0bb67090c5a42c1f7ec34935b1378b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
