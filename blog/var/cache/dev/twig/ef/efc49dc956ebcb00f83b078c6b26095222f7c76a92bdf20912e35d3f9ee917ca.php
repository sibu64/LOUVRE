<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_613d50fd0bdaaaaaf5b68f17c83dd6489c26ef0b3f4ffc51dd7dc2bc26ec1bb9 extends Twig_Template
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
        $__internal_d86ee1d85079c23f2307aa07f9ea174a3f0dffd56ddca779c76997b622fdb53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86ee1d85079c23f2307aa07f9ea174a3f0dffd56ddca779c76997b622fdb53b->enter($__internal_d86ee1d85079c23f2307aa07f9ea174a3f0dffd56ddca779c76997b622fdb53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c63f78b6b6c27b54b79dac1436ffba39db2ff2398f1f2f6be4e02d03874ff748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63f78b6b6c27b54b79dac1436ffba39db2ff2398f1f2f6be4e02d03874ff748->enter($__internal_c63f78b6b6c27b54b79dac1436ffba39db2ff2398f1f2f6be4e02d03874ff748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d86ee1d85079c23f2307aa07f9ea174a3f0dffd56ddca779c76997b622fdb53b->leave($__internal_d86ee1d85079c23f2307aa07f9ea174a3f0dffd56ddca779c76997b622fdb53b_prof);

        
        $__internal_c63f78b6b6c27b54b79dac1436ffba39db2ff2398f1f2f6be4e02d03874ff748->leave($__internal_c63f78b6b6c27b54b79dac1436ffba39db2ff2398f1f2f6be4e02d03874ff748_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
