<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_da4c43d023a59762286dc72dafc833edcab8a244f11129da88c392fc849e4c85 extends Twig_Template
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
        $__internal_8f29256dd0ddebf05a3ed214fc630357b2a9de8f657d97d176dde971f0ba9ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f29256dd0ddebf05a3ed214fc630357b2a9de8f657d97d176dde971f0ba9ed0->enter($__internal_8f29256dd0ddebf05a3ed214fc630357b2a9de8f657d97d176dde971f0ba9ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5dcb481fb5af482b284fd633377550330f1168c08bb67ca4c3f2df7fff222a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcb481fb5af482b284fd633377550330f1168c08bb67ca4c3f2df7fff222a66->enter($__internal_5dcb481fb5af482b284fd633377550330f1168c08bb67ca4c3f2df7fff222a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8f29256dd0ddebf05a3ed214fc630357b2a9de8f657d97d176dde971f0ba9ed0->leave($__internal_8f29256dd0ddebf05a3ed214fc630357b2a9de8f657d97d176dde971f0ba9ed0_prof);

        
        $__internal_5dcb481fb5af482b284fd633377550330f1168c08bb67ca4c3f2df7fff222a66->leave($__internal_5dcb481fb5af482b284fd633377550330f1168c08bb67ca4c3f2df7fff222a66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
