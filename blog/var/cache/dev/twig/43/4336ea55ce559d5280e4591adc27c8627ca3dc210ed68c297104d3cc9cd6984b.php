<?php

/* OCBlogBundle:Episode:show.html.twig */
class __TwigTemplate_892a8c43905c569694a2f7976e95d28d6a6a93669b451c4d59f8b3530d973292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Episode:show.html.twig", 1);
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
        $__internal_fbda10c85d892e638a3a6ed3e0e4ae541a06dd27c1a6e46d12bf80568388a952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbda10c85d892e638a3a6ed3e0e4ae541a06dd27c1a6e46d12bf80568388a952->enter($__internal_fbda10c85d892e638a3a6ed3e0e4ae541a06dd27c1a6e46d12bf80568388a952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:show.html.twig"));

        $__internal_380a9a4263bab853a01b0e219b484cab08f513235cf2687b1e31111b7f1e9cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380a9a4263bab853a01b0e219b484cab08f513235cf2687b1e31111b7f1e9cda->enter($__internal_380a9a4263bab853a01b0e219b484cab08f513235cf2687b1e31111b7f1e9cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbda10c85d892e638a3a6ed3e0e4ae541a06dd27c1a6e46d12bf80568388a952->leave($__internal_fbda10c85d892e638a3a6ed3e0e4ae541a06dd27c1a6e46d12bf80568388a952_prof);

        
        $__internal_380a9a4263bab853a01b0e219b484cab08f513235cf2687b1e31111b7f1e9cda->leave($__internal_380a9a4263bab853a01b0e219b484cab08f513235cf2687b1e31111b7f1e9cda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c7fe8981fe772f12a56e6b4b43f2b07e13f9102982faf091e5cf5d669b73c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7fe8981fe772f12a56e6b4b43f2b07e13f9102982faf091e5cf5d669b73c98->enter($__internal_3c7fe8981fe772f12a56e6b4b43f2b07e13f9102982faf091e5cf5d669b73c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7272c7e7dee657f69c1f6385f6b6c8044eca892f271e376bd9347c43e0d34d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7272c7e7dee657f69c1f6385f6b6c8044eca892f271e376bd9347c43e0d34d8d->enter($__internal_7272c7e7dee657f69c1f6385f6b6c8044eca892f271e376bd9347c43e0d34d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Episode</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creation</th>
                <td>";
        // line 23
        if ($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "creation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "creation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_edit", array("id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", array()))), "html", null, true);
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
        
        $__internal_7272c7e7dee657f69c1f6385f6b6c8044eca892f271e376bd9347c43e0d34d8d->leave($__internal_7272c7e7dee657f69c1f6385f6b6c8044eca892f271e376bd9347c43e0d34d8d_prof);

        
        $__internal_3c7fe8981fe772f12a56e6b4b43f2b07e13f9102982faf091e5cf5d669b73c98->leave($__internal_3c7fe8981fe772f12a56e6b4b43f2b07e13f9102982faf091e5cf5d669b73c98_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Episode:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  103 => 36,  97 => 33,  91 => 30,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episode</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ episode.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ episode.titre }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ episode.contenu }}</td>
            </tr>
            <tr>
                <th>Creation</th>
                <td>{% if episode.creation %}{{ episode.creation|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_index') }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block  btn-info  text-center\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_edit', { 'id': episode.id }) }}\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12  btn  btn-primary  text-center\" style=\"margin-top: 10px;\">Modifier</a>
        </li>
        <li class=\"center\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-block btn-danger  text-center\" style=\"margin-top: 10px;\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </div>
{% endblock %}
", "OCBlogBundle:Episode:show.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/show.html.twig");
    }
}
