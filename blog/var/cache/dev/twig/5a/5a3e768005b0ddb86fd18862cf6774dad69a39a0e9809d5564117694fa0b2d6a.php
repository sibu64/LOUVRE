<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e88e4c45aa70a93b31e89512786129cb420b5e8eee1159d23f90e962112b70ab extends Twig_Template
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
        $__internal_ebcf40f840d17c0214a4b4c5c398b011132c776b5056055e3e803d0c18d16f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcf40f840d17c0214a4b4c5c398b011132c776b5056055e3e803d0c18d16f3c->enter($__internal_ebcf40f840d17c0214a4b4c5c398b011132c776b5056055e3e803d0c18d16f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_60ab2fa829d033d321b6a2b808caa88a875a45ad204fd67efe2673ca7fbc8a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ab2fa829d033d321b6a2b808caa88a875a45ad204fd67efe2673ca7fbc8a14->enter($__internal_60ab2fa829d033d321b6a2b808caa88a875a45ad204fd67efe2673ca7fbc8a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ebcf40f840d17c0214a4b4c5c398b011132c776b5056055e3e803d0c18d16f3c->leave($__internal_ebcf40f840d17c0214a4b4c5c398b011132c776b5056055e3e803d0c18d16f3c_prof);

        
        $__internal_60ab2fa829d033d321b6a2b808caa88a875a45ad204fd67efe2673ca7fbc8a14->leave($__internal_60ab2fa829d033d321b6a2b808caa88a875a45ad204fd67efe2673ca7fbc8a14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
