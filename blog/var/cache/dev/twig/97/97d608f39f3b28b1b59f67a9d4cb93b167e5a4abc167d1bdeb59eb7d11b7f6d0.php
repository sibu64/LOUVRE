<?php

/* OCBlogBundle:Commentaire:index.html.twig */
class __TwigTemplate_6647b369b8f70859f1fab6431ef77d8c3b51860954105cba768cece15bedbc97 extends Twig_Template
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
        $__internal_7ab1de2ecb268a44b80776115683a891077609107d212483b51d6f2343016422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab1de2ecb268a44b80776115683a891077609107d212483b51d6f2343016422->enter($__internal_7ab1de2ecb268a44b80776115683a891077609107d212483b51d6f2343016422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:index.html.twig"));

        $__internal_daa6e037e8648e3def90a2c5018a7816ebc91d16f9972ed3791939c8a0c57ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa6e037e8648e3def90a2c5018a7816ebc91d16f9972ed3791939c8a0c57ef4->enter($__internal_daa6e037e8648e3def90a2c5018a7816ebc91d16f9972ed3791939c8a0c57ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab1de2ecb268a44b80776115683a891077609107d212483b51d6f2343016422->leave($__internal_7ab1de2ecb268a44b80776115683a891077609107d212483b51d6f2343016422_prof);

        
        $__internal_daa6e037e8648e3def90a2c5018a7816ebc91d16f9972ed3791939c8a0c57ef4->leave($__internal_daa6e037e8648e3def90a2c5018a7816ebc91d16f9972ed3791939c8a0c57ef4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c14a073525592271e7e8ac3a81620959da4346f2c7b2cb3e6168591cb121761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c14a073525592271e7e8ac3a81620959da4346f2c7b2cb3e6168591cb121761->enter($__internal_9c14a073525592271e7e8ac3a81620959da4346f2c7b2cb3e6168591cb121761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21ce1375c2c6472f2f12c1580f94bd98c3e9f6d36c2581853ee1b9b3e5bb01dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ce1375c2c6472f2f12c1580f94bd98c3e9f6d36c2581853ee1b9b3e5bb01dd->enter($__internal_21ce1375c2c6472f2f12c1580f94bd98c3e9f6d36c2581853ee1b9b3e5bb01dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des commentaires</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Pseudo</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">Montrer</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    
";
        
        $__internal_21ce1375c2c6472f2f12c1580f94bd98c3e9f6d36c2581853ee1b9b3e5bb01dd->leave($__internal_21ce1375c2c6472f2f12c1580f94bd98c3e9f6d36c2581853ee1b9b3e5bb01dd_prof);

        
        $__internal_9c14a073525592271e7e8ac3a81620959da4346f2c7b2cb3e6168591cb121761->leave($__internal_9c14a073525592271e7e8ac3a81620959da4346f2c7b2cb3e6168591cb121761_prof);

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
        return array (  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Pseudo</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for commentaire in commentaires %}
            <tr>
                <td><a href=\"{{ path('admin_commentaire_show', { 'id': commentaire.id }) }}\">{{ commentaire.id }}</a></td>
                <td>{{ commentaire.email }}</td>
                <td>{{ commentaire.pseudo }}</td>
                <td>{{ commentaire.contenu }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_commentaire_show', { 'id': commentaire.id }) }}\">Montrer</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_commentaire_edit', { 'id': commentaire.id }) }}\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "OCBlogBundle:Commentaire:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/index.html.twig");
    }
}
