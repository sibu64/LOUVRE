<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f3e10be53e3f534f3f0644320cf3f694a05cff1c8dfb87fbad0201a9e00dfdb5 extends Twig_Template
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
        $__internal_771c91c9ab4624287db6f1b732ef0ab335997cab8c6e39f20edb4daec8ad20de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771c91c9ab4624287db6f1b732ef0ab335997cab8c6e39f20edb4daec8ad20de->enter($__internal_771c91c9ab4624287db6f1b732ef0ab335997cab8c6e39f20edb4daec8ad20de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a467d32a343d110939936285b283168ed909fcc050f1eaee08038e1628c290fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a467d32a343d110939936285b283168ed909fcc050f1eaee08038e1628c290fe->enter($__internal_a467d32a343d110939936285b283168ed909fcc050f1eaee08038e1628c290fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_771c91c9ab4624287db6f1b732ef0ab335997cab8c6e39f20edb4daec8ad20de->leave($__internal_771c91c9ab4624287db6f1b732ef0ab335997cab8c6e39f20edb4daec8ad20de_prof);

        
        $__internal_a467d32a343d110939936285b283168ed909fcc050f1eaee08038e1628c290fe->leave($__internal_a467d32a343d110939936285b283168ed909fcc050f1eaee08038e1628c290fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
