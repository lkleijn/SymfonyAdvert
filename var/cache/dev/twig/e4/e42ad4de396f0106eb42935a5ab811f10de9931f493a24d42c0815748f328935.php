<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b31d87c29d697995335550359cdd22550ea6f7bfba2a7718136ec1fd3019d34c extends Twig_Template
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
        $__internal_9dd3345fddefaa3f4ac6f889a35439917894234a54d073e99051b9d2e60d44f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd3345fddefaa3f4ac6f889a35439917894234a54d073e99051b9d2e60d44f8->enter($__internal_9dd3345fddefaa3f4ac6f889a35439917894234a54d073e99051b9d2e60d44f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9dd3345fddefaa3f4ac6f889a35439917894234a54d073e99051b9d2e60d44f8->leave($__internal_9dd3345fddefaa3f4ac6f889a35439917894234a54d073e99051b9d2e60d44f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
