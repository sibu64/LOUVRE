<?php

/* OCBlogBundle:Commentaire:index.html.twig */
class __TwigTemplate_da2b9aaebe833167dbfeb350a62d5db9e9d2c45db57404f2a1f67aaf54b27228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Commentaire:index.html.twig", 1);
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
        $__internal_39e4adaf764c53f5276dc18d4c031d40ecb1885ee149a2b8e90b7d8ec66e4550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e4adaf764c53f5276dc18d4c031d40ecb1885ee149a2b8e90b7d8ec66e4550->enter($__internal_39e4adaf764c53f5276dc18d4c031d40ecb1885ee149a2b8e90b7d8ec66e4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:index.html.twig"));

        $__internal_92d2528e437a508421e9a8fb130272773d9143aaac4763d36905cd49ba47e433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2528e437a508421e9a8fb130272773d9143aaac4763d36905cd49ba47e433->enter($__internal_92d2528e437a508421e9a8fb130272773d9143aaac4763d36905cd49ba47e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e4adaf764c53f5276dc18d4c031d40ecb1885ee149a2b8e90b7d8ec66e4550->leave($__internal_39e4adaf764c53f5276dc18d4c031d40ecb1885ee149a2b8e90b7d8ec66e4550_prof);

        
        $__internal_92d2528e437a508421e9a8fb130272773d9143aaac4763d36905cd49ba47e433->leave($__internal_92d2528e437a508421e9a8fb130272773d9143aaac4763d36905cd49ba47e433_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73629b0a073eb1ef9f44cc020a6d4c626bcc4a2b4d4e42a7adacdff80b080c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73629b0a073eb1ef9f44cc020a6d4c626bcc4a2b4d4e42a7adacdff80b080c6->enter($__internal_a73629b0a073eb1ef9f44cc020a6d4c626bcc4a2b4d4e42a7adacdff80b080c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5839cf434ee1b54922bacef6ac52d81eb49a3172a6819586355eb1b7a7447dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5839cf434ee1b54922bacef6ac52d81eb49a3172a6819586355eb1b7a7447dcc->enter($__internal_5839cf434ee1b54922bacef6ac52d81eb49a3172a6819586355eb1b7a7447dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des commentaires</h1>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires licites</h2>
            ";
        // line 8
        echo twig_include($this->env, $context, "OCBlogBundle:Commentaire:displayComment.html.twig", array("commentaires" => ($context["commentairesLicites"] ?? $this->getContext($context, "commentairesLicites")), "boutonModere" => true));
        echo "
        </div>
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires signalés</h2>
            ";
        // line 12
        echo twig_include($this->env, $context, "OCBlogBundle:Commentaire:displayComment.html.twig", array("commentaires" => ($context["commentairesSignales"] ?? $this->getContext($context, "commentairesSignales")), "boutonAutorise" => true, "boutonModere" => true));
        echo "
        </div>
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires modérés</h2>
            ";
        // line 16
        echo twig_include($this->env, $context, "OCBlogBundle:Commentaire:displayComment.html.twig", array("commentaires" => ($context["commentairesModeres"] ?? $this->getContext($context, "commentairesModeres")), "boutonAutorise" => true));
        echo "
        </div>
    </div>
        
            <a class=\"btn btn-primary btn-block\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_episode_index");
        echo "\">Gérer les épisodes</a>  


";
        
        $__internal_5839cf434ee1b54922bacef6ac52d81eb49a3172a6819586355eb1b7a7447dcc->leave($__internal_5839cf434ee1b54922bacef6ac52d81eb49a3172a6819586355eb1b7a7447dcc_prof);

        
        $__internal_a73629b0a073eb1ef9f44cc020a6d4c626bcc4a2b4d4e42a7adacdff80b080c6->leave($__internal_a73629b0a073eb1ef9f44cc020a6d4c626bcc4a2b4d4e42a7adacdff80b080c6_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Commentaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  69 => 16,  62 => 12,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des commentaires</h1>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires licites</h2>
            {{ include('OCBlogBundle:Commentaire:displayComment.html.twig', {'commentaires':commentairesLicites,boutonModere:true})}}
        </div>
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires signalés</h2>
            {{ include('OCBlogBundle:Commentaire:displayComment.html.twig', {'commentaires':commentairesSignales,boutonAutorise:true, boutonModere:true})}}
        </div>
        <div class=\"col-lg-12\">
            <h2 style=\"color:#C82829;\" class=\"text-center\">Commentaires modérés</h2>
            {{ include('OCBlogBundle:Commentaire:displayComment.html.twig', {'commentaires':commentairesModeres, boutonAutorise:true})}}
        </div>
    </div>
        
            <a class=\"btn btn-primary btn-block\" href=\"{{url('admin_episode_index')}}\">Gérer les épisodes</a>  


{% endblock %}


", "OCBlogBundle:Commentaire:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/index.html.twig");
    }
}
