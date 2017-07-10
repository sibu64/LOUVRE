<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_90aa7d27b5422ef3dabff398945722b09baa1cdca485189c8e6c2148e539afd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_9fced24ae373a79a8b4e54b67a6aaa4b47f1813047919c6ff3eaa9e134f76323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fced24ae373a79a8b4e54b67a6aaa4b47f1813047919c6ff3eaa9e134f76323->enter($__internal_9fced24ae373a79a8b4e54b67a6aaa4b47f1813047919c6ff3eaa9e134f76323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ebf16f095812fe6fe53143db8fbeb7a922aa3b4e0fc491ae5826f8b819a767aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf16f095812fe6fe53143db8fbeb7a922aa3b4e0fc491ae5826f8b819a767aa->enter($__internal_ebf16f095812fe6fe53143db8fbeb7a922aa3b4e0fc491ae5826f8b819a767aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fced24ae373a79a8b4e54b67a6aaa4b47f1813047919c6ff3eaa9e134f76323->leave($__internal_9fced24ae373a79a8b4e54b67a6aaa4b47f1813047919c6ff3eaa9e134f76323_prof);

        
        $__internal_ebf16f095812fe6fe53143db8fbeb7a922aa3b4e0fc491ae5826f8b819a767aa->leave($__internal_ebf16f095812fe6fe53143db8fbeb7a922aa3b4e0fc491ae5826f8b819a767aa_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_224780065fb72ac10eac1437ad7b292dfa250cf7e6af60743756259315ce623f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224780065fb72ac10eac1437ad7b292dfa250cf7e6af60743756259315ce623f->enter($__internal_224780065fb72ac10eac1437ad7b292dfa250cf7e6af60743756259315ce623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_68059bb34816cabe7f1486ac8dd757135f257f66833b6edbbb8e266b406a3b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68059bb34816cabe7f1486ac8dd757135f257f66833b6edbbb8e266b406a3b98->enter($__internal_68059bb34816cabe7f1486ac8dd757135f257f66833b6edbbb8e266b406a3b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_68059bb34816cabe7f1486ac8dd757135f257f66833b6edbbb8e266b406a3b98->leave($__internal_68059bb34816cabe7f1486ac8dd757135f257f66833b6edbbb8e266b406a3b98_prof);

        
        $__internal_224780065fb72ac10eac1437ad7b292dfa250cf7e6af60743756259315ce623f->leave($__internal_224780065fb72ac10eac1437ad7b292dfa250cf7e6af60743756259315ce623f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1102f3b42a41e339042c4429d18520d4874550b0b1f9857ad72ca3dc6a105543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1102f3b42a41e339042c4429d18520d4874550b0b1f9857ad72ca3dc6a105543->enter($__internal_1102f3b42a41e339042c4429d18520d4874550b0b1f9857ad72ca3dc6a105543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6583ccc6489a2125e91119b1788987fe371164c67f9f1e026ff085695744125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6583ccc6489a2125e91119b1788987fe371164c67f9f1e026ff085695744125->enter($__internal_f6583ccc6489a2125e91119b1788987fe371164c67f9f1e026ff085695744125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f6583ccc6489a2125e91119b1788987fe371164c67f9f1e026ff085695744125->leave($__internal_f6583ccc6489a2125e91119b1788987fe371164c67f9f1e026ff085695744125_prof);

        
        $__internal_1102f3b42a41e339042c4429d18520d4874550b0b1f9857ad72ca3dc6a105543->leave($__internal_1102f3b42a41e339042c4429d18520d4874550b0b1f9857ad72ca3dc6a105543_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
