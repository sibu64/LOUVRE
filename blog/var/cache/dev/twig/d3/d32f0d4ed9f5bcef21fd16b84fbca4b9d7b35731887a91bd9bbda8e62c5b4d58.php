<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_037ae85d0493d952e10e9dab56c4a0d869b839b63dadadfce8ea1e82033789c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32181c0c40873c76de63b8e5e662e716d9e8e55a2fca04e0acdd5e0e058833f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32181c0c40873c76de63b8e5e662e716d9e8e55a2fca04e0acdd5e0e058833f2->enter($__internal_32181c0c40873c76de63b8e5e662e716d9e8e55a2fca04e0acdd5e0e058833f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_416a0f3d826f3c52d2659138fca576d56a88bb7d3629a54de289720dd8232e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416a0f3d826f3c52d2659138fca576d56a88bb7d3629a54de289720dd8232e8f->enter($__internal_416a0f3d826f3c52d2659138fca576d56a88bb7d3629a54de289720dd8232e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_32181c0c40873c76de63b8e5e662e716d9e8e55a2fca04e0acdd5e0e058833f2->leave($__internal_32181c0c40873c76de63b8e5e662e716d9e8e55a2fca04e0acdd5e0e058833f2_prof);

        
        $__internal_416a0f3d826f3c52d2659138fca576d56a88bb7d3629a54de289720dd8232e8f->leave($__internal_416a0f3d826f3c52d2659138fca576d56a88bb7d3629a54de289720dd8232e8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0c6d408c5d0b3ea4ab660fcbeeedd2f434d63fb409e8027cf2808e0253da2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c6d408c5d0b3ea4ab660fcbeeedd2f434d63fb409e8027cf2808e0253da2c1->enter($__internal_a0c6d408c5d0b3ea4ab660fcbeeedd2f434d63fb409e8027cf2808e0253da2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d853ea5eb9de31935334ef093b8ed13f8c3a19cc3d28e922a61e1d9993fd57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d853ea5eb9de31935334ef093b8ed13f8c3a19cc3d28e922a61e1d9993fd57b->enter($__internal_1d853ea5eb9de31935334ef093b8ed13f8c3a19cc3d28e922a61e1d9993fd57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1d853ea5eb9de31935334ef093b8ed13f8c3a19cc3d28e922a61e1d9993fd57b->leave($__internal_1d853ea5eb9de31935334ef093b8ed13f8c3a19cc3d28e922a61e1d9993fd57b_prof);

        
        $__internal_a0c6d408c5d0b3ea4ab660fcbeeedd2f434d63fb409e8027cf2808e0253da2c1->leave($__internal_a0c6d408c5d0b3ea4ab660fcbeeedd2f434d63fb409e8027cf2808e0253da2c1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3e24f9457ea0eca695c839c01694971c789990734720583962b8fa428b15094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e24f9457ea0eca695c839c01694971c789990734720583962b8fa428b15094->enter($__internal_d3e24f9457ea0eca695c839c01694971c789990734720583962b8fa428b15094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36706e63f2b7d2eabe9e56fe8361c9245c347938168e8017a3073249704ceeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36706e63f2b7d2eabe9e56fe8361c9245c347938168e8017a3073249704ceeaf->enter($__internal_36706e63f2b7d2eabe9e56fe8361c9245c347938168e8017a3073249704ceeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_36706e63f2b7d2eabe9e56fe8361c9245c347938168e8017a3073249704ceeaf->leave($__internal_36706e63f2b7d2eabe9e56fe8361c9245c347938168e8017a3073249704ceeaf_prof);

        
        $__internal_d3e24f9457ea0eca695c839c01694971c789990734720583962b8fa428b15094->leave($__internal_d3e24f9457ea0eca695c839c01694971c789990734720583962b8fa428b15094_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7368debcc48c953d673363a3990ac1d28516437bf6a3794bda42fce33c6130c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7368debcc48c953d673363a3990ac1d28516437bf6a3794bda42fce33c6130c3->enter($__internal_7368debcc48c953d673363a3990ac1d28516437bf6a3794bda42fce33c6130c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d10a8b3f89a1f4a75d707336838afca1f06de75a3e2ba13d0f22ec5406c32aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10a8b3f89a1f4a75d707336838afca1f06de75a3e2ba13d0f22ec5406c32aa7->enter($__internal_d10a8b3f89a1f4a75d707336838afca1f06de75a3e2ba13d0f22ec5406c32aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d10a8b3f89a1f4a75d707336838afca1f06de75a3e2ba13d0f22ec5406c32aa7->leave($__internal_d10a8b3f89a1f4a75d707336838afca1f06de75a3e2ba13d0f22ec5406c32aa7_prof);

        
        $__internal_7368debcc48c953d673363a3990ac1d28516437bf6a3794bda42fce33c6130c3->leave($__internal_7368debcc48c953d673363a3990ac1d28516437bf6a3794bda42fce33c6130c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
