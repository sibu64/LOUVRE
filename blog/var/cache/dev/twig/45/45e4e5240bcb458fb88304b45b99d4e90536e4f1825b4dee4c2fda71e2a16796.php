<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_445ff1f5bc4f4d58b47b58125845336b439c21c62bf92490af0cda8c7133a284 extends Twig_Template
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
        $__internal_1d801f4cf82f71253585c4a628769e57c5cdaa597ffe021c7351ae47c97fc367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d801f4cf82f71253585c4a628769e57c5cdaa597ffe021c7351ae47c97fc367->enter($__internal_1d801f4cf82f71253585c4a628769e57c5cdaa597ffe021c7351ae47c97fc367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2f41a75709eb8ac18d4c21f9291b31e3ad92b38b7f19795e15aca248b3c45e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f41a75709eb8ac18d4c21f9291b31e3ad92b38b7f19795e15aca248b3c45e42->enter($__internal_2f41a75709eb8ac18d4c21f9291b31e3ad92b38b7f19795e15aca248b3c45e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1d801f4cf82f71253585c4a628769e57c5cdaa597ffe021c7351ae47c97fc367->leave($__internal_1d801f4cf82f71253585c4a628769e57c5cdaa597ffe021c7351ae47c97fc367_prof);

        
        $__internal_2f41a75709eb8ac18d4c21f9291b31e3ad92b38b7f19795e15aca248b3c45e42->leave($__internal_2f41a75709eb8ac18d4c21f9291b31e3ad92b38b7f19795e15aca248b3c45e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
