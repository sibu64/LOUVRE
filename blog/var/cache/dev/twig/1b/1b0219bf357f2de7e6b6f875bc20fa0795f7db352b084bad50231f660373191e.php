<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_da5eff4de9b1cfd5151dfb498d18b960ac1ebe4b30d82a989f9136fbd2ac1746 extends Twig_Template
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
        $__internal_2c4be0d42f199366f529fead3ee8ed384d1c114c9ac2f2c5dc150b063c0ca305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4be0d42f199366f529fead3ee8ed384d1c114c9ac2f2c5dc150b063c0ca305->enter($__internal_2c4be0d42f199366f529fead3ee8ed384d1c114c9ac2f2c5dc150b063c0ca305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c812dbd1b03dd45f67b04efd63f71087ba07650e5dab29b6381d6c31760be03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c812dbd1b03dd45f67b04efd63f71087ba07650e5dab29b6381d6c31760be03a->enter($__internal_c812dbd1b03dd45f67b04efd63f71087ba07650e5dab29b6381d6c31760be03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2c4be0d42f199366f529fead3ee8ed384d1c114c9ac2f2c5dc150b063c0ca305->leave($__internal_2c4be0d42f199366f529fead3ee8ed384d1c114c9ac2f2c5dc150b063c0ca305_prof);

        
        $__internal_c812dbd1b03dd45f67b04efd63f71087ba07650e5dab29b6381d6c31760be03a->leave($__internal_c812dbd1b03dd45f67b04efd63f71087ba07650e5dab29b6381d6c31760be03a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
