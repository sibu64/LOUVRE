<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d08ab9935a4bbad0f3bb34d9fea88657cba4f16dc901ac41334c527c86bb9aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08ab9935a4bbad0f3bb34d9fea88657cba4f16dc901ac41334c527c86bb9aeb->enter($__internal_d08ab9935a4bbad0f3bb34d9fea88657cba4f16dc901ac41334c527c86bb9aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b596b855a811ba4128ea4d142217495459c3502de2de2fb1018aa6ee3e29aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b596b855a811ba4128ea4d142217495459c3502de2de2fb1018aa6ee3e29aaf2->enter($__internal_b596b855a811ba4128ea4d142217495459c3502de2de2fb1018aa6ee3e29aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08ab9935a4bbad0f3bb34d9fea88657cba4f16dc901ac41334c527c86bb9aeb->leave($__internal_d08ab9935a4bbad0f3bb34d9fea88657cba4f16dc901ac41334c527c86bb9aeb_prof);

        
        $__internal_b596b855a811ba4128ea4d142217495459c3502de2de2fb1018aa6ee3e29aaf2->leave($__internal_b596b855a811ba4128ea4d142217495459c3502de2de2fb1018aa6ee3e29aaf2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf09a1800c0522dde47c8ae3b82519fb943f1cc40c3eb736976894ae5c0a4f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf09a1800c0522dde47c8ae3b82519fb943f1cc40c3eb736976894ae5c0a4f28->enter($__internal_bf09a1800c0522dde47c8ae3b82519fb943f1cc40c3eb736976894ae5c0a4f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57a1cc2cc810773b5940ca6d94385ff1094abd0cfca2eb9235651c6e0b708dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a1cc2cc810773b5940ca6d94385ff1094abd0cfca2eb9235651c6e0b708dd9->enter($__internal_57a1cc2cc810773b5940ca6d94385ff1094abd0cfca2eb9235651c6e0b708dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_57a1cc2cc810773b5940ca6d94385ff1094abd0cfca2eb9235651c6e0b708dd9->leave($__internal_57a1cc2cc810773b5940ca6d94385ff1094abd0cfca2eb9235651c6e0b708dd9_prof);

        
        $__internal_bf09a1800c0522dde47c8ae3b82519fb943f1cc40c3eb736976894ae5c0a4f28->leave($__internal_bf09a1800c0522dde47c8ae3b82519fb943f1cc40c3eb736976894ae5c0a4f28_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9811ecc08c38cc97e0b8df16003aec6f6fe9c58240299c1326adf606ae58eae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9811ecc08c38cc97e0b8df16003aec6f6fe9c58240299c1326adf606ae58eae6->enter($__internal_9811ecc08c38cc97e0b8df16003aec6f6fe9c58240299c1326adf606ae58eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9aa867356931f80c6296f1f5e3ba15d074abb5d49954d7b738f0da8a9436fc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa867356931f80c6296f1f5e3ba15d074abb5d49954d7b738f0da8a9436fc48->enter($__internal_9aa867356931f80c6296f1f5e3ba15d074abb5d49954d7b738f0da8a9436fc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9aa867356931f80c6296f1f5e3ba15d074abb5d49954d7b738f0da8a9436fc48->leave($__internal_9aa867356931f80c6296f1f5e3ba15d074abb5d49954d7b738f0da8a9436fc48_prof);

        
        $__internal_9811ecc08c38cc97e0b8df16003aec6f6fe9c58240299c1326adf606ae58eae6->leave($__internal_9811ecc08c38cc97e0b8df16003aec6f6fe9c58240299c1326adf606ae58eae6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89ebf84df16da7406702384b770ad3d4964be9be7064f40479546c580ef6ba8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ebf84df16da7406702384b770ad3d4964be9be7064f40479546c580ef6ba8d->enter($__internal_89ebf84df16da7406702384b770ad3d4964be9be7064f40479546c580ef6ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d7107649fd2ad03d47023b40495688c67f110c04758fb86e39b74e0257a8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7107649fd2ad03d47023b40495688c67f110c04758fb86e39b74e0257a8492->enter($__internal_9d7107649fd2ad03d47023b40495688c67f110c04758fb86e39b74e0257a8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9d7107649fd2ad03d47023b40495688c67f110c04758fb86e39b74e0257a8492->leave($__internal_9d7107649fd2ad03d47023b40495688c67f110c04758fb86e39b74e0257a8492_prof);

        
        $__internal_89ebf84df16da7406702384b770ad3d4964be9be7064f40479546c580ef6ba8d->leave($__internal_89ebf84df16da7406702384b770ad3d4964be9be7064f40479546c580ef6ba8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
