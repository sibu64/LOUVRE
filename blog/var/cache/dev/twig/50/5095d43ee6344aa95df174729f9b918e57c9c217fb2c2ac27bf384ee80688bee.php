<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a6dee838f60a3ba4808bed528f3e24d81d2ae2c9a18715aa3a97ee45e905b300 extends Twig_Template
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
        $__internal_56ba8f9dde396e6d10dae894a7f9a49f8a96f24415080505ff6cd675274b2d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ba8f9dde396e6d10dae894a7f9a49f8a96f24415080505ff6cd675274b2d90->enter($__internal_56ba8f9dde396e6d10dae894a7f9a49f8a96f24415080505ff6cd675274b2d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_822949b2518a135f39dbd98334f86210bce15fbd7d87876c1954121fc4b6398f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822949b2518a135f39dbd98334f86210bce15fbd7d87876c1954121fc4b6398f->enter($__internal_822949b2518a135f39dbd98334f86210bce15fbd7d87876c1954121fc4b6398f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_56ba8f9dde396e6d10dae894a7f9a49f8a96f24415080505ff6cd675274b2d90->leave($__internal_56ba8f9dde396e6d10dae894a7f9a49f8a96f24415080505ff6cd675274b2d90_prof);

        
        $__internal_822949b2518a135f39dbd98334f86210bce15fbd7d87876c1954121fc4b6398f->leave($__internal_822949b2518a135f39dbd98334f86210bce15fbd7d87876c1954121fc4b6398f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
