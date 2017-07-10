<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_677fcf8a40cd9c0bec4b254a1e8996e89056d420f08f29ec7a956bfbb92db10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_31c5f6e60014569c5aab70e24cb6bb4b9ebdcd2b35bddef3b91ed489c83c470c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c5f6e60014569c5aab70e24cb6bb4b9ebdcd2b35bddef3b91ed489c83c470c->enter($__internal_31c5f6e60014569c5aab70e24cb6bb4b9ebdcd2b35bddef3b91ed489c83c470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_34044072277a7d4d1d68a9f8d426c343c1cade8dee4ba397488568cda042308b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34044072277a7d4d1d68a9f8d426c343c1cade8dee4ba397488568cda042308b->enter($__internal_34044072277a7d4d1d68a9f8d426c343c1cade8dee4ba397488568cda042308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c5f6e60014569c5aab70e24cb6bb4b9ebdcd2b35bddef3b91ed489c83c470c->leave($__internal_31c5f6e60014569c5aab70e24cb6bb4b9ebdcd2b35bddef3b91ed489c83c470c_prof);

        
        $__internal_34044072277a7d4d1d68a9f8d426c343c1cade8dee4ba397488568cda042308b->leave($__internal_34044072277a7d4d1d68a9f8d426c343c1cade8dee4ba397488568cda042308b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3952a50adfdb8417dce8873a693de175bdb2ac622950165ad79a259472966933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3952a50adfdb8417dce8873a693de175bdb2ac622950165ad79a259472966933->enter($__internal_3952a50adfdb8417dce8873a693de175bdb2ac622950165ad79a259472966933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b4accfac3334ab76d26d3573e7f230917f5f672ddaf0257b3456ca06d3ad2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4accfac3334ab76d26d3573e7f230917f5f672ddaf0257b3456ca06d3ad2aa->enter($__internal_4b4accfac3334ab76d26d3573e7f230917f5f672ddaf0257b3456ca06d3ad2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4b4accfac3334ab76d26d3573e7f230917f5f672ddaf0257b3456ca06d3ad2aa->leave($__internal_4b4accfac3334ab76d26d3573e7f230917f5f672ddaf0257b3456ca06d3ad2aa_prof);

        
        $__internal_3952a50adfdb8417dce8873a693de175bdb2ac622950165ad79a259472966933->leave($__internal_3952a50adfdb8417dce8873a693de175bdb2ac622950165ad79a259472966933_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b0ff8190d199af238cecf2394bbbfe1591862045d659b60cdb3665ec29e6b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0ff8190d199af238cecf2394bbbfe1591862045d659b60cdb3665ec29e6b0e->enter($__internal_7b0ff8190d199af238cecf2394bbbfe1591862045d659b60cdb3665ec29e6b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e62c74668073a8629eacad49e760a27e77f809731c9bfdc056700709efa22504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62c74668073a8629eacad49e760a27e77f809731c9bfdc056700709efa22504->enter($__internal_e62c74668073a8629eacad49e760a27e77f809731c9bfdc056700709efa22504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e62c74668073a8629eacad49e760a27e77f809731c9bfdc056700709efa22504->leave($__internal_e62c74668073a8629eacad49e760a27e77f809731c9bfdc056700709efa22504_prof);

        
        $__internal_7b0ff8190d199af238cecf2394bbbfe1591862045d659b60cdb3665ec29e6b0e->leave($__internal_7b0ff8190d199af238cecf2394bbbfe1591862045d659b60cdb3665ec29e6b0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
