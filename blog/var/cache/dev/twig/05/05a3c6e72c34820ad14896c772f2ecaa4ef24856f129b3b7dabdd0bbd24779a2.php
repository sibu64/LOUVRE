<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_711796232b6d127c6463711734c980a8f914f18c2cd6f78cc396ae0ee33d4412 extends Twig_Template
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
        $__internal_5777523d7424908806fa8889f4632e36754128565e8d1fc6671b0ae1cae6af8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5777523d7424908806fa8889f4632e36754128565e8d1fc6671b0ae1cae6af8a->enter($__internal_5777523d7424908806fa8889f4632e36754128565e8d1fc6671b0ae1cae6af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d7336557df85ccd0c7d31b01433618d2dd62a51cbc0d0f82b929576aa78e1460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7336557df85ccd0c7d31b01433618d2dd62a51cbc0d0f82b929576aa78e1460->enter($__internal_d7336557df85ccd0c7d31b01433618d2dd62a51cbc0d0f82b929576aa78e1460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5777523d7424908806fa8889f4632e36754128565e8d1fc6671b0ae1cae6af8a->leave($__internal_5777523d7424908806fa8889f4632e36754128565e8d1fc6671b0ae1cae6af8a_prof);

        
        $__internal_d7336557df85ccd0c7d31b01433618d2dd62a51cbc0d0f82b929576aa78e1460->leave($__internal_d7336557df85ccd0c7d31b01433618d2dd62a51cbc0d0f82b929576aa78e1460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
