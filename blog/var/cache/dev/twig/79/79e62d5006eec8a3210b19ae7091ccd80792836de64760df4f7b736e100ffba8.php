<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_43fe18d2500cfc0ccc3ef779d709c3046cced4844f04bdc1d68a867453f29248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fe18d2500cfc0ccc3ef779d709c3046cced4844f04bdc1d68a867453f29248->enter($__internal_43fe18d2500cfc0ccc3ef779d709c3046cced4844f04bdc1d68a867453f29248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_253f06663ff267ff5f3ad2d5b6da92c8914411e7b444f3d4452bd098526e6f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253f06663ff267ff5f3ad2d5b6da92c8914411e7b444f3d4452bd098526e6f3c->enter($__internal_253f06663ff267ff5f3ad2d5b6da92c8914411e7b444f3d4452bd098526e6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fe18d2500cfc0ccc3ef779d709c3046cced4844f04bdc1d68a867453f29248->leave($__internal_43fe18d2500cfc0ccc3ef779d709c3046cced4844f04bdc1d68a867453f29248_prof);

        
        $__internal_253f06663ff267ff5f3ad2d5b6da92c8914411e7b444f3d4452bd098526e6f3c->leave($__internal_253f06663ff267ff5f3ad2d5b6da92c8914411e7b444f3d4452bd098526e6f3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f58fb2a5904e5002eac8c44a3b321b1a29a2b802fde6385154fc26fd0428c957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58fb2a5904e5002eac8c44a3b321b1a29a2b802fde6385154fc26fd0428c957->enter($__internal_f58fb2a5904e5002eac8c44a3b321b1a29a2b802fde6385154fc26fd0428c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_278f1139c365d56dc20d664a10ef124a018325acf8b62a5f7ac11ffbdbc26010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278f1139c365d56dc20d664a10ef124a018325acf8b62a5f7ac11ffbdbc26010->enter($__internal_278f1139c365d56dc20d664a10ef124a018325acf8b62a5f7ac11ffbdbc26010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_278f1139c365d56dc20d664a10ef124a018325acf8b62a5f7ac11ffbdbc26010->leave($__internal_278f1139c365d56dc20d664a10ef124a018325acf8b62a5f7ac11ffbdbc26010_prof);

        
        $__internal_f58fb2a5904e5002eac8c44a3b321b1a29a2b802fde6385154fc26fd0428c957->leave($__internal_f58fb2a5904e5002eac8c44a3b321b1a29a2b802fde6385154fc26fd0428c957_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac6e293083ebb19a4c43c3600d424015ebc5c9700c6fff4dccb89642b22512e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6e293083ebb19a4c43c3600d424015ebc5c9700c6fff4dccb89642b22512e8->enter($__internal_ac6e293083ebb19a4c43c3600d424015ebc5c9700c6fff4dccb89642b22512e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91738e7047775761a57fb22c8afbd2c302d008636cbc7cc41ce9893a7b3f8c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91738e7047775761a57fb22c8afbd2c302d008636cbc7cc41ce9893a7b3f8c6c->enter($__internal_91738e7047775761a57fb22c8afbd2c302d008636cbc7cc41ce9893a7b3f8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91738e7047775761a57fb22c8afbd2c302d008636cbc7cc41ce9893a7b3f8c6c->leave($__internal_91738e7047775761a57fb22c8afbd2c302d008636cbc7cc41ce9893a7b3f8c6c_prof);

        
        $__internal_ac6e293083ebb19a4c43c3600d424015ebc5c9700c6fff4dccb89642b22512e8->leave($__internal_ac6e293083ebb19a4c43c3600d424015ebc5c9700c6fff4dccb89642b22512e8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e7e1973a4caa26c68d54d0267f96091799059aa06228bf9b4c566c829611a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7e1973a4caa26c68d54d0267f96091799059aa06228bf9b4c566c829611a43->enter($__internal_7e7e1973a4caa26c68d54d0267f96091799059aa06228bf9b4c566c829611a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_457da5513dfd3e344dbea8688d1c60db331f5768ab694e62211da8b15761cd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457da5513dfd3e344dbea8688d1c60db331f5768ab694e62211da8b15761cd4b->enter($__internal_457da5513dfd3e344dbea8688d1c60db331f5768ab694e62211da8b15761cd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_457da5513dfd3e344dbea8688d1c60db331f5768ab694e62211da8b15761cd4b->leave($__internal_457da5513dfd3e344dbea8688d1c60db331f5768ab694e62211da8b15761cd4b_prof);

        
        $__internal_7e7e1973a4caa26c68d54d0267f96091799059aa06228bf9b4c566c829611a43->leave($__internal_7e7e1973a4caa26c68d54d0267f96091799059aa06228bf9b4c566c829611a43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
