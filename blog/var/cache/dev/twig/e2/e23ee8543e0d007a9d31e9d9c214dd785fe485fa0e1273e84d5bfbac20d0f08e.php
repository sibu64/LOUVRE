<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e57b0d23bd4b7c80038834e44b39fda26de50dd4f3fd8503cd20a6eb288e42dd extends Twig_Template
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
        $__internal_1ffadf52bfd63b383d84aa856b00c1398c7f5f6f1602e2967fe73b23b255fc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffadf52bfd63b383d84aa856b00c1398c7f5f6f1602e2967fe73b23b255fc74->enter($__internal_1ffadf52bfd63b383d84aa856b00c1398c7f5f6f1602e2967fe73b23b255fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_06718b6b730f90bd468c3a318a650eca60191a6af4452d0ab43758f573a1ae7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06718b6b730f90bd468c3a318a650eca60191a6af4452d0ab43758f573a1ae7d->enter($__internal_06718b6b730f90bd468c3a318a650eca60191a6af4452d0ab43758f573a1ae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1ffadf52bfd63b383d84aa856b00c1398c7f5f6f1602e2967fe73b23b255fc74->leave($__internal_1ffadf52bfd63b383d84aa856b00c1398c7f5f6f1602e2967fe73b23b255fc74_prof);

        
        $__internal_06718b6b730f90bd468c3a318a650eca60191a6af4452d0ab43758f573a1ae7d->leave($__internal_06718b6b730f90bd468c3a318a650eca60191a6af4452d0ab43758f573a1ae7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
