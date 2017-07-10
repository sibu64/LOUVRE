<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_35559a4edd42f31669a8d45b0a4d4639757c1018493614bbdb0c3209ff60620b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_202f8f4608e6704c441934b1d717fd50462b90f1a5bde494e60c7137a299a264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202f8f4608e6704c441934b1d717fd50462b90f1a5bde494e60c7137a299a264->enter($__internal_202f8f4608e6704c441934b1d717fd50462b90f1a5bde494e60c7137a299a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b4cac51a1579a49ae4d6edfbadadfd5996c4af0c56b6ea390302c0307c043eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cac51a1579a49ae4d6edfbadadfd5996c4af0c56b6ea390302c0307c043eb1->enter($__internal_b4cac51a1579a49ae4d6edfbadadfd5996c4af0c56b6ea390302c0307c043eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202f8f4608e6704c441934b1d717fd50462b90f1a5bde494e60c7137a299a264->leave($__internal_202f8f4608e6704c441934b1d717fd50462b90f1a5bde494e60c7137a299a264_prof);

        
        $__internal_b4cac51a1579a49ae4d6edfbadadfd5996c4af0c56b6ea390302c0307c043eb1->leave($__internal_b4cac51a1579a49ae4d6edfbadadfd5996c4af0c56b6ea390302c0307c043eb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfc61d666f2082b945b8f3e35471e4d9c840a579874bdf5d98f6c0065530c877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc61d666f2082b945b8f3e35471e4d9c840a579874bdf5d98f6c0065530c877->enter($__internal_cfc61d666f2082b945b8f3e35471e4d9c840a579874bdf5d98f6c0065530c877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9066ed4efe150a68ab171f8e445d87d8800b8427d64e38671ac30f6ae3625cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9066ed4efe150a68ab171f8e445d87d8800b8427d64e38671ac30f6ae3625cf4->enter($__internal_9066ed4efe150a68ab171f8e445d87d8800b8427d64e38671ac30f6ae3625cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9066ed4efe150a68ab171f8e445d87d8800b8427d64e38671ac30f6ae3625cf4->leave($__internal_9066ed4efe150a68ab171f8e445d87d8800b8427d64e38671ac30f6ae3625cf4_prof);

        
        $__internal_cfc61d666f2082b945b8f3e35471e4d9c840a579874bdf5d98f6c0065530c877->leave($__internal_cfc61d666f2082b945b8f3e35471e4d9c840a579874bdf5d98f6c0065530c877_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_96ddadb44187e787bf1ddd76897e0b747d0ce798dc6cc26d4b557fc5f6cb8981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ddadb44187e787bf1ddd76897e0b747d0ce798dc6cc26d4b557fc5f6cb8981->enter($__internal_96ddadb44187e787bf1ddd76897e0b747d0ce798dc6cc26d4b557fc5f6cb8981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6489711d0574c6c78e2514005b3d7b90de943f07c1914bf292810b5cc38638c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6489711d0574c6c78e2514005b3d7b90de943f07c1914bf292810b5cc38638c8->enter($__internal_6489711d0574c6c78e2514005b3d7b90de943f07c1914bf292810b5cc38638c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6489711d0574c6c78e2514005b3d7b90de943f07c1914bf292810b5cc38638c8->leave($__internal_6489711d0574c6c78e2514005b3d7b90de943f07c1914bf292810b5cc38638c8_prof);

        
        $__internal_96ddadb44187e787bf1ddd76897e0b747d0ce798dc6cc26d4b557fc5f6cb8981->leave($__internal_96ddadb44187e787bf1ddd76897e0b747d0ce798dc6cc26d4b557fc5f6cb8981_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_852c97858f7e8755431fff152d59a4688a448a274efeacde194dbef1732eb13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852c97858f7e8755431fff152d59a4688a448a274efeacde194dbef1732eb13c->enter($__internal_852c97858f7e8755431fff152d59a4688a448a274efeacde194dbef1732eb13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaad65c22cc75d74203841f52d2f0c919b4747bcdebf66d8e25eb78edde24b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaad65c22cc75d74203841f52d2f0c919b4747bcdebf66d8e25eb78edde24b1f->enter($__internal_eaad65c22cc75d74203841f52d2f0c919b4747bcdebf66d8e25eb78edde24b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_eaad65c22cc75d74203841f52d2f0c919b4747bcdebf66d8e25eb78edde24b1f->leave($__internal_eaad65c22cc75d74203841f52d2f0c919b4747bcdebf66d8e25eb78edde24b1f_prof);

        
        $__internal_852c97858f7e8755431fff152d59a4688a448a274efeacde194dbef1732eb13c->leave($__internal_852c97858f7e8755431fff152d59a4688a448a274efeacde194dbef1732eb13c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
