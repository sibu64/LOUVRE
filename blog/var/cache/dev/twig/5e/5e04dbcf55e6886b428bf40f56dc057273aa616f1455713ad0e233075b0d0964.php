<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8c30815eaab7c224a6e363eab5f76a9d8c85c8b59e3ce2e223c242e9c9cde08 extends Twig_Template
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
        $__internal_a341cf32e7aa4890da2679911e083b92c6c1c1dfc434620b4b69f5cd25154ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a341cf32e7aa4890da2679911e083b92c6c1c1dfc434620b4b69f5cd25154ad5->enter($__internal_a341cf32e7aa4890da2679911e083b92c6c1c1dfc434620b4b69f5cd25154ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_544c9cfc69bc7c6d131b82d3bc64c65413436d9070acbc232ae254f2846dbf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544c9cfc69bc7c6d131b82d3bc64c65413436d9070acbc232ae254f2846dbf4d->enter($__internal_544c9cfc69bc7c6d131b82d3bc64c65413436d9070acbc232ae254f2846dbf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a341cf32e7aa4890da2679911e083b92c6c1c1dfc434620b4b69f5cd25154ad5->leave($__internal_a341cf32e7aa4890da2679911e083b92c6c1c1dfc434620b4b69f5cd25154ad5_prof);

        
        $__internal_544c9cfc69bc7c6d131b82d3bc64c65413436d9070acbc232ae254f2846dbf4d->leave($__internal_544c9cfc69bc7c6d131b82d3bc64c65413436d9070acbc232ae254f2846dbf4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
