<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6d8610b2e18f2c7c57b9a08325309e694360b175f7a93276cba821e97abb2969 extends Twig_Template
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
        $__internal_887421027ab850e0dcee1812912cb98e183ed7a3ec9ea64b9d8adaaa8950123d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887421027ab850e0dcee1812912cb98e183ed7a3ec9ea64b9d8adaaa8950123d->enter($__internal_887421027ab850e0dcee1812912cb98e183ed7a3ec9ea64b9d8adaaa8950123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cb6eaef0b37114f5196fe08c497087e75beb968aacf538f22679d353717208e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6eaef0b37114f5196fe08c497087e75beb968aacf538f22679d353717208e6->enter($__internal_cb6eaef0b37114f5196fe08c497087e75beb968aacf538f22679d353717208e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_887421027ab850e0dcee1812912cb98e183ed7a3ec9ea64b9d8adaaa8950123d->leave($__internal_887421027ab850e0dcee1812912cb98e183ed7a3ec9ea64b9d8adaaa8950123d_prof);

        
        $__internal_cb6eaef0b37114f5196fe08c497087e75beb968aacf538f22679d353717208e6->leave($__internal_cb6eaef0b37114f5196fe08c497087e75beb968aacf538f22679d353717208e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
