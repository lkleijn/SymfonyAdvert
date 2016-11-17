<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5fb99f1091f8e5902540a1630de20ac18ae4ddb5609042fcd4f37ec50637af4a extends Twig_Template
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
        $__internal_62ca8ec7b49ab6dedb831bb1b934cfe08c0c6ced0303eea7486e172b56f6f9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ca8ec7b49ab6dedb831bb1b934cfe08c0c6ced0303eea7486e172b56f6f9ea->enter($__internal_62ca8ec7b49ab6dedb831bb1b934cfe08c0c6ced0303eea7486e172b56f6f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_62ca8ec7b49ab6dedb831bb1b934cfe08c0c6ced0303eea7486e172b56f6f9ea->leave($__internal_62ca8ec7b49ab6dedb831bb1b934cfe08c0c6ced0303eea7486e172b56f6f9ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
