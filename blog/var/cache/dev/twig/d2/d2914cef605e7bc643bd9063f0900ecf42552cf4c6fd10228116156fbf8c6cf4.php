<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d180a32bfa13f9e61c734866501950104f0f7f7fdff65653ef564c01a233e423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b340427bf7dffa1ed42ff22e9644a16238970e09d864625b27a3690d559de35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b340427bf7dffa1ed42ff22e9644a16238970e09d864625b27a3690d559de35->enter($__internal_8b340427bf7dffa1ed42ff22e9644a16238970e09d864625b27a3690d559de35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e097a43eb0c203e56a1b9918cff1ddcc9b2b37ea051fed8065b20761d8557d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e097a43eb0c203e56a1b9918cff1ddcc9b2b37ea051fed8065b20761d8557d01->enter($__internal_e097a43eb0c203e56a1b9918cff1ddcc9b2b37ea051fed8065b20761d8557d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b340427bf7dffa1ed42ff22e9644a16238970e09d864625b27a3690d559de35->leave($__internal_8b340427bf7dffa1ed42ff22e9644a16238970e09d864625b27a3690d559de35_prof);

        
        $__internal_e097a43eb0c203e56a1b9918cff1ddcc9b2b37ea051fed8065b20761d8557d01->leave($__internal_e097a43eb0c203e56a1b9918cff1ddcc9b2b37ea051fed8065b20761d8557d01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5abcf75ca85dfdbc4394622a6ea8deca031d5c4a6b5e4048d966b18e54381a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abcf75ca85dfdbc4394622a6ea8deca031d5c4a6b5e4048d966b18e54381a64->enter($__internal_5abcf75ca85dfdbc4394622a6ea8deca031d5c4a6b5e4048d966b18e54381a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7bd9dfa80e0acd3758cb3a1429b0c333e6288c4b9fbc0b2e53f367fadfbf334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bd9dfa80e0acd3758cb3a1429b0c333e6288c4b9fbc0b2e53f367fadfbf334->enter($__internal_c7bd9dfa80e0acd3758cb3a1429b0c333e6288c4b9fbc0b2e53f367fadfbf334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c7bd9dfa80e0acd3758cb3a1429b0c333e6288c4b9fbc0b2e53f367fadfbf334->leave($__internal_c7bd9dfa80e0acd3758cb3a1429b0c333e6288c4b9fbc0b2e53f367fadfbf334_prof);

        
        $__internal_5abcf75ca85dfdbc4394622a6ea8deca031d5c4a6b5e4048d966b18e54381a64->leave($__internal_5abcf75ca85dfdbc4394622a6ea8deca031d5c4a6b5e4048d966b18e54381a64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72d116c27d39d973a20330b4ed632b207397a34457b9136e5916ce9b624603ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d116c27d39d973a20330b4ed632b207397a34457b9136e5916ce9b624603ec->enter($__internal_72d116c27d39d973a20330b4ed632b207397a34457b9136e5916ce9b624603ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96cd62120537df7108056e82a09b27056127ca8603b41b7425b4249994ec9945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cd62120537df7108056e82a09b27056127ca8603b41b7425b4249994ec9945->enter($__internal_96cd62120537df7108056e82a09b27056127ca8603b41b7425b4249994ec9945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_96cd62120537df7108056e82a09b27056127ca8603b41b7425b4249994ec9945->leave($__internal_96cd62120537df7108056e82a09b27056127ca8603b41b7425b4249994ec9945_prof);

        
        $__internal_72d116c27d39d973a20330b4ed632b207397a34457b9136e5916ce9b624603ec->leave($__internal_72d116c27d39d973a20330b4ed632b207397a34457b9136e5916ce9b624603ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee298d54e358f133a62f28e55c46fada06fd1f95ddf270ec742cad955cda1d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee298d54e358f133a62f28e55c46fada06fd1f95ddf270ec742cad955cda1d32->enter($__internal_ee298d54e358f133a62f28e55c46fada06fd1f95ddf270ec742cad955cda1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c74cb83a121d72d9b9987e734e002ff09dc9b0bb0db539e2d7eb873e23244dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c74cb83a121d72d9b9987e734e002ff09dc9b0bb0db539e2d7eb873e23244dc->enter($__internal_8c74cb83a121d72d9b9987e734e002ff09dc9b0bb0db539e2d7eb873e23244dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c74cb83a121d72d9b9987e734e002ff09dc9b0bb0db539e2d7eb873e23244dc->leave($__internal_8c74cb83a121d72d9b9987e734e002ff09dc9b0bb0db539e2d7eb873e23244dc_prof);

        
        $__internal_ee298d54e358f133a62f28e55c46fada06fd1f95ddf270ec742cad955cda1d32->leave($__internal_ee298d54e358f133a62f28e55c46fada06fd1f95ddf270ec742cad955cda1d32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
