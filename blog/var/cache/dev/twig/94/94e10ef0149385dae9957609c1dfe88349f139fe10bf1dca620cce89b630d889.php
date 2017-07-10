<?php

/* OCBlogBundle:Episode:edit.html.twig */
class __TwigTemplate_a8ae591a19fcd8175d948feffad23e5475e914daebd556087bc9dcaa826aee7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Episode:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9efda50dc4e5b237fb6d236f15bd0ba34348fcc0b19c3f2bafd1cee5ad94b710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efda50dc4e5b237fb6d236f15bd0ba34348fcc0b19c3f2bafd1cee5ad94b710->enter($__internal_9efda50dc4e5b237fb6d236f15bd0ba34348fcc0b19c3f2bafd1cee5ad94b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:edit.html.twig"));

        $__internal_f0989a0e1fccf4a8b7710c2b45207dcff7cbbc10d45f745e2e82c0bce5cdfbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0989a0e1fccf4a8b7710c2b45207dcff7cbbc10d45f745e2e82c0bce5cdfbf3->enter($__internal_f0989a0e1fccf4a8b7710c2b45207dcff7cbbc10d45f745e2e82c0bce5cdfbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efda50dc4e5b237fb6d236f15bd0ba34348fcc0b19c3f2bafd1cee5ad94b710->leave($__internal_9efda50dc4e5b237fb6d236f15bd0ba34348fcc0b19c3f2bafd1cee5ad94b710_prof);

        
        $__internal_f0989a0e1fccf4a8b7710c2b45207dcff7cbbc10d45f745e2e82c0bce5cdfbf3->leave($__internal_f0989a0e1fccf4a8b7710c2b45207dcff7cbbc10d45f745e2e82c0bce5cdfbf3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7742492dbfd0438625fbb0e3c1201c9faaaf6a7f44387613826f8e1c1ece704a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7742492dbfd0438625fbb0e3c1201c9faaaf6a7f44387613826f8e1c1ece704a->enter($__internal_7742492dbfd0438625fbb0e3c1201c9faaaf6a7f44387613826f8e1c1ece704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39399482f773e6e4666e84ef1fd1dfa2aa939ccbce11b65da244593487aef6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39399482f773e6e4666e84ef1fd1dfa2aa939ccbce11b65da244593487aef6c7->enter($__internal_39399482f773e6e4666e84ef1fd1dfa2aa939ccbce11b65da244593487aef6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier un épisode</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_39399482f773e6e4666e84ef1fd1dfa2aa939ccbce11b65da244593487aef6c7->leave($__internal_39399482f773e6e4666e84ef1fd1dfa2aa939ccbce11b65da244593487aef6c7_prof);

        
        $__internal_7742492dbfd0438625fbb0e3c1201c9faaaf6a7f44387613826f8e1c1ece704a->leave($__internal_7742492dbfd0438625fbb0e3c1201c9faaaf6a7f44387613826f8e1c1ece704a_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Episode:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Modifier un épisode</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_index') }}\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "OCBlogBundle:Episode:edit.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/edit.html.twig");
    }
}
