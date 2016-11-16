<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ea44002553dfcb308561e2487f58459f53f1cd2ea1745150595cada521931998 extends Twig_Template
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
        $__internal_08fcbf82e6ceefb95726a171beaa9ad9303b22423b429f9bf8b873abd1ba6485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fcbf82e6ceefb95726a171beaa9ad9303b22423b429f9bf8b873abd1ba6485->enter($__internal_08fcbf82e6ceefb95726a171beaa9ad9303b22423b429f9bf8b873abd1ba6485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_08fcbf82e6ceefb95726a171beaa9ad9303b22423b429f9bf8b873abd1ba6485->leave($__internal_08fcbf82e6ceefb95726a171beaa9ad9303b22423b429f9bf8b873abd1ba6485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
