<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e4d36eb4a91a4b1725e1b16ab5c68f8484cf2777f085421cd785e9b73165c40f extends Twig_Template
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
        $__internal_819f87fa7c85859fc065e6f7bea01057845c550676d4fe0fd0b23dc4ab20378b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819f87fa7c85859fc065e6f7bea01057845c550676d4fe0fd0b23dc4ab20378b->enter($__internal_819f87fa7c85859fc065e6f7bea01057845c550676d4fe0fd0b23dc4ab20378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_854d24d2235c97f253f21b7f0efc386c3649a03e9df2e7dcfcaaca1a4e979485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854d24d2235c97f253f21b7f0efc386c3649a03e9df2e7dcfcaaca1a4e979485->enter($__internal_854d24d2235c97f253f21b7f0efc386c3649a03e9df2e7dcfcaaca1a4e979485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_819f87fa7c85859fc065e6f7bea01057845c550676d4fe0fd0b23dc4ab20378b->leave($__internal_819f87fa7c85859fc065e6f7bea01057845c550676d4fe0fd0b23dc4ab20378b_prof);

        
        $__internal_854d24d2235c97f253f21b7f0efc386c3649a03e9df2e7dcfcaaca1a4e979485->leave($__internal_854d24d2235c97f253f21b7f0efc386c3649a03e9df2e7dcfcaaca1a4e979485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
