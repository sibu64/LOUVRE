<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4036b8255bbcb3852aa039cd37771a97203f2e40e37450eca75f80e2d1ae4156 extends Twig_Template
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
        $__internal_6a3b18c3b1746bae7bca3e3f8d1c3283e70816504846a07bf2c7362c55a793c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3b18c3b1746bae7bca3e3f8d1c3283e70816504846a07bf2c7362c55a793c4->enter($__internal_6a3b18c3b1746bae7bca3e3f8d1c3283e70816504846a07bf2c7362c55a793c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3ff863c9840b88aa7bc1b1d57217b1dd51a890009596559df692c34001b1a6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff863c9840b88aa7bc1b1d57217b1dd51a890009596559df692c34001b1a6c1->enter($__internal_3ff863c9840b88aa7bc1b1d57217b1dd51a890009596559df692c34001b1a6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6a3b18c3b1746bae7bca3e3f8d1c3283e70816504846a07bf2c7362c55a793c4->leave($__internal_6a3b18c3b1746bae7bca3e3f8d1c3283e70816504846a07bf2c7362c55a793c4_prof);

        
        $__internal_3ff863c9840b88aa7bc1b1d57217b1dd51a890009596559df692c34001b1a6c1->leave($__internal_3ff863c9840b88aa7bc1b1d57217b1dd51a890009596559df692c34001b1a6c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
