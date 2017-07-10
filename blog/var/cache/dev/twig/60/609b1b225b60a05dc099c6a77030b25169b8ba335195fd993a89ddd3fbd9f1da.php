<?php

/* OCBlogBundle:Episode:new.html.twig */
class __TwigTemplate_980d26c94d396462c4af3d53ea54dcae850a9075eb94d89129bd7ac3d05c749c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Episode:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c44aef16fd4ab1f84943c821f2422966aa13e9fdf24f4378a79d3eed21c4d952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44aef16fd4ab1f84943c821f2422966aa13e9fdf24f4378a79d3eed21c4d952->enter($__internal_c44aef16fd4ab1f84943c821f2422966aa13e9fdf24f4378a79d3eed21c4d952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:new.html.twig"));

        $__internal_a2851aade23d9388cb2a16ebdc5d411a96bebea0bae3c13f1e7774cf1fc0b3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2851aade23d9388cb2a16ebdc5d411a96bebea0bae3c13f1e7774cf1fc0b3da->enter($__internal_a2851aade23d9388cb2a16ebdc5d411a96bebea0bae3c13f1e7774cf1fc0b3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44aef16fd4ab1f84943c821f2422966aa13e9fdf24f4378a79d3eed21c4d952->leave($__internal_c44aef16fd4ab1f84943c821f2422966aa13e9fdf24f4378a79d3eed21c4d952_prof);

        
        $__internal_a2851aade23d9388cb2a16ebdc5d411a96bebea0bae3c13f1e7774cf1fc0b3da->leave($__internal_a2851aade23d9388cb2a16ebdc5d411a96bebea0bae3c13f1e7774cf1fc0b3da_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04ee66bdbe36be353c6eacaead0de646e8fe095644ff7611885a7b123e2f41ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ee66bdbe36be353c6eacaead0de646e8fe095644ff7611885a7b123e2f41ee->enter($__internal_04ee66bdbe36be353c6eacaead0de646e8fe095644ff7611885a7b123e2f41ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89e270b194cfc0f931c08acd6a04eb91f3564a94d5dfcbd7a6f0709c98d6b860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e270b194cfc0f931c08acd6a04eb91f3564a94d5dfcbd7a6f0709c98d6b860->enter($__internal_89e270b194cfc0f931c08acd6a04eb91f3564a94d5dfcbd7a6f0709c98d6b860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_89e270b194cfc0f931c08acd6a04eb91f3564a94d5dfcbd7a6f0709c98d6b860->leave($__internal_89e270b194cfc0f931c08acd6a04eb91f3564a94d5dfcbd7a6f0709c98d6b860_prof);

        
        $__internal_04ee66bdbe36be353c6eacaead0de646e8fe095644ff7611885a7b123e2f41ee->leave($__internal_04ee66bdbe36be353c6eacaead0de646e8fe095644ff7611885a7b123e2f41ee_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_841d9aa7905683d30162806428890cb13754a7040688303a1690adfd1f843567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841d9aa7905683d30162806428890cb13754a7040688303a1690adfd1f843567->enter($__internal_841d9aa7905683d30162806428890cb13754a7040688303a1690adfd1f843567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5096435b780dd29d3a8e0383dd3f86f2d7cddb831c70cf7756c421edd0c2de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5096435b780dd29d3a8e0383dd3f86f2d7cddb831c70cf7756c421edd0c2de1->enter($__internal_e5096435b780dd29d3a8e0383dd3f86f2d7cddb831c70cf7756c421edd0c2de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Création d'un nouvel épisode</h1>

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
";
        
        $__internal_e5096435b780dd29d3a8e0383dd3f86f2d7cddb831c70cf7756c421edd0c2de1->leave($__internal_e5096435b780dd29d3a8e0383dd3f86f2d7cddb831c70cf7756c421edd0c2de1_prof);

        
        $__internal_841d9aa7905683d30162806428890cb13754a7040688303a1690adfd1f843567->leave($__internal_841d9aa7905683d30162806428890cb13754a7040688303a1690adfd1f843567_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_977b3c5896165b048f3de00bea61e52ff7bd373371241e46bdba4df3f3fe4a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977b3c5896165b048f3de00bea61e52ff7bd373371241e46bdba4df3f3fe4a92->enter($__internal_977b3c5896165b048f3de00bea61e52ff7bd373371241e46bdba4df3f3fe4a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68efeac7a39f2b05388539226f4fdffdb5d2f3d47da35b4d27c5c937cf502270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68efeac7a39f2b05388539226f4fdffdb5d2f3d47da35b4d27c5c937cf502270->enter($__internal_68efeac7a39f2b05388539226f4fdffdb5d2f3d47da35b4d27c5c937cf502270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_68efeac7a39f2b05388539226f4fdffdb5d2f3d47da35b4d27c5c937cf502270->leave($__internal_68efeac7a39f2b05388539226f4fdffdb5d2f3d47da35b4d27c5c937cf502270_prof);

        
        $__internal_977b3c5896165b048f3de00bea61e52ff7bd373371241e46bdba4df3f3fe4a92->leave($__internal_977b3c5896165b048f3de00bea61e52ff7bd373371241e46bdba4df3f3fe4a92_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Episode:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  107 => 22,  93 => 18,  86 => 14,  81 => 12,  77 => 11,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{parent()}}
{% endblock %}


{% block body %}
    <h1>Création d'un nouvel épisode</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

    <ul>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_index') }}\">Retour à la liste</a>
        </li>
    </ul>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    {% endblock %}
", "OCBlogBundle:Episode:new.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/new.html.twig");
    }
}
