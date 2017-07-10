<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_34e121b3ad8c217b47a6565552a2db11de10c34f038973525ddcb0506f3d00cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_55d98c36ceabe846308fe1c6912d6e7bd69ea67301b382d10e1000cde2252516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d98c36ceabe846308fe1c6912d6e7bd69ea67301b382d10e1000cde2252516->enter($__internal_55d98c36ceabe846308fe1c6912d6e7bd69ea67301b382d10e1000cde2252516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f1fd98e65e7eb9522dcb19cfbcfb8c738457f0f1bfb63e3c68709470ad6f4dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fd98e65e7eb9522dcb19cfbcfb8c738457f0f1bfb63e3c68709470ad6f4dbe->enter($__internal_f1fd98e65e7eb9522dcb19cfbcfb8c738457f0f1bfb63e3c68709470ad6f4dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d98c36ceabe846308fe1c6912d6e7bd69ea67301b382d10e1000cde2252516->leave($__internal_55d98c36ceabe846308fe1c6912d6e7bd69ea67301b382d10e1000cde2252516_prof);

        
        $__internal_f1fd98e65e7eb9522dcb19cfbcfb8c738457f0f1bfb63e3c68709470ad6f4dbe->leave($__internal_f1fd98e65e7eb9522dcb19cfbcfb8c738457f0f1bfb63e3c68709470ad6f4dbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a61cc8eafed7e98966ae32b1ff41f56df2da806863e1e937c799d824a9f67f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61cc8eafed7e98966ae32b1ff41f56df2da806863e1e937c799d824a9f67f9d->enter($__internal_a61cc8eafed7e98966ae32b1ff41f56df2da806863e1e937c799d824a9f67f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4ca1c4c041dba385a1db724185447bf2e3e2dbb27018b2267a4879f5826578a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca1c4c041dba385a1db724185447bf2e3e2dbb27018b2267a4879f5826578a3->enter($__internal_4ca1c4c041dba385a1db724185447bf2e3e2dbb27018b2267a4879f5826578a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ca1c4c041dba385a1db724185447bf2e3e2dbb27018b2267a4879f5826578a3->leave($__internal_4ca1c4c041dba385a1db724185447bf2e3e2dbb27018b2267a4879f5826578a3_prof);

        
        $__internal_a61cc8eafed7e98966ae32b1ff41f56df2da806863e1e937c799d824a9f67f9d->leave($__internal_a61cc8eafed7e98966ae32b1ff41f56df2da806863e1e937c799d824a9f67f9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a47b9a3b5dbde570b2e026aba29d758f32954815ee9be7eef4ea8e4bd735c078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47b9a3b5dbde570b2e026aba29d758f32954815ee9be7eef4ea8e4bd735c078->enter($__internal_a47b9a3b5dbde570b2e026aba29d758f32954815ee9be7eef4ea8e4bd735c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e89f0a03f73b0ed10713fdb37018ae55710823c478d835f6c7b254f964da475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e89f0a03f73b0ed10713fdb37018ae55710823c478d835f6c7b254f964da475->enter($__internal_4e89f0a03f73b0ed10713fdb37018ae55710823c478d835f6c7b254f964da475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e89f0a03f73b0ed10713fdb37018ae55710823c478d835f6c7b254f964da475->leave($__internal_4e89f0a03f73b0ed10713fdb37018ae55710823c478d835f6c7b254f964da475_prof);

        
        $__internal_a47b9a3b5dbde570b2e026aba29d758f32954815ee9be7eef4ea8e4bd735c078->leave($__internal_a47b9a3b5dbde570b2e026aba29d758f32954815ee9be7eef4ea8e4bd735c078_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b59b183cfb41aa1c1ea0c87d519eca03ac8bfcc2d9ad035a6615b81849ee3b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59b183cfb41aa1c1ea0c87d519eca03ac8bfcc2d9ad035a6615b81849ee3b48->enter($__internal_b59b183cfb41aa1c1ea0c87d519eca03ac8bfcc2d9ad035a6615b81849ee3b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0217c81b543fecf8d2d949e9a5dbb2b866b890e3d6c99129894ff006c21a2711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0217c81b543fecf8d2d949e9a5dbb2b866b890e3d6c99129894ff006c21a2711->enter($__internal_0217c81b543fecf8d2d949e9a5dbb2b866b890e3d6c99129894ff006c21a2711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0217c81b543fecf8d2d949e9a5dbb2b866b890e3d6c99129894ff006c21a2711->leave($__internal_0217c81b543fecf8d2d949e9a5dbb2b866b890e3d6c99129894ff006c21a2711_prof);

        
        $__internal_b59b183cfb41aa1c1ea0c87d519eca03ac8bfcc2d9ad035a6615b81849ee3b48->leave($__internal_b59b183cfb41aa1c1ea0c87d519eca03ac8bfcc2d9ad035a6615b81849ee3b48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
