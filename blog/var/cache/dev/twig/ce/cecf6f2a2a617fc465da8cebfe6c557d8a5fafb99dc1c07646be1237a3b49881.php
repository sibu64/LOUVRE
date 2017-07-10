<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_96245b682387af822c8cd6d28e014d0390f47fa6b680c1c6c33962840df7abb2 extends Twig_Template
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
        $__internal_8676d40b2c70e2801e49162fa3c5d30955f298d98bea06c82b678d8ff349c69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8676d40b2c70e2801e49162fa3c5d30955f298d98bea06c82b678d8ff349c69d->enter($__internal_8676d40b2c70e2801e49162fa3c5d30955f298d98bea06c82b678d8ff349c69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_6827c8ff67bbe5c5094667f22e4769894c3e0cef7d5302b8a1a199e038982b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6827c8ff67bbe5c5094667f22e4769894c3e0cef7d5302b8a1a199e038982b43->enter($__internal_6827c8ff67bbe5c5094667f22e4769894c3e0cef7d5302b8a1a199e038982b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8676d40b2c70e2801e49162fa3c5d30955f298d98bea06c82b678d8ff349c69d->leave($__internal_8676d40b2c70e2801e49162fa3c5d30955f298d98bea06c82b678d8ff349c69d_prof);

        
        $__internal_6827c8ff67bbe5c5094667f22e4769894c3e0cef7d5302b8a1a199e038982b43->leave($__internal_6827c8ff67bbe5c5094667f22e4769894c3e0cef7d5302b8a1a199e038982b43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
