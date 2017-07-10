<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e7664091dbeb026860c20aaa0dd04446347e603959e83c7d8371d7d614c35627 extends Twig_Template
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
        $__internal_3664487738cae78257f6a6a0843edf3c666f6d9ebaa58add223007c699d39af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3664487738cae78257f6a6a0843edf3c666f6d9ebaa58add223007c699d39af7->enter($__internal_3664487738cae78257f6a6a0843edf3c666f6d9ebaa58add223007c699d39af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_05dfa2a4d7d4e480f659794a975ab1aac675d901a75799406e628b0dbdd0970d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dfa2a4d7d4e480f659794a975ab1aac675d901a75799406e628b0dbdd0970d->enter($__internal_05dfa2a4d7d4e480f659794a975ab1aac675d901a75799406e628b0dbdd0970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3664487738cae78257f6a6a0843edf3c666f6d9ebaa58add223007c699d39af7->leave($__internal_3664487738cae78257f6a6a0843edf3c666f6d9ebaa58add223007c699d39af7_prof);

        
        $__internal_05dfa2a4d7d4e480f659794a975ab1aac675d901a75799406e628b0dbdd0970d->leave($__internal_05dfa2a4d7d4e480f659794a975ab1aac675d901a75799406e628b0dbdd0970d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
