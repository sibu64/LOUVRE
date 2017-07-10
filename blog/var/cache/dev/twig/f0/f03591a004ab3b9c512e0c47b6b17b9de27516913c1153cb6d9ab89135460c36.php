<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d424fec088ab131c9c4ffe1df8693b865fb2544a04e25db9f93a0485398ec859 extends Twig_Template
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
        $__internal_6fd6c049633b0f62e37dcdeb05bdd7466a285806f1e405ed2f529371f193736a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd6c049633b0f62e37dcdeb05bdd7466a285806f1e405ed2f529371f193736a->enter($__internal_6fd6c049633b0f62e37dcdeb05bdd7466a285806f1e405ed2f529371f193736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_10ee164d1b52fcbba3fda40a11f9ff4eaa7c6c9cadd63b437a7101c082d2df96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ee164d1b52fcbba3fda40a11f9ff4eaa7c6c9cadd63b437a7101c082d2df96->enter($__internal_10ee164d1b52fcbba3fda40a11f9ff4eaa7c6c9cadd63b437a7101c082d2df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6fd6c049633b0f62e37dcdeb05bdd7466a285806f1e405ed2f529371f193736a->leave($__internal_6fd6c049633b0f62e37dcdeb05bdd7466a285806f1e405ed2f529371f193736a_prof);

        
        $__internal_10ee164d1b52fcbba3fda40a11f9ff4eaa7c6c9cadd63b437a7101c082d2df96->leave($__internal_10ee164d1b52fcbba3fda40a11f9ff4eaa7c6c9cadd63b437a7101c082d2df96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
