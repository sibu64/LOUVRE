<?php

/* OCBlogBundle:Episode:new.html.twig */
class __TwigTemplate_1c8743b4a47a7002b114e6bd4dadfb869920085a2f844af67ff483842cd09f57 extends Twig_Template
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
        $__internal_f5466d34dc545c780e30831f7e438d25c298e2bc5bc031b77a45dda9061c4631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5466d34dc545c780e30831f7e438d25c298e2bc5bc031b77a45dda9061c4631->enter($__internal_f5466d34dc545c780e30831f7e438d25c298e2bc5bc031b77a45dda9061c4631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:new.html.twig"));

        $__internal_ae6b8dcc15c2dfa099063815fa6121b729c1fb8fe4a9fe1941f7df97edd9749e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6b8dcc15c2dfa099063815fa6121b729c1fb8fe4a9fe1941f7df97edd9749e->enter($__internal_ae6b8dcc15c2dfa099063815fa6121b729c1fb8fe4a9fe1941f7df97edd9749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5466d34dc545c780e30831f7e438d25c298e2bc5bc031b77a45dda9061c4631->leave($__internal_f5466d34dc545c780e30831f7e438d25c298e2bc5bc031b77a45dda9061c4631_prof);

        
        $__internal_ae6b8dcc15c2dfa099063815fa6121b729c1fb8fe4a9fe1941f7df97edd9749e->leave($__internal_ae6b8dcc15c2dfa099063815fa6121b729c1fb8fe4a9fe1941f7df97edd9749e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0aa3451403dcaaca43871986480af08032fe718290382b893672086219190f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aa3451403dcaaca43871986480af08032fe718290382b893672086219190f3->enter($__internal_b0aa3451403dcaaca43871986480af08032fe718290382b893672086219190f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2aabd2ed668e660064fd7ba5d7472fc3682d4a0e543725ba1cea3d45f1aa22e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aabd2ed668e660064fd7ba5d7472fc3682d4a0e543725ba1cea3d45f1aa22e6->enter($__internal_2aabd2ed668e660064fd7ba5d7472fc3682d4a0e543725ba1cea3d45f1aa22e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2aabd2ed668e660064fd7ba5d7472fc3682d4a0e543725ba1cea3d45f1aa22e6->leave($__internal_2aabd2ed668e660064fd7ba5d7472fc3682d4a0e543725ba1cea3d45f1aa22e6_prof);

        
        $__internal_b0aa3451403dcaaca43871986480af08032fe718290382b893672086219190f3->leave($__internal_b0aa3451403dcaaca43871986480af08032fe718290382b893672086219190f3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3b31fcacfea8caef13a239583c8091d6b23b40b104606df9b9fe81246ca95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3b31fcacfea8caef13a239583c8091d6b23b40b104606df9b9fe81246ca95c->enter($__internal_8d3b31fcacfea8caef13a239583c8091d6b23b40b104606df9b9fe81246ca95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2afed9db1db7a3952cb0f6db30176a7c0e8372be5d77e0e59dac67f7646f9811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afed9db1db7a3952cb0f6db30176a7c0e8372be5d77e0e59dac67f7646f9811->enter($__internal_2afed9db1db7a3952cb0f6db30176a7c0e8372be5d77e0e59dac67f7646f9811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
    <h1>Création d'un nouvel épisode</h1>

    
    <ul style=\"background-color: transparent;\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <li> 
            <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-success text-center\" value=\"Créer\" />
        </li>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    
        <li class=\"center\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\" style=\"margin-top: 10px;\">Retour à la liste</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_2afed9db1db7a3952cb0f6db30176a7c0e8372be5d77e0e59dac67f7646f9811->leave($__internal_2afed9db1db7a3952cb0f6db30176a7c0e8372be5d77e0e59dac67f7646f9811_prof);

        
        $__internal_8d3b31fcacfea8caef13a239583c8091d6b23b40b104606df9b9fe81246ca95c->leave($__internal_8d3b31fcacfea8caef13a239583c8091d6b23b40b104606df9b9fe81246ca95c_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e8103b66aa1db53a527652a9f418edd0b3803f7a7542eba6aeef7e3bb55df22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8103b66aa1db53a527652a9f418edd0b3803f7a7542eba6aeef7e3bb55df22->enter($__internal_5e8103b66aa1db53a527652a9f418edd0b3803f7a7542eba6aeef7e3bb55df22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_58cb52151a786d740fcfc329c563c24b775d75f4d1bdc337fec8f323f2e56cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cb52151a786d740fcfc329c563c24b775d75f4d1bdc337fec8f323f2e56cc4->enter($__internal_58cb52151a786d740fcfc329c563c24b775d75f4d1bdc337fec8f323f2e56cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_58cb52151a786d740fcfc329c563c24b775d75f4d1bdc337fec8f323f2e56cc4->leave($__internal_58cb52151a786d740fcfc329c563c24b775d75f4d1bdc337fec8f323f2e56cc4_prof);

        
        $__internal_5e8103b66aa1db53a527652a9f418edd0b3803f7a7542eba6aeef7e3bb55df22->leave($__internal_5e8103b66aa1db53a527652a9f418edd0b3803f7a7542eba6aeef7e3bb55df22_prof);

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
        return array (  122 => 29,  113 => 28,  98 => 23,  91 => 19,  84 => 15,  80 => 14,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
    <div class=\"container\">
    <h1>Création d'un nouvel épisode</h1>

    
    <ul style=\"background-color: transparent;\">
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <li> 
            <input type=\"submit\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-success text-center\" value=\"Créer\" />
        </li>
    {{ form_end(form) }}

    
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_index') }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\" style=\"margin-top: 10px;\">Retour à la liste</a>
        </li>
    </ul>
    </div>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    {% endblock %}
", "OCBlogBundle:Episode:new.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/new.html.twig");
    }
}
