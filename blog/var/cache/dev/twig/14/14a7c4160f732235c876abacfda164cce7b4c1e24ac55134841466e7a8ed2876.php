<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c3b28350cf39f46af88566568005e24a1ef332f959a0812fc7c7de23b1f8bf33 extends Twig_Template
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
        $__internal_0f5f9c12639787719ffdacb6861589660282b9dd5cfac88fc7c5d17d0b556a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5f9c12639787719ffdacb6861589660282b9dd5cfac88fc7c5d17d0b556a23->enter($__internal_0f5f9c12639787719ffdacb6861589660282b9dd5cfac88fc7c5d17d0b556a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3126b315edfae9b0734dcbc679d21c0e2189853992ef0864aff522025699760c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3126b315edfae9b0734dcbc679d21c0e2189853992ef0864aff522025699760c->enter($__internal_3126b315edfae9b0734dcbc679d21c0e2189853992ef0864aff522025699760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0f5f9c12639787719ffdacb6861589660282b9dd5cfac88fc7c5d17d0b556a23->leave($__internal_0f5f9c12639787719ffdacb6861589660282b9dd5cfac88fc7c5d17d0b556a23_prof);

        
        $__internal_3126b315edfae9b0734dcbc679d21c0e2189853992ef0864aff522025699760c->leave($__internal_3126b315edfae9b0734dcbc679d21c0e2189853992ef0864aff522025699760c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
