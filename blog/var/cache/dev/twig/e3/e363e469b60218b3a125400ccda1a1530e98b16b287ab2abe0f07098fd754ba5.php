<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3ebb2421375fcd32c80291c43ce87d89d2de3f301fcdb77211f4e81d8b78c2e extends Twig_Template
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
        $__internal_1b4c2468ae0ef16d7d7698885e21bbf35cf80d8e4a5b5cd2d101922bcea25b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4c2468ae0ef16d7d7698885e21bbf35cf80d8e4a5b5cd2d101922bcea25b37->enter($__internal_1b4c2468ae0ef16d7d7698885e21bbf35cf80d8e4a5b5cd2d101922bcea25b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_176ddd9c7698064904b93e4781a520f8da4d09f22a6879317cec0e75f70d5c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176ddd9c7698064904b93e4781a520f8da4d09f22a6879317cec0e75f70d5c45->enter($__internal_176ddd9c7698064904b93e4781a520f8da4d09f22a6879317cec0e75f70d5c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b4c2468ae0ef16d7d7698885e21bbf35cf80d8e4a5b5cd2d101922bcea25b37->leave($__internal_1b4c2468ae0ef16d7d7698885e21bbf35cf80d8e4a5b5cd2d101922bcea25b37_prof);

        
        $__internal_176ddd9c7698064904b93e4781a520f8da4d09f22a6879317cec0e75f70d5c45->leave($__internal_176ddd9c7698064904b93e4781a520f8da4d09f22a6879317cec0e75f70d5c45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
