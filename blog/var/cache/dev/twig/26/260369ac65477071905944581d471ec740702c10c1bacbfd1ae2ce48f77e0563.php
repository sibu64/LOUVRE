<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3da9e57f763202da27290915cf5bc201b325bbd0994b417052f1e50bab71383c extends Twig_Template
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
        $__internal_16d55dfb0186d405d5aa0a161ffe897710e93231033cd4883311c333932e4740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d55dfb0186d405d5aa0a161ffe897710e93231033cd4883311c333932e4740->enter($__internal_16d55dfb0186d405d5aa0a161ffe897710e93231033cd4883311c333932e4740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fbc1b37ab0fb3e23d3d1540c72553f952a099c63663e28ac57230ae4061447c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc1b37ab0fb3e23d3d1540c72553f952a099c63663e28ac57230ae4061447c2->enter($__internal_fbc1b37ab0fb3e23d3d1540c72553f952a099c63663e28ac57230ae4061447c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_16d55dfb0186d405d5aa0a161ffe897710e93231033cd4883311c333932e4740->leave($__internal_16d55dfb0186d405d5aa0a161ffe897710e93231033cd4883311c333932e4740_prof);

        
        $__internal_fbc1b37ab0fb3e23d3d1540c72553f952a099c63663e28ac57230ae4061447c2->leave($__internal_fbc1b37ab0fb3e23d3d1540c72553f952a099c63663e28ac57230ae4061447c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
