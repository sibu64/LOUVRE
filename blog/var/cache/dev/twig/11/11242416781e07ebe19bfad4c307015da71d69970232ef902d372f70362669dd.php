<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_09e7e6f0f6c3d15966721659618d974d2f21a02954a70f9ba7bf5ee6b99197d5 extends Twig_Template
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
        $__internal_f8207dd80af5590aeac74853b7cad1268fa0ac23bc9209ef432de4d0f2300d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8207dd80af5590aeac74853b7cad1268fa0ac23bc9209ef432de4d0f2300d82->enter($__internal_f8207dd80af5590aeac74853b7cad1268fa0ac23bc9209ef432de4d0f2300d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9a2a8bfac1c30bd66f096a803d3c8fbd0183dde3dd4d1820ee6088b143126982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2a8bfac1c30bd66f096a803d3c8fbd0183dde3dd4d1820ee6088b143126982->enter($__internal_9a2a8bfac1c30bd66f096a803d3c8fbd0183dde3dd4d1820ee6088b143126982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f8207dd80af5590aeac74853b7cad1268fa0ac23bc9209ef432de4d0f2300d82->leave($__internal_f8207dd80af5590aeac74853b7cad1268fa0ac23bc9209ef432de4d0f2300d82_prof);

        
        $__internal_9a2a8bfac1c30bd66f096a803d3c8fbd0183dde3dd4d1820ee6088b143126982->leave($__internal_9a2a8bfac1c30bd66f096a803d3c8fbd0183dde3dd4d1820ee6088b143126982_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
