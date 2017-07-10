<?php

/* OCBlogBundle:Commentaire:edit.html.twig */
class __TwigTemplate_2e94f9fe3a5dfa2f39241cc29e4b001840c391ac8a8bd75256d1d743df9dc7f3 extends Twig_Template
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
        $__internal_727f8cbc14eb275e9079de2f1931c5524a02feababfb47d3fabfdd69a320ef7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727f8cbc14eb275e9079de2f1931c5524a02feababfb47d3fabfdd69a320ef7b->enter($__internal_727f8cbc14eb275e9079de2f1931c5524a02feababfb47d3fabfdd69a320ef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:edit.html.twig"));

        $__internal_8348dec1b61d54b6f2d7ea59bdffdc60fbff149ef57e941b3002071e4268e42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8348dec1b61d54b6f2d7ea59bdffdc60fbff149ef57e941b3002071e4268e42f->enter($__internal_8348dec1b61d54b6f2d7ea59bdffdc60fbff149ef57e941b3002071e4268e42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727f8cbc14eb275e9079de2f1931c5524a02feababfb47d3fabfdd69a320ef7b->leave($__internal_727f8cbc14eb275e9079de2f1931c5524a02feababfb47d3fabfdd69a320ef7b_prof);

        
        $__internal_8348dec1b61d54b6f2d7ea59bdffdc60fbff149ef57e941b3002071e4268e42f->leave($__internal_8348dec1b61d54b6f2d7ea59bdffdc60fbff149ef57e941b3002071e4268e42f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dfa6be764ae0e5c9a85e6ba41f84e5c1de4628398e7f48082d89b53eed504d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa6be764ae0e5c9a85e6ba41f84e5c1de4628398e7f48082d89b53eed504d5->enter($__internal_7dfa6be764ae0e5c9a85e6ba41f84e5c1de4628398e7f48082d89b53eed504d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5e3f4c2dd5ca800fa294d6e7d031fe90555d78f5a6b4532efaa045d86d0e83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e3f4c2dd5ca800fa294d6e7d031fe90555d78f5a6b4532efaa045d86d0e83b->enter($__internal_b5e3f4c2dd5ca800fa294d6e7d031fe90555d78f5a6b4532efaa045d86d0e83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Modifier un commentaire</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"col-xs-10 col-sm-10 col-md-11 col-lg-11  btn  btn-primary control text-center\" style=\"margin-bottom:10px;margin-left:40px;";
        // line 9
        echo "\" value=\"Modifier\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_index");
        echo "\" class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 btn btn-block  btn-info  text-center\" style=\"margin-bottom:10px;padding-left:40px; \">Retour à la liste</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_b5e3f4c2dd5ca800fa294d6e7d031fe90555d78f5a6b4532efaa045d86d0e83b->leave($__internal_b5e3f4c2dd5ca800fa294d6e7d031fe90555d78f5a6b4532efaa045d86d0e83b_prof);

        
        $__internal_7dfa6be764ae0e5c9a85e6ba41f84e5c1de4628398e7f48082d89b53eed504d5->leave($__internal_7dfa6be764ae0e5c9a85e6ba41f84e5c1de4628398e7f48082d89b53eed504d5_prof);

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
        return array (  72 => 14,  65 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
    <h1>Modifier un commentaire</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"col-xs-10 col-sm-10 col-md-11 col-lg-11  btn  btn-primary control text-center\" style=\"margin-bottom:10px;margin-left:40px;{#width:94%;#}\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_commentaire_index') }}\" class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10 btn btn-block  btn-info  text-center\" style=\"margin-bottom:10px;padding-left:40px; \">Retour à la liste</a>
        </li>
    </ul>
    </div>
{% endblock %}
", "OCBlogBundle:Commentaire:edit.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/edit.html.twig");
    }
}
