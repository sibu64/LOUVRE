<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d4b70286e1bd89c0e1b275f1b75575aa003d9b1c54b0ff5ed3ebb7e692e7cf2 extends Twig_Template
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
        $__internal_cfd8f978931a923e98230cd3cf073a82bc008d948fa04420ea7e52a82c9fea15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd8f978931a923e98230cd3cf073a82bc008d948fa04420ea7e52a82c9fea15->enter($__internal_cfd8f978931a923e98230cd3cf073a82bc008d948fa04420ea7e52a82c9fea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4393dc195e17c1658f2957fe4a167e4b9787f481d880bb7285aad10a565a71be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4393dc195e17c1658f2957fe4a167e4b9787f481d880bb7285aad10a565a71be->enter($__internal_4393dc195e17c1658f2957fe4a167e4b9787f481d880bb7285aad10a565a71be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cfd8f978931a923e98230cd3cf073a82bc008d948fa04420ea7e52a82c9fea15->leave($__internal_cfd8f978931a923e98230cd3cf073a82bc008d948fa04420ea7e52a82c9fea15_prof);

        
        $__internal_4393dc195e17c1658f2957fe4a167e4b9787f481d880bb7285aad10a565a71be->leave($__internal_4393dc195e17c1658f2957fe4a167e4b9787f481d880bb7285aad10a565a71be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
