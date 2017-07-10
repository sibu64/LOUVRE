<?php

/* OCBlogBundle:Default:index.html.twig */
class __TwigTemplate_e689d413d57f5c4cd7e15b87da264946dd50a58b7d050dc3572602f817bca9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCBlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07b50a043fc68e6e9df8ed2284bcae2568fd1b78857599b2ceba1f569c8c11d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b50a043fc68e6e9df8ed2284bcae2568fd1b78857599b2ceba1f569c8c11d9->enter($__internal_07b50a043fc68e6e9df8ed2284bcae2568fd1b78857599b2ceba1f569c8c11d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Default:index.html.twig"));

        $__internal_bb81141b6c57bb973353e22c9c4c10400f72c223c4f4394327e9c4efdc248460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb81141b6c57bb973353e22c9c4c10400f72c223c4f4394327e9c4efdc248460->enter($__internal_bb81141b6c57bb973353e22c9c4c10400f72c223c4f4394327e9c4efdc248460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b50a043fc68e6e9df8ed2284bcae2568fd1b78857599b2ceba1f569c8c11d9->leave($__internal_07b50a043fc68e6e9df8ed2284bcae2568fd1b78857599b2ceba1f569c8c11d9_prof);

        
        $__internal_bb81141b6c57bb973353e22c9c4c10400f72c223c4f4394327e9c4efdc248460->leave($__internal_bb81141b6c57bb973353e22c9c4c10400f72c223c4f4394327e9c4efdc248460_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23e7cdf915314fde636caad6c9fecad7f561ac42761346084c69d68c6731aafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e7cdf915314fde636caad6c9fecad7f561ac42761346084c69d68c6731aafc->enter($__internal_23e7cdf915314fde636caad6c9fecad7f561ac42761346084c69d68c6731aafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_647d9dce6b5a7cbed6a2690fdc89598cab30700d44e550008a394139e485266c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647d9dce6b5a7cbed6a2690fdc89598cab30700d44e550008a394139e485266c->enter($__internal_647d9dce6b5a7cbed6a2690fdc89598cab30700d44e550008a394139e485266c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_647d9dce6b5a7cbed6a2690fdc89598cab30700d44e550008a394139e485266c->leave($__internal_647d9dce6b5a7cbed6a2690fdc89598cab30700d44e550008a394139e485266c_prof);

        
        $__internal_23e7cdf915314fde636caad6c9fecad7f561ac42761346084c69d68c6731aafc->leave($__internal_23e7cdf915314fde636caad6c9fecad7f561ac42761346084c69d68c6731aafc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5dfb6895082284d2e221ceb4de6a05fd7691abea1a21b58ee8d61d221a6e56b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfb6895082284d2e221ceb4de6a05fd7691abea1a21b58ee8d61d221a6e56b2->enter($__internal_5dfb6895082284d2e221ceb4de6a05fd7691abea1a21b58ee8d61d221a6e56b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73e40b11b5dc932f3b178ec18d04da0e81f7a608a5c085503fdb2049f834a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e40b11b5dc932f3b178ec18d04da0e81f7a608a5c085503fdb2049f834a5fd->enter($__internal_73e40b11b5dc932f3b178ec18d04da0e81f7a608a5c085503fdb2049f834a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_73e40b11b5dc932f3b178ec18d04da0e81f7a608a5c085503fdb2049f834a5fd->leave($__internal_73e40b11b5dc932f3b178ec18d04da0e81f7a608a5c085503fdb2049f834a5fd_prof);

        
        $__internal_5dfb6895082284d2e221ceb4de6a05fd7691abea1a21b58ee8d61d221a6e56b2->leave($__internal_5dfb6895082284d2e221ceb4de6a05fd7691abea1a21b58ee8d61d221a6e56b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff4c24551ffa1320fc8eb115d3ab69601fa5e05c0fd847e2e802bae30549a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff4c24551ffa1320fc8eb115d3ab69601fa5e05c0fd847e2e802bae30549a1a->enter($__internal_fff4c24551ffa1320fc8eb115d3ab69601fa5e05c0fd847e2e802bae30549a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e37a36c20678beb6daa2b670d0d9b59548a1942d959fec24033ac855fd3434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e37a36c20678beb6daa2b670d0d9b59548a1942d959fec24033ac855fd3434->enter($__internal_f6e37a36c20678beb6daa2b670d0d9b59548a1942d959fec24033ac855fd3434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">


        <h1>Bienvenue sur le Blog du nouveau roman de Jean Forteroche: \"Billet simple pour l'Alaska\"</h1>
        <div class=\"contenu col-lg-12\">
            <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "titre", array()), "html", null, true);
        echo "</h2>
            ";
        // line 14
        echo $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "contenu", array());
        echo "
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "creation", array()), "d/m/Y"), "html", null, true);
        echo "

        </div>

        <div class=\"contenu col-lg-12\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "commentaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 21
            echo "                ";
            if ( !$this->getAttribute($context["commentaire"], "modere", array())) {
                // line 22
                echo "                    <div> 
                        <a href='";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_signalement", array("commentaire" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "?token=";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("signalementToken"), "html", null, true);
                echo "'>Signaler le commentaire</a>
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
                echo " 
                        ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", array()), "html", null, true);
                echo "
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "email", array()), "html", null, true);
                echo " 
                        ";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "creation", array()), "d/m/Y"), "html", null, true);
                echo "
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "episode", array()), "id", array()), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>


        <div class=\"col-lg-12 text-right\">
            <h3 class=\"text-center btn-primary\" style=\"font-weight: bold;\">Commentez!</h3>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["createForm"] ?? $this->getContext($context, "createForm")), 'form_start');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["createForm"] ?? $this->getContext($context, "createForm")), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary text-right btn-block\" value=\"Envoyer\" />
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["createForm"] ?? $this->getContext($context, "createForm")), 'form_end');
        echo "
        </div>



        ";
        // line 45
        if ((($context["nbEpisodes"] ?? $this->getContext($context, "nbEpisodes")) > 0)) {
            // line 46
            echo "            <nav aria-label=\"Page navigation\" class=\"text-center\">
                <ul class=\"pagination\">
                    ";
            // line 48
            if ((($context["numeroEpisode"] ?? $this->getContext($context, "numeroEpisode")) != 1)) {
                echo "  
                        <li> <a href=\"";
                // line 49
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_homepage", array("numeroEpisode" => 1));
                echo "\" aria-label=\"First\"><span aria-hidden=\"true\">Premier</span></a></li>
                        ";
            }
            // line 51
            echo "
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbEpisodes"] ?? $this->getContext($context, "nbEpisodes"))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                        <li ";
                if ((($context["numeroEpisode"] ?? $this->getContext($context, "numeroEpisode")) == $this->getAttribute($context["loop"], "index", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_homepage", array("numeroEpisode" => $this->getAttribute($context["loop"], "index", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " </a></li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                    ";
            // line 56
            if ((($context["numeroEpisode"] ?? $this->getContext($context, "numeroEpisode")) != ($context["nbEpisodes"] ?? $this->getContext($context, "nbEpisodes")))) {
                echo " 
                        <li><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_homepage", array("numeroEpisode" => ($context["nbEpisodes"] ?? $this->getContext($context, "nbEpisodes")))), "html", null, true);
                echo "\" aria-label=\"Last\"><span aria-hidden=\"true\">Dernier</span></a></li>
                        ";
            }
            // line 59
            echo "                </ul>
            </nav>
        ";
        }
        // line 62
        echo "
    </div>
";
        
        $__internal_f6e37a36c20678beb6daa2b670d0d9b59548a1942d959fec24033ac855fd3434->leave($__internal_f6e37a36c20678beb6daa2b670d0d9b59548a1942d959fec24033ac855fd3434_prof);

        
        $__internal_fff4c24551ffa1320fc8eb115d3ab69601fa5e05c0fd847e2e802bae30549a1a->leave($__internal_fff4c24551ffa1320fc8eb115d3ab69601fa5e05c0fd847e2e802bae30549a1a_prof);

    }

    public function getTemplateName()
    {
        return "OCBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 62,  251 => 59,  246 => 57,  242 => 56,  239 => 55,  216 => 53,  199 => 52,  196 => 51,  191 => 49,  187 => 48,  183 => 46,  181 => 45,  173 => 40,  168 => 38,  164 => 37,  151 => 31,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  123 => 23,  120 => 22,  117 => 21,  113 => 20,  105 => 15,  101 => 14,  97 => 13,  90 => 8,  81 => 7,  68 => 5,  59 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}{% endblock %}
{% block stylesheets %}
    {{parent()}}
{% endblock %}
{% block body %}
    <div class=\"container\">


        <h1>Bienvenue sur le Blog du nouveau roman de Jean Forteroche: \"Billet simple pour l'Alaska\"</h1>
        <div class=\"contenu col-lg-12\">
            <h2>{{episode.titre}}</h2>
            {{episode.contenu|raw}}
            {{episode.creation|date('d/m/Y')}}

        </div>

        <div class=\"contenu col-lg-12\">
            {% for commentaire in episode.commentaires %}
                {% if not commentaire.modere %}
                    <div> 
                        <a href='{{path('oc_blog_signalement',{'commentaire':commentaire.id})}}?token={{csrf_token('signalementToken')}}'>Signaler le commentaire</a>
                        {{commentaire.contenu}} 
                        {{commentaire.pseudo}}
                        {{commentaire.email}} 
                        {{commentaire.creation|date('d/m/Y')}}
                        {{commentaire.episode.id}}
                    </div>
                {% endif %}
            {% endfor %}        
        </div>


        <div class=\"col-lg-12 text-right\">
            <h3 class=\"text-center btn-primary\" style=\"font-weight: bold;\">Commentez!</h3>
            {{ form_start(createForm) }}
            {{ form_widget(createForm) }}
            <input type=\"submit\" class=\"btn btn-primary text-right btn-block\" value=\"Envoyer\" />
            {{ form_end(createForm) }}
        </div>



        {% if nbEpisodes > 0 %}
            <nav aria-label=\"Page navigation\" class=\"text-center\">
                <ul class=\"pagination\">
                    {% if numeroEpisode!=1 %}  
                        <li> <a href=\"{{ path('oc_blog_homepage', {'numeroEpisode':1}) }}\" aria-label=\"First\"><span aria-hidden=\"true\">Premier</span></a></li>
                        {% endif %}

                    {% for i in 1..nbEpisodes %}
                        <li {% if numeroEpisode==loop.index %}class=\"active\"{% endif %}><a href=\"{{ path('oc_blog_homepage', {'numeroEpisode':loop.index}) }}\">{{ loop.index }} </a></li>
                        {% endfor %}

                    {% if numeroEpisode!=nbEpisodes %} 
                        <li><a href=\"{{ path('oc_blog_homepage', {'numeroEpisode':nbEpisodes}) }}\" aria-label=\"Last\"><span aria-hidden=\"true\">Dernier</span></a></li>
                        {% endif %}
                </ul>
            </nav>
        {% endif %}

    </div>
{% endblock %}

", "OCBlogBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
