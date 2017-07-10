<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4afe3a8476d9437995925ea9253d8875a8c054f6c1a119581248bac76d5a1fbc extends Twig_Template
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
        $__internal_46436d407cee29933a6cb4bdc37212e08ce3dd883a07e07bcde421e7e3af5b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46436d407cee29933a6cb4bdc37212e08ce3dd883a07e07bcde421e7e3af5b62->enter($__internal_46436d407cee29933a6cb4bdc37212e08ce3dd883a07e07bcde421e7e3af5b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3dc9ff39b04215cdec3c0d0ff5d91b51f8501c65189835da890291230bdb8cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc9ff39b04215cdec3c0d0ff5d91b51f8501c65189835da890291230bdb8cfe->enter($__internal_3dc9ff39b04215cdec3c0d0ff5d91b51f8501c65189835da890291230bdb8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_46436d407cee29933a6cb4bdc37212e08ce3dd883a07e07bcde421e7e3af5b62->leave($__internal_46436d407cee29933a6cb4bdc37212e08ce3dd883a07e07bcde421e7e3af5b62_prof);

        
        $__internal_3dc9ff39b04215cdec3c0d0ff5d91b51f8501c65189835da890291230bdb8cfe->leave($__internal_3dc9ff39b04215cdec3c0d0ff5d91b51f8501c65189835da890291230bdb8cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
