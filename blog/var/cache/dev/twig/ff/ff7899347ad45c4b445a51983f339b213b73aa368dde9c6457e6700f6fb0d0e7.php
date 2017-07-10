<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_35b8382618789e214e987a123b7670bfc6cc0409f2e3f47bd0b9c6abf581fb83 extends Twig_Template
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
        $__internal_b5f15142acc8b3ce1c4832d28dfd2098e5679c674332bf2b3b87c832949db33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f15142acc8b3ce1c4832d28dfd2098e5679c674332bf2b3b87c832949db33d->enter($__internal_b5f15142acc8b3ce1c4832d28dfd2098e5679c674332bf2b3b87c832949db33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2627d0ba1f4c0f285bf6ec78d78b2155ffced65d2b4c0d2ba7bef3613cc46dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2627d0ba1f4c0f285bf6ec78d78b2155ffced65d2b4c0d2ba7bef3613cc46dfc->enter($__internal_2627d0ba1f4c0f285bf6ec78d78b2155ffced65d2b4c0d2ba7bef3613cc46dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b5f15142acc8b3ce1c4832d28dfd2098e5679c674332bf2b3b87c832949db33d->leave($__internal_b5f15142acc8b3ce1c4832d28dfd2098e5679c674332bf2b3b87c832949db33d_prof);

        
        $__internal_2627d0ba1f4c0f285bf6ec78d78b2155ffced65d2b4c0d2ba7bef3613cc46dfc->leave($__internal_2627d0ba1f4c0f285bf6ec78d78b2155ffced65d2b4c0d2ba7bef3613cc46dfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
