<?php

/* OCBlogBundle:Episode:index.html.twig */
class __TwigTemplate_dec6e5c481470dd29af2f898fcba3cf53c83f3a5b3bf1113198cad48014e2fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCBlogBundle:Episode:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9010bcb1ded8d100b229dc15baf37bda0970f775d8cfa2972bfe546a3a3ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9010bcb1ded8d100b229dc15baf37bda0970f775d8cfa2972bfe546a3a3ff85->enter($__internal_f9010bcb1ded8d100b229dc15baf37bda0970f775d8cfa2972bfe546a3a3ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:index.html.twig"));

        $__internal_04294ff9fbd10de1b052d832c92a62d91398a5fdad56986fb51e835ab0230baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04294ff9fbd10de1b052d832c92a62d91398a5fdad56986fb51e835ab0230baf->enter($__internal_04294ff9fbd10de1b052d832c92a62d91398a5fdad56986fb51e835ab0230baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9010bcb1ded8d100b229dc15baf37bda0970f775d8cfa2972bfe546a3a3ff85->leave($__internal_f9010bcb1ded8d100b229dc15baf37bda0970f775d8cfa2972bfe546a3a3ff85_prof);

        
        $__internal_04294ff9fbd10de1b052d832c92a62d91398a5fdad56986fb51e835ab0230baf->leave($__internal_04294ff9fbd10de1b052d832c92a62d91398a5fdad56986fb51e835ab0230baf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec517c77bc6c31140683d5d66563e4abe5dc2f0b3a07668241272184a570a50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec517c77bc6c31140683d5d66563e4abe5dc2f0b3a07668241272184a570a50c->enter($__internal_ec517c77bc6c31140683d5d66563e4abe5dc2f0b3a07668241272184a570a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bad520b741b3d46b7b7d1ff56af1e34e74e30773288009284aa947235b0a9d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad520b741b3d46b7b7d1ff56af1e34e74e30773288009284aa947235b0a9d89->enter($__internal_bad520b741b3d46b7b7d1ff56af1e34e74e30773288009284aa947235b0a9d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_bad520b741b3d46b7b7d1ff56af1e34e74e30773288009284aa947235b0a9d89->leave($__internal_bad520b741b3d46b7b7d1ff56af1e34e74e30773288009284aa947235b0a9d89_prof);

        
        $__internal_ec517c77bc6c31140683d5d66563e4abe5dc2f0b3a07668241272184a570a50c->leave($__internal_ec517c77bc6c31140683d5d66563e4abe5dc2f0b3a07668241272184a570a50c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_22cc674e64f15de34d3dabd4eff5388199168560f3f839e5f41fa929af2fcbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cc674e64f15de34d3dabd4eff5388199168560f3f839e5f41fa929af2fcbe7->enter($__internal_22cc674e64f15de34d3dabd4eff5388199168560f3f839e5f41fa929af2fcbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf8fd3e04d9fd230d44954fbac5ea36d0d299536d9196013fb0e97f8049aa6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8fd3e04d9fd230d44954fbac5ea36d0d299536d9196013fb0e97f8049aa6e5->enter($__internal_bf8fd3e04d9fd230d44954fbac5ea36d0d299536d9196013fb0e97f8049aa6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Liste des épisodes</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Creation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["episodes"]) ? $context["episodes"] : $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["episode"], "creation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "creation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">Montrer</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_edit", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_new");
        echo "\">Créer un nouvel épisode</a>
        </li>
    </ul>
";
        
        $__internal_bf8fd3e04d9fd230d44954fbac5ea36d0d299536d9196013fb0e97f8049aa6e5->leave($__internal_bf8fd3e04d9fd230d44954fbac5ea36d0d299536d9196013fb0e97f8049aa6e5_prof);

        
        $__internal_22cc674e64f15de34d3dabd4eff5388199168560f3f839e5f41fa929af2fcbe7->leave($__internal_22cc674e64f15de34d3dabd4eff5388199168560f3f839e5f41fa929af2fcbe7_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Episode:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  135 => 40,  123 => 34,  117 => 31,  108 => 27,  104 => 26,  100 => 25,  94 => 24,  91 => 23,  87 => 22,  72 => 9,  63 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Liste des épisodes</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Creation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for episode in episodes %}
            <tr>
                <td><a href=\"{{ path('admin_episode_show', { 'id': episode.id }) }}\">{{ episode.id }}</a></td>
                <td>{{ episode.titre }}</td>
                <td>{{ episode.contenu }}</td>
                <td>{% if episode.creation %}{{ episode.creation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_episode_show', { 'id': episode.id }) }}\">Montrer</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_episode_edit', { 'id': episode.id }) }}\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_new') }}\">Créer un nouvel épisode</a>
        </li>
    </ul>
{% endblock %}
", "OCBlogBundle:Episode:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/index.html.twig");
    }
}
