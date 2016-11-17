<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d0531453a9b99cfb0a1dd9420be92dfd7c489ccb5a9a4e72cc4cd59d2ffd2976 extends Twig_Template
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
        $__internal_60a230f4960f8afd7a48f5bd58c0fc46d8bc227acf639f2d6533e1c8b3742633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a230f4960f8afd7a48f5bd58c0fc46d8bc227acf639f2d6533e1c8b3742633->enter($__internal_60a230f4960f8afd7a48f5bd58c0fc46d8bc227acf639f2d6533e1c8b3742633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_60a230f4960f8afd7a48f5bd58c0fc46d8bc227acf639f2d6533e1c8b3742633->leave($__internal_60a230f4960f8afd7a48f5bd58c0fc46d8bc227acf639f2d6533e1c8b3742633_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
