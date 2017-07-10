<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2bb7abb1546d9270dd6a5d03fd809adddcb0c8405c49e5d56d89404f0bf81ab1 extends Twig_Template
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
        $__internal_f27f15fff9a8b765dcfc03232c33a26d81ca061f4b7932b555db585f62266ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27f15fff9a8b765dcfc03232c33a26d81ca061f4b7932b555db585f62266ce0->enter($__internal_f27f15fff9a8b765dcfc03232c33a26d81ca061f4b7932b555db585f62266ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_680287592444d9e1262670a01bb419c2b46c52670df3106ea3e0f242208896a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680287592444d9e1262670a01bb419c2b46c52670df3106ea3e0f242208896a4->enter($__internal_680287592444d9e1262670a01bb419c2b46c52670df3106ea3e0f242208896a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f27f15fff9a8b765dcfc03232c33a26d81ca061f4b7932b555db585f62266ce0->leave($__internal_f27f15fff9a8b765dcfc03232c33a26d81ca061f4b7932b555db585f62266ce0_prof);

        
        $__internal_680287592444d9e1262670a01bb419c2b46c52670df3106ea3e0f242208896a4->leave($__internal_680287592444d9e1262670a01bb419c2b46c52670df3106ea3e0f242208896a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
