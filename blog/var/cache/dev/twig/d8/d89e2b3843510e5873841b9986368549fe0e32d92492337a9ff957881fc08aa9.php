<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ace7c01272a6e5ba8b100be798208d797e47bef98b04ac6fa5ee9e32fce50c31 extends Twig_Template
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
        $__internal_fde8a92e2b9af6a750427d18475fbc02aeaa1561be4f04d223e98c261785a28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde8a92e2b9af6a750427d18475fbc02aeaa1561be4f04d223e98c261785a28e->enter($__internal_fde8a92e2b9af6a750427d18475fbc02aeaa1561be4f04d223e98c261785a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4ed0feefe3263fd57d0c8fb26ad99028010092e2fd72911b26d724806ea9ab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed0feefe3263fd57d0c8fb26ad99028010092e2fd72911b26d724806ea9ab7f->enter($__internal_4ed0feefe3263fd57d0c8fb26ad99028010092e2fd72911b26d724806ea9ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fde8a92e2b9af6a750427d18475fbc02aeaa1561be4f04d223e98c261785a28e->leave($__internal_fde8a92e2b9af6a750427d18475fbc02aeaa1561be4f04d223e98c261785a28e_prof);

        
        $__internal_4ed0feefe3263fd57d0c8fb26ad99028010092e2fd72911b26d724806ea9ab7f->leave($__internal_4ed0feefe3263fd57d0c8fb26ad99028010092e2fd72911b26d724806ea9ab7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
