<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_205ba722ee0381de858e073c42202ab62c7783f54dcaa4577729834c0348ca0f extends Twig_Template
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
        $__internal_9eee73111006c66ff72f579623b6b21a3b3e7e0e81776ef9edebd5d38ff2ab3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eee73111006c66ff72f579623b6b21a3b3e7e0e81776ef9edebd5d38ff2ab3c->enter($__internal_9eee73111006c66ff72f579623b6b21a3b3e7e0e81776ef9edebd5d38ff2ab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9152d9f588e846937fef1f91edae8130626f936b3ceceb0873190de888b9a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9152d9f588e846937fef1f91edae8130626f936b3ceceb0873190de888b9a855->enter($__internal_9152d9f588e846937fef1f91edae8130626f936b3ceceb0873190de888b9a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9eee73111006c66ff72f579623b6b21a3b3e7e0e81776ef9edebd5d38ff2ab3c->leave($__internal_9eee73111006c66ff72f579623b6b21a3b3e7e0e81776ef9edebd5d38ff2ab3c_prof);

        
        $__internal_9152d9f588e846937fef1f91edae8130626f936b3ceceb0873190de888b9a855->leave($__internal_9152d9f588e846937fef1f91edae8130626f936b3ceceb0873190de888b9a855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
