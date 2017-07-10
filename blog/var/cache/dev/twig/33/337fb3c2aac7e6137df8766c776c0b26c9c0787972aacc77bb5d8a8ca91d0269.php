<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_309be693ca131c945f2c79843f08af9d1f9a40f7fd1c073ddd6f9bbf66cd87d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd05dc5f9fbfd045007299fa5413be94e62f777e7ef9f5ec97c2adc2254eed8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd05dc5f9fbfd045007299fa5413be94e62f777e7ef9f5ec97c2adc2254eed8c->enter($__internal_cd05dc5f9fbfd045007299fa5413be94e62f777e7ef9f5ec97c2adc2254eed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_656142b022d5bac22a4b6f3a7949c4a375bb4ae680c4346d86dfa0f88727cdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656142b022d5bac22a4b6f3a7949c4a375bb4ae680c4346d86dfa0f88727cdc7->enter($__internal_656142b022d5bac22a4b6f3a7949c4a375bb4ae680c4346d86dfa0f88727cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd05dc5f9fbfd045007299fa5413be94e62f777e7ef9f5ec97c2adc2254eed8c->leave($__internal_cd05dc5f9fbfd045007299fa5413be94e62f777e7ef9f5ec97c2adc2254eed8c_prof);

        
        $__internal_656142b022d5bac22a4b6f3a7949c4a375bb4ae680c4346d86dfa0f88727cdc7->leave($__internal_656142b022d5bac22a4b6f3a7949c4a375bb4ae680c4346d86dfa0f88727cdc7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3503cd4de27c591e9ea1db4bbe00832f00003b3db31d592e1296c68560fe2fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3503cd4de27c591e9ea1db4bbe00832f00003b3db31d592e1296c68560fe2fea->enter($__internal_3503cd4de27c591e9ea1db4bbe00832f00003b3db31d592e1296c68560fe2fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6251acbad7a45c691ed239f8f7fe73e51b04e23d9d62f0e07a427b59982dbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6251acbad7a45c691ed239f8f7fe73e51b04e23d9d62f0e07a427b59982dbdf->enter($__internal_b6251acbad7a45c691ed239f8f7fe73e51b04e23d9d62f0e07a427b59982dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b6251acbad7a45c691ed239f8f7fe73e51b04e23d9d62f0e07a427b59982dbdf->leave($__internal_b6251acbad7a45c691ed239f8f7fe73e51b04e23d9d62f0e07a427b59982dbdf_prof);

        
        $__internal_3503cd4de27c591e9ea1db4bbe00832f00003b3db31d592e1296c68560fe2fea->leave($__internal_3503cd4de27c591e9ea1db4bbe00832f00003b3db31d592e1296c68560fe2fea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
