<?php

/* OCBlogBundle:Episode:index.html.twig */
class __TwigTemplate_7377090028d1ac1c6159e1a1e3ac5bc8bef6e86f9e5db310fedf0ee5d9efcfc2 extends Twig_Template
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
        $__internal_fb617083a54a33ec52de50b141faf52e30fdfa3e82b3ff579f95786c6c130390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb617083a54a33ec52de50b141faf52e30fdfa3e82b3ff579f95786c6c130390->enter($__internal_fb617083a54a33ec52de50b141faf52e30fdfa3e82b3ff579f95786c6c130390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:index.html.twig"));

        $__internal_90f70968ce203dd3746fdc8652cccc52b283d8bb952c01f0595ca04805bd8109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f70968ce203dd3746fdc8652cccc52b283d8bb952c01f0595ca04805bd8109->enter($__internal_90f70968ce203dd3746fdc8652cccc52b283d8bb952c01f0595ca04805bd8109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb617083a54a33ec52de50b141faf52e30fdfa3e82b3ff579f95786c6c130390->leave($__internal_fb617083a54a33ec52de50b141faf52e30fdfa3e82b3ff579f95786c6c130390_prof);

        
        $__internal_90f70968ce203dd3746fdc8652cccc52b283d8bb952c01f0595ca04805bd8109->leave($__internal_90f70968ce203dd3746fdc8652cccc52b283d8bb952c01f0595ca04805bd8109_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_890f641b180540568fffb27bea103cb3e2d24cb33dd3faf06043a040b0964394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890f641b180540568fffb27bea103cb3e2d24cb33dd3faf06043a040b0964394->enter($__internal_890f641b180540568fffb27bea103cb3e2d24cb33dd3faf06043a040b0964394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dafc704415a11440d61c61c86d6c344046b1dbd4aa8c19ef90d37c7f7cabe2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafc704415a11440d61c61c86d6c344046b1dbd4aa8c19ef90d37c7f7cabe2ba->enter($__internal_dafc704415a11440d61c61c86d6c344046b1dbd4aa8c19ef90d37c7f7cabe2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_dafc704415a11440d61c61c86d6c344046b1dbd4aa8c19ef90d37c7f7cabe2ba->leave($__internal_dafc704415a11440d61c61c86d6c344046b1dbd4aa8c19ef90d37c7f7cabe2ba_prof);

        
        $__internal_890f641b180540568fffb27bea103cb3e2d24cb33dd3faf06043a040b0964394->leave($__internal_890f641b180540568fffb27bea103cb3e2d24cb33dd3faf06043a040b0964394_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b4caa8914b035cd4b4c81ba8e83ed4df17b58160ceb1ad7961c57235356526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b4caa8914b035cd4b4c81ba8e83ed4df17b58160ceb1ad7961c57235356526->enter($__internal_c9b4caa8914b035cd4b4c81ba8e83ed4df17b58160ceb1ad7961c57235356526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_802c3504d4f75063ce506319610f08a1284d4c22ff1736bf9d79fceb522ba984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c3504d4f75063ce506319610f08a1284d4c22ff1736bf9d79fceb522ba984->enter($__internal_802c3504d4f75063ce506319610f08a1284d4c22ff1736bf9d79fceb522ba984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
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
        <li>
           <a class=\"btn btn-primary btn-block\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_commentaire_index");
        echo "\">Gérer les commentaires</a>
    </ul>
";
        
        $__internal_802c3504d4f75063ce506319610f08a1284d4c22ff1736bf9d79fceb522ba984->leave($__internal_802c3504d4f75063ce506319610f08a1284d4c22ff1736bf9d79fceb522ba984_prof);

        
        $__internal_c9b4caa8914b035cd4b4c81ba8e83ed4df17b58160ceb1ad7961c57235356526->leave($__internal_c9b4caa8914b035cd4b4c81ba8e83ed4df17b58160ceb1ad7961c57235356526_prof);

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
        return array (  148 => 48,  142 => 45,  135 => 40,  123 => 34,  117 => 31,  108 => 27,  104 => 26,  100 => 25,  94 => 24,  91 => 23,  87 => 22,  72 => 9,  63 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
        <li>
           <a class=\"btn btn-primary btn-block\" href=\"{{url('admin_commentaire_index')}}\">Gérer les commentaires</a>
    </ul>
{% endblock %}
", "OCBlogBundle:Episode:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/index.html.twig");
    }
}
