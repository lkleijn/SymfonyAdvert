<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8fce62635b3b9b5fecc92cb60a24ef2e243fed49f3b028f6a06ecf9d4c2d5ee2 extends Twig_Template
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
        $__internal_21c1342a517b8c7af6cc4c4f135a9f21a0ae77e34daf48bd6faa8d0647ec4170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c1342a517b8c7af6cc4c4f135a9f21a0ae77e34daf48bd6faa8d0647ec4170->enter($__internal_21c1342a517b8c7af6cc4c4f135a9f21a0ae77e34daf48bd6faa8d0647ec4170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_21c1342a517b8c7af6cc4c4f135a9f21a0ae77e34daf48bd6faa8d0647ec4170->leave($__internal_21c1342a517b8c7af6cc4c4f135a9f21a0ae77e34daf48bd6faa8d0647ec4170_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
