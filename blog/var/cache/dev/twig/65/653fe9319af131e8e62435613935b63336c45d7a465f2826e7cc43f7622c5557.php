<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1f92ab3ef03944e6e197016407e6e8104e95a047b91907d27eea80521060a3bc extends Twig_Template
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
        $__internal_3542059b7f738ea8c83deacff3816d764fbe1a5c15b3256d00e9d7169c6c3cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3542059b7f738ea8c83deacff3816d764fbe1a5c15b3256d00e9d7169c6c3cfb->enter($__internal_3542059b7f738ea8c83deacff3816d764fbe1a5c15b3256d00e9d7169c6c3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_98b99bab7b2256ef8f87d951a790a07a582bd7e90aabe6c1fb2bfc120bd95ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b99bab7b2256ef8f87d951a790a07a582bd7e90aabe6c1fb2bfc120bd95ae4->enter($__internal_98b99bab7b2256ef8f87d951a790a07a582bd7e90aabe6c1fb2bfc120bd95ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3542059b7f738ea8c83deacff3816d764fbe1a5c15b3256d00e9d7169c6c3cfb->leave($__internal_3542059b7f738ea8c83deacff3816d764fbe1a5c15b3256d00e9d7169c6c3cfb_prof);

        
        $__internal_98b99bab7b2256ef8f87d951a790a07a582bd7e90aabe6c1fb2bfc120bd95ae4->leave($__internal_98b99bab7b2256ef8f87d951a790a07a582bd7e90aabe6c1fb2bfc120bd95ae4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
