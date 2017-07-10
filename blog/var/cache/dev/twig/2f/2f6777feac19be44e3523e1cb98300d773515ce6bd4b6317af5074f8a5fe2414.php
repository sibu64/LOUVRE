<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3d7559424f55a79cd76f14cdd7d3125146c0cf342f73b7ae85a1eae2e25f4547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d6cb54508d53109abeca3ca01167f1105f1947e9effba047a2c7678db660ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6cb54508d53109abeca3ca01167f1105f1947e9effba047a2c7678db660ace->enter($__internal_4d6cb54508d53109abeca3ca01167f1105f1947e9effba047a2c7678db660ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0f6794a06f57f7819dd84cb8d28435110e82af12838053d0bb826f37c10e3f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6794a06f57f7819dd84cb8d28435110e82af12838053d0bb826f37c10e3f02->enter($__internal_0f6794a06f57f7819dd84cb8d28435110e82af12838053d0bb826f37c10e3f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d6cb54508d53109abeca3ca01167f1105f1947e9effba047a2c7678db660ace->leave($__internal_4d6cb54508d53109abeca3ca01167f1105f1947e9effba047a2c7678db660ace_prof);

        
        $__internal_0f6794a06f57f7819dd84cb8d28435110e82af12838053d0bb826f37c10e3f02->leave($__internal_0f6794a06f57f7819dd84cb8d28435110e82af12838053d0bb826f37c10e3f02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cf5b632ed8c89a26bda06837951823fd75e73d5c439771ffae776161da8ba1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf5b632ed8c89a26bda06837951823fd75e73d5c439771ffae776161da8ba1b->enter($__internal_2cf5b632ed8c89a26bda06837951823fd75e73d5c439771ffae776161da8ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90b278902fff42220566caf1c769fe5f19c432bb09ea6b05047227c5b841ee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b278902fff42220566caf1c769fe5f19c432bb09ea6b05047227c5b841ee33->enter($__internal_90b278902fff42220566caf1c769fe5f19c432bb09ea6b05047227c5b841ee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_90b278902fff42220566caf1c769fe5f19c432bb09ea6b05047227c5b841ee33->leave($__internal_90b278902fff42220566caf1c769fe5f19c432bb09ea6b05047227c5b841ee33_prof);

        
        $__internal_2cf5b632ed8c89a26bda06837951823fd75e73d5c439771ffae776161da8ba1b->leave($__internal_2cf5b632ed8c89a26bda06837951823fd75e73d5c439771ffae776161da8ba1b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd2f2693f7f9822d666ec6a1c7760f1cade26a3c14cc1485f46c6d2329487da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2f2693f7f9822d666ec6a1c7760f1cade26a3c14cc1485f46c6d2329487da9->enter($__internal_cd2f2693f7f9822d666ec6a1c7760f1cade26a3c14cc1485f46c6d2329487da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e430bb2d3ecb749afec897441443dd47e6e712173f54e24b834392eb90017a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e430bb2d3ecb749afec897441443dd47e6e712173f54e24b834392eb90017a24->enter($__internal_e430bb2d3ecb749afec897441443dd47e6e712173f54e24b834392eb90017a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e430bb2d3ecb749afec897441443dd47e6e712173f54e24b834392eb90017a24->leave($__internal_e430bb2d3ecb749afec897441443dd47e6e712173f54e24b834392eb90017a24_prof);

        
        $__internal_cd2f2693f7f9822d666ec6a1c7760f1cade26a3c14cc1485f46c6d2329487da9->leave($__internal_cd2f2693f7f9822d666ec6a1c7760f1cade26a3c14cc1485f46c6d2329487da9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
