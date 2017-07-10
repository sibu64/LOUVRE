<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7f8b962c3920827dc15672b9a838e12d91f37db35b765ce1b7ceadb9c824cbb9 extends Twig_Template
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
        $__internal_424f97be083de91607dbff8d9351d8c1a1b5ccdee50779497eb2fded466ab32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424f97be083de91607dbff8d9351d8c1a1b5ccdee50779497eb2fded466ab32b->enter($__internal_424f97be083de91607dbff8d9351d8c1a1b5ccdee50779497eb2fded466ab32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6577a01a6f72c3898d052c671a5307600754209f182655b6adc0b8cc4180c636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6577a01a6f72c3898d052c671a5307600754209f182655b6adc0b8cc4180c636->enter($__internal_6577a01a6f72c3898d052c671a5307600754209f182655b6adc0b8cc4180c636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_424f97be083de91607dbff8d9351d8c1a1b5ccdee50779497eb2fded466ab32b->leave($__internal_424f97be083de91607dbff8d9351d8c1a1b5ccdee50779497eb2fded466ab32b_prof);

        
        $__internal_6577a01a6f72c3898d052c671a5307600754209f182655b6adc0b8cc4180c636->leave($__internal_6577a01a6f72c3898d052c671a5307600754209f182655b6adc0b8cc4180c636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
