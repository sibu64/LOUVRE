<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_104a7eb2278866db56b1933dcaa22a6cc6a35ddafcee184294e85621775fa5cc extends Twig_Template
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
        $__internal_2d3f782cf8af0b2ce3878930c447d0dec9fb8c1b826829e99c54879129235396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3f782cf8af0b2ce3878930c447d0dec9fb8c1b826829e99c54879129235396->enter($__internal_2d3f782cf8af0b2ce3878930c447d0dec9fb8c1b826829e99c54879129235396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_c3a9818ca1f66b775c3831f365705a6ac9db1c3a575c677cdd0e0e9b4d28d5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a9818ca1f66b775c3831f365705a6ac9db1c3a575c677cdd0e0e9b4d28d5c5->enter($__internal_c3a9818ca1f66b775c3831f365705a6ac9db1c3a575c677cdd0e0e9b4d28d5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2d3f782cf8af0b2ce3878930c447d0dec9fb8c1b826829e99c54879129235396->leave($__internal_2d3f782cf8af0b2ce3878930c447d0dec9fb8c1b826829e99c54879129235396_prof);

        
        $__internal_c3a9818ca1f66b775c3831f365705a6ac9db1c3a575c677cdd0e0e9b4d28d5c5->leave($__internal_c3a9818ca1f66b775c3831f365705a6ac9db1c3a575c677cdd0e0e9b4d28d5c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
