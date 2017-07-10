<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3e294453de8d5f4345b18adeda19ff9815f533b0f58fe3d6e5d2d96ebb3a38df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e294453de8d5f4345b18adeda19ff9815f533b0f58fe3d6e5d2d96ebb3a38df->enter($__internal_3e294453de8d5f4345b18adeda19ff9815f533b0f58fe3d6e5d2d96ebb3a38df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_137d3e923b4e9683b5c002694c4e415cd34852a515f316de1bf1c18a9a19e4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137d3e923b4e9683b5c002694c4e415cd34852a515f316de1bf1c18a9a19e4f1->enter($__internal_137d3e923b4e9683b5c002694c4e415cd34852a515f316de1bf1c18a9a19e4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e294453de8d5f4345b18adeda19ff9815f533b0f58fe3d6e5d2d96ebb3a38df->leave($__internal_3e294453de8d5f4345b18adeda19ff9815f533b0f58fe3d6e5d2d96ebb3a38df_prof);

        
        $__internal_137d3e923b4e9683b5c002694c4e415cd34852a515f316de1bf1c18a9a19e4f1->leave($__internal_137d3e923b4e9683b5c002694c4e415cd34852a515f316de1bf1c18a9a19e4f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fce9e95702398eb0ce553e79ff0be0c5feacd952ab90281c96e9075521680630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce9e95702398eb0ce553e79ff0be0c5feacd952ab90281c96e9075521680630->enter($__internal_fce9e95702398eb0ce553e79ff0be0c5feacd952ab90281c96e9075521680630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_336f05051954f131a6e8476b3255ec04ceb14250bd2c04946dd11c1cd2551ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336f05051954f131a6e8476b3255ec04ceb14250bd2c04946dd11c1cd2551ef2->enter($__internal_336f05051954f131a6e8476b3255ec04ceb14250bd2c04946dd11c1cd2551ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_336f05051954f131a6e8476b3255ec04ceb14250bd2c04946dd11c1cd2551ef2->leave($__internal_336f05051954f131a6e8476b3255ec04ceb14250bd2c04946dd11c1cd2551ef2_prof);

        
        $__internal_fce9e95702398eb0ce553e79ff0be0c5feacd952ab90281c96e9075521680630->leave($__internal_fce9e95702398eb0ce553e79ff0be0c5feacd952ab90281c96e9075521680630_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbcfc6fdc6912a8a7c8530db5c29d7d40eb4d5ca79563f430e3265af4695220e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcfc6fdc6912a8a7c8530db5c29d7d40eb4d5ca79563f430e3265af4695220e->enter($__internal_dbcfc6fdc6912a8a7c8530db5c29d7d40eb4d5ca79563f430e3265af4695220e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80c23a526653086a88a49681af8a021c57f4c83bbfb5486133d81fbff365637e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c23a526653086a88a49681af8a021c57f4c83bbfb5486133d81fbff365637e->enter($__internal_80c23a526653086a88a49681af8a021c57f4c83bbfb5486133d81fbff365637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80c23a526653086a88a49681af8a021c57f4c83bbfb5486133d81fbff365637e->leave($__internal_80c23a526653086a88a49681af8a021c57f4c83bbfb5486133d81fbff365637e_prof);

        
        $__internal_dbcfc6fdc6912a8a7c8530db5c29d7d40eb4d5ca79563f430e3265af4695220e->leave($__internal_dbcfc6fdc6912a8a7c8530db5c29d7d40eb4d5ca79563f430e3265af4695220e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5359267dd778fc681e6bce7b806cdf2461aea7a92e4a871d3124b04418b6b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5359267dd778fc681e6bce7b806cdf2461aea7a92e4a871d3124b04418b6b0d->enter($__internal_c5359267dd778fc681e6bce7b806cdf2461aea7a92e4a871d3124b04418b6b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5232baa38870442d3408eafcd1df52f078d457821dcdeeead64f522defb62c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5232baa38870442d3408eafcd1df52f078d457821dcdeeead64f522defb62c2e->enter($__internal_5232baa38870442d3408eafcd1df52f078d457821dcdeeead64f522defb62c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5232baa38870442d3408eafcd1df52f078d457821dcdeeead64f522defb62c2e->leave($__internal_5232baa38870442d3408eafcd1df52f078d457821dcdeeead64f522defb62c2e_prof);

        
        $__internal_c5359267dd778fc681e6bce7b806cdf2461aea7a92e4a871d3124b04418b6b0d->leave($__internal_c5359267dd778fc681e6bce7b806cdf2461aea7a92e4a871d3124b04418b6b0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
