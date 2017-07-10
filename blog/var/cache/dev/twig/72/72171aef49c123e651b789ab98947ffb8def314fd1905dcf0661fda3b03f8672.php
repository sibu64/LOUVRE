<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d1378bb471f7a44a9dcb3b4cef610632fef94484cfba97c32ef0ae06d56eabee extends Twig_Template
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
        $__internal_b50c5631537f7ff27cf7886c3a199e22a82eba8a2328dee8a80b9497dae34ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50c5631537f7ff27cf7886c3a199e22a82eba8a2328dee8a80b9497dae34ab0->enter($__internal_b50c5631537f7ff27cf7886c3a199e22a82eba8a2328dee8a80b9497dae34ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d116786b4bc22d22a1be83d55accada4ce72443f83197200d5fcb6d42ab8a32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d116786b4bc22d22a1be83d55accada4ce72443f83197200d5fcb6d42ab8a32e->enter($__internal_d116786b4bc22d22a1be83d55accada4ce72443f83197200d5fcb6d42ab8a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b50c5631537f7ff27cf7886c3a199e22a82eba8a2328dee8a80b9497dae34ab0->leave($__internal_b50c5631537f7ff27cf7886c3a199e22a82eba8a2328dee8a80b9497dae34ab0_prof);

        
        $__internal_d116786b4bc22d22a1be83d55accada4ce72443f83197200d5fcb6d42ab8a32e->leave($__internal_d116786b4bc22d22a1be83d55accada4ce72443f83197200d5fcb6d42ab8a32e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
