<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f92d07ea7b80a2121134bda850927f3a2c451836f2b7616187c6e071cccc0599 extends Twig_Template
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
        $__internal_7a68b0115eb3ea351e01422e0c451a009cbe371f55140d2dfcb0146a62710adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a68b0115eb3ea351e01422e0c451a009cbe371f55140d2dfcb0146a62710adc->enter($__internal_7a68b0115eb3ea351e01422e0c451a009cbe371f55140d2dfcb0146a62710adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5a37930472d31291fce70ed82c29c689648ee19ce103f956f87a9f9da1b99d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a37930472d31291fce70ed82c29c689648ee19ce103f956f87a9f9da1b99d51->enter($__internal_5a37930472d31291fce70ed82c29c689648ee19ce103f956f87a9f9da1b99d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7a68b0115eb3ea351e01422e0c451a009cbe371f55140d2dfcb0146a62710adc->leave($__internal_7a68b0115eb3ea351e01422e0c451a009cbe371f55140d2dfcb0146a62710adc_prof);

        
        $__internal_5a37930472d31291fce70ed82c29c689648ee19ce103f956f87a9f9da1b99d51->leave($__internal_5a37930472d31291fce70ed82c29c689648ee19ce103f956f87a9f9da1b99d51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
