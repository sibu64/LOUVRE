<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f56617030b91aa13c033d549d9025e06d754b392aa3ec3813b7ddb062c4257d7 extends Twig_Template
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
        $__internal_ccb382482588a4b7a9d3c3a9483347a6fa1fc3a66d5812606b0b4ce7bbca28b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb382482588a4b7a9d3c3a9483347a6fa1fc3a66d5812606b0b4ce7bbca28b0->enter($__internal_ccb382482588a4b7a9d3c3a9483347a6fa1fc3a66d5812606b0b4ce7bbca28b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_affbc3d9c9f581cc08d01f75ba942b68fd71acdf229ee9750f3c20f0cef65183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affbc3d9c9f581cc08d01f75ba942b68fd71acdf229ee9750f3c20f0cef65183->enter($__internal_affbc3d9c9f581cc08d01f75ba942b68fd71acdf229ee9750f3c20f0cef65183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ccb382482588a4b7a9d3c3a9483347a6fa1fc3a66d5812606b0b4ce7bbca28b0->leave($__internal_ccb382482588a4b7a9d3c3a9483347a6fa1fc3a66d5812606b0b4ce7bbca28b0_prof);

        
        $__internal_affbc3d9c9f581cc08d01f75ba942b68fd71acdf229ee9750f3c20f0cef65183->leave($__internal_affbc3d9c9f581cc08d01f75ba942b68fd71acdf229ee9750f3c20f0cef65183_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
