<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0140a957ce408262aa6bad41db3f862946231811f3657a945d170673e87ed284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97107c76ff1cb39a77ac6a4be844a2e354d4499e715981ff7814ce5089adc5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97107c76ff1cb39a77ac6a4be844a2e354d4499e715981ff7814ce5089adc5a9->enter($__internal_97107c76ff1cb39a77ac6a4be844a2e354d4499e715981ff7814ce5089adc5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ae2089313becae743c8f61731adf7dad83522029f3dea596b416eb3d4cb7343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2089313becae743c8f61731adf7dad83522029f3dea596b416eb3d4cb7343e->enter($__internal_ae2089313becae743c8f61731adf7dad83522029f3dea596b416eb3d4cb7343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97107c76ff1cb39a77ac6a4be844a2e354d4499e715981ff7814ce5089adc5a9->leave($__internal_97107c76ff1cb39a77ac6a4be844a2e354d4499e715981ff7814ce5089adc5a9_prof);

        
        $__internal_ae2089313becae743c8f61731adf7dad83522029f3dea596b416eb3d4cb7343e->leave($__internal_ae2089313becae743c8f61731adf7dad83522029f3dea596b416eb3d4cb7343e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f558d1f77714c09077c89e31b396f5641917d207a60affacd4a99ed5ddb9a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f558d1f77714c09077c89e31b396f5641917d207a60affacd4a99ed5ddb9a96->enter($__internal_6f558d1f77714c09077c89e31b396f5641917d207a60affacd4a99ed5ddb9a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b9ea64a1ef7cf149b1abf80325c60cd67898bda7636761823c375381d3f798b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ea64a1ef7cf149b1abf80325c60cd67898bda7636761823c375381d3f798b3->enter($__internal_b9ea64a1ef7cf149b1abf80325c60cd67898bda7636761823c375381d3f798b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b9ea64a1ef7cf149b1abf80325c60cd67898bda7636761823c375381d3f798b3->leave($__internal_b9ea64a1ef7cf149b1abf80325c60cd67898bda7636761823c375381d3f798b3_prof);

        
        $__internal_6f558d1f77714c09077c89e31b396f5641917d207a60affacd4a99ed5ddb9a96->leave($__internal_6f558d1f77714c09077c89e31b396f5641917d207a60affacd4a99ed5ddb9a96_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc06c5bd561c7c0f2569750fd8e3bddfa26171b8a7bf7d715bde83db4b75669e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc06c5bd561c7c0f2569750fd8e3bddfa26171b8a7bf7d715bde83db4b75669e->enter($__internal_fc06c5bd561c7c0f2569750fd8e3bddfa26171b8a7bf7d715bde83db4b75669e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_475d3e349b14820cfe38294dc9ae33e98cce88e582aa06c772b246f211b9474c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475d3e349b14820cfe38294dc9ae33e98cce88e582aa06c772b246f211b9474c->enter($__internal_475d3e349b14820cfe38294dc9ae33e98cce88e582aa06c772b246f211b9474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_475d3e349b14820cfe38294dc9ae33e98cce88e582aa06c772b246f211b9474c->leave($__internal_475d3e349b14820cfe38294dc9ae33e98cce88e582aa06c772b246f211b9474c_prof);

        
        $__internal_fc06c5bd561c7c0f2569750fd8e3bddfa26171b8a7bf7d715bde83db4b75669e->leave($__internal_fc06c5bd561c7c0f2569750fd8e3bddfa26171b8a7bf7d715bde83db4b75669e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
