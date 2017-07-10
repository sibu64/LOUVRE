<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_dbaf50560aed7559c48b51cb4ea7caffca074bfae0bbd0b495a34089ab8064e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ec2d26a6636f3e01e08bb5d2f3535a177842572c1cdabef99255d9c78461d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec2d26a6636f3e01e08bb5d2f3535a177842572c1cdabef99255d9c78461d8c->enter($__internal_5ec2d26a6636f3e01e08bb5d2f3535a177842572c1cdabef99255d9c78461d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4dba8b7c8187279a48b9d18724e558c1593db13c26b544ba5d20314411bb7818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dba8b7c8187279a48b9d18724e558c1593db13c26b544ba5d20314411bb7818->enter($__internal_4dba8b7c8187279a48b9d18724e558c1593db13c26b544ba5d20314411bb7818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_5ec2d26a6636f3e01e08bb5d2f3535a177842572c1cdabef99255d9c78461d8c->leave($__internal_5ec2d26a6636f3e01e08bb5d2f3535a177842572c1cdabef99255d9c78461d8c_prof);

        
        $__internal_4dba8b7c8187279a48b9d18724e558c1593db13c26b544ba5d20314411bb7818->leave($__internal_4dba8b7c8187279a48b9d18724e558c1593db13c26b544ba5d20314411bb7818_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
