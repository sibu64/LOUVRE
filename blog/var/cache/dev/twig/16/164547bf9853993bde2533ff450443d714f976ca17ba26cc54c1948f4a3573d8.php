<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4a39bb2fb0ce04d665dcb0aa611e7ca8395f11aeea25ac91ab0d73747f4222bf extends Twig_Template
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
        $__internal_3580118e873b1bb525bac9c661c5123463b9c39f4ef5a63055758590f06c9d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3580118e873b1bb525bac9c661c5123463b9c39f4ef5a63055758590f06c9d61->enter($__internal_3580118e873b1bb525bac9c661c5123463b9c39f4ef5a63055758590f06c9d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_4ba7d049ab3c84b5d149de4e79aac544f5b04af5159257f6f665cb044f157ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba7d049ab3c84b5d149de4e79aac544f5b04af5159257f6f665cb044f157ddd->enter($__internal_4ba7d049ab3c84b5d149de4e79aac544f5b04af5159257f6f665cb044f157ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3580118e873b1bb525bac9c661c5123463b9c39f4ef5a63055758590f06c9d61->leave($__internal_3580118e873b1bb525bac9c661c5123463b9c39f4ef5a63055758590f06c9d61_prof);

        
        $__internal_4ba7d049ab3c84b5d149de4e79aac544f5b04af5159257f6f665cb044f157ddd->leave($__internal_4ba7d049ab3c84b5d149de4e79aac544f5b04af5159257f6f665cb044f157ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
