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
        $__internal_7cf906afd7d4c9258d77809dfa4d6788b7c7ee34a85acd2a5843d7954ccab07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf906afd7d4c9258d77809dfa4d6788b7c7ee34a85acd2a5843d7954ccab07d->enter($__internal_7cf906afd7d4c9258d77809dfa4d6788b7c7ee34a85acd2a5843d7954ccab07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7cf906afd7d4c9258d77809dfa4d6788b7c7ee34a85acd2a5843d7954ccab07d->leave($__internal_7cf906afd7d4c9258d77809dfa4d6788b7c7ee34a85acd2a5843d7954ccab07d_prof);

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
