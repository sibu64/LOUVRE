<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9592255c54b949b5fe64b9a7c79852ffdff6c47111741dcf2886570086b28d9b extends Twig_Template
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
        $__internal_2d3865df1fcdc24f573517dcb46c43936d4024f30954fb4b588df8d89fe70019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3865df1fcdc24f573517dcb46c43936d4024f30954fb4b588df8d89fe70019->enter($__internal_2d3865df1fcdc24f573517dcb46c43936d4024f30954fb4b588df8d89fe70019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6bf3d470af9e2f93d6da3d2aab9a608a099e633ccd9c47c7d9f7c2e69e960c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf3d470af9e2f93d6da3d2aab9a608a099e633ccd9c47c7d9f7c2e69e960c3e->enter($__internal_6bf3d470af9e2f93d6da3d2aab9a608a099e633ccd9c47c7d9f7c2e69e960c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2d3865df1fcdc24f573517dcb46c43936d4024f30954fb4b588df8d89fe70019->leave($__internal_2d3865df1fcdc24f573517dcb46c43936d4024f30954fb4b588df8d89fe70019_prof);

        
        $__internal_6bf3d470af9e2f93d6da3d2aab9a608a099e633ccd9c47c7d9f7c2e69e960c3e->leave($__internal_6bf3d470af9e2f93d6da3d2aab9a608a099e633ccd9c47c7d9f7c2e69e960c3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
