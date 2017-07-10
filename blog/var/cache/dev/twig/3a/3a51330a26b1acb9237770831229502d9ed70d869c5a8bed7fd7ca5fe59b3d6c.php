<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_80c103d43d2f0d4236385404e3d37b42fe6268e04eb165e63077f625a05e6922 extends Twig_Template
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
        $__internal_e95cd272632beedc72d33735885b3ccbbf86fafd1ac17e42eb72744afc328c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95cd272632beedc72d33735885b3ccbbf86fafd1ac17e42eb72744afc328c14->enter($__internal_e95cd272632beedc72d33735885b3ccbbf86fafd1ac17e42eb72744afc328c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dbadf0b9ea93a9aba2f8d8ba8d74d2e5ff89f00a89ab9e7bdf71d1f669d72378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbadf0b9ea93a9aba2f8d8ba8d74d2e5ff89f00a89ab9e7bdf71d1f669d72378->enter($__internal_dbadf0b9ea93a9aba2f8d8ba8d74d2e5ff89f00a89ab9e7bdf71d1f669d72378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e95cd272632beedc72d33735885b3ccbbf86fafd1ac17e42eb72744afc328c14->leave($__internal_e95cd272632beedc72d33735885b3ccbbf86fafd1ac17e42eb72744afc328c14_prof);

        
        $__internal_dbadf0b9ea93a9aba2f8d8ba8d74d2e5ff89f00a89ab9e7bdf71d1f669d72378->leave($__internal_dbadf0b9ea93a9aba2f8d8ba8d74d2e5ff89f00a89ab9e7bdf71d1f669d72378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
