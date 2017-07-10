<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_362500c00eacaca143d9a61619d8df2804641c0d430c88a896828684abfb5a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_689ad61cb6c22f297515b4bcd054b2de62fafacb75b9739ea1973b76a886f231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689ad61cb6c22f297515b4bcd054b2de62fafacb75b9739ea1973b76a886f231->enter($__internal_689ad61cb6c22f297515b4bcd054b2de62fafacb75b9739ea1973b76a886f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_17765ed4420fbfb911f27677a46cbb7d9c28ce23f3214d430ee6ce0531072f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17765ed4420fbfb911f27677a46cbb7d9c28ce23f3214d430ee6ce0531072f49->enter($__internal_17765ed4420fbfb911f27677a46cbb7d9c28ce23f3214d430ee6ce0531072f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689ad61cb6c22f297515b4bcd054b2de62fafacb75b9739ea1973b76a886f231->leave($__internal_689ad61cb6c22f297515b4bcd054b2de62fafacb75b9739ea1973b76a886f231_prof);

        
        $__internal_17765ed4420fbfb911f27677a46cbb7d9c28ce23f3214d430ee6ce0531072f49->leave($__internal_17765ed4420fbfb911f27677a46cbb7d9c28ce23f3214d430ee6ce0531072f49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ded3a66b183dff39ed5c8bae2af8f9d5825f2e6e2fdcff5f9ddb443016d1b4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded3a66b183dff39ed5c8bae2af8f9d5825f2e6e2fdcff5f9ddb443016d1b4b0->enter($__internal_ded3a66b183dff39ed5c8bae2af8f9d5825f2e6e2fdcff5f9ddb443016d1b4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_133379db0a29525ba2a2b289999b0dcd1abba004468fcb9b13eff872a66018d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133379db0a29525ba2a2b289999b0dcd1abba004468fcb9b13eff872a66018d4->enter($__internal_133379db0a29525ba2a2b289999b0dcd1abba004468fcb9b13eff872a66018d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_133379db0a29525ba2a2b289999b0dcd1abba004468fcb9b13eff872a66018d4->leave($__internal_133379db0a29525ba2a2b289999b0dcd1abba004468fcb9b13eff872a66018d4_prof);

        
        $__internal_ded3a66b183dff39ed5c8bae2af8f9d5825f2e6e2fdcff5f9ddb443016d1b4b0->leave($__internal_ded3a66b183dff39ed5c8bae2af8f9d5825f2e6e2fdcff5f9ddb443016d1b4b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_523e44b1b54826c8b5a7bd82f9029963fe1355f78e89fd684868bea1b2fb0411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523e44b1b54826c8b5a7bd82f9029963fe1355f78e89fd684868bea1b2fb0411->enter($__internal_523e44b1b54826c8b5a7bd82f9029963fe1355f78e89fd684868bea1b2fb0411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca6df1ff28ac43120d0e44db72628d4ad8714b64b94eeec113d70e1b44db11d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6df1ff28ac43120d0e44db72628d4ad8714b64b94eeec113d70e1b44db11d2->enter($__internal_ca6df1ff28ac43120d0e44db72628d4ad8714b64b94eeec113d70e1b44db11d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ca6df1ff28ac43120d0e44db72628d4ad8714b64b94eeec113d70e1b44db11d2->leave($__internal_ca6df1ff28ac43120d0e44db72628d4ad8714b64b94eeec113d70e1b44db11d2_prof);

        
        $__internal_523e44b1b54826c8b5a7bd82f9029963fe1355f78e89fd684868bea1b2fb0411->leave($__internal_523e44b1b54826c8b5a7bd82f9029963fe1355f78e89fd684868bea1b2fb0411_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
