<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_825e7e4a419d7dcee237c5f4be694183c93205ce0266877dc2a728f67071f7eb extends Twig_Template
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
        $__internal_fa94bff929b3fac1e2320471c799bfde4ebe48d0766e3c81d96a040f9b9612ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa94bff929b3fac1e2320471c799bfde4ebe48d0766e3c81d96a040f9b9612ac->enter($__internal_fa94bff929b3fac1e2320471c799bfde4ebe48d0766e3c81d96a040f9b9612ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9a10ca31e81dbbfe56ee7b221437b9732b40fefc4524ff21173c9a8886c6c867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10ca31e81dbbfe56ee7b221437b9732b40fefc4524ff21173c9a8886c6c867->enter($__internal_9a10ca31e81dbbfe56ee7b221437b9732b40fefc4524ff21173c9a8886c6c867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fa94bff929b3fac1e2320471c799bfde4ebe48d0766e3c81d96a040f9b9612ac->leave($__internal_fa94bff929b3fac1e2320471c799bfde4ebe48d0766e3c81d96a040f9b9612ac_prof);

        
        $__internal_9a10ca31e81dbbfe56ee7b221437b9732b40fefc4524ff21173c9a8886c6c867->leave($__internal_9a10ca31e81dbbfe56ee7b221437b9732b40fefc4524ff21173c9a8886c6c867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
