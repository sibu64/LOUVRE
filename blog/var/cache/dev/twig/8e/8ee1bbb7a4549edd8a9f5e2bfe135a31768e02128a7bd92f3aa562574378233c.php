<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_56afe13ae580fbc2898ca97af581e7e50d360bacbf280a80c2664910df593b19 extends Twig_Template
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
        $__internal_852f598a3b3af677d748ffcd30d8219b2399029fe3e9cba6a34e283b4c105e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852f598a3b3af677d748ffcd30d8219b2399029fe3e9cba6a34e283b4c105e1b->enter($__internal_852f598a3b3af677d748ffcd30d8219b2399029fe3e9cba6a34e283b4c105e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2499b7428afb385da2bfd2dbf9219633f7ce3d678e9cf046d9b31de1e1b8ac09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2499b7428afb385da2bfd2dbf9219633f7ce3d678e9cf046d9b31de1e1b8ac09->enter($__internal_2499b7428afb385da2bfd2dbf9219633f7ce3d678e9cf046d9b31de1e1b8ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_852f598a3b3af677d748ffcd30d8219b2399029fe3e9cba6a34e283b4c105e1b->leave($__internal_852f598a3b3af677d748ffcd30d8219b2399029fe3e9cba6a34e283b4c105e1b_prof);

        
        $__internal_2499b7428afb385da2bfd2dbf9219633f7ce3d678e9cf046d9b31de1e1b8ac09->leave($__internal_2499b7428afb385da2bfd2dbf9219633f7ce3d678e9cf046d9b31de1e1b8ac09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
