<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9e6eb5a50bdf6e46de95a2d8e526c098f321fc94be2f929817c18318d1a51ef0 extends Twig_Template
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
        $__internal_6425849866bea7a7cea9ccf92420ff06fa8a52729fd4aa5d7688eb59e25ca7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6425849866bea7a7cea9ccf92420ff06fa8a52729fd4aa5d7688eb59e25ca7a7->enter($__internal_6425849866bea7a7cea9ccf92420ff06fa8a52729fd4aa5d7688eb59e25ca7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_eb1bcf281c308ce7fe8a377dabe07792f06c0427fe15ab71af7211c095cb59de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1bcf281c308ce7fe8a377dabe07792f06c0427fe15ab71af7211c095cb59de->enter($__internal_eb1bcf281c308ce7fe8a377dabe07792f06c0427fe15ab71af7211c095cb59de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6425849866bea7a7cea9ccf92420ff06fa8a52729fd4aa5d7688eb59e25ca7a7->leave($__internal_6425849866bea7a7cea9ccf92420ff06fa8a52729fd4aa5d7688eb59e25ca7a7_prof);

        
        $__internal_eb1bcf281c308ce7fe8a377dabe07792f06c0427fe15ab71af7211c095cb59de->leave($__internal_eb1bcf281c308ce7fe8a377dabe07792f06c0427fe15ab71af7211c095cb59de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
