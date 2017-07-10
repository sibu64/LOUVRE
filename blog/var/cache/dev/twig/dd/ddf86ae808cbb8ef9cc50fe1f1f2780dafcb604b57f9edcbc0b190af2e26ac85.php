<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_145787740f096b964321e7847dc49dbeb31f081145f0306dfaf54a773cc825fd extends Twig_Template
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
        $__internal_1835dbc23164880916ea9db648c750db63413fdf86fecac5985d9ca5a761ec4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1835dbc23164880916ea9db648c750db63413fdf86fecac5985d9ca5a761ec4d->enter($__internal_1835dbc23164880916ea9db648c750db63413fdf86fecac5985d9ca5a761ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_013fb322ed4c86e91b44fa6a09f1a677844585e45c64944e404f15216222250e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013fb322ed4c86e91b44fa6a09f1a677844585e45c64944e404f15216222250e->enter($__internal_013fb322ed4c86e91b44fa6a09f1a677844585e45c64944e404f15216222250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1835dbc23164880916ea9db648c750db63413fdf86fecac5985d9ca5a761ec4d->leave($__internal_1835dbc23164880916ea9db648c750db63413fdf86fecac5985d9ca5a761ec4d_prof);

        
        $__internal_013fb322ed4c86e91b44fa6a09f1a677844585e45c64944e404f15216222250e->leave($__internal_013fb322ed4c86e91b44fa6a09f1a677844585e45c64944e404f15216222250e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
