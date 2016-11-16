<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9a469ac754f7c41567e9fd1c1be443edb2c49b7b0c5800a7d2aa066ab8c3f946 extends Twig_Template
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
        $__internal_3904dccd588818c91e6922bc074fa4c534e8ee67d63fc4aa7f14b5bf1d8d6f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3904dccd588818c91e6922bc074fa4c534e8ee67d63fc4aa7f14b5bf1d8d6f4e->enter($__internal_3904dccd588818c91e6922bc074fa4c534e8ee67d63fc4aa7f14b5bf1d8d6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3904dccd588818c91e6922bc074fa4c534e8ee67d63fc4aa7f14b5bf1d8d6f4e->leave($__internal_3904dccd588818c91e6922bc074fa4c534e8ee67d63fc4aa7f14b5bf1d8d6f4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
