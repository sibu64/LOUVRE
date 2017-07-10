<?php

/* OCBlogBundle:Commentaire:edit.html.twig */
class __TwigTemplate_d1fdf194984d9144b17e51312a7a7d07c3e433c87f2176ca1ad3dc6b03664a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Commentaire:edit.html.twig", 1);
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
        $__internal_a2f4166250f0a3c1ca9bbe7b1edc922afb39560583c6558d3dc9d7b76f860c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f4166250f0a3c1ca9bbe7b1edc922afb39560583c6558d3dc9d7b76f860c3b->enter($__internal_a2f4166250f0a3c1ca9bbe7b1edc922afb39560583c6558d3dc9d7b76f860c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:edit.html.twig"));

        $__internal_df3e8f1f528145694240a673ee1a3de8334a8e79f80d2d4dd2b3536030319ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3e8f1f528145694240a673ee1a3de8334a8e79f80d2d4dd2b3536030319ff1->enter($__internal_df3e8f1f528145694240a673ee1a3de8334a8e79f80d2d4dd2b3536030319ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f4166250f0a3c1ca9bbe7b1edc922afb39560583c6558d3dc9d7b76f860c3b->leave($__internal_a2f4166250f0a3c1ca9bbe7b1edc922afb39560583c6558d3dc9d7b76f860c3b_prof);

        
        $__internal_df3e8f1f528145694240a673ee1a3de8334a8e79f80d2d4dd2b3536030319ff1->leave($__internal_df3e8f1f528145694240a673ee1a3de8334a8e79f80d2d4dd2b3536030319ff1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa34893c07df8a30af1d7cd678aba46ae7d631f26ac2e4b39f328bb17533e865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa34893c07df8a30af1d7cd678aba46ae7d631f26ac2e4b39f328bb17533e865->enter($__internal_fa34893c07df8a30af1d7cd678aba46ae7d631f26ac2e4b39f328bb17533e865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68d45832edddc5b1c48f205479b2b24890d2bdb7fe252f3177b19872b5e36045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d45832edddc5b1c48f205479b2b24890d2bdb7fe252f3177b19872b5e36045->enter($__internal_68d45832edddc5b1c48f205479b2b24890d2bdb7fe252f3177b19872b5e36045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier un commentaire</h1>

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
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
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
        
        $__internal_68d45832edddc5b1c48f205479b2b24890d2bdb7fe252f3177b19872b5e36045->leave($__internal_68d45832edddc5b1c48f205479b2b24890d2bdb7fe252f3177b19872b5e36045_prof);

        
        $__internal_fa34893c07df8a30af1d7cd678aba46ae7d631f26ac2e4b39f328bb17533e865->leave($__internal_fa34893c07df8a30af1d7cd678aba46ae7d631f26ac2e4b39f328bb17533e865_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Commentaire:edit.html.twig";
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
    <h1>Modifier un commentaire</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_commentaire_index') }}\">Retour à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "OCBlogBundle:Commentaire:edit.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/edit.html.twig");
    }
}
