<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_994dea83eb4e4e32aca28ddbe1ed57616722915e067b075924a296a4ecd22849 extends Twig_Template
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
        $__internal_26d39a44b30dec32e8e6ffcc65a4ac7530a40c004becb16c141e51bf94ca41e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d39a44b30dec32e8e6ffcc65a4ac7530a40c004becb16c141e51bf94ca41e0->enter($__internal_26d39a44b30dec32e8e6ffcc65a4ac7530a40c004becb16c141e51bf94ca41e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e7f14285aef75e42bf6060becfa619beb5e2c8e21749baaa40868809a9f5cd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f14285aef75e42bf6060becfa619beb5e2c8e21749baaa40868809a9f5cd26->enter($__internal_e7f14285aef75e42bf6060becfa619beb5e2c8e21749baaa40868809a9f5cd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_26d39a44b30dec32e8e6ffcc65a4ac7530a40c004becb16c141e51bf94ca41e0->leave($__internal_26d39a44b30dec32e8e6ffcc65a4ac7530a40c004becb16c141e51bf94ca41e0_prof);

        
        $__internal_e7f14285aef75e42bf6060becfa619beb5e2c8e21749baaa40868809a9f5cd26->leave($__internal_e7f14285aef75e42bf6060becfa619beb5e2c8e21749baaa40868809a9f5cd26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
