<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d10afe707571e86edb5f1d37773e57b82b7c6d11e4de573702acd19f20a80b2c extends Twig_Template
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
        $__internal_31465a67ad29f09949c32fbada0b6cc1f97cc6084d6ac56a533914ce78aab86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31465a67ad29f09949c32fbada0b6cc1f97cc6084d6ac56a533914ce78aab86a->enter($__internal_31465a67ad29f09949c32fbada0b6cc1f97cc6084d6ac56a533914ce78aab86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8ea965841fc0c934b774dc0023582acb3ab9926579e4eedfe958bd9d718f6dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea965841fc0c934b774dc0023582acb3ab9926579e4eedfe958bd9d718f6dbe->enter($__internal_8ea965841fc0c934b774dc0023582acb3ab9926579e4eedfe958bd9d718f6dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_31465a67ad29f09949c32fbada0b6cc1f97cc6084d6ac56a533914ce78aab86a->leave($__internal_31465a67ad29f09949c32fbada0b6cc1f97cc6084d6ac56a533914ce78aab86a_prof);

        
        $__internal_8ea965841fc0c934b774dc0023582acb3ab9926579e4eedfe958bd9d718f6dbe->leave($__internal_8ea965841fc0c934b774dc0023582acb3ab9926579e4eedfe958bd9d718f6dbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
