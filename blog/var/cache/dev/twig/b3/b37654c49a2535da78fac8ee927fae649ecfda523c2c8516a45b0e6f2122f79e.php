<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2e98727b5b5402b7173e43ff1b648192df43e40b925811c1972eb0b92fab03e5 extends Twig_Template
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
        $__internal_02ea48d1bdc0de220ead008065334d85bf6918c6909787576aac03d06e7ba2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea48d1bdc0de220ead008065334d85bf6918c6909787576aac03d06e7ba2c9->enter($__internal_02ea48d1bdc0de220ead008065334d85bf6918c6909787576aac03d06e7ba2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e4871d9148bbc2a0307a814b8391867c84e79b159b598dd6fd9f03ac686ccaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4871d9148bbc2a0307a814b8391867c84e79b159b598dd6fd9f03ac686ccaac->enter($__internal_e4871d9148bbc2a0307a814b8391867c84e79b159b598dd6fd9f03ac686ccaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_02ea48d1bdc0de220ead008065334d85bf6918c6909787576aac03d06e7ba2c9->leave($__internal_02ea48d1bdc0de220ead008065334d85bf6918c6909787576aac03d06e7ba2c9_prof);

        
        $__internal_e4871d9148bbc2a0307a814b8391867c84e79b159b598dd6fd9f03ac686ccaac->leave($__internal_e4871d9148bbc2a0307a814b8391867c84e79b159b598dd6fd9f03ac686ccaac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
