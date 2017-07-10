<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6e09a6297135c0a55321d3fab65db5c734a9504d3c23d2cdcf6ff7a46cc67abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ae1cdaa4ba06ecb88fe97c58b8482c69efc3b76b04a32f63bb8aae9a028754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ae1cdaa4ba06ecb88fe97c58b8482c69efc3b76b04a32f63bb8aae9a028754->enter($__internal_f3ae1cdaa4ba06ecb88fe97c58b8482c69efc3b76b04a32f63bb8aae9a028754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7bf2005181b1876364e1c81944b4643677cdeffdd631618e8ea078fd54d42365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf2005181b1876364e1c81944b4643677cdeffdd631618e8ea078fd54d42365->enter($__internal_7bf2005181b1876364e1c81944b4643677cdeffdd631618e8ea078fd54d42365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3ae1cdaa4ba06ecb88fe97c58b8482c69efc3b76b04a32f63bb8aae9a028754->leave($__internal_f3ae1cdaa4ba06ecb88fe97c58b8482c69efc3b76b04a32f63bb8aae9a028754_prof);

        
        $__internal_7bf2005181b1876364e1c81944b4643677cdeffdd631618e8ea078fd54d42365->leave($__internal_7bf2005181b1876364e1c81944b4643677cdeffdd631618e8ea078fd54d42365_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5e9dd835f5eb71553bf3eef3ce3f3ded11b092a60499d053f3424445ca41a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e9dd835f5eb71553bf3eef3ce3f3ded11b092a60499d053f3424445ca41a8e->enter($__internal_e5e9dd835f5eb71553bf3eef3ce3f3ded11b092a60499d053f3424445ca41a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09bc44a678745c2386f83efa9ec416955ef31136e28f7f203a6801ceacb8fe2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bc44a678745c2386f83efa9ec416955ef31136e28f7f203a6801ceacb8fe2c->enter($__internal_09bc44a678745c2386f83efa9ec416955ef31136e28f7f203a6801ceacb8fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_09bc44a678745c2386f83efa9ec416955ef31136e28f7f203a6801ceacb8fe2c->leave($__internal_09bc44a678745c2386f83efa9ec416955ef31136e28f7f203a6801ceacb8fe2c_prof);

        
        $__internal_e5e9dd835f5eb71553bf3eef3ce3f3ded11b092a60499d053f3424445ca41a8e->leave($__internal_e5e9dd835f5eb71553bf3eef3ce3f3ded11b092a60499d053f3424445ca41a8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
