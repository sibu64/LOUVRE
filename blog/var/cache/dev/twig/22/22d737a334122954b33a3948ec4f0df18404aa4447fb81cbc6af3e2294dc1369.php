<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1e92d4efe8b680ff8ff6e8d0d9d85129fae31e454e8e47ee009fb32a95c0666d extends Twig_Template
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
        $__internal_8e9398e378b99a8a4b4e6e2c7db6992be3b53efd229d47f428b71517c3c2f787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9398e378b99a8a4b4e6e2c7db6992be3b53efd229d47f428b71517c3c2f787->enter($__internal_8e9398e378b99a8a4b4e6e2c7db6992be3b53efd229d47f428b71517c3c2f787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e5c3510f6718e234e7517cde0d8743c229354d0a99cbea6d87ce34d3fc528434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c3510f6718e234e7517cde0d8743c229354d0a99cbea6d87ce34d3fc528434->enter($__internal_e5c3510f6718e234e7517cde0d8743c229354d0a99cbea6d87ce34d3fc528434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8e9398e378b99a8a4b4e6e2c7db6992be3b53efd229d47f428b71517c3c2f787->leave($__internal_8e9398e378b99a8a4b4e6e2c7db6992be3b53efd229d47f428b71517c3c2f787_prof);

        
        $__internal_e5c3510f6718e234e7517cde0d8743c229354d0a99cbea6d87ce34d3fc528434->leave($__internal_e5c3510f6718e234e7517cde0d8743c229354d0a99cbea6d87ce34d3fc528434_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
