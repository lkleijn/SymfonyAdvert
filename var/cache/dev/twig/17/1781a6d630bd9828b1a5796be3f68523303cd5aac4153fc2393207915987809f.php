<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_63cc715ae2e9ed540f81712b5b444f574c09431396b1baf0560e1f5c721ab666 extends Twig_Template
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
        $__internal_f22acfb9f6070446c48897ba458d2af0f274c2bf5e0d48bf15fbd37c37dfe150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22acfb9f6070446c48897ba458d2af0f274c2bf5e0d48bf15fbd37c37dfe150->enter($__internal_f22acfb9f6070446c48897ba458d2af0f274c2bf5e0d48bf15fbd37c37dfe150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f22acfb9f6070446c48897ba458d2af0f274c2bf5e0d48bf15fbd37c37dfe150->leave($__internal_f22acfb9f6070446c48897ba458d2af0f274c2bf5e0d48bf15fbd37c37dfe150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
