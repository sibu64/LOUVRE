<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c3747d0f78a0b3876f44470863f13e8ee3ac0326231f44a7b359330407d8127 extends Twig_Template
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
        $__internal_f3ba98ccc387f9a3773f79d8aa750ae8e01582e2333fcaaa5d9cbcc1930cac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ba98ccc387f9a3773f79d8aa750ae8e01582e2333fcaaa5d9cbcc1930cac6e->enter($__internal_f3ba98ccc387f9a3773f79d8aa750ae8e01582e2333fcaaa5d9cbcc1930cac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2b2686f431d2253f2a9ad950ee5a1456750d0a3698755d0ce206dc1f0df0b231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2686f431d2253f2a9ad950ee5a1456750d0a3698755d0ce206dc1f0df0b231->enter($__internal_2b2686f431d2253f2a9ad950ee5a1456750d0a3698755d0ce206dc1f0df0b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f3ba98ccc387f9a3773f79d8aa750ae8e01582e2333fcaaa5d9cbcc1930cac6e->leave($__internal_f3ba98ccc387f9a3773f79d8aa750ae8e01582e2333fcaaa5d9cbcc1930cac6e_prof);

        
        $__internal_2b2686f431d2253f2a9ad950ee5a1456750d0a3698755d0ce206dc1f0df0b231->leave($__internal_2b2686f431d2253f2a9ad950ee5a1456750d0a3698755d0ce206dc1f0df0b231_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
