<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2fa8bdc24db712d8ca359b0108fd6ae5ff036b43cfe87c04879e4a11c415cdd5 extends Twig_Template
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
        $__internal_ea5399488c652ae4dc63d7e758a4d721cb96135ea2b78ef0c37ac2be880847cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5399488c652ae4dc63d7e758a4d721cb96135ea2b78ef0c37ac2be880847cf->enter($__internal_ea5399488c652ae4dc63d7e758a4d721cb96135ea2b78ef0c37ac2be880847cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_689f920e6ad9ccc8a3b0445c194e31f725f0fc5f03ba37133e54b8d38ef6ce45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689f920e6ad9ccc8a3b0445c194e31f725f0fc5f03ba37133e54b8d38ef6ce45->enter($__internal_689f920e6ad9ccc8a3b0445c194e31f725f0fc5f03ba37133e54b8d38ef6ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ea5399488c652ae4dc63d7e758a4d721cb96135ea2b78ef0c37ac2be880847cf->leave($__internal_ea5399488c652ae4dc63d7e758a4d721cb96135ea2b78ef0c37ac2be880847cf_prof);

        
        $__internal_689f920e6ad9ccc8a3b0445c194e31f725f0fc5f03ba37133e54b8d38ef6ce45->leave($__internal_689f920e6ad9ccc8a3b0445c194e31f725f0fc5f03ba37133e54b8d38ef6ce45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
