<?php

/* OCBlogBundle:Default:index.html.twig */
class __TwigTemplate_07f69db22cb2a63109c4565006b68d8b91c56f573e5c76f7a81d2131a14a0d68 extends Twig_Template
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
        $__internal_14ab50cc2e19f06742fa7667aab5b7831152f6332adb0662c59bde4584310410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ab50cc2e19f06742fa7667aab5b7831152f6332adb0662c59bde4584310410->enter($__internal_14ab50cc2e19f06742fa7667aab5b7831152f6332adb0662c59bde4584310410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Default:index.html.twig"));

        $__internal_e0cbf4622bca6db0903b72ba8bc9176671e97173ea7cf021b4acf4e3c3925c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cbf4622bca6db0903b72ba8bc9176671e97173ea7cf021b4acf4e3c3925c62->enter($__internal_e0cbf4622bca6db0903b72ba8bc9176671e97173ea7cf021b4acf4e3c3925c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14ab50cc2e19f06742fa7667aab5b7831152f6332adb0662c59bde4584310410->leave($__internal_14ab50cc2e19f06742fa7667aab5b7831152f6332adb0662c59bde4584310410_prof);

        
        $__internal_e0cbf4622bca6db0903b72ba8bc9176671e97173ea7cf021b4acf4e3c3925c62->leave($__internal_e0cbf4622bca6db0903b72ba8bc9176671e97173ea7cf021b4acf4e3c3925c62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_637bef2ed0a89bbe17d34e9321a5b08df2ecc5ac66db61e0fab4776d48f5fba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637bef2ed0a89bbe17d34e9321a5b08df2ecc5ac66db61e0fab4776d48f5fba0->enter($__internal_637bef2ed0a89bbe17d34e9321a5b08df2ecc5ac66db61e0fab4776d48f5fba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fe983524d8f25fc5ccbfae7634d67c16f1dceb03e64416cf74fadf33fde2dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe983524d8f25fc5ccbfae7634d67c16f1dceb03e64416cf74fadf33fde2dfd->enter($__internal_3fe983524d8f25fc5ccbfae7634d67c16f1dceb03e64416cf74fadf33fde2dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3fe983524d8f25fc5ccbfae7634d67c16f1dceb03e64416cf74fadf33fde2dfd->leave($__internal_3fe983524d8f25fc5ccbfae7634d67c16f1dceb03e64416cf74fadf33fde2dfd_prof);

        
        $__internal_637bef2ed0a89bbe17d34e9321a5b08df2ecc5ac66db61e0fab4776d48f5fba0->leave($__internal_637bef2ed0a89bbe17d34e9321a5b08df2ecc5ac66db61e0fab4776d48f5fba0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2698f2c462b271b824c06ad35e746d49c6a24ba8b5ce8696006b787ec589fda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2698f2c462b271b824c06ad35e746d49c6a24ba8b5ce8696006b787ec589fda7->enter($__internal_2698f2c462b271b824c06ad35e746d49c6a24ba8b5ce8696006b787ec589fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_500bd7d11c563005f079bc3a8b8859e1744fd66721f3730fab1acbf683ad965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500bd7d11c563005f079bc3a8b8859e1744fd66721f3730fab1acbf683ad965b->enter($__internal_500bd7d11c563005f079bc3a8b8859e1744fd66721f3730fab1acbf683ad965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_500bd7d11c563005f079bc3a8b8859e1744fd66721f3730fab1acbf683ad965b->leave($__internal_500bd7d11c563005f079bc3a8b8859e1744fd66721f3730fab1acbf683ad965b_prof);

        
        $__internal_2698f2c462b271b824c06ad35e746d49c6a24ba8b5ce8696006b787ec589fda7->leave($__internal_2698f2c462b271b824c06ad35e746d49c6a24ba8b5ce8696006b787ec589fda7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97b319ae77821287f5988007dd3d9c0d615196ff6dac7b0bd5eab4e08f801b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97b319ae77821287f5988007dd3d9c0d615196ff6dac7b0bd5eab4e08f801b4->enter($__internal_e97b319ae77821287f5988007dd3d9c0d615196ff6dac7b0bd5eab4e08f801b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2905265fffeb5650c8f02c0907873b7baa02c16cfc282e13fe3a438fea70112c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2905265fffeb5650c8f02c0907873b7baa02c16cfc282e13fe3a438fea70112c->enter($__internal_2905265fffeb5650c8f02c0907873b7baa02c16cfc282e13fe3a438fea70112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <h1>Bienvenue sur le Blog du nouveau roman de Jean Forteroche: \"Billet simple pour l'Alaska\"</h1>
    <div id=\"contenu\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "titre", array()), "html", null, true);
        echo "
        ";
        // line 13
        echo $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "contenu", array());
        echo "
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "creation", array()), "d/m/Y"), "html", null, true);
        echo "

    <br/>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "commentaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo " 
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", array()), "html", null, true);
            echo "
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "email", array()), "html", null, true);
            echo " 
            ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "creation", array()), "d/m/Y"), "html", null, true);
            echo "
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " 
    </div>

    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'form_start');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'widget');
        echo "
        <input type=\"submit\" value=\"Envoyer\" />
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'form_end');
        echo "
        
    
    

    ";
        // line 35
        if (((isset($context["nbEpisodes"]) ? $context["nbEpisodes"] : $this->getContext($context, "nbEpisodes")) > 0)) {
            // line 36
            echo "        <nav aria-label=\"Page navigation\" class=\"text-center\">
            <ul class=\"pagination\">
                ";
            // line 38
            if (((isset($context["numeroEpisode"]) ? $context["numeroEpisode"] : $this->getContext($context, "numeroEpisode")) != 1)) {
                echo "  
                    <li> <a href=\"";
                // line 39
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_homepage", array("numeroEpisode" => 1));
                echo "\" aria-label=\"First\"><span aria-hidden=\"true\">Premier</span></a></li>
                ";
            }
            // line 41
            echo "                
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbEpisodes"]) ? $context["nbEpisodes"] : $this->getContext($context, "nbEpisodes"))));
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
                // line 43
                echo "                    <li ";
                if (((isset($context["numeroEpisode"]) ? $context["numeroEpisode"] : $this->getContext($context, "numeroEpisode")) == $this->getAttribute($context["loop"], "index", array()))) {
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
            // line 45
            echo "                
                ";
            // line 46
            if (((isset($context["numeroEpisode"]) ? $context["numeroEpisode"] : $this->getContext($context, "numeroEpisode")) != (isset($context["nbEpisodes"]) ? $context["nbEpisodes"] : $this->getContext($context, "nbEpisodes")))) {
                echo " 
                    <li><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_blog_homepage", array("numeroEpisode" => (isset($context["nbEpisodes"]) ? $context["nbEpisodes"] : $this->getContext($context, "nbEpisodes")))), "html", null, true);
                echo "\" aria-label=\"Last\"><span aria-hidden=\"true\">Dernier</span></a></li>
                ";
            }
            // line 49
            echo "            </ul>
        </nav>
    ";
        }
        // line 52
        echo "

";
        
        $__internal_2905265fffeb5650c8f02c0907873b7baa02c16cfc282e13fe3a438fea70112c->leave($__internal_2905265fffeb5650c8f02c0907873b7baa02c16cfc282e13fe3a438fea70112c_prof);

        
        $__internal_e97b319ae77821287f5988007dd3d9c0d615196ff6dac7b0bd5eab4e08f801b4->leave($__internal_e97b319ae77821287f5988007dd3d9c0d615196ff6dac7b0bd5eab4e08f801b4_prof);

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
        return array (  234 => 52,  229 => 49,  224 => 47,  220 => 46,  217 => 45,  194 => 43,  177 => 42,  174 => 41,  169 => 39,  165 => 38,  161 => 36,  159 => 35,  151 => 30,  146 => 28,  142 => 27,  137 => 24,  128 => 22,  124 => 21,  120 => 20,  115 => 19,  111 => 18,  104 => 14,  100 => 13,  96 => 12,  90 => 8,  81 => 7,  68 => 5,  59 => 4,  42 => 3,  11 => 1,);
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


    <h1>Bienvenue sur le Blog du nouveau roman de Jean Forteroche: \"Billet simple pour l'Alaska\"</h1>
    <div id=\"contenu\">
        {{episode.titre}}
        {{episode.contenu|raw}}
        {{episode.creation|date('d/m/Y')}}

    <br/>

        {% for commentaire in episode.commentaires %}
            {{commentaire.contenu}} 
            {{commentaire.pseudo}}
            {{commentaire.email}} 
            {{commentaire.creation|date('d/m/Y')}}
            <br/>
        {% endfor %} 
    </div>

    {{ form_start(createForm) }}
        {{ form_widget(createForm) }}
        <input type=\"submit\" value=\"Envoyer\" />
    {{ form_end(createForm) }}
        
    
    

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


{% endblock %}

", "OCBlogBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/blog/src/OC/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
