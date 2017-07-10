<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e55cd7179f2e9da0d3cd6d1d0633435d10dbb9ae3af7e8c4e27cf08020a70ac7 extends Twig_Template
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
        $__internal_ecd0f12689e076d911b2b392ff13fbd8602d34e0ac8eb4fa4d7b05f8458b12a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd0f12689e076d911b2b392ff13fbd8602d34e0ac8eb4fa4d7b05f8458b12a3->enter($__internal_ecd0f12689e076d911b2b392ff13fbd8602d34e0ac8eb4fa4d7b05f8458b12a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7b73362dae9c963f386e91b8830e023c2831889d6350d57cd750addaca4b7519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b73362dae9c963f386e91b8830e023c2831889d6350d57cd750addaca4b7519->enter($__internal_7b73362dae9c963f386e91b8830e023c2831889d6350d57cd750addaca4b7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ecd0f12689e076d911b2b392ff13fbd8602d34e0ac8eb4fa4d7b05f8458b12a3->leave($__internal_ecd0f12689e076d911b2b392ff13fbd8602d34e0ac8eb4fa4d7b05f8458b12a3_prof);

        
        $__internal_7b73362dae9c963f386e91b8830e023c2831889d6350d57cd750addaca4b7519->leave($__internal_7b73362dae9c963f386e91b8830e023c2831889d6350d57cd750addaca4b7519_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
