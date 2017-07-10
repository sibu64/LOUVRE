<?php

/* OCBlogBundle:Commentaire:displayComment.html.twig */
class __TwigTemplate_99e777d01f993a0913c8fcfa03f19d7cebbc3bc9d87d8947b2ca11b20e8bd692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c95e35536686f820ccbd43c1fc4999e8f15a69ca0d521b14755811c177fda59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c95e35536686f820ccbd43c1fc4999e8f15a69ca0d521b14755811c177fda59->enter($__internal_4c95e35536686f820ccbd43c1fc4999e8f15a69ca0d521b14755811c177fda59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:displayComment.html.twig"));

        $__internal_daae8d952791b5b7a5233aeb9e29f8b0d358c53892044cf799c2714fe756196d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daae8d952791b5b7a5233aeb9e29f8b0d358c53892044cf799c2714fe756196d->enter($__internal_daae8d952791b5b7a5233aeb9e29f8b0d358c53892044cf799c2714fe756196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Commentaire:displayComment.html.twig"));

        // line 1
        echo "
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Pseudo</th>
                        <th>Contenu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 13
            echo "                        <tr>
                            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                    </li>
                                    ";
            // line 22
            if (array_key_exists("boutonAutorise", $context)) {
                echo " 
                                    <li>
                                        
                                        <a href='";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_licite", array("commentaire" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "?token=";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("liciteToken"), "html", null, true);
                echo "'>Autoriser le commentaire</a>
                                    </li>
                                    ";
            }
            // line 28
            echo "                                    ";
            if (array_key_exists("boutonModere", $context)) {
                // line 29
                echo "                                    <li>                                        
                                        <a href='";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_modere", array("commentaire" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "?token=";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("modereToken"), "html", null, true);
                echo "'>Modérer le commentaire</a>
                                    </li>
                                    ";
            }
            // line 33
            echo "                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
";
        
        $__internal_4c95e35536686f820ccbd43c1fc4999e8f15a69ca0d521b14755811c177fda59->leave($__internal_4c95e35536686f820ccbd43c1fc4999e8f15a69ca0d521b14755811c177fda59_prof);

        
        $__internal_daae8d952791b5b7a5233aeb9e29f8b0d358c53892044cf799c2714fe756196d->leave($__internal_daae8d952791b5b7a5233aeb9e29f8b0d358c53892044cf799c2714fe756196d_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Commentaire:displayComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  93 => 33,  85 => 30,  82 => 29,  79 => 28,  71 => 25,  65 => 22,  60 => 20,  53 => 16,  49 => 15,  45 => 14,  42 => 13,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Pseudo</th>
                        <th>Contenu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commentaire in commentaires %}
                        <tr>
                            <td>{{ commentaire.email }}</td>
                            <td>{{ commentaire.pseudo }}</td>
                            <td>{{ commentaire.contenu }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('admin_commentaire_edit', { 'id': commentaire.id }) }}\">Modifier</a>
                                    </li>
                                    {% if boutonAutorise is defined %} 
                                    <li>
                                        
                                        <a href='{{path('oc_blog_licite',{'commentaire':commentaire.id})}}?token={{csrf_token('liciteToken')}}'>Autoriser le commentaire</a>
                                    </li>
                                    {% endif %}
                                    {% if boutonModere is defined %}
                                    <li>                                        
                                        <a href='{{path('oc_blog_modere',{'commentaire':commentaire.id})}}?token={{csrf_token('modereToken')}}'>Modérer le commentaire</a>
                                    </li>
                                    {% endif %}
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
", "OCBlogBundle:Commentaire:displayComment.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Commentaire/displayComment.html.twig");
    }
}
