<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e886713e7268441b649cc38aa73a24e4187940cf877686ad15538d5edda62796 extends Twig_Template
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
        $__internal_329b0dac16f1d50d6d4367fb15fb4be9b61cb84f37c2c1fe3e89e94aa6c6f558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329b0dac16f1d50d6d4367fb15fb4be9b61cb84f37c2c1fe3e89e94aa6c6f558->enter($__internal_329b0dac16f1d50d6d4367fb15fb4be9b61cb84f37c2c1fe3e89e94aa6c6f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_329b0dac16f1d50d6d4367fb15fb4be9b61cb84f37c2c1fe3e89e94aa6c6f558->leave($__internal_329b0dac16f1d50d6d4367fb15fb4be9b61cb84f37c2c1fe3e89e94aa6c6f558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
