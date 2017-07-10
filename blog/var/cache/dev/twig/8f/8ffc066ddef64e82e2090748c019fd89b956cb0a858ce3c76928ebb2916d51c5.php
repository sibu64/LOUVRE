<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3518a302d69a599c69ee72da56faecbafea88aa501d75bc2432b67afda8a2681 extends Twig_Template
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
        $__internal_bba78929c257701483461ceec37ba8c8e0649cc8cf4e29640ce1b423c780361c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba78929c257701483461ceec37ba8c8e0649cc8cf4e29640ce1b423c780361c->enter($__internal_bba78929c257701483461ceec37ba8c8e0649cc8cf4e29640ce1b423c780361c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_626d795b7703331718d2e8b459bd34ec1fbbaf4a8d11eaeb0d3ffd287df6e149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626d795b7703331718d2e8b459bd34ec1fbbaf4a8d11eaeb0d3ffd287df6e149->enter($__internal_626d795b7703331718d2e8b459bd34ec1fbbaf4a8d11eaeb0d3ffd287df6e149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bba78929c257701483461ceec37ba8c8e0649cc8cf4e29640ce1b423c780361c->leave($__internal_bba78929c257701483461ceec37ba8c8e0649cc8cf4e29640ce1b423c780361c_prof);

        
        $__internal_626d795b7703331718d2e8b459bd34ec1fbbaf4a8d11eaeb0d3ffd287df6e149->leave($__internal_626d795b7703331718d2e8b459bd34ec1fbbaf4a8d11eaeb0d3ffd287df6e149_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
