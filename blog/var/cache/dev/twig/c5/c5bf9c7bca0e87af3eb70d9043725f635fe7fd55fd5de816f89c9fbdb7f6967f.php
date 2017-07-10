<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_df442764dfb2deb84ff5970645e1cd1323a45170fbb504a00d88440024632c92 extends Twig_Template
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
        $__internal_544418ee15e1c507bb76685a478a17b809614398c86989eefd1140210034fe53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544418ee15e1c507bb76685a478a17b809614398c86989eefd1140210034fe53->enter($__internal_544418ee15e1c507bb76685a478a17b809614398c86989eefd1140210034fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7bbe104d241f7a6b999fff76c8287cc8208be33d0c8d3e0411b7206a24c3a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbe104d241f7a6b999fff76c8287cc8208be33d0c8d3e0411b7206a24c3a191->enter($__internal_7bbe104d241f7a6b999fff76c8287cc8208be33d0c8d3e0411b7206a24c3a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_544418ee15e1c507bb76685a478a17b809614398c86989eefd1140210034fe53->leave($__internal_544418ee15e1c507bb76685a478a17b809614398c86989eefd1140210034fe53_prof);

        
        $__internal_7bbe104d241f7a6b999fff76c8287cc8208be33d0c8d3e0411b7206a24c3a191->leave($__internal_7bbe104d241f7a6b999fff76c8287cc8208be33d0c8d3e0411b7206a24c3a191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
