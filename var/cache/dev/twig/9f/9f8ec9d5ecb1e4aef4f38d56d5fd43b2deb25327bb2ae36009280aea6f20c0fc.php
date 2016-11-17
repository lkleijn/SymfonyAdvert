<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_22edd4e5b87056d7d2158cf430ae4177e20f0a1e3ef67582fbe03088a5f86436 extends Twig_Template
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
        $__internal_aec5b6c24ce387cdfdd0009f30499fab2539bbd260c7010ee10cf72cbc042bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec5b6c24ce387cdfdd0009f30499fab2539bbd260c7010ee10cf72cbc042bae->enter($__internal_aec5b6c24ce387cdfdd0009f30499fab2539bbd260c7010ee10cf72cbc042bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_aec5b6c24ce387cdfdd0009f30499fab2539bbd260c7010ee10cf72cbc042bae->leave($__internal_aec5b6c24ce387cdfdd0009f30499fab2539bbd260c7010ee10cf72cbc042bae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
