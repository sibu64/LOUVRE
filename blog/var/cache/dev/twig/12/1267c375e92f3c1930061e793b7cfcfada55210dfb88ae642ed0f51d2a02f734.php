<?php

/* OCBlogBundle:Commentaire:show.html.twig */
class __TwigTemplate_b8b5faa8c1c09016ef7d853621ebd20c1df4e97747a27f36a2d3257a6b2ba03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Commentaire:show.html.twig", 1);
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
        $__internal_2353f151a4041ecb704a41a176076f03a7ab5913bc7979f9b97ecf2e9fc975f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2353f151a4041ecb704a41a176076f03a7ab5913bc7979f9b97ecf2e9fc975f0->enter($__internal_2353f151a4041ecb704a41a176076f03a7ab5913bc7979f9b97ecf2e9fc975f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:show.html.twig"));

        $__internal_b589e607bcab9dbe5438ae5736b47a39b88dd49161c7d5f6cf2ee2bbd5b6eb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b589e607bcab9dbe5438ae5736b47a39b88dd49161c7d5f6cf2ee2bbd5b6eb0b->enter($__internal_b589e607bcab9dbe5438ae5736b47a39b88dd49161c7d5f6cf2ee2bbd5b6eb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2353f151a4041ecb704a41a176076f03a7ab5913bc7979f9b97ecf2e9fc975f0->leave($__internal_2353f151a4041ecb704a41a176076f03a7ab5913bc7979f9b97ecf2e9fc975f0_prof);

        
        $__internal_b589e607bcab9dbe5438ae5736b47a39b88dd49161c7d5f6cf2ee2bbd5b6eb0b->leave($__internal_b589e607bcab9dbe5438ae5736b47a39b88dd49161c7d5f6cf2ee2bbd5b6eb0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bee93a992d1bbd0f27f409f3e0dca4b191a09ef805d10dae58f3371cf1c6d22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee93a992d1bbd0f27f409f3e0dca4b191a09ef805d10dae58f3371cf1c6d22c->enter($__internal_bee93a992d1bbd0f27f409f3e0dca4b191a09ef805d10dae58f3371cf1c6d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23978757d1db56258adf0846136cb47cfd9ecd1cfc3243e2460916c646fe4352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23978757d1db56258adf0846136cb47cfd9ecd1cfc3243e2460916c646fe4352->enter($__internal_23978757d1db56258adf0846136cb47cfd9ecd1cfc3243e2460916c646fe4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Commentaire</h1>

    <table class=\"text-center\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pseudo</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "pseudo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul  class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"Justified button group\"> 
        <li class=\"center\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_index");
        echo "\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_edit", array("id" => $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "id", array()))), "html", null, true);
        echo "\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12  btn  btn-primary  text-center\" style=\"margin-top: 10px;\">Modifier</a>
        </li>
        <li class=\"center\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-danger  text-center\" style=\"margin-top: 10px;\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    </div>
";
        
        $__internal_23978757d1db56258adf0846136cb47cfd9ecd1cfc3243e2460916c646fe4352->leave($__internal_23978757d1db56258adf0846136cb47cfd9ecd1cfc3243e2460916c646fe4352_prof);

        
        $__internal_bee93a992d1bbd0f27f409f3e0dca4b191a09ef805d10dae58f3371cf1c6d22c->leave($__internal_bee93a992d1bbd0f27f409f3e0dca4b191a09ef805d10dae58f3371cf1c6d22c_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Commentaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  101 => 36,  95 => 33,  89 => 30,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Commentaire</h1>

    <table class=\"text-center\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ commentaire.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ commentaire.email }}</td>
            </tr>
            <tr>
                <th>Pseudo</th>
                <td>{{ commentaire.pseudo }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ commentaire.contenu }}</td>
            </tr>
        </tbody>
    </table>

    <ul  class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"Justified button group\"> 
        <li class=\"center\">
            <a href=\"{{ path('admin_commentaire_index') }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"{{ path('admin_commentaire_edit', { 'id': commentaire.id }) }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12  btn  btn-primary  text-center\" style=\"margin-top: 10px;\">Modifier</a>
        </li>
        <li class=\"center\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-danger  text-center\" style=\"margin-top: 10px;\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </div>
{% endblock %}
", "OCBlogBundle:Commentaire:show.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/show.html.twig");
    }
}
