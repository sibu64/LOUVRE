<?php

/* OCBlogBundle:Commentaire:show.html.twig */
class __TwigTemplate_c0b2f2be20113ca74b48e78942657bcc0838f15e6dda7ee49c192cf1459c10a4 extends Twig_Template
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
        $__internal_573304835fc47802ff265aa6bb2f09ab746e3b791b50efdcdc8be70fb22c6682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573304835fc47802ff265aa6bb2f09ab746e3b791b50efdcdc8be70fb22c6682->enter($__internal_573304835fc47802ff265aa6bb2f09ab746e3b791b50efdcdc8be70fb22c6682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:show.html.twig"));

        $__internal_8948c87297ba25e3dda3980d9bcaf65f66d65eb098e3fed13388cbf12a1c331d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8948c87297ba25e3dda3980d9bcaf65f66d65eb098e3fed13388cbf12a1c331d->enter($__internal_8948c87297ba25e3dda3980d9bcaf65f66d65eb098e3fed13388cbf12a1c331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573304835fc47802ff265aa6bb2f09ab746e3b791b50efdcdc8be70fb22c6682->leave($__internal_573304835fc47802ff265aa6bb2f09ab746e3b791b50efdcdc8be70fb22c6682_prof);

        
        $__internal_8948c87297ba25e3dda3980d9bcaf65f66d65eb098e3fed13388cbf12a1c331d->leave($__internal_8948c87297ba25e3dda3980d9bcaf65f66d65eb098e3fed13388cbf12a1c331d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e6cfcd00111dd909591a782d2af5c95d86e068973df985b75ed0721d19ebe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e6cfcd00111dd909591a782d2af5c95d86e068973df985b75ed0721d19ebe9->enter($__internal_22e6cfcd00111dd909591a782d2af5c95d86e068973df985b75ed0721d19ebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5653ebfc4ffac1b6764e6e558f4ca50e5cd67b09f251a20711ee7cc5ec422ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5653ebfc4ffac1b6764e6e558f4ca50e5cd67b09f251a20711ee7cc5ec422ab4->enter($__internal_5653ebfc4ffac1b6764e6e558f4ca50e5cd67b09f251a20711ee7cc5ec422ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pseudo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "pseudo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li class=\"center\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_index");
        echo "\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_edit", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()))), "html", null, true);
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
        
        $__internal_5653ebfc4ffac1b6764e6e558f4ca50e5cd67b09f251a20711ee7cc5ec422ab4->leave($__internal_5653ebfc4ffac1b6764e6e558f4ca50e5cd67b09f251a20711ee7cc5ec422ab4_prof);

        
        $__internal_22e6cfcd00111dd909591a782d2af5c95d86e068973df985b75ed0721d19ebe9->leave($__internal_22e6cfcd00111dd909591a782d2af5c95d86e068973df985b75ed0721d19ebe9_prof);

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
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Commentaire</h1>

    <table>
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

    <ul>
        <li class=\"center\">
            <a href=\"{{ path('admin_commentaire_index') }}\">Retour à la liste</a>
        </li>
        <li class=\"center\">
            <a href=\"{{ path('admin_commentaire_edit', { 'id': commentaire.id }) }}\">Modifier</a>
        </li>
        <li class=\"center\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "OCBlogBundle:Commentaire:show.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/show.html.twig");
    }
}
