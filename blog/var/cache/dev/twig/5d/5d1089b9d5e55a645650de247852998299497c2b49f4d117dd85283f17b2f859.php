<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8ea217db59889de9444b02b601785febc4781444531f7c6ec36736d5004d8570 extends Twig_Template
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
        $__internal_764c7cacd70d4f5fdef547cc7ad7c5a3089a32ce888520b2af5c239b1e589188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764c7cacd70d4f5fdef547cc7ad7c5a3089a32ce888520b2af5c239b1e589188->enter($__internal_764c7cacd70d4f5fdef547cc7ad7c5a3089a32ce888520b2af5c239b1e589188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dff18c3c28c455dd46cea92ca758dea88c0c1055ac42b62016c0491e9e593fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff18c3c28c455dd46cea92ca758dea88c0c1055ac42b62016c0491e9e593fa5->enter($__internal_dff18c3c28c455dd46cea92ca758dea88c0c1055ac42b62016c0491e9e593fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_764c7cacd70d4f5fdef547cc7ad7c5a3089a32ce888520b2af5c239b1e589188->leave($__internal_764c7cacd70d4f5fdef547cc7ad7c5a3089a32ce888520b2af5c239b1e589188_prof);

        
        $__internal_dff18c3c28c455dd46cea92ca758dea88c0c1055ac42b62016c0491e9e593fa5->leave($__internal_dff18c3c28c455dd46cea92ca758dea88c0c1055ac42b62016c0491e9e593fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
