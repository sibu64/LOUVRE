<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a747a1f2d2ba9eca43614b2f77b009e21f5a4f385e24bddbb05a6fb274f165e2 extends Twig_Template
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
        $__internal_ac024542a533607dae51f4e898ec3cebe9b02d02fd45459be5abb2cdaf0cd578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac024542a533607dae51f4e898ec3cebe9b02d02fd45459be5abb2cdaf0cd578->enter($__internal_ac024542a533607dae51f4e898ec3cebe9b02d02fd45459be5abb2cdaf0cd578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_8a194296fe79d6e96bcdde8cf7e78e5f26e52b7621482c7d22754479982d3c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a194296fe79d6e96bcdde8cf7e78e5f26e52b7621482c7d22754479982d3c38->enter($__internal_8a194296fe79d6e96bcdde8cf7e78e5f26e52b7621482c7d22754479982d3c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ac024542a533607dae51f4e898ec3cebe9b02d02fd45459be5abb2cdaf0cd578->leave($__internal_ac024542a533607dae51f4e898ec3cebe9b02d02fd45459be5abb2cdaf0cd578_prof);

        
        $__internal_8a194296fe79d6e96bcdde8cf7e78e5f26e52b7621482c7d22754479982d3c38->leave($__internal_8a194296fe79d6e96bcdde8cf7e78e5f26e52b7621482c7d22754479982d3c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
