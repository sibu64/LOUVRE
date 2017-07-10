<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e06f5f9fe4b090731b559b8f1100c086850027a4d69ccf4b9f8bbaa1d48163d7 extends Twig_Template
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
        $__internal_0693bda72edd9815d0d84ae276931203d38d1b3ffdb6299f44a31b5d0ba1361b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0693bda72edd9815d0d84ae276931203d38d1b3ffdb6299f44a31b5d0ba1361b->enter($__internal_0693bda72edd9815d0d84ae276931203d38d1b3ffdb6299f44a31b5d0ba1361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b0b70e9fed970ab5751079f8e25d319e8c2acfe6b731239b722f4f66fc07caa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b70e9fed970ab5751079f8e25d319e8c2acfe6b731239b722f4f66fc07caa1->enter($__internal_b0b70e9fed970ab5751079f8e25d319e8c2acfe6b731239b722f4f66fc07caa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0693bda72edd9815d0d84ae276931203d38d1b3ffdb6299f44a31b5d0ba1361b->leave($__internal_0693bda72edd9815d0d84ae276931203d38d1b3ffdb6299f44a31b5d0ba1361b_prof);

        
        $__internal_b0b70e9fed970ab5751079f8e25d319e8c2acfe6b731239b722f4f66fc07caa1->leave($__internal_b0b70e9fed970ab5751079f8e25d319e8c2acfe6b731239b722f4f66fc07caa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
