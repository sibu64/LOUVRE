<?php

/* OCBlogBundle:Episode:show.html.twig */
class __TwigTemplate_1348ba5d1f6907c40af6912ef9a2c3deb9227497a4e84a26f0e700274c4d459f extends Twig_Template
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
        $__internal_290cb038fef147e2d2c04385e339a1d980dbfdfe6aa7dff140ae77520a730978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290cb038fef147e2d2c04385e339a1d980dbfdfe6aa7dff140ae77520a730978->enter($__internal_290cb038fef147e2d2c04385e339a1d980dbfdfe6aa7dff140ae77520a730978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:show.html.twig"));

        $__internal_2cb9f3e717c737e77d83020c82324fc1d60ff8ab24707cbcc202f072f49214b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb9f3e717c737e77d83020c82324fc1d60ff8ab24707cbcc202f072f49214b6->enter($__internal_2cb9f3e717c737e77d83020c82324fc1d60ff8ab24707cbcc202f072f49214b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Episode:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290cb038fef147e2d2c04385e339a1d980dbfdfe6aa7dff140ae77520a730978->leave($__internal_290cb038fef147e2d2c04385e339a1d980dbfdfe6aa7dff140ae77520a730978_prof);

        
        $__internal_2cb9f3e717c737e77d83020c82324fc1d60ff8ab24707cbcc202f072f49214b6->leave($__internal_2cb9f3e717c737e77d83020c82324fc1d60ff8ab24707cbcc202f072f49214b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c97ff29f9798464190dac1ede2dd66e08fdd1c97fcc6bd06e22b766d477ed02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97ff29f9798464190dac1ede2dd66e08fdd1c97fcc6bd06e22b766d477ed02f->enter($__internal_c97ff29f9798464190dac1ede2dd66e08fdd1c97fcc6bd06e22b766d477ed02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc50342fedbcbc07e2a3720ccf65546d6d182b4b17c8956ec396c1b8233aa5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc50342fedbcbc07e2a3720ccf65546d6d182b4b17c8956ec396c1b8233aa5e7->enter($__internal_bc50342fedbcbc07e2a3720ccf65546d6d182b4b17c8956ec396c1b8233aa5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creation</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "creation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "creation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_index");
        echo "\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_episode_edit", array("id" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li class=\"center\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bc50342fedbcbc07e2a3720ccf65546d6d182b4b17c8956ec396c1b8233aa5e7->leave($__internal_bc50342fedbcbc07e2a3720ccf65546d6d182b4b17c8956ec396c1b8233aa5e7_prof);

        
        $__internal_c97ff29f9798464190dac1ede2dd66e08fdd1c97fcc6bd06e22b766d477ed02f->leave($__internal_c97ff29f9798464190dac1ede2dd66e08fdd1c97fcc6bd06e22b766d477ed02f_prof);

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
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <a href=\"{{ path('admin_episode_index') }}\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"{{ path('admin_episode_edit', { 'id': episode.id }) }}\">Modifier</a>
        </li>
        <li class=\"center\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "OCBlogBundle:Episode:show.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Episode/show.html.twig");
    }
}
